
<div class="form-group">
  <label for="level"><?= $level_text['level']; ?></label>
  <select class="form-control" name="level">
    <?php
      $Leve_select['1'] = ""; $Leve_select['2'] = ""; $Leve_select['3'] = ""; $Leve_select['4'] = "";

      if (isset($edit_level_db['access_level'])) {
        $Leve_select_number = $edit_level_db['access_level']; 
        $Leve_select['{$Leve_select_number}'] = "selected";
      } else {
        $Leve_select['4'] = "selected";
      }
    ?>

    <option value="1" <?= $Leve_select['1']; ?>><?= $level_text['administrator']; ?></option>
    <option value="2" <?= $Leve_select['2']; ?>><?= $level_text['manager']; ?></option>
    <option value="3" <?= $Leve_select['3']; ?>><?= $level_text['moderator']; ?></option>
    <option value="4" <?= $Leve_select['4']; ?>><?= $level_text['user']; ?></option>
  </select>
</div>
