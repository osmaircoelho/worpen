<section>

  <div class="row">

    <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="?mod=admin"><?php print $admin_text['users']; ?></a></li>
        <li role="presentation"><a href="?mod=admin&pg=log"><?php print $admin_text['records']; ?></a></li>
        <li role="presentation" class="active"><a href="?mod=admin&pg=modules"><?php print $admin_text['modules']; ?></a></li>
      </ul>
    </div>

    <div class="col-md-10">

      <div class="row">
        <div class="col-md-8">
          <h2><?php print $new_module_text['title']; ?></h2>
        </div>
        <div class="col-md-4">
          <br>
          <p class="text-right"><a href="?mod=admin?pg=modules" class="btn btn-warning"><i class="fa fa-arrow-circle-o-left"></i> &nbsp; <?php print $admin_text['back']; ?></a></p>
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
          <label for="name_menu"><?php print $module_text['name_menu']; ?></label>
          <input type="text" class="form-control" id="name_menu" name="name_menu" placeholder="<?php print $module_text['name_menu']; ?>" required>
        </div>

        <div class="form-group">
          <label for="level"><?php print $level_text['level']; ?></label>
          <select class="form-control" id="level" name="level">
            <option value="1">1 - <?php print $level_text['administrator']; ?></option>
            <option value="2">2 - <?php print $level_text['manager']; ?></option>
            <option value="3">3 - <?php print $level_text['moderator']; ?></option>
            <option value="4" selected>4 - <?php print $level_text['user']; ?></option>
          </select>
        </div>

        <div class="form-group">
          <label for="active"><?php print $module_text['active']; ?></label>
          <select class="form-control" id="active" name="active">
            <option value="yes">Yes</option>
            <option value="no">No</option>
          </select>
        </div>

        <br>

        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> &nbsp; <?php print $admin_text['save']; ?></button>

      </form>

    </div>

  </div>

</section>