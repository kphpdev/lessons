<?php

    error_reporting(E_ALL);

    $mysqli = new mysqli('127.0.0.1', 'root', 'root', 'my_db');

    /*
     * Это "официальный" объектно-ориентированный способ сделать это
     * однако $connect_error не работал вплоть до версий PHP 5.2.9 и 5.3.0.
     */
    if ($mysqli->connect_error) {
        die('Ошибка подключения (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    /*
     * Если нужно быть уверенным в совместимости с версиями до 5.2.9,
     * лучше использовать такой код
     */
    if (mysqli_connect_error()) {
        die('Ошибка подключения (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
    }

    echo 'Соединение установлено... ' . $mysqli->host_info . "\n";

    $mysqli->close();

?>
