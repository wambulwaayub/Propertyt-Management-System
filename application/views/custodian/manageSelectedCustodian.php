        <?php 
        foreach ($custodians as $custodians) {
            $name=$custodians->cust_name;
            $phone=$custodians->cust_phone;
            $email=$custodians->cust_email;
            $nid=$custodians->cust_nid;
          } 
          ?>   
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="">Custodians</a>
            </li>
            <li class="breadcrumb-item">
              <span>Manage Custodians</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-i">
            <div class="content-box">
              <!-- ACTIVE RESIDENTS -->
              <div class="element-wrapper">
                <h4 class="element-header">
                  <?php echo $name; ?>
                </h4>
                <div class="element-box">
                  <h6 class="form-header">
                    Basic Details
                  </h6>
                  <div class="row">
                    <div class="col-sm-4">
                      Phone: <a href="tel:<?php echo $phone;?>"><?php echo $phone;?></a>
                    </div>
                    <div class="col-sm-4">
                      Email: <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                    </div>
                    <div class="col-sm-4">
                      ID#: <?php echo $nid;?>
                    </div>
                  </div>
                </div>
                <div class="element-box">
                  <h6 class="form-header">
                    Assigned Properties
                  </h6>
                  <div class="table-responsive">
                    <table class="table table-striped table-lightfont" width="100%">
                      <thead>
                        <tr>
                          <th>Block ID</th>
                          <th>Name</th>
                          <th>Location</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($blocks as $blocks) {?>
                        <tr>
                          <td><?php echo $blocks->prop_id;?></td>
                          <td><?php echo $blocks->prop_name;?></td>
                          <td><?php echo $blocks->prop_location;?></td>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--------------------
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
    <script src="<?php echo base_url();?>js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>js/demo_customizer.js?version=4.4.0"></script>
    <script src="<?php echo base_url();?>js/main.js?version=4.4.0"></script>

  </body>
</html>
