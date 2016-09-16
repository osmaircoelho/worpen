<?php

$select_menu_menu = $connect->prepare("SELECT * FROM worpen_menu WHERE active LIKE :active AND plataform LIKE :plataform");
$select_menu_menu->bindValue(":active", "yes");
$select_menu_menu->bindValue(':plataform', $_SESSION['user_plataform']);
$select_menu_menu->execute();

while ($result = $select_menu_menu->fetch(PDO::FETCH_ASSOC)) {
  if ($result['access_level'] >= $_SESSION['access_level'] && $result['show'] == "yes") {
    print "<li><a href=\"?mod={$result['url']}\">{$result['name_menu']}";
    if (isset($result['badge'])) {
      print " <span class=\"badge\">{$result['badge']}</span>";
    }
    print "</a></li>";
  }

  if ($result['show'] == "no") { $show_all = "ok"; }
}

$select_menu_menu_all = $connect->prepare("SELECT * FROM worpen_menu WHERE active LIKE :active AND plataform LIKE :plataform");
$select_menu_menu_all->bindValue(":active", "yes");
$select_menu_menu_all->bindValue(':plataform', $_SESSION['user_plataform']);
$select_menu_menu_all->execute();

if ($show_all == "ok") {
  print "<li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
      {$header_text['all']} <strong class=\"caret\"></strong>
    </a>
    <ul class=\"dropdown-menu\">";
    
    while ($result_all = $select_menu_menu_all->fetch(PDO::FETCH_ASSOC)) {
      if ($result_all['access_level'] >= $_SESSION['access_level']) {
        print "<li><a href=\"?mod={$result_all['url']}\">{$result_all['name_menu']}";
        if (isset($result_all['badge'])) {
          print " <span class=\"badge\">{$result_all['badge']}</span>";
        }
        print "</a></li>";
      }
    }

  print "</ul>
  </li>";
}