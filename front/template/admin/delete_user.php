<script type="text/javascript">
$('#delete').on('shown.bs.modal', function () {
  $('#deletebtn').focus()
})
</script>

<!-- Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="deleteLabel"><?= $users_text['modal_title']; ?></h4>
      </div>
      <div class="modal-body">
        <?= $users_text['modal_body']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"><?= $users_text['modal_no']; ?></button>
        <a href="<?= $PATH['module']; ?>delete_user.php?id=<?= $id; ?>" class="btn btn-danger"><?= $users_text['modal_yes']; ?></a>
      </div>
    </div>
  </div>
</div>