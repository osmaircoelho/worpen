<section>

  <div class="row">

    <div class="col-md-2">
      <br>
      <a href="?mod=admin" class="btn btn-block btn-transparent"><?php print $admin_text['users']; ?></a>
      <a href="?mod=admin&pg=log" class="btn btn-block btn-transparent"><?php print $admin_text['records']; ?></a>
      <a href="?mod=admin&pg=modules" class="btn btn-block btn-blue-3"><?php print $admin_text['modules']; ?></a>
      <a href="?mod=admin&pg=info" class="btn btn-block btn-transparent"><?php print $admin_text['info']; ?></a>
    </div>

    <div class="col-md-10">

      <div class="row">
        <div class="col-md-8">
          <h2><?php print $new_module_text['title']; ?></h2>
        </div>
        <div class="col-md-4">
          <br>
          <p class="text-right"><a href="?mod=admin" class="btn btn-warning"><i class="fa fa-arrow-circle-o-left"></i> &nbsp; <?php print $admin_text['back']; ?></a></p>
        </div>
      </div>

      <br>

      <form method="post" action="<?php print $PATH['module']; ?>new_user.php">

        <div class="form-group">
          <label for="name"><?php print $module_text['name']; ?></label>
          <input type="text" class="form-control" id="name" name="name" placeholder="<?php print $module_text['name']; ?>" required>
        </div>

        <div class="form-group">
          <label for="url"><?php print $module_text['url']; ?></label>
          <input type="text" class="form-control" id="url" name="url" placeholder="<?php print $module_text['url']; ?>" required>
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

        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-disk" aria-hidden="true"></span> &nbsp; <?php print $admin_text['save']; ?></button>

      </form>

    </div>

  </div>

</section>