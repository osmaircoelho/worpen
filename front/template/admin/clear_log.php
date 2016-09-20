<script type="text/javascript">
$('#clearlog').on('shown.bs.modal', function () {
  $('#clearlogbtn').focus()
})
</script>

<!-- Modal -->
<div class="modal fade" id="clearlog" tabindex="-1" role="dialog" aria-labelledby="clearlogLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="clearlogLabel"><?= $logs_text['modal_title']; ?></h4>
      </div>
      <div class="modal-body">
        <?= $logs_text['modal_body']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= $logs_text['modal_no']; ?></button>
        <a href="<?= $PATH['module']; ?>clear_log.php" class="btn btn-danger"><?= $logs_text['modal_yes']; ?></a>
      </div>
    </div>
  </div>
</div>