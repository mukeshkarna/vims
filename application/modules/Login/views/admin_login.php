<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
    <meta charset="utf-8">

    <script src="<?php echo base_url(); ?>public/jquery/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>public/css/simple-sidebar.css" rel="stylesheet">
  

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<script src="">
  $(document).ready(function(){
    $(function() {
    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

  });
</script>
    
</head>
<body>
  <a href="<?php echo base_url();?>Webpage/index">Home</a>
 
<!-- 	<div class="container">
      <form class="form-signin" method="post" action="<?php //echo base_url();?>Login/">
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" class="form-control" name="email"  autofocus>
        <?php //echo form_error('email'); ?>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" name="pass" >
        <?php //echo form_error('pass'); ?>
        <input class="btn btn-success" type="submit" name="login_form" value="Sign in">
      </form>
  </div>
<hr> -->
<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login" align="center">
          <div class="panel-heading text-center">
               <h4>Please Login</h4>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form action="<?php echo base_url();?>Login/" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <?php echo form_error('email'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                    <?php echo form_error('pass'); ?>
                  </div>
                  <!-- <div class="form-group text-center">
                    <input type="checkbox" class="" name="remember">
                    <label for="remember"> Remember Me</label>
                  </div> -->
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-md-offset-3">
                        <input type="submit" name="login_form" class="btn btn-default" value="Sign In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="<?php echo base_url(); ?>Login/forgetPassword" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

Page rendered in <strong>{elapsed_time}</strong> seconds.

<footer class="fixed-bottom">
      <div class="container">
        <span class="text-muted">&copy;<?php echo date('Y'); ?></span>
      </div>
</footer>
</body>
</html>
