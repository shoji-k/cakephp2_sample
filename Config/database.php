<?php
class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'cakephp_user',
        'password' => 'password',
        'database' => 'cakephp_sample',
        'prefix' => '',
        'encoding' => 'utf8',
    );

    public $test = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'cakephp_user',
        'password' => 'password',
        'database' => 'test_cakephp_sample',
        'prefix' => '',
        'encoding' => 'utf8',
    );
}
