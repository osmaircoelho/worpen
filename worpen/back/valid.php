<?php

$select_menu_valid = $connect->prepare("SELECT * FROM worpen_module WHERE url LIKE :url");
$select_menu_valid->bindValue(":url", $MODULE_GET);
$select_menu_valid->execute();

while ($result = $select_menu_valid->fetch(PDO::FETCH_ASSOC)) {

  if ($result['access_level'] < $_SESSION['access_level']) {
    header("Location: ?mod=error");
  }

}