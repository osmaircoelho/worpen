<?php
include '../../config.php';

if (!$_POST['id']) { $id = ""; } else { $id = htmlspecialchars($_POST['id']); }
if (!$_POST['name_menu']) { $name_menu = ""; } else { $name_menu = htmlspecialchars($_POST['name_menu']); }
if (!$_POST['url']) { $url = ""; } else { $url = htmlspecialchars($_POST['url']); }
if (!$_POST['display']) { $display = ""; } else { $display = htmlspecialchars($_POST['display']); }
if (!$_POST['badge']) { $badge = NULL; } else { $badge = htmlspecialchars($_POST['badge']); }
if (!$_POST['active']) { $active = ""; } else { $active = htmlspecialchars($_POST['active']); }
if (!$_POST['level']) { $level = ""; } else { $level = htmlspecialchars($_POST['level']); }

$update_sql = "UPDATE worpen_menu SET url = :url, name_menu = :name_menu, access_level = :level, display = :display, active = :active, badge = :badge WHERE id = :id AND plataform = :plataform";
$update = $connect->prepare($update_sql);
$update->bindValue(":url", $url);
$update->bindValue(":name_menu", $name_menu);
$update->bindValue(":level", $level);
$update->bindValue(":display", $display);
$update->bindValue(":active", $active);
$update->bindValue(":badge", $badge);
$update->bindValue(":id", $id);
$update->bindValue(":plataform", $INFO_USER['plataform']);
$update->execute();

header("Location: ../../index.php?mod=admin&pg=edit_menu&id={$id}&m=ok_info");
?>