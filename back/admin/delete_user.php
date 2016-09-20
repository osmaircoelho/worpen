<?php
include '../../config.php';

if (!$_GET['id']) { $id = ""; } else { $id =  addslashes($_GET['id']); }

$delete = $connect->prepare("DELETE FROM worpen_users WHERE id LIKE :id AND plataform LIKE :plataform");
$delete->bindValue(":id", $id);
$delete->bindValue(":plataform", $_SESSION['user_plataform']);
$delete->execute();

header("Location: ../../index.php?mod=admin");
?>