<?php

$results_for_page = 21;

if (!$_GET['search']) { $search_user = ""; } else { $search_user =  $_GET['search']; }
if (!$_GET['page']) { $current_page = 1; } else { $current_page = (int) $_GET['page']; }

# Calculation Pages
$current_page_calc = $current_page - 1;
$number_result_page = $current_page_calc * $results_for_page;

# Count Results
$select_db_count = $connect->prepare("SELECT COUNT(*) FROM worpen_users WHERE (fullname LIKE :search OR username LIKE :search OR date_create LIKE :search) AND plataform LIKE :plataform");
$select_db_count->bindValue(':search', "%{$search_user}%");
$select_db_count->bindValue(':plataform', $_SESSION['user_plataform']);
$select_db_count->execute();
$count_results = $select_db_count->fetchColumn();

$found_message = $search_text['noresult']; 
if ($count_results == 1) {    
  $found_message = $search_text['oneresult'];
} elseif ($count_results > 1) {
  $found_message = $count_results." ".$search_text['results'];
}

# Search the Database
$select_db = $connect->prepare("SELECT * FROM worpen_users WHERE (fullname LIKE :search OR username LIKE :search OR date_create LIKE :search) AND plataform LIKE :plataform ORDER BY id LIMIT {$number_result_page}, {$results_for_page}");
$select_db->bindValue(':search', "%{$search_user}%");
$select_db->bindValue(':plataform', $_SESSION['user_plataform']);
$select_db->execute();

# Displays the results
while ($result = $select_db->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr>
          <td>{$result['fullname']}</td>
          <td>{$result['username']}</td>
          <td>{$result['email']}</td>
          <td>{$result['access_level']}</td>
          <td>{$result['date_create']}</td>
          <td class=\"text-center\">
            <a href=\"?mod=admin&pg=edit_user&id={$result['id']}\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a>
          </td>
        </tr>";
}

echo "</tbody></table></div>";

echo "<p class=\"text-right\">";

# Pagination
$all_pages = $count_results / $results_for_page;
if ($current_page > 1) {
  $back_page = $current_page - 1;
  echo "<a href=\"?mod={$MODULE_GET}&pg={$PAGE_GET}&search={$search_user}&page={$back_page}\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span></a>";
}
if ($count_results > 0) {
  echo "<a href=\"?mod={$MODULE_GET}&pg={$PAGE_GET}&search={$search_user}&page={$current_page}\" class=\"btn btn-default\"> {$current_page} </a>";
}
if ($all_pages > 1) {
  if ($current_page < $all_pages) {
    $next_page = $current_page + 1;
    echo "<a href=\"?mod={$MODULE_GET}&pg={$PAGE_GET}&search={$search_user}&page={$next_page}\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span></a>";
  }
}

echo "</p>";

echo "<p>".$found_message."</p>";
