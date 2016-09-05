<?php

$select_menu_menu = $connect->prepare("SELECT * FROM worpen_menu WHERE active LIKE :active");
$select_menu_menu->bindValue(":active", "yes");
$select_menu_menu->execute();

while ($result = $select_menu_menu->fetch(PDO::FETCH_ASSOC)) {

  if ($result['access_level'] >= $_SESSION['access_level']) {
    print "<li><a href=\"?mod={$result['url']}\">{$result['name_menu']}";
    if (isset($result['badge'])) {
      print " <span class=\"badge\">{$result['badge']}</span>";
    }
    print "</a></li>";
  }

}