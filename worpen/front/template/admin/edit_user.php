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
          <h2><?php print $users_text['title_edit']; ?></h2>
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
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="<?= $users_text['fullname']; ?>" value="<?= $edit_user_db['fullname']; ?>" required>
        </div>

        <div class="form-group">
          <label for="email"><?= $users_text['email']; ?></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="<?= $users_text['email']; ?>" value="<?= $edit_user_db['email']; ?>" required>
        </div>

        <div class="form-group">
          <label for="username"><?= $users_text['username']; ?></label>
          <input type="text" class="form-control" id="username" name="username" placeholder="<?= $users_text['username']; ?>" value="<?= $edit_user_db['username']; ?>" required>
        </div>

        <div class="form-group">
          <label for="level"><?= $level_text['level']; ?></label>
          <select class="form-control" name="level">
            <option value="<?= $edit_user_db['access_level']; ?>" selected><?= $edit_user_db['access_level']; ?></option>
            <option value="1">1 - <?= $level_text['administrator']; ?></option>
            <option value="2">2 - <?= $level_text['manager']; ?></option>
            <option value="3">3 - <?= $level_text['moderator']; ?></option>
            <option value="4">4 - <?= $level_text['user']; ?></option>
          </select>
        </div>

        <input type="hidden" name="id" value="<?= $id; ?>">

        <?php
          if (!$_GET['m']) { $message = ""; } else { $message = addslashes($_GET['m']); }
          switch ($message) {
            case 'ok_info':
              echo "<p class=\"text-green-3\">{$users_text['user_updated']}</p>";
              break;
            
            case 'error_info':
              echo "<p class=\"text-red-3\">{$users_text['user_updated_error']}</p>";
              break;
            
            default:
              echo "<br>";
              break;
          }
        ?>

        <button type="submit" class="btn btn-success"><?php print $admin_text['save']; ?></button>

      </form>

      <br><hr>

      <form method="post" action="<?php print $PATH['module']; ?>edit_password_user.php">

        <p><small><?= $users_text['info_new_password']; ?></small></p>
        
        <div class="form-group">
          <label for="new_password"><?= $users_text['new_password']; ?></label>
          <input type="password" class="form-control" id="new_password" name="new_password" placeholder="<?= $users_text['new_password']; ?>" required>
        </div>

        <div class="form-group">
          <label for="confirm_new_password"><?= $users_text['confirm_new_password']; ?></label>
          <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder="<?= $users_text['confirm_new_password']; ?>" required>
        </div>

        <br>

        <button type="submit" class="btn btn-success"><?php print $admin_text['save']; ?></button>

      </form>

    </div>

  </div>

</section>