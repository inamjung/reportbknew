<?php
//นายปริญญา ลอยพิมาย นวก.คอมพิวเตอร์ รพ.บึงกาฬ 
//รายงานที่ 1 (Report_ipd1) คือ ยอดจำหน่ายผู้ป่วย Sepsis IPD

use kartik\grid\GridView;
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\widgets\Select2;
?>

<?php
$form = ActiveForm::begin(['method'=>'get',
    'action'=> Url::to(['ipd/report_ipd2']),]);
?>
<div class="well">
    <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3">  
        จากวันที่:
    <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date1',
            'value' => $date1,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options'=>[
                'class'=>'form-control'
            ],
        ]);
        ?> 
        <br/>
        ถึงวันที่:
    <?php
        echo yii\jui\DatePicker::widget([
            'name' => 'date2',
            'value' => $date2,
            'language' => 'th',
            'dateFormat' => 'yyyy-MM-dd',
            'clientOptions' => [
                'changeMonth' => true,
                'changeYear' => true,
            ],
            'options'=>[
                'class'=>'form-control'
            ],
        ]);
        ?>    
    </div>
    
        <br/>
        <div class="col-xs-3 col-sm-3 col-md-3">
         <?php
         $list = yii\helpers\ArrayHelper::map(frontend\modules\hosxp\models\Ward::find()
                 ->where(['NOT LIKE','name','ยกเลิก'])
                 ->all(), 'ward', 'name');
            
            echo Select2::widget([
                'name' => 'ward',
                'data' => $list,
                'value' => $ward,
                'size' => Select2::MEDIUM,
                'options' => ['placeholder' => 'เลือก...'],
                'pluginOptions' => [
                    'allowClear' => true
                ],
            ]);
            ?>            
        </div>    
    <div class="col-xs-2 col-sm-2 col-md-2">
        <button class='btn btn-danger'>ประมวลผล</button>   
    </div>
        </div>
</div>
<?php ActiveForm::end() ?>

<div>
    รายงานยอดจำหน่ายผู้ป่วย Sepsis IPD 
</div>
<?php
$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
        
        
    [
        'label'=>'WARD',
        'attribute'=>'name',
        
    ],
    [
        'label'=>'จำนวนคน',
        'attribute'=>'hn',
        
    ],
    [
        'label'=>'จำนวนครั้ง',
        'attribute'=>'an',
        'format'=>'raw',
         'value'=> function($model)use($ward) {
                return Html::a(Html::encode($model['an']), [
                'ipd/indivreport_ipd2', 
                    'ward'=>$model['ward'],
                    'date1'=>$_GET['date1'],
                    'date2'=>$_GET['date2'],
                
                    ]
    );
            },
        
    ]   
];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'columns' => $gridColumns,
    'responsive' => true,
    'hover' => true,
    'striped' => false,
    'floatHeader' => FALSE, //คือการตรึงหัวตาราง  
    'panel' => [
        'type' => GridView::TYPE_SUCCESS,
        'heading' => ''
    ],
   
    
    //เมนูส่งออกให้เห็นแค่ EXCEL,PDF
    'exportConfig' => [
        GridView::EXCEL => [],
        GridView::PDF => [],
    ],
]);
?>

