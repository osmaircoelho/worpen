<?php
session_start();

// Validation
if (isset($_SESSION['login'])) { header("Location: ../index.php"); }

include 'database.php';

if (!$_POST['plataform']) { $plataform = ""; } else { $plataform = htmlspecialchars($_POST['plataform']); }
if (!$_POST['user']) { $user = ""; } else { $user = htmlspecialchars($_POST['user']); }
if (!$_POST['pass']) { $pass = ""; } else { $pass = addslashes($_POST['pass']); $pass = $pass."--".$INFO['hash']; $pass = sha1($pass); }

if (!$user or !$pass) {

  header("Location: ../login.php?m=fill");

} else {

  # User Search the Database
  $select = $connect->prepare("SELECT * FROM worpen_users WHERE username LIKE :username AND plataform LIKE :plataform LIMIT 1");
  $select->bindValue(':username', $user);
  $select->bindValue(':plataform', $plataform);
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
  if ($user == $user_username && $pass == $user_password) {
    $_SESSION['login'] = "ok";
    $_SESSION['user_id'] = $user_id;
    $_SESSION['user_username'] = $user_username;
    $_SESSION['user_fullname'] = $user_fullname;
    $_SESSION['user_email'] = $user_email;
    $_SESSION['access_level'] = $access_level;
    $_SESSION['user_plataform'] = $plataform;

    include 'info.php';

    // LOG
    $insert = $connect->prepare("INSERT INTO worpen_log(user, date_access, hour_access, ip, plataform) VALUES (:user, :date_access, :hour_access, :ip, :plataform)");
    $insert->bindParam(':user', $_SESSION['user_username']);
    $insert->bindParam(':date_access', $INFO['date']);
    $insert->bindParam(':hour_access', $INFO['hour']);
    $insert->bindParam(':ip', $INFO['ip']);
    $insert->bindParam(':plataform', $INFO['plataform']);
    $insert->execute();

    header("Location: ../index.php");
  } else {
    header("Location: ../login.php?m=error");
  }

}