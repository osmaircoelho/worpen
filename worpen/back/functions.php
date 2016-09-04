<?php

function worpen_head() {
  print "<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">";
}

function worpen_logo() {
  print "<i class=\"fa fa-home\"></i>";
}

function worpen_footer() {
  print "<p>Worpen - 2016</p> <a href=\"https://worpen.github.io\" target=\"_blank\">Project Worpen</a>";
}

/* 
----------------------------------------
Do not change the codes below, please! 
----------------------------------------
*/

function worpen_logoff() {
  session_destroy();
  header("Location: login.php");
}
