<?php

// Basic page information
$INFO['sitename'] = $_SESSION['sitename'];
$INFO['template'] = $_SESSION['template'];
$INFO['language'] = $_SESSION['language'];
$INFO['modstart'] = $_SESSION['modstart'];

// Access information
$INFO['ip'] = $_SERVER['SERVER_ADDR'];
$INFO['date'] = date("d/m/Y");
$INFO['hour'] = date("H:i:s");

// Email data
$INFO_MAIL['server'] = $_SESSION['server_mail'];
$INFO_MAIL['port'] = $_SESSION['port_mail'];
$INFO_MAIL['user'] = $_SESSION['user_mail'];
$INFO_MAIL['password'] = $_SESSION['password_mail'];
