<?php
include '../../config.php';

if (!$_POST['id']) { $id = ""; } else { $id = htmlspecialchars($_POST['id']); }
if (!$_POST['fullname']) { $fullname = ""; } else { $fullname = htmlspecialchars($_POST['fullname']); }
if (!$_POST['email']) { $email = ""; } else { $email = htmlspecialchars($_POST['email']); }
if (!$_POST['username']) { $username = ""; } else { $username = htmlspecialchars($_POST['username']); }
if (!$_POST['level']) { $level = ""; } else { $level = htmlspecialchars($_POST['level']); }

$update_sql = "UPDATE worpen_users SET fullname = :fullname, email = :email, username = :username, access_level = :level WHERE id = :id AND plataform = :plataform";
$update_user = $connect->prepare($update_sql);
$update_user->bindValue(":fullname", $fullname);
$update_user->bindValue(":email", $email);
$update_user->bindValue(":username", $username);
$update_user->bindValue(":level", $level);
$update_user->bindValue(":id", $id);
$update_user->bindValue(':plataform', $_SESSION['user_plataform']);
$update_user->execute();

header("Location: ../../index.php?mod=admin&pg=edit_user&id={$id}&m=ok_info");
?>