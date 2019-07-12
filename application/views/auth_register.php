<!DOCTYPE html>
<html>
  <head>
    <title>Admin Dashboard HTML Template</title>
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
  <body>
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w wider">
        <div class="logo">
        </div>
        <h4 class="auth-header"><br>
          Individual Registration
        </h4>
        <?php echo form_open('user_authentication/new_user_registration');?>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> First Name</label>
                  <input class="form-control" placeholder="First Name" type="text" name="fname" required="">
                <div class="pre-icon os-icon os-icon-user"></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Last Name</label>
                  <input class="form-control" placeholder="Last Name" type="text" name="lname" required="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for=""> Phone Number</label>
              <input class="form-control" placeholder="Phone Number" type="phone" name="phone" required="">
            <div class="pre-icon os-icon os-icon-phone"></div>
          </div>
          <div class="form-group">
            <label for=""> Email address</label>
              <input class="form-control" placeholder="Enter email" type="email" name="email" required="">
            <div class="pre-icon os-icon os-icon-email-2-at2"></div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> National ID Number</label>
                  <input class="form-control" placeholder="Enter National ID Number" type="text" name="n_id" required="">
                <div class="pre-icon os-icon os-icon-book"></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> KRA PIN Number</label>
                  <input class="form-control" placeholder="Enter National ID Number" type="text" name="kra" required="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> Password</label>
                  <input class="form-control" placeholder="Password" type="password" name="password" required="">
                <div class="pre-icon os-icon os-icon-fingerprint"></div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="">Confirm Password</label>
                  <input class="form-control" placeholder="Password" type="password" name="password1" required="">
              </div>
            </div>
          </div>
          <div class="buttons-w">
            <button class="btn btn-primary" style="">Register Now</button>
          </div>
          <div class="buttons-w">
            <a href="<?php echo base_url('index.php/user_authentication');?>">I have an account. Take me to login</a>
          </div>
        <?php echo from_close();?>
      </div>
    </div>
  </body>
</html>
