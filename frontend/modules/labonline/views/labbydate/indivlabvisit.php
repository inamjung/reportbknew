<?php
use kartik\grid\GridView;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Pjax;

$datas = $dataProvider->getModels();
?>
<?php Pjax::begin(['id' => 'hosvisit_id']); ?>
<?php

    echo kartik\grid\GridView::widget([
        'dataProvider'=>$dataProvider,
        'responsive'=>true,
        'hover'=>true,
        'striped'=>false,
        'formatter' => ['class' => 'yii\i18n\Formatter', 'nullDisplay' => '-'],
        'panel'=>[
            'heading'=>'<span style="color: red">'.' ผลแลป' .'</span>',
            'before'=>'<span style="color: red">'.' ใบแลป : '.$datas[1]['lab_order_number'] .'</span>',
            'type'=> kartik\grid\GridView::TYPE_DEFAULT
        ],
        'toolbar' => [       
        //'{export}',
        //'{toggleData}'       
    ],
       'columns'=>[['class' => 'kartik\grid\SerialColumn'],
                        
            [
                'attribute'=>'lab_items_code',
                'header'=>'รหัสรายการ',
                'headerOptions' => ['class' => 'text-center','style'=>'width: 100px;'],
            ],
           [
                'attribute'=>'lab_items_name',
                'header'=>'รายการแลป'
            ],
           [
                'attribute'=>'lab_items_normal_value',
                'header'=>'ค่าปกติ'
            ],
           [
                'attribute'=>'lab_order_result',
                'header'=>'ผลแลป'
            ]
            
            ]
    ]);
?>
<?php Pjax::end() ?>

