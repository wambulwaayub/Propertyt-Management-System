          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Property</a>
            </li>
            <li class="breadcrumb-item">
              <span>Add Property</span>
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
        Add Commercial Property
      </h6>
      <div class="element-box">
<!--  -->
<!--  -->
<!--  -->
        <form method="post" action="<?php echo base_url('property/addPropertyResidential');?>">
          <div class="form-desc">
            Dear <?php echo $this->name; ?>,
            Kindly NOTE that below fields are all mandatory and are used only when entering commercial property
            <?php if(isset($message)){?><br><h5><strong><?php } echo $message;?></strong></h5>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> Block Name </label><input class="form-control" placeholder="Enter Block Name" type="text" required="" name="name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> Property Type </label>
                <select class="form-control" name="type">
                  <option selected="" disabled="">SELECT ONE</option>
                  <?php foreach ($prop_type as $type) {?>
                    <option value="<?php echo $type->auto_id;?>"><?php echo $type->name;?></option>
                  <?php } ?>
                </select>
              </div>
            </div> 
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> No. of Floors</label><input class="form-control" placeholder="No. of Floors" type="number" required="" name="floors">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> Service Charges <small>(Total per unit in KES)</small></label>
                <input class="form-control" placeholder="Total service charges" type="number" required="" name="service_charges">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> Deposit : Rent Proportion <small>(2 for double, 1 for equal, etc)</small></label>
                <input class="form-control" placeholder="Deposit proportion" type="text" required="" name="deposit_proportion">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> Location <small>(e.g. Imara Daima)</small></label>
                <input class="form-control" placeholder="Location " type="text" required="" name="location">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> GPRS <small>(this will be auto-filled)</small></label>
                <p id="gprs"><input class='form-control' placeholder="Click inside this field to load address" onclick="getLocation()" required="" readonly></p>
                <p id="map"><small>A link to preview the address in maps will appear here after clicking in the above field</small></p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for=""> Custodian <small>(Caretaker of the block)</small></label>
                <select class="form-control" name="custodian">
                  <option selected="" disabled="">SELECT</option>
                  <?php foreach ($custodians as $custodians) {?>
                    <option value="<?php echo $custodians->cust_id;?>"><?php echo $custodians->cust_name;?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          
          <div class="form-buttons-w">
            <button class="btn btn-primary" type="submit"> Add Block</button>
          </div>
        </form>

<script>
var x = document.getElementById("gprs");
var y = document.getElementById("map");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
    y.innerHTML = "Geolocation is not supported by this browser.";
  }
}
    
function showPosition(position) {
  x.innerHTML="<input class='form-control' value='"+position.coords.latitude+","+position.coords.longitude+"' name='gprs' onclick='getLocation()' readonly>";
  y.innerHTML="<a href='https://www.google.com/maps/place/"+position.coords.latitude+","+position.coords.longitude+"' target='_blank'>Open in Maps</a>";
}
</script>

      </div>
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
    <script src="<?php echo base_url();?>js/demo_customizer.js?version=4.4.0"></script>
    <script src="<?php echo base_url();?>js/main.js?version=4.4.0"></script>
  </body>
</html>
