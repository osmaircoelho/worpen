<?php
include '../../config.php';

if (!$_POST['id']) { $id = ""; } else { $id = htmlspecialchars($_POST['id']); }
if (!$_POST['name']) { $name = ""; } else { $name = htmlspecialchars($_POST['name']); }
if (!$_POST['url']) { $url = ""; } else { $url = htmlspecialchars($_POST['url']); }
if (!$_POST['active']) { $active = ""; } else { $active = htmlspecialchars($_POST['active']); }
if (!$_POST['level']) { $level = ""; } else { $level = htmlspecialchars($_POST['level']); }

$update_sql = "UPDATE worpen_module SET name = :name, url = :url, active = :active, access_level = :level WHERE id = :id AND plataform = :plataform";
$update = $connect->prepare($update_sql);
$update->bindValue(":name", $name);
$update->bindValue(":url", $url);
$update->bindValue(":active", $active);
$update->bindValue(":level", $level);
$update->bindValue(":id", $id);
$update->bindValue(":plataform", $INFO_USER['plataform']);
$update->execute();

header("Location: ../../index.php?mod=admin&pg=edit_module&id={$id}&m=ok_info");
?>