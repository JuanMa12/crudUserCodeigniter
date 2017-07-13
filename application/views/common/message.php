<!-- message -->
<?php
if($this->session->flashdata('success_msg') != null){
   ?>
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"
      aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Success!</strong>
      <?php echo $this->session->flashdata('success_msg') ?>
    </div>
<?php } else {
  if($this->session->flashdata('error_msg') != null){ ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"
      aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <strong>Danger!</strong>
      <?php echo $this->session->flashdata('error_msg') ?>
    </div>
  <?php }
} ?>

<!--message -->
