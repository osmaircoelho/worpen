<?php
include '../../config.php';
include '../valid.php';

$delete_log = $connect->prepare("DELETE FROM worpen_log");
$delete_log->execute();

header("Location: ../../index.php?mod=admin&pg=log");

?>