<?php

use kartik\grid\GridView;

?>
<?php

$gridColumns = [
    ['class' => 'kartik\grid\SerialColumn'],
        
        
    [
        'label'=>'WARD',
        'attribute'=>'name',
        
    ],
    [
        'label'=>'HN',
        'attribute'=>'hn',
        
    ],
    [
        'label'=>'AN',
        'attribute'=>'an',
        
    ],
    [
        'label'=>'ชื่อ-นามสกุล',
        'attribute'=>'person',
        
    ],
   
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
    
    //เมนูส่งออก
    'toolbar' => [       
        '{export}',
        '{toggleData}'       
    ],
    
    //เมนูส่งออกให้เห็นแค่ EXCEL,PDF
    'exportConfig' => [
        GridView::EXCEL => [],
        GridView::PDF => []
    ],
]);
?>