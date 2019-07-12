        <?php 
        foreach ($property as $property) {
            $auto_id=$property->auto_id;
            $block_id=$property->prop_id;
            $block_name=$property->prop_name;
            $block_location=$property->prop_location;
            $block_added_on=$property->prop_added_on;
            $block_floors=$property->prop_floors;
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
              <a href="">Properties</a>
            </li>
            <li class="breadcrumb-item">
              <span>Manage Property</span>
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
                  <?php echo "$block_name #$block_id"; ?>
                </h4>
                <div class="element-box">
                  <h6 class="form-header">
                    Block Details
                  </h6>
                  <div class="row">
                    <table class="table table-striped table-lightfont" width="100%">
                      <thead>
                        <tr>
                          <th>Block ID</th>
                          <th>Block Name</th>
                          <th>Location</th>
                          <th>Floors</th>
                          <th>Added on</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?php echo $block_id;?></td>
                          <td><?php echo $block_name;?></td>
                          <td><?php echo $block_location;?></td>
                          <td><?php echo $block_floors;?></td>
                          <td><?php echo date('D d/M/Y H:i', strtotime($block_added_on));?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="element-box">
                  <h6 class="form-header">
                    Floors & Status
                  </h6>
                  <div class="table-responsive">
                    <table class="table table-striped table-lightfont" width="100%">
                      <thead>
                        <tr>
                          <th>Floor</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $alphabet = range('A', 'Z');
                        for ($i='A'; $i<$alphabet[$block_floors]; $i++) {?>
                        <tr>
                          <td><?php echo $i;?></td>
                          <td><?php if($unit_floor==$i){echo $units;}?></td>
                          <td>
                            <div class="dropdown">
                              <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Action
                              <span class="caret"></span></button>
                              <ul class="dropdown-menu" style="color: black;">
                                <li><a href="<?php echo base_url("property/addUnits/$auto_id/$i");?>">Add Units</a></li>
                                <li><a href="<?php echo base_url("property/manageFloor/$auto_id/$i");?>">Manage Floor</a></li>
                                <li><a href="<?php echo base_url("property/deleteFloor/$auto_id/$i");?>">Delete Floor</a></li>
                              </ul>
                            </div></td>
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
      <!-- POPUPS -->
      <div aria-hidden="true" class="onboarding-modal modal fade animated" id="AddUnits" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Cancel</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-content with-gradient">
              <?php echo form_open('property/addUnits');?>
              <div class="row">
                <div class="col-sm-6">
                    <p>Enter number of units in block <?php echo $block_id;?></p>
                </div>
                <div class="col-sm-3">
                    <?php echo form_hidden('block',$block_id,"class='form-control'");?>
                    <?php echo form_input('units','',"class='form-control'");?>
                </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary">Go</button>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- POPUPS -->
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
