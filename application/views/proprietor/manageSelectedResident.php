          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="index.html">Residents</a>
            </li>
            <li class="breadcrumb-item">
              <span>Manage Resident</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          <div class="content-i">
            <div class="content-box"><div class="element-wrapper">
    <div class="element-box">
      <div class="steps-w">
        <div class="step-triggers">
          <a class="step-trigger active" href="#stepContent1">Resident Details</a><a class="step-trigger" href="#stepContent2">House Details</a><a class="step-trigger" href="#stepContent3">Payment History</a>
        </div>
        <div class="step-contents">
          <!-- 
          START OF RESIDENT DETAILS 
          -->
          <?php foreach ($res_det as $res_det){?>
          <div class="step-content active" id="stepContent1">
            <div class="row" style="color: #fff;">
              <div class="col-sm-3">
                <div class="form-group">
                  <a class="btn btn-primary" data-target="#sendSMS" data-toggle="modal">SEND SMS</a>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <a class="btn btn-primary" data-target="#sendEMAIL" data-toggle="modal">SEND EMAIL</a>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                </div>
              </div>

            </div>
            <!-- <div class="row"> -->
            <form method="post" action="<?php echo base_url('index.php/Proprietor/manageResidents');?>">
              <div class="col-sm-12">
                <div class="form-group">
                    <label for=""> Name </label>
                    <input class="form-control" type="text" value="<?php echo $res_det->res_f_name." ".$res_det->res_l_name;?>" name="res_f_name">
                    <input value="" name="res_l_name" hidden="">
                    <input value="basic_part" name="basic_part" hidden="">
                </div>
              </div>
            <!-- </div> -->
            <!-- <div class="row"> -->
              <div class="col-sm-12">
                <div class="form-group">
                  <label for=""> Phone Number</label><input class="form-control" type="text" value="<?php echo $res_det->res_phone;?>" name="res_phone">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="">Email Address</label>
                  <input class="form-control" type="text" value="<?php echo $res_det->res_email; ?>" name="res_email">
                  <input class="form-control" name="man_res_email" value="<?php echo $res_det->res_n_id; ?>" hidden>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label for=""><?php if ($res_det->res_type=="Company"){
                    echo "Registration Number";
                  } else{
                    echo "National ID/Huduma Number";
                  } ?></label><input class="form-control" placeholder="" type="text" readonly="" value="<?php echo $res_det->res_n_id; ?>">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <button class="btn btn-primary float-right">Update Basic Details</button>
                </div>
              </div><br><hr>
            </form>
              

          <!-- NEXT OF KIN -->
          <form method="post" action="<?php echo base_url('index.php/Proprietor/manageResidents');?>">
            <?php if ($res_det->res_type=="Individual"){?>              
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group"><hr><br>
                    <label for=""><strong> Next of Kin Details</strong></label><hr>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input class="form-control" name="res_nok_name" placeholder="" type="text" value="<?php echo $res_det->res_nok_name; ?>">
                    <input name="man_res_email" hidden="" value="<?php echo $res_det->res_n_id; ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="">Phone</label><input class="form-control" name="res_nok_phone" placeholder="" type="text" value="<?php echo $res_det->res_nok_phone; ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="">Relationship</label>
                    <input class="form-control" name="res_nok_relationship" placeholder="" type="text" list="rlshp" value="<?php echo $res_det->res_nok_relationship; ?>">
                    <input value="nok_part" name="nok_part" hidden="">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group"><br>
                    <button class="btn btn-danger">Update Next of Kin</button>
                  </div>
                </div>
              </div>
              <datalist id="rlshp">
                <option value="Brother">
                <option value="Sister">
                <option value="Parent">
              </datalist>
            </form>
            <?php } ?>
          <!-- //NEXT OF KIN -->
            <!-- </div> -->
          <form method="post" action="<?php echo base_url('index.php/Proprietor/manageResidents');?>">
            <div class="row">
                <div class="col-sm-12">
                  <div class="form-group"><hr><br>
                    <label for=""><strong> Manage Resident Status</strong></label><hr>
                  </div>
                </div>
              </div>
            <div class="row" style="margin-left: 0.7%">
              <div class="col-sm-3">
                <div class="form-group">
                  <input name="man_res_email" hidden="" value="<?php echo $res_det->res_n_id; ?>">
                  <label for=""> Current Status <strong><?php echo $res_det->res_status;?></strong><?php if (!empty($res_det->reason)) {?>
                      <hr><strong>Reason:</strong><?php echo $res_det->reason;?>
                  <?php } ?></label>
                  <input value="status_part" name="status_part" hidden="">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <select class="form-control" name="new_status" required="">
                    <option selected="" disabled="">
                      Update Status
                    </option>
                    <?php if ($res_det->res_status=="ACTIVE") {?>
                      <option value="INACTIVE">
                        DEACTIVATE
                      </option>
                   <?php }
                   elseif ($res_det->res_status=="INACTIVE") {?>
                      <option value="ACTIVE">
                        ACTIVATE
                      </option>
                      <option value="TERMINATED">
                        TERMINATE
                      </option>
                  <?php }
                  elseif ($res_det->res_status=="TERMINATED"){?>
                    <option value="ACTIVE">
                      ACTIVATE
                    </option>
                    <?php } 
                    else{?>
                      <option disabled="">Something Went Wrong</option>
                  <?php  }?>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Type reason for status change" name="res_reason_for_status_change" required=""></textarea>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <button class="btn btn-danger">Update Status</button>
                </div>
              </div>
            </div>
          </form>
          <?php } ?>
          
            <!--------------------
            END OF RESIDENT DETAILS 
            ---------------------->
            <!--------------------
            START OF HOUSE DETAILS 
            ---------------------->
            <div class="form-buttons-w text-right">
              <a class="btn btn-primary step-trigger-btn" href="#stepContent2"> >> House Details</a>
            </div>
          </div>
          <div class="step-content" id="stepContent2">
            <div class="form-group">
              <label for=""> Pending Allocation</label>
            </div>
            <!---------------------
            END OF HOUSE DETAILS 
            ---------------------->
            <!--------------------
            START OF PAYMENT DETAILS 
            ---------------------->
            <div class="form-buttons-w text-right">
              <a class="btn btn-primary step-trigger-btn" href="#stepContent3"> >> Payment History</a>
            </div>
          </div>
          <div class="step-content" id="stepContent3">
            <div class="form-group">
              <label for=""> No Payment History to show</label>
            </div>
            <div class="form-buttons-w text-right">
              <!-- <button class="btn btn-primary">Submit Form</button> -->
            </div>
          </div>
          <!--------------------
            END OF PAYMENT DETAILS 
            ---------------------->
        </div>
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
              <div class="floated-customizer-btn third-floated-btn">
                <div class="icon-w">
                  <i class="os-icon os-icon-ui-46"></i>
                </div>
                <span>Customize</span>
              </div>
              <div class="floated-customizer-panel">
                <div class="fcp-content">
                  <div class="close-customizer-btn">
                    <i class="os-icon os-icon-x"></i>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Menu Settings
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Menu Position</label><select class="menu-position-selector">
                          <option value="left">
                            Left
                          </option>
                          <option value="right">
                            Right
                          </option>
                          <option value="top">
                            Top
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Menu Style</label><select class="menu-layout-selector">
                          <option value="compact">
                            Compact
                          </option>
                          <option value="full">
                            Full
                          </option>
                          <option value="mini">
                            Mini
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field with-image-selector-w">
                        <label for="">With Image</label><select class="with-image-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Menu Color</label>
                        <div class="fcp-colors menu-color-selector">
                          <div class="color-selector menu-color-selector color-bright selected"></div>
                          <div class="color-selector menu-color-selector color-dark"></div>
                          <div class="color-selector menu-color-selector color-light"></div>
                          <div class="color-selector menu-color-selector color-transparent"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Sub Menu
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
                          <option value="flyout">
                            Flyout
                          </option>
                          <option value="inside">
                            Inside/Click
                          </option>
                          <option value="over">
                            Over
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Sub Menu Color</label>
                        <div class="fcp-colors">
                          <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                          <div class="color-selector sub-menu-color-selector color-dark"></div>
                          <div class="color-selector sub-menu-color-selector color-light"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fcp-group">
                    <div class="fcp-group-header">
                      Other Settings
                    </div>
                    <div class="fcp-group-contents">
                      <div class="fcp-field">
                        <label for="">Full Screen?</label><select class="full-screen-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
                          <option value="yes">
                            Yes
                          </option>
                          <option value="no">
                            No
                          </option>
                        </select>
                      </div>
                      <div class="fcp-field">
                        <label for="">Top Bar Color</label>
                        <div class="fcp-colors">
                          <div class="color-selector top-bar-color-selector color-bright selected"></div>
                          <div class="color-selector top-bar-color-selector color-dark"></div>
                          <div class="color-selector top-bar-color-selector color-light"></div>
                          <div class="color-selector top-bar-color-selector color-transparent"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--------------------
              END - Demo Customizer
              --------------------><!--------------------
              START - Chat Popup Box
              -------------------->
              <div class="floated-chat-btn">
                <i class="os-icon os-icon-mail-07"></i><span>Chat</span>
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
