<?php
include '../../config.php';

if (!$_POST['sitename']) { $sitename = ""; } else { $sitename = htmlspecialchars($_POST['sitename']); }
// if (!$_POST['url']) { $url = ""; } else { $url = htmlspecialchars($_POST['url']); }
if (!$_POST['language']) { $language = ""; } else { $language = htmlspecialchars($_POST['language']); }
if (!$_POST['modstart']) { $modstart = ""; } else { $modstart = htmlspecialchars($_POST['modstart']); }
if (!$_POST['server_mail']) { $server_mail = ""; } else { $server_mail = htmlspecialchars($_POST['server_mail']); }
if (!$_POST['port_mail']) { $port_mail = ""; } else { $port_mail = htmlspecialchars($_POST['port_mail']); }
if (!$_POST['user_mail']) { $user_mail = ""; } else { $user_mail = htmlspecialchars($_POST['user_mail']); }
if (!$_POST['password_mail']) { $password_mail = ""; } else { $password_mail = htmlspecialchars($_POST['password_mail']); }


$update_sql = "UPDATE worpen_info SET sitename = :sitename, language = :language, modstart = :modstart, server_mail = :server_mail, port_mail = :port_mail, user_mail = :user_mail, password_mail = :password_mail WHERE id = :plataform";
$update_user = $connect->prepare($update_sql);
$update_user->bindValue(":sitename", $sitename);
// $update_user->bindValue(":url", $url);
$update_user->bindValue(":language", $language);
$update_user->bindValue(":modstart", $modstart);
$update_user->bindValue(":server_mail", $server_mail);
$update_user->bindValue(":port_mail", $port_mail);
$update_user->bindValue(":user_mail", $user_mail);
$update_user->bindValue(":password_mail", $password_mail);
$update_user->bindValue(':plataform', $INFO_USER['plataform']);
$update_user->execute();

header("Location: ../../index.php?mod=admin&pg=info&m=ok_info");
?>