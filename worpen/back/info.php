<?php

// Basic page information
$INFO = array(
  "sitename" => "Worpen",
  "template" => "defaut",
  "language" => "en",
  "modstart" => "home"
);

$INFO_MAIL = array(
  "server" => "smtp.site.com",
  "port" => "587",
  "user" => "user@site.com",
  "password" => "password"
);

// Access information
$INFO['ip'] = $_SERVER['SERVER_ADDR'];
$INFO['date'] = date("d/m/Y");
$INFO['hour'] = date("H:i:s");
