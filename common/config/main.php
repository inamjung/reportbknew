<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'th_TH',
    'name'=>'REPORTBK',
    'components' => [
        'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager',
        ],
        'user' => [
            'identityClass' => 'detrium\user\models\User',
            'enableAutoLogin' => true,
            //'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'gridview' =>  [
             'class' => '\kartik\grid\Module'
         ],
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin']
    ],
        'rbac' => 'dektrium\rbac\RbacWebModule',
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout'=>'left-menu'
        ],
        'inven' => [
            'class' => 'frontend\modules\inven\Module',
        ],
        'bkhealth' => [
            'class' => 'frontend\modules\bkhealth\Module',
        ],
],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'hosxp/*',
            'site/*',
            'admin/*', 
            'user/*',
            'inven/*',
            'gii/*',
            'usermy/*',
            'bkhealth/*',
            'gridview/*'
        ]
    ],
];
