<?php

$select_menu_notif = $connect->prepare("SELECT * FROM worpen_notification WHERE active LIKE :active AND user LIKE :user ORDER BY id DESC");
$select_menu_notif->bindValue(":active", "yes");
$select_menu_notif->bindValue(":user", $_SESSION['user_username']);
$select_menu_notif->execute();

$select_menu_notif_count = $connect->prepare("SELECT COUNT(*) FROM worpen_notification WHERE active LIKE :active AND user LIKE :user");
$select_menu_notif_count->bindValue(":active", "yes");
$select_menu_notif_count->bindValue(":user", $_SESSION['user_username']);
$select_menu_notif_count->execute();
$count_results = $select_menu_notif_count->fetchColumn();

print "<ul class=\"nav navbar-nav navbar-right\">
          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" title=\"{$header_text['notif']}\">
              <span class=\"glyphicon glyphicon-bell\" aria-hidden=\"true\"></span> <span class=\"badge\">{$count_results}</span>
            </a>
            <ul class=\"dropdown-menu\">";

          if ($count_results == 0) {
            print "<li>{$header_text['no_notif']}</li>";
          }
          while ($result = $select_menu_notif->fetch(PDO::FETCH_ASSOC)) {
            print "<li><a href=\"back/notifications/index.php?id={$result['id']}\">{$result['name']}</a></li>";
          }

print "</ul>
      </li>
    </ul>";