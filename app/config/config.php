<?php

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'test',
        'charset'     => 'utf8',
    ),
    'application' => array(
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'baseUri'        => '/phalcon-email-queue-project/',
    ),
    'mail' => array(
        'fromName' => 'Miroslav Trninic',
        'server'   => 'miroslav.trninic@gmail.com',
        'smtp'     => array (
            'server'   => 'smtp.mandrillapp.com',
            'port'     => 587,
            'security' => 'ssl',
            'username' => 'miroslav.trninic@gmail.com',
            'password' => 'AzM6aILHpPW4MFw6ZY0buA'
        )
    ),
));
