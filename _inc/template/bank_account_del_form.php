<h4 class="text-center">
  <?php echo trans('text_are_you_sure'); ?>
</h4>
<form class="form-horizontal" id="account-del-form" action="bank_account.php" method="post">
  <input type="hidden" id="action_type" name="action_type" value="DELETE">
  <input type="hidden" id="id" name="id" value="<?php echo $account['id']; ?>">
  <div class="box-body">
    <div class="form-group">
      <div class="col-sm-12 text-center">
        <button id="account-delete" data-form="#account-del-form" data-datatable="#account-list" class="btn btn-danger" name="btn_edit_box" data-loading-text="Deleting...">
          <span class="fa fa-fw fa-trash"></span>
          <?php echo trans('button_delete'); ?>
        </button>
      </div>
    </div>
  </div>
</form>