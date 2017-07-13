<?php $this->load->view("common/head")?>
<?php $this->load->view("common/navbar")?>
<!-- ==============================================
  Custom CSS
  =============================================== -->
  </head>
  <body>
    <div class="container">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1>Edit User</h1>
        <form class="" action="<?php echo base_url(); ?>user/update" method="post">
          <div class="form-group">
            <label for="">Name</label>
            <input value="<?php echo $user->id; ?>" type="hidden" class="form-control" name="user_id">
            <input value="<?php echo $user->name; ?>" type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input value="<?php echo $user->email; ?>" type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <input value="<?php echo $user->phone; ?>" type="number" class="form-control" name="phone">
          </div>
          <input type="submit" class="btn btn-primary" value="Update">
        </form>
      </div>
      <div class="col-md-1"></div>
    </div>
  </body>
<!-- ==============================================
SCRIPTS
=============================================== -->
<?php $this->load->view("common/js")?>

</script>
</html>
