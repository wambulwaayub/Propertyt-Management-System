          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Proprietor</a>
            </li>
            <li class="breadcrumb-item">
              <span>My Account</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          <div class="content-i">
            <div class="content-box"><div class="row">
  <div class="col-sm-5">
    <div class="user-profile compact">
      <div class="up-head-w" style="background-image:url(img/profile_bg1.jpg)">
<!--         <div class="up-social">
          <a href="#"><i class="os-icon os-icon-twitter"></i></a><a href="#"><i class="os-icon os-icon-facebook"></i></a>
        </div> -->
        <div class="up-main-info">
          <h2 class="up-header">
            <?php echo $this->name; ?>
          </h2>
          <?php foreach ($my_profile as $my_profile) {?>
          <h6 class="up-sub-header">
            <?php if ($my_profile->type=="Individual") {
              echo "Sole Proprietor";
              $nid_type="National ID/Huduma Number";
            } 
            else{
              echo "Corporate Proprietor";
              $nid_type="Business Registration Number";
            }?>
          </h6>
        </div>
        <svg class="decor" width="842px" height="219px" viewBox="0 0 842 219" preserveAspectRatio="xMaxYMax meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(-381.000000, -362.000000)" fill="#FFFFFF"><path class="decor-path" d="M1223,362 L1223,581 L381,581 C868.912802,575.666667 1149.57947,502.666667 1223,362 Z"></path></g></svg>
      </div>
      <div class="up-controls">
        <div class="row">
          <div class="col-sm-6">
            <div class="value-pair">
              <div class="label">
                Status:
              </div>
              <div class="value badge badge-pill badge-default badge-lg">
                <?php if ($my_profile->active=="NO") {
                  echo "Pending Activation";
                } 
                else{
                  echo "Active";
                }?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="up-contents">
        <div class="m-b">
          <div class="row m-b">
            <div class="col-sm-6 b-r b-b">
              <div class="el-tablo centered padded-v">
                <div class="value">
                  25
                </div>
                <div class="label">
                  HOUSES
                </div>
              </div>
            </div>
            <div class="col-sm-6 b-b">
              <div class="el-tablo centered padded-v">
                <div class="value">
                  315
                </div>
                <div class="label">
                  RESIDENTS
                </div>
              </div>
            </div>
          </div>
<!--           <div class="padded">
            <div class="os-progress-bar primary">
              <div class="bar-labels">
                <div class="bar-label-left">
                  <span>Profile Completion</span><span class="positive"></span>
                </div>
                <div class="bar-label-right">
                  <span class="info">72/100</span>
                </div>
              </div>
              <div class="bar-level-1" style="width: 100%">
                <div class="bar-level-2" style="width: 80%">
                  <div class="bar-level-3" style="width: 30%"></div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-7">
    <div class="element-wrapper">
      <div class="element-box">        
        <div class="element-info">
          <div class="element-info-with-icon">
            <div class="element-info-icon">
              <div class="os-icon os-icon-wallet-loaded"></div>
            </div>
            <div class="element-info-text">
              <h5 class="element-inner-header">
                Profile Settings
              </h5>
              <div class="element-inner-desc">
                Use Below Part to manage your details in the system
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for=""> Email address</label>
          <input class="form-control" data-error="Your email address is invalid" required="required" type="email" value="<?php echo $this->email;?>" readonly>
          <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
        <div class="form-group">
          <label for=""> Phone Number</label>
          <input class="form-control" data-error="Your email address is invalid" required="required" type="email" value="<?php echo $my_profile->phone;?>" readonly>
          <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
        <div class="form-group">
          <label for=""> KRA PIN</label>
          <input class="form-control" data-error="Your email address is invalid" required="required" type="email" value="<?php echo $my_profile->kra;?>" readonly>
          <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
        <div class="form-group">
          <label for="">
            <?php echo $nid_type; ?>
          </label>
          <input class="form-control" data-error="Your email address is invalid" required="required" type="email" value="<?php echo $my_profile->nid;?>" readonly>
          <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
        <div class="form-group">
          <label for="">
            Member Since...
          </label>
          <input class="form-control" data-error="Your email address is invalid" required="required" type="email" value="<?php echo $my_profile->added_on;?>" readonly>
          <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
<!--  AMENDING DETAILS -->
        <div class="form-group">
          <label for="">
            <h6>
              Amend Your Details<br><small>If you don't want to edit a field, don't type anything in it</small>
            </h6>
          </label>
          <?php if(isset($details_msg)){?>
              <div class="alert alert-success" role="alert">
                <?php echo $details_msg;?>
              </div>
            <?php } ?>
          <div class="help-block form-text with-errors form-control-feedback"></div>
        </div>
        <form id="formValidate" method="post" action="<?php echo base_url('index.php/Proprietor/My_profile');?>">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Alternative Phone Number</label>
              <input class="form-control" data-error="Your phone number is invalid" type="phone" data-minlength="10" placeholder="Alternative phone number" name="alt_phone" value="<?php echo $my_profile->p_alt_phone;?>">
              <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for=""> Postal Address</label>
              <input class="form-control" data-error="Your Postal Address is invalid" type="phone" data-minlength="6" placeholder="Your postal Address" name="postal_address" value="<?php echo $my_profile->p_postal_address;?>">
              <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
          </div><br>
          <div class="col-sm-12">
            <div class="">
              <button class="btn btn-success" type="submit" style="width:100%"> Update Details</button>
            </div>
          </div>
        </div>
      </form><hr>
      <form id="formValidate" method="post" action="<?php echo base_url('index.php/Proprietor/My_profile');?>">
        <?php if(isset($password_msg)){?>
              <div class="alert alert-success" role="alert">
                <?php echo $password_msg;?>
              </div>
            <?php } ?>
        <div class="row" style="margin-top: 5%">
          <div class="col-sm-4">
            <div class="form-group">
              <label for=""> Current Password</label><input class="form-control" placeholder="Password" type="password" name="cur_password">
              <div class="help-block form-text text-muted form-control-feedback">
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for=""> New Password</label><input class="form-control" data-minlength="6" placeholder="New Password" type="password" required="" name="new_password">
              <div class="help-block form-text text-muted form-control-feedback">
                Minimum of 6 characters
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="">Confirm Password</label><input class="form-control" data-match-error="Passwords don't match" placeholder="Confirm Password" type="password" name="new_password_again" required="">
              <div class="help-block form-text with-errors form-control-feedback"></div>
            </div>
          </div><br>
        </div>
        <div class="">
          <button class="btn btn-danger" type="submit" style="width:100%"> Update Password</button>
        </div>
      </form>
      </div>
    <?php } ?>
    </div>
  </div>
</div><!--------------------
              START - Color Scheme Toggler
              -------------------->
              <div class="floated-colors-btn second-floated-btn">
                <div class="os-toggler-w">
                  <div class="os-toggler-i">
                    <div class="os-toggler-pill"></div>
                  </div>
                </div>
                <span>Dark </span><span>Mode</span>
              </div>
              <!--------------------
              END - Color Scheme Toggler
              --------------------><!--------------------
              START - Demo Customizer
              -------------------->
              <!--------------------
              END - Demo Customizer
              --------------------><!--------------------
              START - Chat Popup Box
              -------------------->
              <div class="floated-chat-btn">
                <i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
              </div>
              <div class="floated-chat-w">
                <div class="floated-chat-i">
                  <div class="chat-close">
                    <i class="os-icon os-icon-close"></i>
                  </div>
                  <div class="chat-head">
                    <div class="user-w with-status status-green">
                      <div class="user-avatar-w">
                        <div class="user-avatar">
                          <img alt="" src="img/avatar1.jpg">
                        </div>
                      </div>
                      <div class="user-name">
                        <h6 class="user-title">
                          John Mayers
                        </h6>
                        <div class="user-role">
                          Account Manager
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="chat-messages">
                    <div class="message">
                      <div class="message-content">
                        Hi, how can I help you?
                      </div>
                    </div>
                    <div class="date-break">
                      Mon 10:20am
                    </div>
                    <div class="message">
                      <div class="message-content">
                        Hi, my name is Mike, I will be happy to assist you
                      </div>
                    </div>
                    <div class="message self">
                      <div class="message-content">
                        Hi, I tried ordering this product and it keeps showing me error code.
                      </div>
                    </div>
                  </div>
                  <div class="chat-controls">
                    <input class="message-input" placeholder="Type your message here..." type="text">
                    <div class="chat-extra">
                      <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Chat Popup Box
              -------------------->
            </div>

          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/moment/moment.js"></script>
    <script src="<?php echo base_url();?>bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="<?php echo base_url();?>bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/dropzone/dist/dropzone.js"></script>
    <script src="<?php echo base_url();?>bower_components/editable-table/mindmup-editabletable.js"></script>
    <script src="<?php echo base_url();?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/tether/dist/js/tether.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/slick-carousel/slick/slick.min.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/util.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/button.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="<?php echo base_url();?>bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="<?php echo base_url();?>js/demo_customizer.js?version=4.4.0"></script>
    <script src="<?php echo base_url();?>js/main.js?version=4.4.0"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
