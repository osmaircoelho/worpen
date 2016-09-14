<?php
session_start();

// Validation
if (!$_SESSION['login']) { header("Location: login.php"); }

// Database
include 'back/database.php';

// Database
include 'back/info.php';

// Routes
include 'back/routes.php';

// Functions
include 'back/functions.php';

// Language
include $PATH['language']."defaut.php";