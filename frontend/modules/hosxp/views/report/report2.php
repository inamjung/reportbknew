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
            'action' => Url::to(['report/report2']),]);  
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
        <div class="col-xs-3 col-sm-3 col-md-3">
            <?php
            $list = ['001'=>'เบาหวาน','002'=>'ความดันสูง'];
            
                echo Select2::widget([
                'name' => 'clinic',
                'data' => $list,
                'value' => $clinic,
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

<?php ActiveForm::end();?>

<?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
        
        
    [
        'label'=>'คลินิก',
        'attribute'=>'cname',
        
    ],
    [
        'attribute'=>'total',
    ]

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
        'heading' => ''
    ],
    'toolbar' => [       
        //'{export}',
        //'{toggleData}'       
    ],
    'exportConfig' => [
        GridView::EXCEL => [],
        GridView::PDF => []
    ],
]);
?>
