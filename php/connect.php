<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect = mysqli_connect("localhost", "phpadmin", "123", "site");

if (!$connect) {
    die('Error connect to DataBase');
}
