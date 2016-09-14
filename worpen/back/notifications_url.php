<?php
include '../config.php';
if (!$_GET['id']) { $id = ""; } else { $id = htmlspecialchars($_GET['id']); }

$select_menu_notif = $connect->prepare("SELECT * FROM worpen_notification WHERE active LIKE :active AND id LIKE :id");
$select_menu_notif->bindValue(":active", "yes");
$select_menu_notif->bindValue(":id", $id);
$select_menu_notif->execute();

$update_menu_notif = $connect->prepare("UPDATE worpen_notification SET active = :active WHERE id = :id");
$update_menu_notif->bindValue(":active", "no"); 
$update_menu_notif->bindValue(":id", $id); 
$update_menu_notif->execute();

while ($result = $select_menu_notif->fetch(PDO::FETCH_ASSOC)) {
  $result_url = $result['url'];
  header("Location: {$result_url}");
}
?>