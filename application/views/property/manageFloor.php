        <?php 
        foreach ($property as $property) {
            $prop_auto_id=$property->auto_id;
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
              <a href="">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Properties</a>
            </li>
            <li class="breadcrumb-item">
              <span>Manage Floor</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-i">
            <div class="content-box">
              <!-- ACTIVE RESIDENTS -->
              <div class="element-wrapper">
                <h6 class="element-header">
                  Managing Floor <?php echo "$floor"." of block# '$block_id' ($block_name)"; ?> 
                </h6>
                <div class="element-box">
                    Units on the floor
                    <div class="table-responsive">
                    <table class="table table-striped table-lightfont" width="100%">
                      <thead>
                        <tr>
                          <th>Unit/House No</th>
                          <th>Type</th>
                          <th>Rent</th>
                          <th>A/C No</th>
                          <th>KPLC Mtr No</th>
                          <th>Water Mtr No</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <?php echo form_open("property/updateUnits/$auto_id/$floor");
                        echo form_hidden('block_id',"$block_id");echo form_hidden('generated_units',"$units");?>
                      <tbody class="form-control-sm">
                        <?php foreach ($units as $units) {?>
                        <tr>
                          <td>
                            <?php echo $units->unit_id;?>
                          </td>
                          <td>
                            <?php echo $units->unit_type;?>
                          </td>
                          <td>
                            <small>KES </small><?php echo $units->unit_rent;?>
                          </td>
                          <td>
                            <?php echo $units->unit_acc_no;?>
                          </td>
                          <td>
                            <?php echo $units->unit_kplc_meter_no;?>
                          </td>
                          <td>
                            <?php echo $units->unit_water_metre_no;?>
                          </td>
                          <td>
                            <strong>Current: </strong><?php echo $units->unit_occupancy_status;?><br>
                            <?php if ($units->unit_occupancy_status=="Vacant"):?>
                            <select class="form-control-sm">
                              <option selected="" disabled="">Change to...</option>
                              <option value="Occupied">Occupied</option>
                              <option value="Under Renovation">Under Renovation</option>
                            </select>
                            <?php elseif ($units->unit_occupancy_status=="Occupied"):?>
                            <select class="form-control-sm">
                              <option selected="" disabled="">Change to...</option>
                              <option value="Vacant">Vacant</option>
                              <option value="Under Renovation">Under Renovation</option>
                            </select>
                            <?php else:?>
                            <select class="form-control-sm">
                              <option selected="" disabled="">Change to...</option>
                              <option value="Occupied">Occupied</option>
                              <option value="Vacant">Vacant</option>
                            </select>
                            <?php endif;?>
                          </td>
                        </tr>
                      <?php }?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Unit/House No</th>
                          <th>Type</th>
                          <th>Rent</th>
                          <th>A/C No</th>
                          <th>KPLC Mtr No</th>
                          <th>Water Mtr No</th>
                          <th>Status</th>
                        </tr>
                      </tfoot>
                    <?php echo form_close();?>
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