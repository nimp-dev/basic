<?php
$db = 'portal';
return [
    'class' => 'yii\db\Connection',
    'dsn' => "pgsql:host=localhost;dbname='$db'",
    'username' => 'postgres',
    'password' => 'postgres',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
