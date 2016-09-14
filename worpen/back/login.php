<?php
session_start();

// Validation
if (isset($_SESSION['login'])) { header("Location: ../index.php"); }

include 'database.php';

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
    $user_password = $result['password'];
    $user_fullname = $result['fullname'];
    $user_email = $result['email'];
    $access_level = $result['access_level'];
  }

  // Confirm
  if ($user == $user_username && $pass == $user_password) {
    $_SESSION['login'] = "ok";
    $_SESSION['user_username'] = $user_username;
    $_SESSION['user_fullname'] = $user_fullname;
    $_SESSION['user_email'] = $user_email;
    $_SESSION['access_level'] = $access_level;

    $about = $connect->prepare("SELECT * FROM worpen_info WHERE id LIKE :id");
    $about->bindValue(':id', 1);
    $about->execute();

    while ($result = $about->fetch(PDO::FETCH_ASSOC)) {
      $_SESSION['sitename'] = $result['sitename'];
      $_SESSION['template'] = $result['template'];
      $_SESSION['language'] = $result['language'];
      $_SESSION['modstart'] = $result['modstart'];

      $_SESSION['server_mail'] = $result['server_mail'];
      $_SESSION['port_mail'] = $result['port_mail'];
      $_SESSION['user_mail'] = $result['user_mail'];
      $_SESSION['password_mail'] = $result['password_mail'];
    }

    include 'info.php';
    
    // LOG
    $insert = $connect->prepare("INSERT INTO worpen_log(user, date_access, hour_access, ip) VALUES (:user, :date_access, :hour_access, :ip)");
    $insert->bindParam(':user', $_SESSION['user_username']);
    $insert->bindParam(':date_access', $INFO['date']);
    $insert->bindParam(':hour_access', $INFO['hour']);
    $insert->bindParam(':ip', $INFO['ip']);
    $insert->execute();

    header("Location: ../index.php");
  } else {
    header("Location: ../login.php?m=error");
  }

}