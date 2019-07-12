          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="">Property</a>
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
                  My Properties
                </h4>
                <div class="element-box">
                  <div class="form-desc">
                    All my properties
                  </div>
                  <div class="table-responsive">
                    <table id="active" width="100%" class="table table-striped table-lightfont">
                      <thead>
                        <tr>
                          <th>Block#</th><th>Block Name</th><th>Floors</th><th>Location</th><th>Added On</th><th>Action</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Block#</th><th>Block Name</th><th>Floors</th><th>Location</th><th>Added On</th><th>Action</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php foreach ($property as $property) {?>
                          <tr>
                            <td><?php echo $property->prop_id;?></td>
                            <td><?php echo $property->prop_name;?></td>
                            <td><?php echo $property->prop_floors;?></td>
                            <td><?php echo $property->prop_location;?></td>
                            <td><?php echo date('d/M/Y H:i', strtotime($property->prop_added_on));?></td>
                            <td><a href="<?php echo current_url();?>/<?php echo $property->auto_id;?>">Manage</a></td>
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
    <!-- <script src="<?php echo base_url();?>bower_components/jquery/dist/jquery.min.js"></script> -->
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
    <!-- <script src="<?php echo base_url();?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
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
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      
      ga('create', 'UA-XXXXXXX-9', 'auto');
      ga('send', 'pageview');
    </script>
        <script type="text/javascript">
      $( document ).ready(function() {
      $('#terminated').DataTable({
           "dom": 'lBfrtip',
              buttons: [
                  'copy',
                  'excel',
                  'csv',
                  'pdf',
                  'print'
              ]
              });
      });
    </script>
    <script type="text/javascript">
      $( document ).ready(function() {
      $('#inactive').DataTable({
           "dom": 'lBfrtip',
              buttons: [
                  'copy',
                  'excel',
                  'csv',
                  'pdf',
                  'print'
              ]
              });
      });
    </script>
    <script type="text/javascript">
      $( document ).ready(function() {
      $('#active').DataTable({
           "dom": 'lBfrtip',
              buttons: [
                  'copy',
                  'excel',
                  'csv',
                  'pdf',
                  'print'
              ]
              });
      });
    </script>

  </body>
</html>