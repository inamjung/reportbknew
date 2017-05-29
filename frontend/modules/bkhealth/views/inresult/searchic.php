<?php
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\helpers\Url;


$datas = $dataProvider->getModels();
?>

<?php
$form = ActiveForm::begin(['method' => 'get',
            'action' => Url::to(['inresult/searchic'])]);
?>

<div class="well">
    <p style="font-size:16pt; color: blue">กรอกเลขบัตรประชาชน 13 หลัก ของท่านเพื่อค้นหาผลการตรวจสุขภาพ</p>
    <div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">        
        <input class="text" name="Cid" class="form-control" 
               placeholder="ระบุ เลขบัตรประชาชนท่าน.." value="<?= isset($_GET['Cid']) ? $_GET['Cid'] : '' ?>" >
        <button class='btn btn-danger'>คลิก ! ค้นหา</button>
    </div>
    
    </div>
</div>
<?php ActiveForm::end(); ?>

<?php
if (count($datas) == 0) {
    echo "<div class='alert alert-info'>ยังไม่มีผลลัพธ์จากการค้นหาข้อมูล</div>";
    return;
}
?>

<?php 
    echo kartik\grid\GridView::widget([
        'dataProvider'=>$dataProvider,
        'responsive'=>true,
        'hover'=>true,
        'striped'=>false,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
                'panel'=>[
            'heading'=>'<span style="color: blue">'.$datas[0]['Pt'].' | อายุ '.$datas[0]['Age_y'].' ปี '.'</span>',            
            'type'=> kartik\grid\GridView::TYPE_DEFAULT
        ],
        'toolbar' => [       
        //'{export}','{toggleData}'       
    ],

        'columns'=>[
            ['class' => 'kartik\grid\SerialColumn'],
            
            [
                'label' => 'วันที่ตรวจ',
                'attribute' => 'Vstdate',
                'format' => 'raw',
                'value' => function($model) {
                        return DateThai($model['Vstdate']); 
                    },      
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-center'],
            ],
//            [
//                'label' => 'ชื่อ-สกุล',
//                'attribute' => 'Pt',                  
//                'headerOptions' => ['class' => 'text-center'],
//                'contentOptions' => ['class' => 'text-center'],
//            ],           
           [
                'label' => 'อาการเบื้องต้น',
                'attribute' =>  'Cc',                  
                'headerOptions' => ['class' => 'text-center'],
                'contentOptions' => ['class' => 'text-center'],
            ],
           
//          [
//         'attribute' => 'แก้ไข',
//         'format' => 'raw',
//         'value' => function($model) {
//          $path = ('index.php?r=/bkhealth/inresult/view&id=' . $model['Vn']);
//          //return Html::a('Add Product', $path, array('target' => '_blank'));
//          return Html::a(' <i class="glyphicon glyphicon-edit"> </i>', $path, [ 'data-pjax' => 0, 'class' => 'btn btn-warning btn-sm', 'title' => Yii::t('kvgrid', 'แก้ไข')]);
//          },
//                'contentOptions' => ['style' => 'width: 50px;text-align:center']
//          ],  

           ['class' => 'yii\grid\ActionColumn',
              'header'=>'ดูผลตรวจ',
              'template'=> '{view}' ,
              'buttons'=>[                  
                  'view'=> function($url,$model){
                     return Html::a('<span class="glyphicon glyphicon-search"></span>',['/bkhealth/inresult/viewic','id'=>$model['Vn']] ,['title' => 'ดูแปลผลตรวจ', 'class' => 'btn btn-info','target'=>'_blank']);
                        },
                    ]  
            ], 
        ],
    ]); ?>

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