<?php

return \yii\helpers\ArrayHelper::merge(
    [
        'adminEmail' => 'admin@example.com',
    ],
    file_exists(__DIR__ . '/params-local.php') ? require __DIR__ . '/params-local.php' : []
);
