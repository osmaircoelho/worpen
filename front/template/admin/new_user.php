<script type="text/javascript">
$('#new').on('shown.bs.modal', function () {
  $('#newbtn').focus()
})
</script>

<!-- Modal -->
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="newLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <form method="post" action="<?= $PATH['module']; ?>new_user.php">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="newLabel"><?= $users_text['title_new']; ?></h4>
        </div>

        <div class="modal-body">

          <div class="form-group">
            <label for="fullname"><?= $users_text['fullname']; ?></label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="<?= $users_text['fullname']; ?>" required>
          </div>

          <div class="form-group">
            <label for="email"><?= $users_text['email']; ?></label>
            <input type="email" class="form-control" id="email" name="email" placeholder="<?= $users_text['email']; ?>" required>
          </div>

          <div class="form-group">
            <label for="username"><?= $users_text['username']; ?></label>
            <input type="text" class="form-control" id="username" name="username" placeholder="<?= $users_text['username']; ?>" required>
          </div>

          <div class="form-group">
            <label for="password"><?= $users_text['password']; ?></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="<?= $users_text['password']; ?>" required>
          </div>

          <div class="form-group">
            <label for="confirmpassword"><?= $users_text['confirmpassword']; ?></label>
            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="<?= $users_text['confirmpassword']; ?>" required>
          </div>

          <?php include $PATH['module']."check_level.php"; ?>

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