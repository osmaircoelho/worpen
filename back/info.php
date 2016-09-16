<?php

// Access information
$INFO['ip'] = $_SERVER['SERVER_ADDR'];
$INFO['date'] = date("d/m/Y");
$INFO['hour'] = date("H:i:s");
$INFO['hash'] = "wpen-20-09-16";

$worpen_selectdb_about = $connect->prepare("SELECT * FROM worpen_info WHERE id LIKE :id");
$worpen_selectdb_about->bindValue(':id', $_SESSION['user_plataform']);
$worpen_selectdb_about->execute();

while ($result = $worpen_selectdb_about->fetch(PDO::FETCH_ASSOC)) {
  // Basic page information
  $INFO['sitename'] = $result['sitename'];
  $INFO['language'] = $result['language'];
  $INFO['modstart'] = $result['modstart'];
  $INFO['plataform'] = $result['id'];

  // Email data
  $INFO_MAIL['server'] = $result['server_mail'];
  $INFO_MAIL['port'] = $result['port_mail'];
  $INFO_MAIL['user'] = $result['user_mail'];
  $INFO_MAIL['password'] = $result['password_mail'];
}

// User Information
$worpen_selectdb_user_current = $connect->prepare("SELECT * FROM worpen_users WHERE id LIKE :id AND plataform LIKE :plataform LIMIT 1");
$worpen_selectdb_user_current->bindValue(':id', $_SESSION['user_id']);
$worpen_selectdb_user_current->bindValue(':plataform', $INFO['plataform']);
$worpen_selectdb_user_current->execute();

while ($result = $worpen_selectdb_user_current->fetch(PDO::FETCH_ASSOC)) {
  $INFO_USER['fullname'] = $result['fullname'];
  $INFO_USER['email'] = $result['email'];
  $INFO_USER['username'] = $result['username'];
  $INFO_USER['access_level'] = $result['access_level'];
  $INFO_USER['plataform'] = $result['plataform'];
}
