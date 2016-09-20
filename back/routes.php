<?php
// Folders
$FOLDERS['back'] = "back/";
$FOLDERS['front'] = "front/";
$FOLDERS['language'] = "front/language/";
$FOLDERS['template'] = "front/template/";

// Path
$PATH['template'] = $FOLDERS['template'];
$PATH['language'] = $FOLDERS['language'].$INFO['language']."/";
$PATH['modstart'] = $INFO['modstart'];
$PATH['error'] = $PATH['template']."error.php";
# Folder BACK modules -> $PATH['module']
# Folder FRONT modules -> $PATH['module_front']
