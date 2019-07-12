  <?php if (isset($this->session->userdata['logged_in'])) {
      $username = ($this->session->userdata['logged_in']['username']);
      $email = ($this->session->userdata['logged_in']['email']);
      $name = ($this->session->userdata['logged_in']['name']);
    } 
  else {
      header("location: Welcome");
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
              <a href="#">Residents</a>
            </li>
            <li class="breadcrumb-item">
              <span>Add Resident</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-i">
            <div class="content-box"><div class="row">
  <div class="col-lg-10">
    <div class="element-wrapper">
      <h6 class="element-header">
        Add New Custodian
      </h6>
      <div class="element-box">
        <form method="post" action="<?php echo base_url('custodian/addCustodian');?>">
          <div class="form-desc">
            <?php echo $name; ?>,
            Kindly NOTE that below fields are all mandatory and are used only when entering a new custodian
            <?php if(isset($message)){?><br><h5><strong><?php } echo $message;?></strong></h5>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for=""> Custodian Name </label><input class="form-control" placeholder="Enter First Name & Last Name" type="text" required="" name="cust_name">
              </div>
            </div>
          </div>
          <div class="form-group">
                <label for=""> Phone Number </label><input class="form-control" placeholder="Enter Phone Number" type="phone" required="" name="cust_phone">
              </div>
          <div class="form-group">
            <label for=""> Email address</label><input class="form-control" placeholder="Enter email" type="email" required="" name="cust_email">
          </div>
          <div class="form-group">
            <label for=""> ID/Huduma Number</label>
            <input class="form-control" placeholder="Enter ID/Huduma Number" type="number" required="" name="cust_nid">
          </div>
          <div class="form-buttons-w">
            <button class="btn btn-primary" type="submit"> Add Custodian</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--------------------
              START - Color Scheme Toggler
              -------------------->
              <div class="floated-colors-btn second-floated-btn btn btn-sm">
                <div class="os-toggler-w">
                  <div class="os-toggler-i">
                    <div class="os-toggler-pill"></div>
                  </div>
                </div>
                <span>Dark </span><span>Mode</span>
              </div>
              <!--------------------
              END - Color Scheme Toggler
              -------------------->
            </div>
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <!-- MODALS -->
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="addResident" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media">
              <img alt="" src="img/bigicon2.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Select resident type...
              </h4>
              <div class="row">
                <div class="col-sm-6">
                  <div class="onboarding-text" style="font-size: 22px;">
                    <a href="<?php echo base_url('index.php/proprietor/addIndividual');?>"> Individual</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="onboarding-text" style="font-size: 22px;">
                    <a href=""> Company</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END MODALS -->
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
  </body>
</html>
