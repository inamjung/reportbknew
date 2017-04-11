<?php

use kartik\grid\GridView;

?>
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
    
    [
        'label'=>'การรักษา',
        'attribute'=>'heal',
        
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