<?php

if (!$_GET['id']) { $id = ""; } else { $id =  addslashes($_GET['id']); }

# Search the Database
$select_db = $connect->prepare("SELECT * FROM worpen_users WHERE id LIKE :id LIMIT 1");
$select_db->bindValue(':id', $id);
$select_db->execute();

# Displays the results
while ($result = $select_db->fetch(PDO::FETCH_ASSOC)) {
  $edit_db['fullname'] = $result['fullname'];
  $edit_db['email'] = $result['email'];
  $edit_db['username'] = $result['username'];
  $edit_db['date_create'] = $result['date_create'];
  $edit_db['access_level'] = $result['access_level'];
}
