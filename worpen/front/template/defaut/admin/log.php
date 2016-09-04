<section>

  <div class="row">

    <div class="col-md-2">
      <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="?mod=admin"><?php print $admin_text['users']; ?></a></li>
        <li role="presentation" class="active"><a href="?mod=admin&pg=log"><?php print $admin_text['records']; ?></a></li>
        <li role="presentation"><a href="?mod=admin&pg=modules"><?php print $admin_text['modules']; ?></a></li>
      </ul>
    </div>

    <div class="col-md-10">

      <div class="row">
        <div class="col-md-8">
          <h2><?php print $log_text['title']; ?></h2>
        </div>
        <div class="col-md-4">
          <br>
          <p class="text-right">
            <a href="?mod=admin" class="btn btn-danger"><i class="fa fa-trash"></i> &nbsp; <?php print $log_text['del']; ?></a>
          </p>
        </div>
      </div>

      <br>

      <div>
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td><strong><?php print $log_text['id']; ?></strong></td>
              <td><strong><?php print $log_text['username']; ?></strong></td>
              <td><strong><?php print $log_text['date']; ?></strong></td>
              <td><strong><?php print $log_text['ip']; ?></strong></td>
            </tr>
          </thead>
          <tbody>
            <?php include $PATH['module'].'logs.php'; ?>

      </div>
    </div>

  </div>

</section>