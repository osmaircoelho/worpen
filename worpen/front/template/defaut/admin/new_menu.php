<script type="text/javascript">
$('#new').on('shown.bs.modal', function () {
  $('#newbtn').focus()
})
</script>

<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="newLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="post" action="<?= $PATH['module']; ?>new_menu.php">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="newLabel"><?= $menus_text['title_new']; ?></h4>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label for="name_menu"><?= $menus_text['name_menu']; ?></label>
            <input type="text" class="form-control" id="name_menu" name="name_menu" placeholder="<?= $menus_text['name_menu']; ?>" required>
          </div>

          <div class="form-group">
            <label for="url"><?= $menus_text['url']; ?></label>
            <input type="text" class="form-control" id="url" name="url" placeholder="<?= $menus_text['url']; ?>" required>
          </div>

          <div class="form-group">
            <label for="level"><?= $level_text['level']; ?></label>
            <select class="form-control" name="level">
              <option value="1">1 - <?= $level_text['administrator']; ?></option>
              <option value="2">2 - <?= $level_text['manager']; ?></option>
              <option value="3">3 - <?= $level_text['moderator']; ?></option>
              <option value="4" selected>4 - <?= $level_text['user']; ?></option>
            </select>
          </div>

          <div class="form-group">
            <label for="show"><?= $menus_text['show']; ?></label>
            <select class="form-control" name="show">
              <option value="yes"><?= $menus_text['yes']; ?></option>
              <option value="no"><?= $menus_text['no']; ?></option>
            </select>
          </div>

          <div class="form-group">
            <label for="badge"><?= $menus_text['badge']; ?></label>
            <input type="text" class="form-control" id="badge" name="badge" placeholder="<?= $menus_text['badge']; ?>" required>
          </div>

          <div class="form-group">
            <label for="active"><?= $menus_text['active']; ?></label>
            <select class="form-control" name="active">
              <option value="yes"><?= $menus_text['yes']; ?></option>
              <option value="no"><?= $menus_text['no']; ?></option>
            </select>
          </div>

          <br>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?= $admin_text['cancel']; ?></button>
          <button type="submit" class="btn btn-success"><?= $admin_text['save']; ?></button>
        </div>

      </form>

    </div>
  </div>
</div>
