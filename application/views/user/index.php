<?php $this->load->view("common/head")?>
<!-- ==============================================
  Custom CSS
  =============================================== -->
  </head>
  <body>
    <?php $this->load->view("common/navbar")?>
    <div class="container">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1>Users</h1>
        <?php $this->load->view("common/message")?>
        <table class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Email</th>
              <th>Phone</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
             <?php foreach($users as $user) { ?>
              <tr>
                <td><?php echo $user->name; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->phone; ?></td>
                <td>
                  <a href="<?php echo base_url(); ?>user/edit/<?php echo $user->id ?>"
                    class="btn btn-primary">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a href="<?php echo base_url(); ?>user/delete/<?php echo $user->id ?>"
                     class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </a>
                </td>
              </tr>
             <?php } ?>
          </tbody>
        </table>
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
