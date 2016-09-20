<?php
session_start();

// System Information
include 'sys_info.php';

// Validation
if (isset($_SESSION['login'])) { header("Location: ../index.php"); }

include 'database.php';

if (!$_POST['plataform']) { $plataform = ""; } else { $plataform = htmlspecialchars($_POST['plataform']); }
if (!$_POST['username']) { $username = ""; } else { $username = htmlspecialchars($_POST['username']); }
if (!$_POST['password']) { $password = ""; } else { $password = addslashes($_POST['password']); $password = $password."--".$INFO['hash']; $password = sha1($password); }

if (!$username or !$password) {

  header("Location: ../{$INFO_LOGIN_PAGE}?m=fill");

} else {

  # User Search the Database
  $select = $connect->prepare("SELECT * FROM worpen_users WHERE username LIKE :username AND plataform LIKE :plataform LIMIT 1");
  $select->bindValue(":username", $username);
  $select->bindValue(":plataform", $plataform);
  $select->execute();

  # Fill variables for verification
  while ($result = $select->fetch(PDO::FETCH_ASSOC)) {
    $user_id = $result['id'];
    $user_username = $result['username'];
    $user_password = $result['password'];
    $user_fullname = $result['fullname'];
    $user_email = $result['email'];
    $access_level = $result['access_level'];
  }

  // Confirm
  if ($username == $user_username && $password == $user_password) {
    $_SESSION['login'] = "ok";
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_username'] = $user_username;
    $_SESSION['user_fullname'] = $user_fullname;
    $_SESSION['user_email'] = $user_email;
    $_SESSION['access_level'] = $access_level;
    $_SESSION['user_plataform'] = $plataform;

    // LOG
    $insert = $connect->prepare("INSERT INTO worpen_log(user, date_access, hour_access, ip, plataform) VALUES (:user, :date_access, :hour_access, :ip, :plataform)");
    $insert->bindValue(":user", $_SESSION['user_username']);
    $insert->bindValue(":date_access", $INFO['date']);
    $insert->bindValue(":hour_access", $INFO['hour']);
    $insert->bindValue(":ip", $INFO['ip']);
    $insert->bindValue(":plataform", $_SESSION['user_plataform']);
    $insert->execute();

    header("Location: ../index.php");
  } else {
    header("Location: ../{$INFO_LOGIN_PAGE}?m=error");
  }

}