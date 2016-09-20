<?php
include '../../config.php';

if (!$_POST['id']) { $id = ""; } else { $id = htmlspecialchars($_POST['id']); }
if (!$_POST['fullname']) { $fullname = ""; } else { $fullname = htmlspecialchars($_POST['fullname']); }
if (!$_POST['email']) { $email = ""; } else { $email = htmlspecialchars($_POST['email']); }
if (!$_POST['username']) { $username = ""; } else { $username = htmlspecialchars($_POST['username']); }
if (!$_POST['level']) { $level = ""; } else { $level = htmlspecialchars($_POST['level']); }

if (!$_POST['new_password']) { $new_password = ""; } else { $new_password = addslashes($_POST['new_password']); }
if (!$_POST['confirm_new_password']) { $confirm_new_password = ""; } else { $confirm_new_password = addslashes($_POST['confirm_new_password']); }

$update_sql = "UPDATE worpen_users SET fullname = :fullname, email = :email, username = :username, access_level = :level WHERE id = :id AND plataform = :plataform";
$update = $connect->prepare($update_sql);
$update->bindValue(":fullname", $fullname);
$update->bindValue(":email", $email);
$update->bindValue(":username", $username);
$update->bindValue(":level", $level);
$update->bindValue(":id", $id);
$update->bindValue(":plataform", $INFO_USER['plataform']);
$update->execute();

if (!$new_password && !$confirm_new_password) {
  header("Location: ../../index.php?mod=admin&pg=edit_user&id={$id}&m=ok_info");
} else {
  if ($new_password == $confirm_new_password) {
    $new_password = $new_password."--".$INFO['hash'];
    $new_password = sha1($new_password);
    $update_sql = "UPDATE worpen_users SET password = :password WHERE id = :id AND plataform = :plataform";
    $update_password = $connect->prepare($update_sql);
    $update_password->bindValue(":password", $new_password);
    $update_password->bindValue(":id", $id);
    $update_password->bindValue(":plataform", $INFO_USER['plataform']);
    $update_password->execute();
    header("Location: ../../index.php?mod=admin&pg=edit_user&id={$id}&m=ok_info");
  } else {
    header("Location: ../../index.php?mod=admin&pg=edit_user&id={$id}&m=pass_error");
  }
}

?>