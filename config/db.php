<?php

return \yii\helpers\ArrayHelper::merge(
    [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=swg',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',

        // Schema cache options (for production environment)
        //'enableSchemaCache' => true,
        //'schemaCacheDuration' => 60,
        //'schemaCache' => 'cache',
    ],
    file_exists(__DIR__ . '/db-local.php') ? require __DIR__ . '/db-local.php' : []
);
