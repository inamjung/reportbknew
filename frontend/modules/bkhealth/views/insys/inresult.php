<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel frontend\modules\bkhealth\models\InsysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ทะเบียน -แปรผลตรวจสุขภาพ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="insys-index">

<!--    <h1><?= Html::encode($this->title) ?></h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>
        <?= Html::a('Create Insys', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->
      <?php Pjax::begin(['id' => 'result_id']); ?>
    <?php
    echo kartik\grid\GridView::widget([
        'dataProvider'=>$dataProvider,
        'responsive'=>true,
        'hover'=>true,
        'striped'=>false,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'panel'=>[
            'heading'=>'ทะเบียน -แปรผลตรวจสุขภาพ',
            //'before'=>$datas[4]['pt'],
            'type'=> kartik\grid\GridView::TYPE_DANGER
        ],
        'toolbar' => [       
        //'{export}',
        //'{toggleData}'       
    ],
//    'exportConfig' => [
//        GridView::EXCEL => [],
//        //GridView::PDF => []
//    ],
        'columns' => [
            ['class' => 'kartik\grid\SerialColumn'],

           [
                'label' => 'วันที่รับบริการ',
                'attribute' => 'Vstdate',
                'format' => 'raw',
                'value' => function($model, $key, $widget) {
                    return Html::a(Html::encode ( DateThai($model['Vstdate'])) , [
                                'insys/insertresult/',
                        'Vstdate' =>$model['Vstdate'],
                        'Cid' => $model['Cid'],
                        'Vn' => $model['Vn'],
                        'Hn'=>$model['Hn'],
                        'Pt'=>$model['Pt'],
                        'Sex'=>$model['Sex'],
                        'Age_y'=>$model['Age_y'], 
                        'Sex'=>$model['Sex'],
                        'Cc'=>$model['Cc'],
                        'Waist'=>$model['Waist'],
                        //'Waist1'=>$model['Waist1'],
                        'Fbs'=>$model['Fbs'],
                        //'Fbs1'=>$model['Fbs1'],
                        'Bmi'=>$model['Bmi'],
                        //'Bmi1'=>$model['Bmi1'],
                        'Tg'=>$model['Tg'],
                        //'Tg1'=>$model['Tg1'],
                        'Hdl'=>$model['Hdl'],
                        //'Hdl1'=>$model['Hdl1'],  
                        'Creatinine'=>$model['Creatinine'],
                        //'Creatinine1'=>$model['Creatinine1'],                        
                        'Ldl'=>$model['Ldl'],
                        //'Ldl1'=>$model['Ldl1'],
                        'Cholesterol'=>$model['Cholesterol'],
                        //'Cholesterol1'=>$model['Cholesterol1'],
                        'Gfr_ckd'=>$model['Gfr_ckd'],
                        //'Gfr_ckd1'=>$model['Gfr_ckd1'],
                        'Hct_cbc'=>$model['Hct_cbc'],
                        //'Hct_cbc1'=>$model['Hct_cbc1'],
                        'Wbc_count_cbc'=>$model['Wbc_count_cbc'],
                        //'Wbc_count_cbc1'=>$model['Wbc_count_cbc1'],
                        'Eo_cbc'=>$model['Eo_cbc'],
                        //'Eo_cbc1'=>$model['Eo_cbc1'],
                        'Urine_proteine_ua'=>$model['Urine_proteine_ua'],
                        //'Urine_proteine_ua1'=>$model['Urine_proteine_ua1'],
                        'Urine_gluose_ua'=>$model['Urine_gluose_ua'],
                        //'Urine_gluose_ua1'=>$model['Urine_gluose_ua1'],
                        'Uric'=>$model['Uric'],
                        'Ast'=>$model['Ast'],
                        'Alt'=>$model['Alt'],
                        'Rbc_ua'=>$model['Rbc_ua'],
                        'Wbc_ua'=>$model['Wbc_ua'],
                        //'Uric1'=>$model['Uric1'],
                        'Bp'=>$model['Bp'],
                        //'Bp1'=>$model['Bp1'],
                        
//                        'ic_confirm'=>$model['ic_confirm'],
//                        'ic_insys'=>$model['ic_insys'],
                        
                          ], 
                            [
                                'data-toggle' => "modal",
                                'data-target' => "#result",
                            ]
                    );
                },
                        'contentOptions' => ['class' => 'text-center'],
                    ],
            'Hn',         
            'Pt',
                        
            [
                'attribute'=>'Sex',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ], 
            [
                'attribute'=>'Waist',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],             
             [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลรอบเอว',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(5, $p);
                $s = $widget->col(4, $p);
                if ($target >= 90 && $s==1) {                    
                    $stage ='อ้วนลงพุง';
                    return $stage;
                }else if ($target >= 80 && $s==2) {                   
                    $stage ='อ้วนลงพุง';
                    return $stage;
                }                
                else if ($target > 0 && $target < 90 && $s==1) {                   
                    $stage ='ปกติ';
                    return $stage;
                }
                else if ($target > 0 && $target < 80 && $s==2) {                   
                    $stage ='ปกติ';
                    return $stage;
                }               
                else if ($target == 0 && $s==1) {
                    
                    $stage ='N/A';
                    return $stage;
                }
                else if ($target == 0 && $s==2) {
                    //$s=2;
                    $stage ='N/A';
                    return $stage;
                }
                
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ], 
             
             [
                'attribute'=>'Bmi',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],        
             [
            'class' => '\kartik\grid\FormulaColumn',
            'attribute'=>'Bmi1',     
            'header' => 'ผลBMI',
            'format'=>'html',
//            'filter'=>  Html::dropDownList('bmi',  
//                isset($_GET['stage'])?$_GET['stage']:'',
//            [''=>'','อ้วนระดับ 3' =>'อ้วนระดับ 3','อ้วนระดับ 2'=>'อ้วนระดับ 2','อ้วนระดับ 1'=>'อ้วนระดับ 1','เริ่มอ้วน'=>'เริ่มอ้วน','ปกติ'=>'ปกติ','ผอม'=>'ผอม'],['class'=>'form-control']),
            'value' => function ($model, $key, $index, $widget){
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target1 = $widget->col(7, $p);
                if ($target1 >= 30) {
                    $stage ='อ้วนมาก';
                    return $stage;
                }else if ($target1 >= 25 && $target1 < 30) {
                    $stage ='อ้วน';
                    return $stage;
                }else if ($target1 >= 23 && $target1 < 25) {
                    $stage ='น้ำหนักเกิน';
                    return $stage;            
                }else if ($target1 >= 18.500 && $target1 < 23) {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target1 > 0 && $target1 < 18.500) {
                    $stage ='ผอม';
                    return $stage;
                }else if ($target1 == '') {
                    $stage ='N/A';
                    return $stage;
                }
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],                
            [
                'attribute'=>'Fbs',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
            [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'แปรผลFBS',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(9, $p);
                if ($target >= 126) {
                    $stage ='เป็นโรคเบาหวาน';
                    return $stage;
                }else if ($target >= 100 && $target<126 ) {
                    $stage ='ปกติ / กลุ่มเสี่ยง';
                    return $stage;
                }else if ($target > 0 && $target<100) {
                    $stage ='ปกติ / ไม่เสี่ยง';
                    return $stage;
                }else if ($target == 0) {
                    $stage ='N/A';
                    return $stage;                   
                }
               
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],         
             
             [
                'attribute'=>'Tg',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],        
            [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลTg',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(11, $p);
                if ($target >= 200) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target >= 150 && $target <200) {
                    $stage ='ค่อนข้างสูง';
                    return $stage;
                }else if ($target > 0 && $target < 150) {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target <= 0) {
                    $stage ='N/A';
                    return $stage;
                }
               
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],        
            
           [
                'attribute'=>'Hdl',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],          
          [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลHdl',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(13, $p);
                if ($target >= 60) {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target >= 40 && $target < 60) {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target > 0 && $target < 40) {
                    $stage ='ผิดปกติ';
                    return $stage;
                }else if ($target = 0) {
                    $stage ='N/A';
                    return $stage;
                }
               
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],          
        
            [
                'attribute'=>'Creatinine',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
            [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลCr',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(15, $p);
                if ($target >= 1.5) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target > 0 && $target < 1.5) {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target <= 0) {
                    $stage ='N/A';
                    return $stage;
                }
               
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],             
            
           [
                'attribute'=>'Cholesterol',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
            [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลCho',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(17, $p);
                if ($target >= 240) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target >= 200 && $target < 240) {
                    $stage ='สูงปานกลาง';
                    return $stage;
                }else if ($target > 0 && $target < 200) {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target <= 0) {
                    $stage ='N/A';
                    return $stage;
                }
               
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],            
            
           [
                'attribute'=>'Ldl',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
         [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลLdl',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(19, $p);
                if ($target >= 190) {
                    $stage ='สูงมาก';
                    return $stage;
                }else if ($target >= 160 && $target < 190) {
                    $stage ='สูง';
                    return $stage;
                 }else if ($target >= 130 && $target < 160) {
                    $stage ='สูงปานกลาง';
                    return $stage;    
                }else if ($target > 0 && $target < 130) {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target <= 0) {
                    $stage ='N/A';
                    return $stage;
                }
               
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],             
           
          [
                'attribute'=>'Uric',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],          
        [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลUric',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(21, $p);
                if ($target >=7.7) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target >= 2.5 && $target < 7.7) {
                    $stage ='ปกติ';
                    return $stage;
                 }else if ($target > 0 && $target < 2.5) {
                    $stage ='ต่ำ';
                    return $stage;
                 }else if ($target <= 0) {
                    $stage ='N/A';
                    return $stage;
                 }
               
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ], 
          
           [
                'attribute'=>'Bun',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
           [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลBun',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(23, $p);
                if ($target >24) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target >= 7 && $target <= 24) {
                    $stage ='ปกติ';
                    return $stage;
                 }else if ($target > 0 && $target < 7) {
                    $stage ='น้อย';
                    return $stage;
                 }else if ($target <= 0) {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],                    
           
            [
                'attribute'=>'Urine_proteine_ua',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],        
            [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลProtien',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(25, $p);
                if ($target == 'Negative') {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target =='Trace') {
                    $stage ='ผิดปกติ/เสี่ยงไตวาย';
                    return $stage;                    
                 }
                else if ($target =='1+') {
                    $stage ='ผิดปกติ/เสี่ยงไตวาย';
                    return $stage;
                    
                 }else if ($target =='2+') {
                    $stage ='ผิดปกติ/เสี่ยงไตวาย';
                    return $stage;
                    
                 }else if ($target =='3+') {
                    $stage ='ผิดปกติ/เสี่ยงไตวาย';
                    return $stage;                    
                 }
                 else if ($target == '') {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
            'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
        ],         
            
           [
                'attribute'=> 'Urine_gluose_ua',             
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],           
           [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลSugar',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(27, $p);
                if ($target == 'Negative') {
                    $stage ='ปกติ';
                    return $stage;
                }else if ($target =='1+') {
                    $stage ='ผิดปกติ/เสี่ยงเบาหวาน';
                    return $stage;
                    
                 }else if ($target =='2+') {
                    $stage ='ผิดปกติ/เสี่ยงเบาหวาน';
                    return $stage;
                    
                 }else if ($target =='3+') {
                    $stage ='ผิดปกติ/เสี่ยงเบาหวาน';
                    return $stage;                    
                 }
                 else if ($target == '') {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
            'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
        ],             
           
           [
                'attribute'=> 'bp1',             
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],        
           
            [
                'attribute'=> 'Bp',             
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],        
           [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลBp',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(30, $p);
                if ($target >= 14090) {
                    $stage ='เป็นHT';
                    return $stage;
                }else if ($target >= 12080 && $target <=13989) {
                    $stage ='เสี่ยงHT';
                    return $stage;
                    
                 }else if ($target > 0 && $target <=11979) {
                    $stage ='ปกติ';
                    return $stage;                    
                 }else if ($target == '') {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
         [
                'attribute'=>'Ast',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
           [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลAst',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(32, $p);
                if ($target >35) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target > 0 && $target <= 35) {
                    $stage ='ปกติ';
                    return $stage;
                 }else if ($target == '') {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ], 
         [
                'attribute'=>'Alt',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
           [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลAlt',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(34, $p);
                if ($target >41) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target > 0 && $target <= 41) {
                    $stage ='ปกติ';
                    return $stage;
                 }else if ($target == '') {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],  
         [
                'attribute'=>'Hct_cbc',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
           [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลHct',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(36, $p);
                if ($target >48) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target >= 37 && $target <= 48) {
                    $stage ='ปกติ';
                    return $stage;
                 }else if ($target > 0 && $target < 37) {
                    $stage ='ต่ำ';
                    return $stage;
                 }else if ($target == '') {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
           [
                'attribute'=>'Wbc_count_cbc',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
           [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลWbc_count',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(38, $p);
                if ($target >10000) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target >= 5000 && $target <= 10000) {
                    $stage ='ปกติ';
                    return $stage;
                 }else if ($target > 0 && $target < 5000) {
                    $stage ='ต่ำ';
                    return $stage;
                 }else if ($target == '') {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],
        [
                'attribute'=>'Eo_cbc',              
                'headerOptions' => ['class'=>'text-center','style'=>'display: none'],
                'contentOptions' => ['class'=>'text-center','style'=>'display: none'],
            ],         
           [
            'class' => '\kartik\grid\FormulaColumn',
            'header' => 'ผลEo',
            'value' => function ($model, $key, $index, $widget) {
                $p = compact('model', 'key', 'index');
                // เขียนสูตร
                $target = $widget->col(40, $p);
                if ($target >3) {
                    $stage ='สูง';
                    return $stage;
                }else if ($target >= 1 && $target <= 3) {
                    $stage ='ปกติ';
                    return $stage;
                 }else if ($target > 0 && $target < 1) {
                    $stage ='ต่ำ';
                    return $stage;
                 }else if ($target == '') {
                    $stage ='N/A';
                    return $stage;
                 }
            },
            'headerOptions' => ['class'=>'text-center'],
            'contentOptions' => ['class'=>'text-center'],
        ],            
            [
                'label' => 'สถานะ',
                'attribute' => 'ic_report',
                'format' => 'raw',
                'value' => function($model){
                    return  $model->ic_report == '1' ? "<i class=\"glyphicon glyphicon-ok\" style=\"color: green\"></i>" : "<i class=\"glyphicon glyphicon-remove\" style=\"color: red\"></i>";
                },
                'contentOptions' => ['class' => 'text-center'],
                'headerOptions' => ['class' => 'text-center','style'=>'width: 80px;'],               
            ],            

            ['class' => 'yii\grid\ActionColumn',
              'template'=> '{update}{view}' ,
              'buttons'=>[
                  'update' => function ($url, $model, $key) {
                                return Html::a('<span class="glyphicon glyphicon-upload"></span>', '#', [
                                            'class' => 'activity-update-link btn btn-info',
                                            'title' => 'ส่งพบแพทย์',
                                            'data-toggle' => 'modal',
                                            'data-target' => '#activity-modal',
                                            'data-id' => $key,
                                            'data-pjax' => '0',
                                ]);
                            },
                  'view'=> function($url,$model){
                     return Html::a('<span class="glyphicon glyphicon-search"></span>',['/bkhealth/inresult/view','id'=>$model->Vn] ,['title' => 'ดู', 'class' => 'btn btn-primary']);
                        },
                    ]  
            ],
        ],
    ]); ?>
     <?php Pjax::end() ?>
</div>
<?php
        Modal::begin([
            'id' => 'result',            
            'header' => '<h4 class="modal-title"></h4>',            
            'size' => 'modal-lg',
            'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">ปิด</a>',
        ]);
        
        Modal::end();
        ?>

        <?php
        $this->registerJs("
    $('#result').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var modal = $(this)
        var title = button.data('title') 
        var href = button.attr('href') 
        modal.find('.modal-title').html(title)
        modal.find('.modal-body').html('<i class=\"fa fa-spinner fa-spin\"></i>')
        $.post(href)
            .done(function( data ) {
                modal.find('.modal-body').html('<i class=\"glyphicon glyphicon-ok\"></i> เพิ่มข้อมูลแล้ว')
            });
        })
");
        ?> 

<?php
        Modal::begin([
            'id' => 'activity-modal',
            'header' => '<h4 class="modal-title"> ถ้าผลตรวจทางชันสูตรเรียบร้อยแล้ว รอส่ง พบแพทย์เพื่อวินิจฉัย</h4>',
            'size' => 'modal-lg',
            'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">ปิด</a>',
        ]);
        Modal::end();
?>

        <?php $this->registerJs('
        function init_click_handlers(){
            
            
            $(".activity-update-link").click(function(e) {
                    var fID = $(this).closest("tr").data("key");
                    $.get(
                        "?r=/bkhealth/insys/update",
                        {
                            id: fID
                        },
                        function (data)
                        {
                            $("#activity-modal").find(".modal-body").html(data);
                            $(".modal-body").html(data);                            
                            $("#activity-modal").modal("show");
                        }
                    );
                });
            
        }
        init_click_handlers(); //first run
        $("#result_id").on("pjax:success", function() {
          init_click_handlers(); //reactivate links in grid after pjax update
        });'); ?>


<?php

function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		//$strYear=substr($strYear,2,2);
		return "$strDay $strMonthThai $strYear";
	}       
?>
