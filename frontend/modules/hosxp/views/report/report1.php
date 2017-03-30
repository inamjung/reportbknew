<?php

use kartik\grid\GridView;

?>
<?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
        
        
    [
        'label'=>'คลินิก',
        'attribute'=>'cname',
        
    ],
    ['attribute'=>'total']

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
