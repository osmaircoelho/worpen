<section>

  <div class="row">

    <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked">
        <li role="presentation" class="active"><a href="?mod=admin"><?php print $admin_text['users']; ?></a></li>
        <li role="presentation"><a href="?mod=admin&pg=log"><?php print $admin_text['records']; ?></a></li>
        <li role="presentation"><a href="?mod=admin&pg=modules"><?php print $admin_text['modules']; ?></a></li>
      </ul>
    </div>

    <div class="col-md-10">

      <div class="row">
        <div class="col-md-8">
          <h2><?php print $new_users_text['title']; ?></h2>
        </div>
        <div class="col-md-4">
          <br>
          <p class="text-right"><a href="?mod=admin" class="btn btn-warning"><i class="fa fa-arrow-circle-o-left"></i> &nbsp; <?php print $admin_text['back']; ?></a></p>
        </div>
      </div>

      <br>

      <form method="post" action="<?php print $PATH['module']; ?>new_user.php">

        <div class="form-group">
          <label for="fullname"><?php print $users_text['fullname']; ?></label>
          <input type="text" class="form-control" id="fullname" name="fullname" placeholder="<?php print $users_text['fullname']; ?>" required>
        </div>

        <div class="form-group">
          <label for="email"><?php print $users_text['email']; ?></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="<?php print $users_text['email']; ?>" required>
        </div>

        <div class="form-group">
          <label for="username"><?php print $users_text['username']; ?></label>
          <input type="text" class="form-control" id="username" name="username" placeholder="<?php print $users_text['username']; ?>" required>
        </div>

        <div class="form-group">
          <label for="password"><?php print $users_text['password']; ?></label>
          <input type="password" class="form-control" id="password" name="password" placeholder="<?php print $users_text['password']; ?>" required>
        </div>

        <div class="form-group">
          <label for="confirmpassword"><?php print $users_text['confirmpassword']; ?></label>
          <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="<?php print $users_text['confirmpassword']; ?>" required>
        </div>

        <div class="form-group">
          <label for="level"><?php print $level_text['level']; ?></label>
          <select class="form-control" name="level">
            <option value="1">1 - <?php print $level_text['administrator']; ?></option>
            <option value="2">2 - <?php print $level_text['manager']; ?></option>
            <option value="3">3 - <?php print $level_text['moderator']; ?></option>
            <option value="4" selected>4 - <?php print $level_text['user']; ?></option>
          </select>
        </div>

        <br>

        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> &nbsp; <?php print $admin_text['save']; ?></button>

      </form>

    </div>

  </div>

</section>