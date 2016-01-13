<?php
Environment::configure('development', true, [
    'MYSQL_DB_HOST' => 'localhost',
    'MYSQL_USERNAME' => 'cakephp_user',
    'MYSQL_PASSWORD' => 'password',
    'MYSQL_DB_NAME' => 'cakephp_sample',
    'MYSQL_TEST_DB_NAME' => 'test_cakephp_sample',
    'MYSQL_PREFIX' => '',
], function() {
    CakePlugin::load('Bdd');
    CakePlugin::load('Fabricate');
});
