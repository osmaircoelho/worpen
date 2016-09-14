<?php include $PATH['module']."check_user.php"; ?>

<section>

  <div class="row">

    <div class="col-md-2">
      <br>
      <a href="?mod=admin" class="btn btn-block btn-blue-3"><?php print $admin_text['users']; ?></a>
      <a href="?mod=admin&pg=log" class="btn btn-block btn-transparent"><?php print $admin_text['records']; ?></a>
      <a href="?mod=admin&pg=modules" class="btn btn-block btn-transparent"><?php print $admin_text['modules']; ?></a>
      <a href="?mod=admin&pg=info" class="btn btn-block btn-transparent"><?php print $admin_text['info']; ?></a>
    </div>

    <div class="col-md-10">

      <div class="row">
        <div class="col-md-8">
          <h2><?php print $users_text['title']; ?></h2>
        </div>
        <div class="col-md-4">
          <br>
          <p class="text-right"><a href="?mod=admin" class="btn btn-warning"><i class="fa fa-arrow-circle-o-left"></i> &nbsp; <?php print $admin_text['back']; ?></a></p>
        </div>
      </div>

      <br>

      <form method="post" action="<?php print $PATH['module']; ?>edit_user.php">

        <div class="form-group">
          <label for="fullname"><?= $users_text['fullname']; ?></label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="<?= $users_text['fullname']; ?>" value="<?= $edit_db['fullname']; ?>" required>
        </div>

        <div class="form-group">
          <label for="email"><?= $users_text['email']; ?></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="<?= $users_text['email']; ?>" value="<?= $edit_db['email']; ?>" required>
        </div>

        <div class="form-group">
          <label for="username"><?= $users_text['username']; ?></label>
          <input type="text" class="form-control" id="username" name="username" placeholder="<?= $users_text['username']; ?>" value="<?= $edit_db['username']; ?>" required>
        </div>

        <div class="form-group">
          <label for="new_password"><?= $users_text['new_password']; ?></label>
          <input type="new_password" class="form-control" id="new_password" name="new_password" placeholder="<?= $users_text['new_password']; ?>" value="<?= $edit_db['new_password']; ?>" required>
        </div>

        <div class="form-group">
          <label for="confirm_new_password"><?= $users_text['confirm_new_password']; ?></label>
          <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="<?= $users_text['confirm_new_password']; ?>" value="<?= $edit_db['confirm_new_password']; ?>" required>
        </div>

        <div class="form-group">
          <label for="level"><?= $level_text['level']; ?></label>
          <select class="form-control" name="level">
            <option value="<?= $edit_db['access_level']; ?>" selected><?= $edit_db['access_level']; ?></option>
            <option value="1">1 - <?= $level_text['administrator']; ?></option>
            <option value="2">2 - <?= $level_text['manager']; ?></option>
            <option value="3">3 - <?= $level_text['moderator']; ?></option>
            <option value="4">4 - <?= $level_text['user']; ?></option>
          </select>
        </div>

        <br>

        <button type="submit" class="btn btn-success"><?php print $admin_text['save']; ?></button>

      </form>

    </div>

  </div>

</section>