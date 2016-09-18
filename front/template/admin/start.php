<?php include 'new_user.php'; ?>

<section>

  <div class="row">

    <div class="col-sm-2">
      <br>
      <a href="?mod=admin" class="btn btn-block btn-blue-3"><?= $admin_text['users']; ?></a>
      <a href="?mod=admin&pg=log" class="btn btn-block btn-transparent"><?= $admin_text['records']; ?></a>
      <a href="?mod=admin&pg=modules" class="btn btn-block btn-transparent"><?= $admin_text['modules']; ?></a>
      <a href="?mod=admin&pg=menus" class="btn btn-block btn-transparent"><?= $admin_text['menus']; ?></a>
      <a href="?mod=admin&pg=info" class="btn btn-block btn-transparent"><?= $admin_text['info']; ?></a>
    </div>

    <div class="col-sm-10">

      <div class="row">
        <div class="col-sm-8">
          <h2><?= $users_text['title']; ?></h2>
        </div>
        <div class="col-sm-4">
          <br>
          <p class="text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#new" id="#newbtn">
              <?= $users_text['new']; ?>
            </button>
          </p>
        </div>
      </div>

      <br>

      <div class="panel panel-default">

        <div class="panel-heading">
          <form class="form-group" action="index.php" method="get">
            <div class="input-group">
              <input type="hidden" name="mod" value="admin">
              <!-- <input type="hidden" name="pg" value="log"> -->
              <input type="text" class="form-control" name="search" placeholder="<?= $users_text['input_search']; ?>">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><?= $users_text['button_search']; ?></button>
              </span>
            </div>
          </form>
        </div>

        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td><strong><?= $users_text['fullname']; ?></strong></td>
              <td><strong><?= $users_text['username']; ?></strong></td>
              <td><strong><?= $users_text['email']; ?></strong></td>
              <td><strong><?= $level_text['level']; ?></strong></td>
              <td><strong><?= $users_text['date_create']; ?></strong></td>
              <td class="text-center"><strong><?= $admin_text['edit']; ?></strong></td>
            </tr>
          </thead>
          <tbody>
            <?php include $PATH['module'].'users.php'; ?>


    </div>

  </div>

</section>