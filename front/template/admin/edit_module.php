<?php
include $PATH['module']."check_module.php";
include 'delete_module.php';
?>


<section>

  <div class="row">

    <div class="col-sm-2">
      <br>
      <a href="?mod=admin" class="btn btn-block btn-transparent"><?= $admin_text['users']; ?></a>
      <a href="?mod=admin&pg=log" class="btn btn-block btn-transparent"><?= $admin_text['records']; ?></a>
      <a href="?mod=admin&pg=modules" class="btn btn-block btn-blue-3"><?= $admin_text['modules']; ?></a>
      <a href="?mod=admin&pg=menus" class="btn btn-block btn-transparent"><?= $admin_text['menus']; ?></a>
      <a href="?mod=admin&pg=info" class="btn btn-block btn-transparent"><?= $admin_text['info']; ?></a>
    </div>

    <div class="col-sm-10">

      <div class="row">
        <div class="col-sm-8">
          <h2><?= $modules_text['title_edit']; ?></h2>
        </div>
        <div class="col-sm-4">
          <br>
          <p class="text-right"><a href="?mod=admin&pg=modules" class="btn btn-warning"><i class="fa fa-arrow-circle-o-left"></i> &nbsp; <?= $admin_text['back']; ?></a></p>
        </div>
      </div>

      <br>

      <form method="post" action="<?= $PATH['module']; ?>edit_module.php">

        <div class="form-group">
          <label for="name"><?= $modules_text['name']; ?></label>
          <input type="text" class="form-control" id="name" name="name" placeholder="<?= $modules_text['name']; ?>" value="<?= $edit_module_db['name']; ?>" required>
        </div>

        <div class="form-group">
          <label for="url"><?= $modules_text['url']; ?></label>
          <input type="text" class="form-control" id="url" name="url" placeholder="<?= $modules_text['url']; ?>" value="<?= $edit_module_db['url']; ?>" required>
        </div>

        <div class="form-group">
          <label for="active"><?= $modules_text['active']; ?></label>
          <select class="form-control" name="active" id="active">
            <?php
              $Module_active_select['1'] = ""; $Module_active_select['2'] = "";
              if ($edit_module_db['active'] == "yes") {
                $Module_active_select['1'] = "selected";
              } else {
                $Module_active_select['2'] = "selected";
              }
            ?>
            <option value="yes" <?= $Module_active_select['1']; ?>><?= $modules_text['yes']; ?></option>
            <option value="no" <?= $Module_active_select['2']; ?>><?= $modules_text['no']; ?></option>
          </select>
        </div>

        <?php include $PATH['module']."check_level.php"; ?>

        <input type="hidden" name="id" value="<?= $id; ?>">

        <?php
          if (!$_GET['m']) { $message = ""; } else { $message = addslashes($_GET['m']); }
          switch ($message) {
            case 'ok_info':
              echo "<p class=\"text-green-3\">{$modules_text['updated']}</p>";
              break;
            
            case 'error_info':
              echo "<p class=\"text-red-3\">{$modules_text['updated_error']}</p>";
              break;
            
            default:
              echo "<br>";
              break;
          }
        ?>

        <button type="submit" class="btn btn-success"><?= $admin_text['save']; ?></button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete" id="#deletebtn">
          <?= $admin_text['delete']; ?>
        </button>

      </form>

    </div>

  </div>

</section>