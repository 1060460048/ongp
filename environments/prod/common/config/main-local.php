<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => "mysql:host=$OPENSHIFT_MYSQL_DB_HOST;dbname=ongp",
            'username' => $OPENSHIFT_MYSQL_DB_USERNAME,
            'password' => $OPENSHIFT_MYSQL_DB_PASSWORD,
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
