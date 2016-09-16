<script type="text/javascript">
$('#new').on('shown.bs.modal', function () {
  $('#newbtn').focus()
})
</script>

<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="newLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="post" action="<?= $PATH['module']; ?>new_module.php">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="newLabel"><?= $module_text['title_new']; ?></h4>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label for="name"><?= $module_text['name']; ?></label>
            <input type="text" class="form-control" id="name" name="name" placeholder="<?= $module_text['name']; ?>" required>
          </div>
          <p><small><?= $module_text['instructions']; ?></small></p>

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