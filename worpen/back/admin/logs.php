<?php

$results_for_page = 21;

if (!$_GET['search']) { $search_user = ""; } else { $search_user =  $_GET['search']; }
if (!$_GET['page']) { $current_page = 1; } else { $current_page = (int) $_GET['page']; }

# Calculation Pages
$current_page_calc = $current_page - 1;
$number_result_page = $current_page_calc * $results_for_page;

# Count Results
$select_db_count = $connect->prepare("SELECT COUNT(*) FROM worpen_log WHERE user LIKE :search OR date_access LIKE :search OR ip LIKE :search");
$select_db_count->bindValue(':search', "%{$search_user}%");
$select_db_count->execute();
$count_results = $select_db_count->fetchColumn();

$found_message = $search_text['noresult']; 
if ($count_results == 1) {    
  $found_message = $search_text['oneresult'];
} elseif ($count_results > 1) {
  $found_message = $count_results." ".$search_text['results'];
}

# Search the Database
$select_db = $connect->prepare("SELECT * FROM worpen_log WHERE user LIKE :search OR date_access LIKE :search OR ip LIKE :search ORDER BY id DESC LIMIT {$number_result_page}, {$results_for_page}");
$select_db->bindValue(':search', "%{$search_user}%");
$select_db->execute();

# Displays the results
while ($result = $select_db->fetch(PDO::FETCH_ASSOC)) {
  echo "<tr>
    <td>{$result['id']}</td>
    <td>{$result['user']}</td>
    <td>{$result['date_access']} - {$result['hour_access']}</td>
    <td>{$result['ip']}</td>
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
