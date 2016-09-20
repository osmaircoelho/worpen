<?php

if (!$_GET['id']) { $id = ""; } else { $id =  addslashes($_GET['id']); }

$select_db = $connect->prepare("SELECT * FROM worpen_menu WHERE id LIKE :id AND plataform LIKE :plataform LIMIT 1");
$select_db->bindValue(':id', $id);
$select_db->bindValue(':plataform', $INFO_USER['plataform']);
$select_db->execute();

while ($result = $select_db->fetch(PDO::FETCH_ASSOC)) {
  $edit_menu_db['name_menu'] = $result['name_menu'];
  $edit_menu_db['url'] = $result['url'];
  $edit_menu_db['display'] = $result['display'];
  $edit_menu_db['badge'] = $result['badge'];
  $edit_menu_db['active'] = $result['active'];
  $edit_level_db['access_level'] = $result['access_level'];
}