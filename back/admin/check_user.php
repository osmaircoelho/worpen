<?php

if (!$_GET['id']) { $id = ""; } else { $id =  addslashes($_GET['id']); }

$select_db = $connect->prepare("SELECT * FROM worpen_users WHERE id LIKE :id AND plataform LIKE :plataform LIMIT 1");
$select_db->bindValue(':id', $id);
$select_db->bindValue(':plataform', $_SESSION['user_plataform']);
$select_db->execute();

while ($result = $select_db->fetch(PDO::FETCH_ASSOC)) {
  $edit_user_db['fullname'] = $result['fullname'];
  $edit_user_db['email'] = $result['email'];
  $edit_user_db['username'] = $result['username'];
  $edit_user_db['date_create'] = $result['date_create'];
  $edit_user_db['access_level'] = $result['access_level'];
}
