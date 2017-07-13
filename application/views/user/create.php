<?php $this->load->view("common/head")?>
<?php $this->load->view("common/navbar")?>
<!-- ==============================================
  Custom CSS
  =============================================== -->
  </head>
  <body>
    <div class="container">
      <div class="col-md-1"></div>
      <div class="col-md-8">
        <h1>Create User</h1>
        <form action="<?php echo base_url(); ?>user/store" method="post">
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" required>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <input type="number" class="form-control" name="phone" required>
          </div>
          <input type="submit" class="btn btn-primary" value="Save">
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
