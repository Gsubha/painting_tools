<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
use yii\web\Request;

$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
     'modules' => [
         'site' => [
            'basePath' => '@app/modules/site',
            'class' => 'frontend\modules\site\user',
        ],
        'gii' => [
            'class' => 'yii\gii\Module',
        ],
    ],
     'defaultRoute' => '/site/site/index',
    'components' => [
        'request' => [
            'cookieValidationKey' => '[RANDOM KEY HERE]',
            'csrfParam' => '_csrf-frontend',
             'baseUrl' => $baseUrl,
        ],
        'user' => [
             'class' => 'yii\web\User',
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
             'returnUrl' => array('/site/default/index'),
            'loginUrl' => array('/site/site/login'),
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
       
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                '/' => 'site/site/index',
               // 'index' => 'site/site/index',
//                'login' => 'site/site/login',
//                'logout' => 'site/site/logout',
//                'signup' => 'site/site/signup', 
                 'faq/bookotp' => 'site/faq/bookotp',
                 'faq/ajaxbookotp' => 'site/faq/ajaxbookotp',
                
                
            ],

//                    'rules' => array(
//            '<alias:contact|about>' => 'site/<alias>',
//            '<alias:product>/<id:\w+>' => 'site/<alias>',
//            '<controller:\w+>/<id:\w+>' => '<controller>',
//            '<controller:\w+>/<action:\w+>/<id:\w+>' => '<controller>/<action>',
//            '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
//        ),
//              '<controller:\w+>/<id:\d+>' => '<controller>/view',
//                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
//                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            
        ],
        
    ],
    'params' => $params,
];
