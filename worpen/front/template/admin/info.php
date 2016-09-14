<section>

  <div class="row">

    <div class="col-md-2">
      <br>
      <a href="?mod=admin" class="btn btn-block btn-transparent"><?= $admin_text['users']; ?></a>
      <a href="?mod=admin&pg=log" class="btn btn-block btn-transparent"><?= $admin_text['records']; ?></a>
      <a href="?mod=admin&pg=modules" class="btn btn-block btn-transparent"><?= $admin_text['modules']; ?></a>
      <a href="?mod=admin&pg=menus" class="btn btn-block btn-transparent"><?= $admin_text['menus']; ?></a>
      <a href="?mod=admin&pg=info" class="btn btn-block btn-blue-3"><?= $admin_text['info']; ?></a>
    </div>

    <div class="col-md-10">

      <div class="row">
        <div class="col-md-12">
          <h2><?= $info_text['title']; ?></h2>
        </div>
      </div>

      <br>

      <form method="post" action="<?= $PATH['module']; ?>edit.php">

        <div class="form-group">
          <label for="sitename"><?= $info_text['sitename']; ?></label>
          <input type="text" class="form-control" id="sitename" name="sitename" value="<?= $INFO['sitename']; ?>" required>
        </div>

        <div class="form-group">
          <label for="language"><?= $info_text['language']; ?></label>
          <input type="text" class="form-control" id="language" name="language" value="<?= $INFO['language']; ?>" required>
        </div>

        <div class="form-group">
          <label for="modstart"><?= $info_text['modstart']; ?></label>
          <input type="text" class="form-control" id="modstart" name="modstart" value="<?= $INFO['modstart']; ?>" required>
        </div>

        <hr>

        <div class="form-group">
          <label for="server_mail"><?= $info_text['server_mail']; ?></label>
          <input type="text" class="form-control" id="server_mail" name="server_mail" value="<?= $INFO_MAIL['server']; ?>" required>
        </div>

        <div class="form-group">
          <label for="port_mail"><?= $info_text['port_mail']; ?></label>
          <input type="text" class="form-control" id="port_mail" name="port_mail" value="<?= $INFO_MAIL['port']; ?>" required>
        </div>

        <div class="form-group">
          <label for="user_mail"><?= $info_text['user_mail']; ?></label>
          <input type="text" class="form-control" id="user_mail" name="user_mail" value="<?= $INFO_MAIL['user']; ?>" required>
        </div>

        <div class="form-group">
          <label for="password_mail"><?= $info_text['password_mail']; ?></label>
          <input type="password" class="form-control" id="password_mail" name="password_mail" value="<?= $INFO_MAIL['password']; ?>" required>
        </div>

        <button type="submit" class="btn btn-success"><?= $admin_text['save']; ?></button>

      </form>

    </div>

  </div>

</section>