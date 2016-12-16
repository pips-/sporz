<?php
define('DB_CONNECTOR',  'sqlite'); // Possible values: mysq, sqlite
define('DB_HOST',       '');
define('DB_NAME',       __DIR__.'/../tests/test.db'); // sqlite: used as file path
define('DB_USER',       '');
define('DB_PASSWORD',   '');

define( 'APP_PATH', realpath('..') . '/app' );

//AuthSession params
//define('AUTH_USER_MODEL', 'YOUR MODEL CLASS');
//define('AUTH_CRYPTO_COST', 10);
