<!DOCTYPE html>
<html>
  <head>
    <title>LCT Apartment Management System</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="<?php echo base_url();?>favicon.png" rel="shortcut icon">
    <link href="<?php echo base_url();?>apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/main.css?version=4.4.0" rel="stylesheet">
  </head>
  <body class="auth-wrapper">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo">
          <?php
            if(isset($logout_message)){
              echo "<div class='message'>";
              echo $logout_message;
              echo "</div>";
            }
          ?>
            <?php
            if (isset($message_display)){
              echo "<div class='message'>";
              echo $message_display;
              echo "</div>";
            }
          ?>
          <!-- <a href="index.html"><img alt="" src="img/logo-big.png"></a> -->
        </div>
        <h4 class="auth-header" style="margin-top: 2px;">
          Login to proceed...
        </h4>
        <form method="post" action="<?php echo base_url('index.php/User_authentication/user_login_process');?>">
          <div class="form-group">
            <label for="">Email address</label>
            <?php 
              if (isset($error_message)) {?>
                <h4 style="text-align: center; font-size: 18px; color: red;">
                  <?php
                    echo "<br>".$error_message;}
                  // echo validation_errors();
                  ?>
                </h4>
                
            <input class="form-control" placeholder="Enter your email address" type="text" name="username">
            <div class="pre-icon os-icon os-icon-email-2-at2"></div>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" placeholder="Enter your password" type="password" name="password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w">
            <button class="btn btn-primary">Log me in</button>
            <div class="form-check-inline">
              <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember Me</label>
            </div>
          </div>
          <div class="buttons-w">
            <div class="form-check-inline">
              <label class="form-check-label">
                <a href="<?php echo base_url('index.php/User_authentication/user_registration_show');?>">I don't have an account</a>
              </label>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
