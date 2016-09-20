<?php
include "config.php";
include "back/valid.php";

// Path module
if (!$_GET['mod']) { $MODULE_GET = $PATH['modstart']; } else { $MODULE_GET = addslashes($_GET['mod']); }
if (!$_GET['pg']) { $PAGE_GET = "start"; } else { $PAGE_GET = addslashes($_GET['pg']); }

// Include from modules
$PATH['module'] = $FOLDERS['back'].$MODULE_GET."/";
$PATH['module_front'] = $PATH['template'].$MODULE_GET."/";

// Include the path
$CURRENT_MODULE = $PATH['template'].$MODULE_GET."/".$PAGE_GET.".php";

// If there is a module
if (file_exists($CURRENT_MODULE)) {

  $PAGE_CONTENT = $CURRENT_MODULE;

  // checks if there is any related Include
  $INCLUDES_MODULE = $PATH['module']."include.php";
  if (file_exists($INCLUDES_MODULE)) { include $INCLUDES_MODULE; }

  // checks if there is any related Language
  $LANGUAGE_MODULE = $PATH['language'].$MODULE_GET.".php";
  if (file_exists($LANGUAGE_MODULE)) { include $LANGUAGE_MODULE; }

} else {
  $PAGE_CONTENT = $PATH['error'];
}

// Page Body
include $PATH['template']."index.php";
?>
