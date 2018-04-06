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
<?php
//if()
?>

<div class="container">
  <div class="jumbotron">
    <div class="col-md-6 col-md-offset-5">
      <div class="panel-heading text-center">
        <h4>Please Enter Email Address</h4>
        <hr>
      </div>
      <div class="form-control">
        <form action="<?php echo base_url();?>Login/forgetPassProcess" method="post">
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <?php echo form_error('email'); ?>
          </div>
          <div class="form-group">
            <div class="col-sm-6 col-md-offset-5">
              <input type="submit" name="forget_pass" class="btn btn-default" value="Submit">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<footer class="fixed-bottom text-center">
  <div class="container">
    <span class="text-muted">&copy;<?php echo date('Y'); ?> Page rendered in <strong>{elapsed_time}</strong> seconds.</span>
  </div>
</footer>
</body>
</html>