<?php
//$con = mysqli_connect("localhost","root","") or die("Unable to connect");
//mysqli_select_db("blogging");
$host = 'localhost';
$db   = 'blogging';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $mysqli = mysqli_connect($host, $user, $pass, $db);
    mysqli_set_charset($mysqli, $charset);
} catch (\mysqli_sql_exception $e) {
     throw new \mysqli_sql_exception($e->getMessage(), $e->getCode());
}
?>
