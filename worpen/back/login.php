<?php
session_start();

include 'database.php';
include 'info.php';

if (!$_POST['user']) { $user = ""; } else { $user = htmlspecialchars($_POST['user']); }
if (!$_POST['pass']) { $pass = ""; } else { $pass = addslashes($_POST['pass']); $pass = sha1($pass); }

if (!$user or !$pass) {

  header("Location: ../login.php?m=fill");

} else {

  # User Search the Database
  $select = $connect->prepare("SELECT * FROM worpen_users WHERE username LIKE :username LIMIT 1");
  $select->bindValue(':username', $user);
  $select->execute();

  # Fill variables for verification
  while ($result = $select->fetch(PDO::FETCH_ASSOC)) {
    $user_username = $result['username'];
    $password = $result['password'];
    $user_fullname = $result['fullname'];
    $user_email = $result['email'];
    $access_level = $result['access_level'];
  }

  // Confirm
  if ($user == $user_username && $pass == $password) {
    $_SESSION['login'] = "ok";
    $_SESSION['user_username'] = $user_username;
    $_SESSION['user_fullname'] = $user_fullname;
    $_SESSION['user_email'] = $user_email;
    $_SESSION['access_level'] = $access_level;

    // LOG
    $insert = $connect->prepare("INSERT INTO worpen_log(user, date_acess, hour_access, ip) VALUES (:user, :date_acess, :hour_access, :ip)");
    $insert->bindParam(':user', $_SESSION['user_username']);
    $insert->bindParam(':date_acess', $INFO['date']);
    $insert->bindParam(':hour_access', $INFO['hour']);
    $insert->bindParam(':ip', $INFO['ip']);
    $insert->execute();

    header("Location: ../index.php");
  } else {
    header("Location: ../login.php?m=error");
  }

}