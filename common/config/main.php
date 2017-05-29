<?php
use kartik\datecontrol\Module;

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'th_TH',
    'name'=>'REPORTBK',
    'components' => [
        'gallery' => [
            'class' => 'onmotion\gallery\Module',
        ],
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
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'formatter'=>[
            'nullDisplay'=>'',
            'dateFormat'=>'dd/MM/yyyy'
        ],
    ],
    'modules' => [
        
        'datecontrol' =>  [
            'class' => '\kartik\datecontrol\Module',
                'displaySettings' => [
                Module::FORMAT_DATE => 'dd-MM-yyyy',             
                ],
                'saveSettings' => [
                Module::FORMAT_DATE => 'dd-MM-yyyy', // saves as unix timestamp           
            ],
            'displayTimezone' => 'Asia/Bangkok',
            'autoWidgetSettings' => [
                Module::FORMAT_DATE => ['type'=>2, 'pluginOptions'=>['autoclose'=>true],
                    'options'=>['placeholder'=>'เลือกช่วงวันที่...']
                    ],
            ],
        ],
        'labonline' => [
            'class' => 'frontend\modules\labonline\Module',
        ],
        'gridview' => [
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
            'gridview/*',
            'labonline/*'
        ]
    ],
];
