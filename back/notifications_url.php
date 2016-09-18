<?php
include '../config.php';

if (!$_SESSION['login']) { header("Location: ../{$INFO['login_page']}"); } /* Delete after setting $INFO['url'] to url */

if (!$_GET['id']) { $id = ""; } else { $id = htmlspecialchars($_GET['id']); }

$select_menu_notif = $connect->prepare("SELECT * FROM worpen_notification WHERE active LIKE :active AND id LIKE :id AND plataform LIKE :plataform");
$select_menu_notif->bindValue(":active", "yes");
$select_menu_notif->bindValue(":id", $id);
$select_menu_notif->bindValue(':plataform', $_SESSION['user_plataform']);
$select_menu_notif->execute();

$update_menu_notif = $connect->prepare("UPDATE worpen_notification SET active = :active WHERE id = :id AND plataform = :plataform");
$update_menu_notif->bindValue(":active", "no"); 
$update_menu_notif->bindValue(":id", $id); 
$update_menu_notif->bindValue(':plataform', $_SESSION['user_plataform']);
$update_menu_notif->execute();

while ($result = $select_menu_notif->fetch(PDO::FETCH_ASSOC)) {
  $result_url = $result['url'];
  header("Location: {$result_url}");
}
?>