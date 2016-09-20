<?php

# Database
$worpen_database_type = "mysql";
$worpen_database_host = "localhost";
$worpen_database_name = "gmasson_worpen";
$worpen_database_user = "gmasson_worpen";
$worpen_database_pass = "teste123";

/* 
----------------------------------------
Do not change the codes below, please! 
----------------------------------------
*/

$connect = new PDO("{$worpen_database_type}:host={$worpen_database_host};dbname={$worpen_database_name}", "{$worpen_database_user}", "{$worpen_database_pass}");
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect->exec("set names utf8");
