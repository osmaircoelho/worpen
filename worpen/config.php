<?php
session_start();

// Validation
if (!$_SESSION['login']) { header("Location: login.php"); }

// Information
include 'back/info.php';

// Routes
include 'back/routes.php';

// Functions
include 'back/functions.php';

// Database
include 'back/database.php';

// Language
include $PATH['language']."defaut.php";