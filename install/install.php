<?php

include 'back/database.php';
include 'back/info.php';

$worpen_log = $connect->exec("CREATE TABLE IF NOT EXISTS worpen_log (
  id int(55) NOT NULL AUTO_INCREMENT, 
  user text NOT NULL, 
  date_access text NOT NULL, 
  hour_access text NOT NULL, 
  ip text NOT NULL, 
  PRIMARY KEY (id)
  )");

if ($worpen_log) {
  print "worpen_log - ok";
} else {
  print "worpen_log - error";
}


$worpen_menu = $connect->exec("CREATE TABLE IF NOT EXISTS worpen_menu (
  id int(55) NOT NULL AUTO_INCREMENT, 
  url text NOT NULL, name_menu text NOT NULL, 
  access_level text NOT NULL, 
  date_create text NOT NULL, 
  active text NOT NULL, 
  show text NOT NULL, 
  badge text NOT NULL, 
  PRIMARY KEY (id)
  )");

if ($worpen_menu) {
  print "worpen_menu - ok";
} else {
  print "worpen_menu - error";
}


$worpen_module = $connect->exec("CREATE TABLE IF NOT EXISTS worpen_module (
  id int(55) NOT NULL AUTO_INCREMENT, 
  name text NOT NULL, url text NOT NULL, 
  name_menu text NOT NULL, 
  access_level text NOT NULL, 
  date_create text NOT NULL, 
  active text NOT NULL, 
  show text NOT NULL, 
  PRIMARY KEY (id)
  )");

if ($worpen_module) {
  print "worpen_module - ok";
} else {
  print "worpen_module - error";
}


$worpen_notification = $connect->exec("CREATE TABLE IF NOT EXISTS worpen_notification (
  id int(99) NOT NULL AUTO_INCREMENT, 
  name text NOT NULL, 
  url text NOT NULL, 
  user text NOT NULL, 
  active text NOT NULL, 
  PRIMARY KEY (id)
  )");

if ($worpen_notification) {
  print "worpen_notification - ok";
} else {
  print "worpen_notification - error";
}


$worpen_users = $connect->exec("CREATE TABLE IF NOT EXISTS worpen_users (
  id int(55) NOT NULL AUTO_INCREMENT, 
  username text NOT NULL, 
  password text NOT NULL, 
  fullname text NOT NULL, 
  email text NOT NULL, 
  date_create text NOT NULL, 
  access_level text NOT NULL, 
  PRIMARY KEY (id)
  )");

if ($worpen_users) {
  print "worpen_users - ok";
} else {
  print "worpen_users - error";
}


$insert = $connect->prepare("INSERT INTO worpen_users(id, username, password, fullname, email, date_create, access_level) VALUES (:id, :username, :password, :fullname, :email, :date_create, :access_level)");
$insert->bindParam(':id', 1);
$insert->bindParam(':user', "admin");
$insert->bindParam(':password', "d033e22ae348aeb5660fc2140aec35850c4da997");
$insert->bindParam(':fullname', "Administrator");
$insert->bindParam(':email', "test@test");
$insert->bindParam(':date_create', $INFO['date']);
$insert->bindParam(':access_level', 1);
$insert->execute();

print "OK BTO";