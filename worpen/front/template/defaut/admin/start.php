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
          <p class="text-right">
            <a href="?mod=admin&pg=new_user" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; <?php print $users_text['new']; ?></a>
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
              <input type="text" class="form-control" name="search" placeholder="<?php print $users_text['input_search']; ?>">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><?php print $users_text['button_search']; ?></button>
              </span>
            </div>
          </form>
        </div>

        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td><strong><?php print $users_text['id']; ?></strong></td>
              <td><strong><?php print $users_text['fullname']; ?></strong></td>
              <td><strong><?php print $users_text['username']; ?></strong></td>
              <td><strong><?php print $level_text['level']; ?></strong></td>
              <td><strong><?php print $users_text['date_create']; ?></strong></td>
              <td class="text-center"><strong><?php print $admin_text['edit']; ?></strong></td>
            </tr>
          </thead>
          <tbody>
            <?php include $PATH['module'].'users.php'; ?>


    </div>

  </div>

</section>