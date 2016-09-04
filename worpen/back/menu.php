<?php

$select_menu_module = $connect->prepare("SELECT * FROM worpen_module WHERE active LIKE :active");
$select_menu_module->bindValue(":active", "yes");
$select_menu_module->execute();

while ($result = $select_menu_module->fetch(PDO::FETCH_ASSOC)) {
  
  print $result['access_level'];

  if ($result['access_level'] >= $_SESSION['access_level']) {
    print "<li><a href=\"?mod={$result['url']}\">{$result['name_menu']}</a></li>";
  }

}