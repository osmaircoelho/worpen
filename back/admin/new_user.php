<?php
include '../../config.php';

if (!$_POST['fullname']) { $fullname = ""; } else { $fullname = htmlspecialchars($_POST['fullname']); }
if (!$_POST['email']) { $email = ""; } else { $email = htmlspecialchars($_POST['email']); }
if (!$_POST['username']) { $username = ""; } else { $username = htmlspecialchars($_POST['username']); }
if (!$_POST['password']) { $password = ""; } else { $password = addslashes($_POST['password']); $password = $password."--".$INFO['hash']; $password = sha1($password); }
if (!$_POST['confirmpassword']) { $confirmpassword = ""; } else { $confirmpassword = addslashes($_POST['confirmpassword']); $confirmpassword = $confirmpassword."--".$INFO['hash']; $confirmpassword = sha1($confirmpassword); }
if (!$_POST['level']) { $level = ""; } else { $level = htmlspecialchars($_POST['level']); }
$date_create = $INFO['date']." - ".$INFO['hour'];

if ($password =! $confirmpassword) { header("Location: ../../index.php?mod=admin&m=error_confirm_password"); }

$insert = $connect->prepare("INSERT INTO worpen_users(fullname, email, username, password, access_level, date_create, plataform) VALUES (:fullname, :email, :username, :password, :access_level, :date_create, :plataform)");
$insert->bindValue(":fullname", $fullname);
$insert->bindValue(":email", $email);
$insert->bindValue(":username", $username);
$insert->bindValue(":password", $password);
$insert->bindValue(":access_level", $level);
$insert->bindValue(":date_create", $date_create);
$insert->bindValue(":plataform", $INFO['plataform']);
$insert->execute();

header("Location: ../../index.php?mod=admin&m=ok_new");
?>