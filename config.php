<?php
session_start();

// System Information
include 'back/sys_info.php';

// Validation
if (!$_SESSION['login']) { header("Location: {$INFO_LOGIN_PAGE}"); }

// Database
include 'back/database.php';

// Information
include 'back/info.php';

// Routes
include 'back/routes.php';

// Functions
include 'back/functions.php';

// Language
include $PATH['language']."defaut.php";

$select_menu_valid = $connect->prepare("SELECT * FROM worpen_module WHERE url LIKE :url AND plataform LIKE :plataform");
$select_menu_valid->bindValue(":url", $MODULE_GET);
$select_menu_valid->bindValue(':plataform', $_SESSION['user_plataform']);
$select_menu_valid->execute();

while ($result = $select_menu_valid->fetch(PDO::FETCH_ASSOC)) {
  if ($result['access_level'] < $_SESSION['access_level']) {
    header("Location: ?mod=error");
  }
}