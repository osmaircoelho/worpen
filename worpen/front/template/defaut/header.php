<!DOCTYPE HTML>
<!-- SPACES 2 -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="Resource-type" content="document">
    <title><?php print $INFO['namesite']; ?></title>
    <link href="<?php print $PATH['template']; ?>_files/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="<?php print $PATH['template']; ?>_files/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php print $PATH['template']; ?>_files/css/style.css" rel="stylesheet" type="text/css">
    <?php worpen_head(); ?>
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
             <span class="sr-only">Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" title="<?php echo $INFO['namesite']; ?>"><?php worpen_logo(); ?></a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <?php include $FOLDERS['back'].'menu.php'; ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php print $header_text['all']; ?> <strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <?php include $FOLDERS['back'].'menu_all.php'; ?>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['user_username']; ?> <strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <?php
                  if ($_SESSION['access_level'] == 1) {
                    echo "<li><a href=\"?mod=admin\">{$header_text['admin']}</a></li>";
                  }
                ?>
                <li><a href="logoff.php"><?php print $header_text['logoff']; ?></a></li>
              </ul>
            </li>
          </ul>

          <?php include $FOLDERS['back'].'notifications.php'; ?>

        </div>

      </div>
    </nav>
