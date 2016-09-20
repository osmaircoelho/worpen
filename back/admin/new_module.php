<?php
if (!$_POST['name']) { $name = ""; } else { $name = htmlspecialchars($_POST['name']); }

header("Location: ../../index.php?mod={$name}&pg=install");
?>