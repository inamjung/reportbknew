<?php


use kartik\grid\GridView;
use yii\helpers\Html;
use miloschuman\highcharts\Highcharts;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use kartik\widgets\Select2;
?>

<?php
$form = ActiveForm::begin(['method'=>'get',
    'action'=> Url::to(['finance/fin2']),]);
?>
<div>
    โปรดเลือกช่วงวันที่
</div>
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
        
    <div class="col-xs-2 col-sm-2 col-md-2">
        <button class='btn btn-danger'>ประมวลผล</button>   
    </div>
        </div>
</div>
<?php
ActiveForm::end()
?>
<div>
    รายงานค่าใช้จ่ายผู้ป่วยในแยกตามประเภท 
</div>
<?php
$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
        
        
    [
        'label'=>'paidst',
        'attribute'=>'paidst',
        
    ],
    [
        'label'=>'ชื่อ',
        'attribute'=>'paidst_name',
        
    ],
    [
        'label'=>'รวมเป็นเงิน(บาท)',
        'attribute'=>'sum_price',
        'format'=>'raw',
         
        
    ]   
];
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
    'columns' => $gridColumns,
    'responsive' => true,
    'hover' => true,
    'striped' => false,
    'floatHeader' => false, //คือการตรึงหัวตาราง  
    'panel' => [
        'type' => GridView::TYPE_SUCCESS,
//        'heading' => ''
    ],
    
    //เมนูส่งออก
    'toolbar' => [       
       '{export}',
       '{toggleData}'       
    ],
    
    //เมนูส่งออกให้เห็นแค่ EXCEL,PDF
    'exportConfig' => [
        GridView::EXCEL => [],
        GridView::PDF => [],
    ],
]);
?>


