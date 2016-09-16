<?php
include '../../config.php';
include '../valid.php';

$delete_log = $connect->prepare("DELETE FROM worpen_log WHERE plataform LIKE :plataform");
$delete_log->bindValue(':plataform', $_SESSION['user_plataform']);
$delete_log->execute();

header("Location: ../../index.php?mod=admin&pg=log");

?>