<?php
include $PATH['module']."check_menu.php";
include 'delete_menu.php';
?>

<section>

  <div class="row">

    <div class="col-sm-2">
      <br>
      <a href="?mod=admin" class="btn btn-block btn-transparent"><?= $admin_text['users']; ?></a>
      <a href="?mod=admin&pg=log" class="btn btn-block btn-transparent"><?= $admin_text['records']; ?></a>
      <a href="?mod=admin&pg=modules" class="btn btn-block btn-transparent"><?= $admin_text['modules']; ?></a>
      <a href="?mod=admin&pg=menus" class="btn btn-block btn-blue-3"><?= $admin_text['menus']; ?></a>
      <a href="?mod=admin&pg=info" class="btn btn-block btn-transparent"><?= $admin_text['info']; ?></a>
    </div>

    <div class="col-sm-10">

      <div class="row">
        <div class="col-sm-8">
          <h2><?= $menus_text['title_edit']; ?></h2>
        </div>
        <div class="col-sm-4">
          <br>
          <p class="text-right"><a href="?mod=admin&pg=menus" class="btn btn-warning"><i class="fa fa-arrow-circle-o-left"></i> &nbsp; <?= $admin_text['back']; ?></a></p>
        </div>
      </div>

      <br>

      <form method="post" action="<?= $PATH['module']; ?>edit_menu.php">

        <div class="form-group">
          <label for="name_menu"><?= $menus_text['name_menu']; ?></label>
          <input type="text" class="form-control" id="name_menu" name="name_menu" placeholder="<?= $menus_text['name_menu']; ?>" value="<?= $edit_menu_db['name_menu']; ?>" required>
        </div>

        <div class="form-group">
          <label for="url"><?= $menus_text['url']; ?></label>
          <input type="text" class="form-control" id="url" name="url" placeholder="<?= $menus_text['url']; ?>" value="<?= $edit_menu_db['url']; ?>" required>
        </div>

        <?php include $PATH['module']."check_level.php"; ?>

        <div class="form-group">
          <label for="display"><?= $menus_text['display']; ?></label>
          <select class="form-control" name="display" id="display">
            <?php
              $Menu_display_select['1'] = ""; $Menu_display_select['2'] = "";
              if ($edit_menu_db['display'] == "yes") {
                $Menu_display_select['1'] = "selected";
              } else {
                $Menu_display_select['2'] = "selected";
              }
            ?>
            <option value="yes" <?= $Menu_display_select['1']; ?>><?= $menus_text['yes']; ?></option>
            <option value="no" <?= $Menu_display_select['2']; ?>><?= $menus_text['no']; ?></option>
          </select>
        </div>

        <div class="form-group">
          <label for="badge"><?= $menus_text['badge']; ?></label>
          <input type="text" class="form-control" id="badge" name="badge" placeholder="<?= $menus_text['badge']; ?>" value="<?= $edit_menu_db['badge']; ?>">
        </div>

        <div class="form-group">
          <label for="active"><?= $menus_text['active']; ?></label>
          <select class="form-control" name="active" id="active">
            <?php
              $Menu_active_select['1'] = ""; $Menu_active_select['2'] = "";
              if ($edit_menu_db['active'] == "yes") {
                $Menu_active_select['1'] = "selected";
              } else {
                $Menu_active_select['2'] = "selected";
              }
            ?>
            <option value="yes" <?= $Menu_active_select['1']; ?>><?= $menus_text['yes']; ?></option>
            <option value="no" <?= $Menu_active_select['2']; ?>><?= $menus_text['no']; ?></option>
          </select>
        </div>

        <?php include $PATH['module']."check_level.php"; ?>

        <input type="hidden" name="id" value="<?= $id; ?>">

        <?php
          if (!$_GET['m']) { $message = ""; } else { $message = addslashes($_GET['m']); }
          switch ($message) {
            case 'ok_info':
              echo "<p class=\"text-green-3\">{$menus_text['updated']}</p>";
              break;
            
            case 'error_info':
              echo "<p class=\"text-red-3\">{$menus_text['updated_error']}</p>";
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