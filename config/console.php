<?php

$commonConfig = require_once __DIR__ . '/common.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'app\commands',
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

return \yii\helpers\ArrayHelper::merge(
    $commonConfig,
    $config,
    file_exists(__DIR__ . '/console-local.php') ? require __DIR__ . '/console-local.php' : []
);
