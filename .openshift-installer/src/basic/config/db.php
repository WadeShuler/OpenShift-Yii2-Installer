<?php

// Make database info dynamic
if (in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {

    // private localhost
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=localhost;dbname=yii2basic',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4',
    ];

} else {

    // public OpenShift
    return [
        'class' => 'yii\db\Connection',
        'dsn' => 'mysql:host=' . getenv('OPENSHIFT_MYSQL_DB_HOST') . ';dbname=' . getenv('OPENSHIFT_APP_NAME'),
        'username' => getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
        'password' => getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
        'charset' => 'utf8mb4',
    ];

}
