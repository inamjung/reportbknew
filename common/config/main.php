<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'th_TH',
    'name'=>'REPORTBK',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
   'gridview' =>  [
        'class' => '\kartik\grid\Module'
    ]
],
];
