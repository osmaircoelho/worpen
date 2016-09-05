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
          <h2><?php print $module_text['title']; ?></h2>
        </div>
        <div class="col-md-4">
          <br>
          <p class="text-right">
            <a href="?mod=admin&pg=new_module" class="btn btn-success"><i class="fa fa-plus"></i> &nbsp; <?php print $module_text['new']; ?></a>
          </p>
        </div>
      </div>

      <br>

      <div>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td><strong><?php print $module_text['id']; ?></strong></td>
              <td><strong><?php print $module_text['name']; ?></strong></td>
              <td><strong><?php print $module_text['name_menu']; ?></strong></td>
              <td><strong><?php print $level_text['level']; ?></strong></td>
              <td><strong><?php print $module_text['date_create']; ?></strong></td>
              <td><strong><?php print $module_text['active']; ?></strong></td>
              <td class="text-center"><strong><?php print $module_text['edit']; ?></strong></td>
            </tr>
          </thead>
          <tbody>
            <?php include $PATH['module'].'modules.php'; ?>
          </tbody>
        </table>

      </div>
    </div>

  </div>

</section>