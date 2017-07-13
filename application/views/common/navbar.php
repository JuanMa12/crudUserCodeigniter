<!-- navbar -->
<nav class="navbar navbar-default">
<div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <?php echo APP_NAME ?>
    </a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li><a class="active" href="<?php echo base_url(); ?>">USERS</a></li>
      <li><a href="<?php echo base_url(); ?>user/create">CREATE USER</a></li>
    </ul>
  </div>
</div>
</nav>
<!-- end navbar -->
