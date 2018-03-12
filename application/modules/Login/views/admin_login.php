<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
    <meta charset="utf-8">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>public/css/simple-sidebar.css" rel="stylesheet">
</head>
<body>
  <h1>Please Login</h1>
	<div class="container">
      <form class="form-signin" method="post" action="<?php echo base_url();?>Login/">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" class="form-control" name="email"  autofocus>
        <?php echo form_error('email'); ?>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" name="pass" >
        <?php echo form_error('pass'); ?>
        <input class="btn btn-success" type="submit" name="login_form" value="Sign in">
      </form>
  </div>

<footer class="fixed-bottom">
      <div class="container">
        <span class="text-muted">&copy;<?php echo date('Y'); ?></span>
      </div>
</footer>
</body>
</html>
