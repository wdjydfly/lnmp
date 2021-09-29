<?php
$type = 'mysql';
$host = '172.30.0.4';
$port = 3306;
$db = 'test';
$user = 'root';
$passwd = 'root';
$dsn = "$type:host=$host;$port;dbname=$db";

try {
    $dbh = new PDO($dsn, $user, $passwd);
    echo "connection to server <span style='color:green'>sucessfully</span>";
    $dbh = null;
} catch (PDOException $e) {
    die("Error!: {$e->getMessage()} <br />");
}