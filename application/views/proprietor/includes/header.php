<!DOCTYPE html>
<html>
  <head>
    <title>PMS</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- EXPORTING TABLES --> 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
<!-- //EXPORTING TABLES -->
    <link href="<?php echo base_url();?>favicon.png" rel="shortcut icon">
    <link href="<?php echo base_url();?>apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>bower_components/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/main.css?version=4.4.0" rel="stylesheet">
  <?php //if (isset($this->session->userdata['logged_in'])) {
  //     $username = ($this->session->userdata['logged_in']['username']);
  //     $email = ($this->session->userdata['logged_in']['email']);
  //     $name = ($this->session->userdata['logged_in']['name']);
  //   } 
  // else {
  //     header("location: Welcome");
  //   }
  ?>
  <body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="all-wrapper with-side-panel solid-bg-all">
      <div class="layout-w">
        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="index.html"><span>PMS</span></a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  <strong><?php echo $this->name; ?></strong>
                </div>
                <div class="logged-user-role">
                  Proprietor
                </div>
              </div>
            </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
              <li class="has-sub-menu">
                <a href="<?php echo base_url('index.php/Proprietor/');?>">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layout"></div>
                  </div>
                  <span>Residents</span></a>
                <ul class="sub-menu">
                  <li>
                    <a data-target="#addResident" data-toggle="modal">Add Resident</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('index.php/Proprietor/manageResidents');?>">Manage Residents</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                  </div>
                  <span>Property</span></a>
                <ul class="sub-menu">
                  <li>
                    <a data-target="#selectPropertyType" data-toggle="modal">Add</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Property/getProperty');?>">Manage</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="layouts_menu_top_image.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-layers"></div>
                  </div>
                  <span>Custodians</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo base_url('Custodian/addCustodian');?>">Add</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Custodian/getCustodians');?>">Manage</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="apps_bank.html">
                  <div class="icon-w">
                    <div class="os-icon os-icon-package"></div>
                  </div>
                  <span>Communications</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="apps_email.html">Open</a>
                  </li>
                  <li>
                    <a href="apps_support_dashboard.html">In progress</a>
                  </li>
                  <li>
                    <a href="apps_support_index.html">Pending</a>
                  </li>
                  <li>
                    <a href="apps_crypto.html">Closed</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-file-text"></div>
                  </div>
                  <span>Accounts</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="misc_invoice.html">Raise invoice</a>
                  </li>
                  <li>
                    <a href="rentals_index_grid.html">Due payments</a>
                  </li>
                  <li>
                    <a href="misc_charts.html">Overdue payments</a>
                  </li>
                  <li>
                    <a href="auth_login.html">Payments Made</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-life-buoy"></div>
                  </div>
                  <span>Reports</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="uikit_modals.html">Residents report</a>
                  </li>
                  <li>
                    <a href="uikit_alerts.html">Payments report</a>
                  </li>
                  <li>
                    <a href="uikit_grid.html">Property report</a>
                  </li>
                  <li>
                    <a href="uikit_progress.html">Communications report</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub-menu">
                <a href="#">
                  <div class="icon-w">
                    <div class="os-icon os-icon-users"></div>
                  </div>
                  <span>My Account</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="<?php echo base_url('index.php/Proprietor/My_profile');?>">My Profile</a>
                  </li>
                </ul>
              </li>
          
            </ul>
            <!--------------------
            END - Mobile Menu List
            -------------------->
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="<?php echo base_url();?>">
              <div class="logo-element"></div>
              <div class="logo-label">
                PMS
              </div>
            </a>
          </div>
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                <!-- <img alt="" src="img/avatar1.jpg"> -->
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  <strong><?php echo $this->name; ?></strong>
                </div>
                <div class="logged-user-role">
                  Proprietor
                </div>
              </div>
              <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  <div class="avatar-w">
                    <img alt="" src="img/avatar1.jpg">
                  </div>
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                      <?php echo $this->name; ?>
                    </div>
                    <div class="logged-user-role">
                      Proprietor
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="<?php echo base_url('index.php/Proprietor/My_profile');?>"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('index.php/Welcome/logout');?>"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="element-search autosuggest-search-activator">
            <input placeholder="Start typing to search..." type="text">
          </div>
          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="selected has-sub-menu">
              <a href="<?php echo base_url('index.php/Proprietor');?>">
                <div class="icon-w">
                  <div class="os-icon os-icon-user"></div>
                </div>
                <span>Residents</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Residents
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layout"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a data-target="#addResident" data-toggle="modal">Add</a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('index.php/Proprietor/manageResidents');?>">Manage</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Property</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Property
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layers"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                    <a data-target="#selectPropertyType" data-toggle="modal">Add</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Property/getProperty');?>">Manage</a>
                  </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="layouts_menu_top_image.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Custodians</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Custodians
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layers"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                    <a href="<?php echo base_url('Custodian/addCustodian');?>">Add</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('Custodian/getCustodians');?>">Manage</a>
                  </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="apps_bank.html">
                <div class="icon-w">
                  <div class="os-icon os-icon-package"></div>
                </div>
                <span>Communications</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Communications
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-package"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="apps_email.html">Open</a>
                    </li>
                    <li>
                      <a href="apps_support_dashboard.html">In progress</a>
                    </li>
                    <li>
                      <a href="apps_support_index.html">Pending</a>
                    </li>
                    <li>
                      <a href="apps_crypto.html">Closed</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-file-text"></div>
                </div>
                <span>Accounts</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Accounts
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-file-text"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="misc_invoice.html">Raise Invoice</a>
                    </li>
                    <li>
                      <a href="rentals_index_grid.html">Due payments</a>
                    </li>
                    <li>
                      <a href="misc_charts.html">Overdue payments</a>
                    </li>
                    <li>
                      <a href="auth_login.html">Payments Made</a>
                    </li>
                    <li>
                      <a href="auth_register.html">Payment History</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-life-buoy"></div>
                </div>
                <span>Reports</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Reports
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-life-buoy"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="uikit_modals.html">Resident Report</a>
                    </li>
                    <li>
                      <a href="uikit_alerts.html">Payments report</a>
                    </li>
                    <li>
                      <a href="uikit_grid.html">Property Report</a>
                    </li>
                    <li>
                      <a href="uikit_progress.html">Communications Report</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <li class=" has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-users"></div>
                </div>
                <span>My Account</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  My Account
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-users"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="<?php echo base_url('index.php/Proprietor/My_profile');?>">My Profile</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->
        <div class="content-w">
          <!--------------------
          START - Top Bar
          -------------------->
          <div class="top-bar color-scheme-transparent">
            <!--------------------
            START - Top Menu Controls
            -------------------->
            <div class="top-menu-controls">
              <div class="element-search autosuggest-search-activator">
                <input placeholder="Start typing to search..." type="text">
              </div>
              <!--------------------
              START - Messages Link in secondary top menu
              -------------------->
              <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left">
                <div class="new-messages-count">
                  <a data-target="#help" data-toggle="modal">help</a>
                </div>
              </div>
              <!--------------------
              END - Messages Link in secondary top menu
              --------------------><!--------------------
              START - Settings Link in secondary top menu
              -------------------->
              <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left">
                <i class="os-icon os-icon-ui-46"></i>
                <div class="os-dropdown">
                  <div class="icon-w">
                    <i class="os-icon os-icon-ui-46"></i>
                  </div>
                  <ul>
                    <li>
                      <a href="<?php echo base_url('index.php/Proprietor/My_profile');?>"><i class="os-icon os-icon-ui-49"></i><span>Profile Settings</span></a>
                    </li>
                    <li>
                      <a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel Account</span></a>
                    </li>
                  </ul>
                </div>
              </div>
              <!--------------------
              END - Settings Link in secondary top menu
              -------------------->
            </div>
            <!--------------------
            END - Top Menu Controls
            -------------------->
          </div>
          <!--------------------
          END - Top Bar
          -------------------->
          <!-- MODALS -->
  <!-- 1. ADD RESIDENT -->
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
                    <a href="<?php echo base_url('index.php/proprietor/addCompany');?>"> Company</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END {ADD RESIDENT} -->
      <!-- {SELECT PROPERTY TYPE} -->
      <div aria-hidden="true" class="onboarding-modal modal fade animated" id="selectPropertyType" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media">
              <img alt="" src="img/bigicon2.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Select property type...<br>
              </h4>
              <div class="row">
                <div class="col-sm-6">
                  <div class="onboarding-text" style="font-size: 22px;">
                    <a href="<?php echo base_url('Property/addPropertyResidential');?>"> Residential</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="onboarding-text" style="font-size: 22px;">
                    <a href="<?php echo base_url('Property/addPropertyCommercial');?>"> Commercial</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END {SELECT PROPERTY TYPE} -->
      <!-- HELP POPUP -->
      <div aria-hidden="true" class="onboarding-modal modal fade animated" role="dialog" tabindex="-1" id="help">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">CLOSE</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-slider-w">
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon2.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    Welcome <?php echo $name; ?>!
                  </h4>
                  <div class="onboarding-text">
                    Here are a few things to help you get started with our property management system. To close this window, simply click on <strong>Skip Intro</strong> above or clieck anywhere outside this window
                  </div>
                </div>
              </div>
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon5.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    Resident Module
                  </h4>
                  <div class="onboarding-text">
                    This module allows you to add a resident (tenant), manage the tenant, assign a house to the tenant and see their payments
                  </div>
                </div>
              </div>
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon6.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    Property Module
                  </h4>
                  <div class="onboarding-text">
                    This allows you to add property, manage it and make rental collections for the property
                  </div>
                </div>
              </div>
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon6.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    Accounts Module
                  </h4>
                  <div class="onboarding-text">
                    This allows you to generate invoices, manage collections, get payment history and generate your gross financial performance
                  </div>
                </div>
              </div>
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon6.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    Reports Module
                  </h4>
                  <div class="onboarding-text">
                    This is where you get a detailed overview of your overal property business from revenues, tenants, property & communications
                  </div>
                </div>
              </div>
              <div class="onboarding-slide">
                <div class="onboarding-media">
                  <img alt="" src="img/bigicon6.png" width="200px">
                </div>
                <div class="onboarding-content with-gradient">
                  <h4 class="onboarding-title">
                    My Account Module
                  </h4>
                  <div class="onboarding-text">
                    This allows you to update your account details e.g. phone number, email address, physical address, etc.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- END {HELP} -->
    <!-- SEND SMS -->
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="sendSMS" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media">
              <img alt="" src="img/bigicon2.png" width="200px">
            </div>
            <div class="col-sm-6">
              <div class="onboarding-text" style="font-size: 22px;">
                Send SMS
              </div>
            </div>
            <div class="onboarding-content with-gradient">
              <div class="row">
                <div class="col-sm-12">
                  <textarea class="form-control" rows="4" placeholder="SMS Content here"></textarea>
                </div>
              </div><br><hr>
              <div class="row">
                <div class="col-sm-12">
                  <button class="btn btn-success float-right">Send now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- //SEND SMS -->
    <!-- SEND SMS -->
    <div aria-hidden="true" class="onboarding-modal modal fade animated" id="sendEMAIL" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media">
              <img alt="" src="img/bigicon2.png" width="200px">
            </div>
            <div class="col-sm-6">
              <div class="onboarding-text" style="font-size: 22px;">
                Send Email
              </div>
            </div><hr>
            <div class="onboarding-content with-gradient">
              <div class="row" style="margin-left: -11%">
                <div class="col-sm-4">
                  <label class="control-label">Subject: </label>
                </div>
                <div class="col-sm-8">
                  <input class="form-control" type="text" name="Subject" placeholder="Subject">
                </div>
              </div><br>
              <div class="row">
                <div class="col-sm-12">
                  <textarea class="form-control" rows="4" placeholder="Email body here"></textarea>
                </div>
              </div><br><hr>
              <div class="row">
                <div class="col-sm-12">
                  <button class="btn btn-success float-right">Send now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- //SEND SMS -->