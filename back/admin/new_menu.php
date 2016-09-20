<?php
include '../../config.php';

if (!$_POST['url']) { $url = ""; } else { $url = htmlspecialchars($_POST['url']); }
if (!$_POST['name_menu']) { $name_menu = ""; } else { $name_menu = htmlspecialchars($_POST['name_menu']); }
if (!$_POST['display']) { $display = ""; } else { $display = htmlspecialchars($_POST['display']); }
if (!$_POST['badge']) { $badge = NULL; } else { $badge = htmlspecialchars($_POST['badge']); }
if (!$_POST['active']) { $active = ""; } else { $active = htmlspecialchars($_POST['active']); }
if (!$_POST['level']) { $level = ""; } else { $level = htmlspecialchars($_POST['level']); }
$date_create = $INFO['date']." - ".$INFO['hour'];

$insert = $connect->prepare("INSERT INTO worpen_menu(url, name_menu, display, badge, active, access_level, date_create, plataform) VALUES (:url, :name_menu, :display, :badge, :active, :access_level, :date_create, :plataform)");
$insert->bindValue(":url", $url);
$insert->bindValue(":name_menu", $name_menu);
$insert->bindValue(":display", $display);
$insert->bindValue(":badge", $badge);
$insert->bindValue(":active", $active);
$insert->bindValue(":access_level", $level);
$insert->bindValue(":date_create", $date_create);
$insert->bindValue(":plataform", $INFO['plataform']);
$insert->execute();

header("Location: ../../index.php?mod=admin&pg=menus&m=ok_new");
?>