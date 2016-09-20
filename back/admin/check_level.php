
<div class="form-group">
  <label for="level"><?= $level_text['level']; ?></label>
  <select class="form-control" name="level" id="level">
    <?php
      $Level_select['1'] = ""; $Level_select['2'] = ""; $Level_select['3'] = ""; $Level_select['4'] = "";
      if (!$edit_level_db['access_level']) {
        $Level_select['4'] = "selected";
      } else {
        $Level_select_number = $edit_level_db['access_level']; 
        $Level_select[$Level_select_number] = "selected";
      }
    ?>
    <option value="1" <?= $Level_select['1']; ?>><?= $level_text['administrator']; ?></option>
    <option value="2" <?= $Level_select['2']; ?>><?= $level_text['manager']; ?></option>
    <option value="3" <?= $Level_select['3']; ?>><?= $level_text['moderator']; ?></option>
    <option value="4" <?= $Level_select['4']; ?>><?= $level_text['user']; ?></option>
  </select>
</div>
