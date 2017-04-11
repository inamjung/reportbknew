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
            'action' => Url::to(['ttmreport/ttmreport']),]);  
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
        <br>
    <div class="col-xs-3 col-sm-3 col-md-3" >
         <button class='btn btn-danger' >ประมวลผล</button>
    </div>
    </div>
</div>

<?php ActiveForm::end();?>
    
   

<?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
     
    [
        'label'=>'วันที่',
        'attribute'=>'date',
        
    ],
    [
        'label'=>'เวลาที่มารับบริการ',
        'attribute'=>'time',
        
    ],
    [
        'label'=>'hn',
        'attribute'=>'hn',
        
    ],
    
    [
        'label'=>'ผู้มารับบริการ',
        'attribute'=>'cname',
        
    ],
    
//    [
//        'label'=>'การรักษา',
//        'attribute'=>'heal',
//        
//    ],
     ['attribute'=>'heal',
        'format'=>'raw',
         'value'=> function($model)use($heal) {
                return Html::a(Html::encode($model['heal']), [
                'ttmreport/ttmindivreport', 
                'heal'=>$model['heal'],
                'date1'=>$_GET['date1'],
                'date2'=>$_GET['date2'],
                
                
                    ]
    );
            },
                    
        
    ],
    [
        'label'=>'ผู้ให้การรักษา',
        'attribute'=>'pname',
        
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
        'heading' => ''
    ],
    'toolbar' => [       
        '{export}',
        '{toggleData}'       
    ],
    'exportConfig' => [
        GridView::EXCEL => [],
        GridView::PDF => []
    ],
]);
?>
