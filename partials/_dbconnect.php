<?php
declare(strict_types=1);
$servername = "localhost";
$username = "root";
$password = "";
$database = "dog_license";
$table = "applicants";

$conn = mysqli_connect($servername, $username, $password);

// Create database if not exists
$dbSql = "CREATE DATABASE IF NOT EXISTS `{$database}`";
$dbResult = mysqli_query($conn, $dbSql);

// Create table if not exists
$tbSql = "CREATE TABLE IF NOT EXISTS `{$database}`.`{$table}` (
    `id` INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `apppobox` VARCHAR(10),
    `applicantname` VARCHAR(50) NOT NULL,
    `appstreetnumber` VARCHAR(10) NOT NULL,
    `appstreetname` VARCHAR(25) NOT NULL,
    `appcity` VARCHAR(25) NOT NULL,
    `appstate` VARCHAR(25) NOT NULL,
    `appzip` VARCHAR(10),
    `apptelephone` VARCHAR(15) NOT NULL,
    `appemail` VARCHAR(50) NOT NULL,
    `addpobox` VARCHAR(10),
    `addstreetnumber` VARCHAR(10) NOT NULL,
    `addstreetname` VARCHAR(25) NOT NULL,
    `addcity` VARCHAR(25) NOT NULL,
    `addstate` VARCHAR(25) NOT NULL,
    `addzip` VARCHAR(10),

    `floormaterial` VARCHAR(50),
    `wall` VARCHAR(50),
    `ceiling` VARCHAR(50),
    `clearnace` VARCHAR(50),
    `wall1` VARCHAR(50),
    `ceiling1` VARCHAR(50),
    `chimney` VARCHAR(10),
    `type` VARCHAR(50),
    `size` VARCHAR(50),
    `otherapp` VARCHAR(5),

    `dt` DATETIME DEFAULT CURRENT_TIMESTAMP
    )";
$tbResult = mysqli_query($conn, $tbSql);
?>
