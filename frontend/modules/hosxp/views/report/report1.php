<?php

use kartik\grid\GridView;
use yii\helpers\Html;
?>
<?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
        
        
    [
        'label'=>'คลินิก',
        'attribute'=>'cname',
        
    ],
    ['attribute'=>'total',
        'format'=>'raw',
         'value'=> function($model)use($clinic) {
                return Html::a(Html::encode($model['total']), [
                'report/indivreport1', 
                    'clinic'=>$model['clinic']
                
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
    'floatHeader' => FALSE,   
    'panel' => [
        'type' => GridView::TYPE_SUCCESS,
        'heading' => ''
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
