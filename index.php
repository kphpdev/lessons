<?php

try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'd_mysql';
    $port = 3306;
    $dbname = 'localphp';
    $user = 'user';
    $pass = 'passwordQejaksdc002';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8;port=$port";

    echo '<p>'.$dsn.'</p>';

    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}
