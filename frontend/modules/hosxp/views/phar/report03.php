<?php

use kartik\grid\GridView;
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\widgets\Select2;
?>

<?php
  $form = ActiveForm::begin(['method' => 'get',
            'action' => Url::to(['phar/report03']),]);  
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
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3">
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
        
    <div class="col-xs-2 col-sm-2 col-md-2"></br>
         <button class='btn btn-danger'>ประมวลผล</button>
    </div>
    </div>
</div>

<?php ActiveForm::end();?>

<?php
$this->title = 'สรุปยอดการใช้เวชภัณฑ์ยาตามมูลค่าการใช้ IPD';
$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
        
        
   
    [
        'label'=>'ชื่อเวชภัณฑ์',
        'attribute'=>'name',
        
    ],
    [
        'label'=>'ความแรง',
        'attribute'=>'strength',
        
    ],
    [
        'label'=>'หน่วย',
        'attribute'=>'units',
        
    ],
       [
        'label'=>'รายการ',
        'attribute'=>'count_icode',
        
    ],
     [
        'label'=>'จำนวน',
        'attribute'=>'sum_qty',
        
    ],
     [
        'label'=>'มูลค่า',
        'attribute'=>'sum_price',
        
        
    ],
    [
        'label'=>'จำนวน HN',
        'attribute'=>'hn_count',
        
    ],
  [
        'label'=>'จำนวนใบสั่งยา',
        'attribute'=>'count_order_no',
        
    ],
 
     [
        'label'=>'จ่ายตรง',
        'attribute'=>'mon1',
        
    ],
     [
        'label'=>'ชำระเงิน',
        'attribute'=>'mon2',
        
    ],
     [
        'label'=>'ปกส.',
        'attribute'=>'mon3',
        
    ],
     [
        'label'=>'อื่น ๆ',
        'attribute'=>'mon4',
        
    ],
    
    
        ];


echo GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'columns' => $gridColumns,
    'responsive' => true,
    'hover' => true,
    'striped' => false,
    'floatHeader' => FALSE,   
    'panel' => [
        'type' => GridView::TYPE_SUCCESS,
        'heading' => 'สรุปยอดการใช้เวชภัณฑ์ยาตามมูลค่าการใช้ IPD'
    ],
    'toolbar' => [       
        '{export}',
        //'{toggleData}'       
    ],
    'exportConfig' => [
        GridView::EXCEL => [],
        GridView::PDF => []
    ],
]);
?>
