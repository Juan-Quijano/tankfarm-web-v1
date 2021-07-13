<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tank Farm Control Panel!</title>

    <link rel="icon" href="{{url('/images/bmw_favicon.ico')}}" type="image/x-icon">

    <style>

      ::-webkit-input-placeholder {
         font-style: italic;
      }
      :-moz-placeholder {
         font-style: italic;
      }
      ::-moz-placeholder {
         font-style: italic;
      }
      :-ms-input-placeholder {
         font-style: italic;
      }
          /* Center the loader */
          #loader {
              position: absolute;
              left: 50%;
              top: 50%;
              z-index: 1;
              width: 150px;
              height: 150px;
              margin: -75px 0 0 -75px;
              border: 16px solid #f3f3f3;
              border-radius: 50%;
              border-top: 16px solid #3498db;
              width: 120px;
              height: 120px;
              -webkit-animation: spin 1s linear infinite;
              animation: spin 1s linear infinite;
          }

          @-webkit-keyframes spin {
              0% {
                  -webkit-transform: rotate(0deg);
              }

              100% {
                  -webkit-transform: rotate(360deg);
              }
          }

          @keyframes spin {
              0% {
                  transform: rotate(0deg);
              }

              100% {
                  transform: rotate(360deg);
              }
          }

          /* Add animation to "page content" */
          .animate-bottom {
              position: relative;
              -webkit-animation-name: animatebottom;
              -webkit-animation-duration: 1s;
              animation-name: animatebottom;
              animation-duration: 1s
          }

          .wrapper.theme-1-active .fixed-sidebar-left .side-nav {
              background: #2f6783;
          }

          @media (max-width: 425px) {
              .navbar.navbar-inverse.navbar-fixed-top .nav-header .logo-wrap .brand-img {
                  margin-right: 10px;
                  position: relative;
                  top: -15px;
                  width: 11%;
              }
          }

          @media (max-width: 768px) {
              .navbar.navbar-inverse.navbar-fixed-top .nav-header .logo-wrap .brand-img {
                  margin-right: 10px;
                  position: relative;
                  top: -15px;
                  width: 22%;
              }
          }

          @media (max-width: 1024px) {
              .navbar.navbar-inverse.navbar-fixed-top .nav-header .logo-wrap .brand-img {
                  margin-right: 10px;
                  position: relative;
                  top: -15px;
                  width: 6%;
              }
          }

          /*.navbar.navbar-inverse.navbar-fixed-top .nav-header .logo-wrap .brand-img {
                      margin-right: 10px;
                      position: relative;
                      top: -24px;
                      width: 82%;
                  }*/

          @-webkit-keyframes animatebottom {
              from {
                  bottom: -100px;
                  opacity: 0
              }

              to {
                  bottom: 0px;
                  opacity: 1
              }
          }

          @keyframes animatebottom {
              from {
                  bottom: -100px;
                  opacity: 0
              }

              to {
                  bottom: 0;
                  opacity: 1
              }
          }

          .label.label-info {
              background: #92A2BD;
              padding: 3px 6px 3px;
              font-size: 13px;
              /*border-radius: 50px;*/
              text-transform: capitalize;
              font-weight: 400;
              color: white;
          }

          .label.label-info2 {
              background: #007bff;
              padding: 3px 6px 3px;
              font-size: 13px;
              border-radius: 50px;
              text-transform: capitalize;
              font-weight: 400;
              color: white;
          }

          .label.label-success {
              background: #71aa68;
              padding: 3px 6px 3px;
              /*font-size: 11px;*/
              border-radius: 50px;
              text-transform: capitalize;
              font-weight: 400;
              color: white;
          }

          .label.label-dark {
              background: black;
              padding: 3px 6px 3px;
              /*font-size: 11px;*/
              border-radius: 50px;
              text-transform: capitalize;
              font-weight: 400;
              color: white;
          }

          .label.label-danger {
              background: #da473a;
              padding: 3px 6px 3px;
              font-size: 11px;
              border-radius: 50px;
              text-transform: capitalize;
              font-weight: 400;
              color: white;
          }

          .label.label-warning {
              background: #e6b034;
              padding: 3px 6px 3px;
              font-size: 11px;
              border-radius: 50px;
              text-transform: capitalize;
              font-weight: 400;
              color: white;
          }

          .has-success .form-control,
          .has-success .select2-container--default .select2-selection--single .select2-selection__rendered,
          .select2-container--default .select2-selection--single .has-success .select2-selection__rendered,
          .has-success .select2-container--default .select2-selection--single,
          .select2-container--default .has-success .select2-selection--single,
          .has-success .select2-selection.select2-selection--multiple,
          .has-success .wizard .content>.body input,
          .wizard .content>.body .has-success input,
          .has-success .mce-floatpanel .mce-textbox,
          .mce-floatpanel .has-success .mce-textbox,
          .has-success .mce-floatpanel .mce-btn,
          .mce-floatpanel .has-success .mce-btn,
          .has-success .dataTables_wrapper .dataTables_filter input,
          .dataTables_wrapper .dataTables_filter .has-success input,
          .has-success .dataTables_wrapper .dataTables_length select,
          .dataTables_wrapper .dataTables_length .has-success select,
          .has-success .jsgrid-cell input,
          .jsgrid-cell .has-success input,
          .has-success .jsgrid-cell select,
          .jsgrid-cell .has-success select,
          .has-success .tablesaw-bar .btn-select select,
          .tablesaw-bar .btn-select .has-success select,
          .has-success .dd-handle,
          .has-success .dd3-content,
          .has-success .app-search .form-control:focus,
          .app-search .has-success .form-control:focus,
          .has-success .app-search .jsgrid-cell input:focus,
          .app-search .jsgrid-cell .has-success input:focus,
          .has-success .jsgrid-cell .app-search input:focus,
          .jsgrid-cell .app-search .has-success input:focus,
          .has-success .app-search .jsgrid-cell select:focus,
          .app-search .jsgrid-cell .has-success select:focus,
          .has-success .jsgrid-cell .app-search select:focus,
          .jsgrid-cell .app-search .has-success select:focus,
          .has-success .app-search .dd-handle:focus,
          .app-search .has-success .dd-handle:focus,
          .has-success .app-search .dd3-content:focus,
          .app-search .has-success .dd3-content:focus {
              border-color: rgba(113, 170, 104, 0.5);
          }

          .has-success .form-control:focus,
          .has-success .select2-container--default .select2-selection--single .select2-selection__rendered:focus,
          .select2-container--default .select2-selection--single .has-success .select2-selection__rendered:focus,
          .has-success .select2-container--default .select2-selection--single:focus,
          .select2-container--default .has-success .select2-selection--single:focus,
          .has-success .select2-selection.select2-selection--multiple:focus,
          .has-success .wizard .content>.body input:focus,
          .wizard .content>.body .has-success input:focus,
          .has-success .mce-floatpanel .mce-textbox:focus,
          .mce-floatpanel .has-success .mce-textbox:focus,
          .has-success .mce-floatpanel .mce-btn:focus,
          .mce-floatpanel .has-success .mce-btn:focus,
          .has-success .dataTables_wrapper .dataTables_filter input:focus,
          .dataTables_wrapper .dataTables_filter .has-success input:focus,
          .has-success .dataTables_wrapper .dataTables_length select:focus,
          .dataTables_wrapper .dataTables_length .has-success select:focus,
          .has-success .jsgrid-cell input:focus,
          .jsgrid-cell .has-success input:focus,
          .has-success .jsgrid-cell select:focus,
          .jsgrid-cell .has-success select:focus,
          .has-success .tablesaw-bar .btn-select select:focus,
          .tablesaw-bar .btn-select .has-success select:focus,
          .has-success .dd-handle:focus,
          .has-success .dd3-content:focus {
              border-color: #71aa68;
          }

          .has-warning .form-control,
          .has-warning .select2-container--default .select2-selection--single .select2-selection__rendered,
          .select2-container--default .select2-selection--single .has-warning .select2-selection__rendered,
          .has-warning .select2-container--default .select2-selection--single,
          .select2-container--default .has-warning .select2-selection--single,
          .has-warning .select2-selection.select2-selection--multiple,
          .has-warning .wizard .content>.body input,
          .wizard .content>.body .has-warning input,
          .has-warning .mce-floatpanel .mce-textbox,
          .mce-floatpanel .has-warning .mce-textbox,
          .has-warning .mce-floatpanel .mce-btn,
          .mce-floatpanel .has-warning .mce-btn,
          .has-warning .dataTables_wrapper .dataTables_filter input,
          .dataTables_wrapper .dataTables_filter .has-warning input,
          .has-warning .dataTables_wrapper .dataTables_length select,
          .dataTables_wrapper .dataTables_length .has-warning select,
          .has-warning .jsgrid-cell input,
          .jsgrid-cell .has-warning input,
          .has-warning .jsgrid-cell select,
          .jsgrid-cell .has-warning select,
          .has-warning .tablesaw-bar .btn-select select,
          .tablesaw-bar .btn-select .has-warning select,
          .has-warning .dd-handle,
          .has-warning .dd3-content,
          .has-warning .app-search .form-control:focus,
          .app-search .has-warning .form-control:focus,
          .has-warning .app-search .jsgrid-cell input:focus,
          .app-search .jsgrid-cell .has-warning input:focus,
          .has-warning .jsgrid-cell .app-search input:focus,
          .jsgrid-cell .app-search .has-warning input:focus,
          .has-warning .app-search .jsgrid-cell select:focus,
          .app-search .jsgrid-cell .has-warning select:focus,
          .has-warning .jsgrid-cell .app-search select:focus,
          .jsgrid-cell .app-search .has-warning select:focus,
          .has-warning .app-search .dd-handle:focus,
          .app-search .has-warning .dd-handle:focus,
          .has-warning .app-search .dd3-content:focus,
          .app-search .has-warning .dd3-content:focus {
              border-color: rgba(230, 176, 52, 0.5);
          }

          .has-warning .form-control:focus,
          .has-warning .select2-container--default .select2-selection--single .select2-selection__rendered:focus,
          .select2-container--default .select2-selection--single .has-warning .select2-selection__rendered:focus,
          .has-warning .select2-container--default .select2-selection--single:focus,
          .select2-container--default .has-warning .select2-selection--single:focus,
          .has-warning .select2-selection.select2-selection--multiple:focus,
          .has-warning .wizard .content>.body input:focus,
          .wizard .content>.body .has-warning input:focus,
          .has-warning .mce-floatpanel .mce-textbox:focus,
          .mce-floatpanel .has-warning .mce-textbox:focus,
          .has-warning .mce-floatpanel .mce-btn:focus,
          .mce-floatpanel .has-warning .mce-btn:focus,
          .has-warning .dataTables_wrapper .dataTables_filter input:focus,
          .dataTables_wrapper .dataTables_filter .has-warning input:focus,
          .has-warning .dataTables_wrapper .dataTables_length select:focus,
          .dataTables_wrapper .dataTables_length .has-warning select:focus,
          .has-warning .jsgrid-cell input:focus,
          .jsgrid-cell .has-warning input:focus,
          .has-warning .jsgrid-cell select:focus,
          .jsgrid-cell .has-warning select:focus,
          .has-warning .tablesaw-bar .btn-select select:focus,
          .tablesaw-bar .btn-select .has-warning select:focus,
          .has-warning .dd-handle:focus,
          .has-warning .dd3-content:focus {
              border-color: #e6b034;
          }

          .has-error .form-control,
          .has-error .select2-container--default .select2-selection--single .select2-selection__rendered,
          .select2-container--default .select2-selection--single .has-error .select2-selection__rendered,
          .has-error .select2-container--default .select2-selection--single,
          .select2-container--default .has-error .select2-selection--single,
          .has-error .select2-selection.select2-selection--multiple,
          .has-error .wizard .content>.body input,
          .wizard .content>.body .has-error input,
          .has-error .mce-floatpanel .mce-textbox,
          .mce-floatpanel .has-error .mce-textbox,
          .has-error .mce-floatpanel .mce-btn,
          .mce-floatpanel .has-error .mce-btn,
          .has-error .dataTables_wrapper .dataTables_filter input,
          .dataTables_wrapper .dataTables_filter .has-error input,
          .has-error .dataTables_wrapper .dataTables_length select,
          .dataTables_wrapper .dataTables_length .has-error select,
          .has-error .jsgrid-cell input,
          .jsgrid-cell .has-error input,
          .has-error .jsgrid-cell select,
          .jsgrid-cell .has-error select,
          .has-error .tablesaw-bar .btn-select select,
          .tablesaw-bar .btn-select .has-error select,
          .has-error .dd-handle,
          .has-error .dd3-content,
          .has-error .app-search .form-control:focus,
          .app-search .has-error .form-control:focus,
          .has-error .app-search .jsgrid-cell input:focus,
          .app-search .jsgrid-cell .has-error input:focus,
          .has-error .jsgrid-cell .app-search input:focus,
          .jsgrid-cell .app-search .has-error input:focus,
          .has-error .app-search .jsgrid-cell select:focus,
          .app-search .jsgrid-cell .has-error select:focus,
          .has-error .jsgrid-cell .app-search select:focus,
          .jsgrid-cell .app-search .has-error select:focus,
          .has-error .app-search .dd-handle:focus,
          .app-search .has-error .dd-handle:focus,
          .has-error .app-search .dd3-content:focus,
          .app-search .has-error .dd3-content:focus {
              border-color: rgba(218, 71, 58, 0.5);
          }

          .has-error .form-control:focus,
          .has-error .select2-container--default .select2-selection--single .select2-selection__rendered:focus,
          .select2-container--default .select2-selection--single .has-error .select2-selection__rendered:focus,
          .has-error .select2-container--default .select2-selection--single:focus,
          .select2-container--default .has-error .select2-selection--single:focus,
          .has-error .select2-selection.select2-selection--multiple:focus,
          .has-error .wizard .content>.body input:focus,
          .wizard .content>.body .has-error input:focus,
          .has-error .mce-floatpanel .mce-textbox:focus,
          .mce-floatpanel .has-error .mce-textbox:focus,
          .has-error .mce-floatpanel .mce-btn:focus,
          .mce-floatpanel .has-error .mce-btn:focus,
          .has-error .dataTables_wrapper .dataTables_filter input:focus,
          .dataTables_wrapper .dataTables_filter .has-error input:focus,
          .has-error .dataTables_wrapper .dataTables_length select:focus,
          .dataTables_wrapper .dataTables_length .has-error select:focus,
          .has-error .jsgrid-cell input:focus,
          .jsgrid-cell .has-error input:focus,
          .has-error .jsgrid-cell select:focus,
          .jsgrid-cell .has-error select:focus,
          .has-error .tablesaw-bar .btn-select select:focus,
          .tablesaw-bar .btn-select .has-error select:focus,
          .has-error .dd-handle:focus,
          .has-error .dd3-content:focus {
              border-color: #da473a;
          }

          .has-success .checkbox,
          .has-success .checkbox-inline,
          .has-success .control-label,
          .has-success .help-block,
          .has-success .radio,
          .has-success .radio-inline,
          .has-success.checkbox label,
          .has-success.checkbox-inline label,
          .has-success.radio label,
          .has-success.radio-inline label {
              color: #71aa68;
          }

          .has-warning .checkbox,
          .has-warning .checkbox-inline,
          .has-warning .control-label,
          .has-warning .help-block,
          .has-warning .radio,
          .has-warning .radio-inline,
          .has-warning.checkbox label,
          .has-warning.checkbox-inline label,
          .has-warning.radio label,
          .has-warning.radio-inline label {
              color: #e6b034;
          }

          .has-error .checkbox,
          .has-error .checkbox-inline,
          .has-error .control-label,
          .has-error .help-block,
          .has-error .radio,
          .has-error .radio-inline,
          .has-error.checkbox label,
          .has-error.checkbox-inline label,
          .has-error.radio label,
          .has-error.radio-inline label {
              color: #da473a;
          }

          .has-error .input-group-addon {
              background-color: transparent;
              color: #da473a;
              border-color: rgba(218, 71, 58, 0.5);
          }

          .has-success .input-group-addon {
              background-color: transparent;
              color: #71aa68;
              border-color: rgba(113, 170, 104, 0.5);
          }

          .has-success .form-control-feedback {
              color: #71aa68;
          }

          .has-warning .form-control-feedback {
              color: #e6b034;
          }

          .has-error .form-control-feedback {
              color: #da473a;
          }

          .CampoObligatorio {
              color: red;
          }

          .boton_info {
              display: inline-block;
              margin-bottom: 0;
              font-weight: 400;
              text-align: center;
              white-space: nowrap;
              font-weight: bold;
              vertical-align: middle;
              -ms-touch-action: manipulation;
              touch-action: manipulation;
              cursor: pointer;
              background-image: none;
              border: 1px solid transparent;
              padding: 6px 12px;
              font-size: 16px;
              line-height: 1.42857143;
              border-radius: 4px;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              color: #fff;
              background-color: #337ab7;
              border-color: #2e6da4;
          }

          .boton_info:hover {
              color: #1883ba;
              background-color: #ffffff;
          }

          .boton_danger {


              display: inline-block;
              margin-bottom: 0;
              font-weight: 400;
              text-align: center;
              white-space: nowrap;
              font-weight: bold;
              vertical-align: middle;
              -ms-touch-action: manipulation;
              touch-action: manipulation;
              cursor: pointer;
              background-image: none;
              border: 1px solid transparent;
              padding: 6px 12px;
              font-size: 16px;
              line-height: 1.42857143;
              border-radius: 4px;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              color: #fff;
              background-color: #d9534f;
              border-color: #d9534f;
          }

          .boton_danger:hover {
              color: #d9534f;
              background-color: #ffffff;
          }

          .boton_success {


              display: inline-block;
              margin-bottom: 0;
              font-weight: 400;
              text-align: center;
              white-space: nowrap;
              font-weight: bold;
              vertical-align: middle;
              -ms-touch-action: manipulation;
              touch-action: manipulation;
              cursor: pointer;
              background-image: none;
              border: 1px solid transparent;
              padding: 6px 12px;
              font-size: 16px;
              line-height: 1.42857143;
              border-radius: 4px;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
              color: #fff;
              background-color: #28a745;
              border-color: #28a745;
          }

          .boton_success:hover {
              color: #28a745;
              background-color: #ffffff;
          }
          </style>
      </head>
      
    <!-- Bootstrap -->
    <link href="{{url('/')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('/')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('/')}}/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('/')}}/build/css/custom.min.css" rel="stylesheet">
  </head>
   <!-- jQuery -->
   <script src="{{url('/')}}/vendors/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap -->
  <script src="{{url('/')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <!-- FastClick -->
   <script src="{{url('/')}}/vendors/fastclick/lib/fastclick.js"></script>
   <!-- NProgress -->
   <script src="{{url('/')}}/vendors/nprogress/nprogress.js"></script>
   <!-- jQuery Smart Wizard -->
   <script src="{{url('/')}}/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
   <!-- Custom Theme Scripts -->


   <link href="{{url('/')}}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
   <link href="{{url('/')}}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
   <link href="{{url('/')}}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
   <link href="{{url('/')}}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
   <link href="{{url('/')}}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


   <script src="{{url('/')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="{{url('/')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="{{url('/')}}/vendors/jszip/dist/jszip.min.js"></script>
<script src="{{url('/')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="{{url('/')}}/vendors/pdfmake/build/vfs_fonts.js"></script>

<script src="{{url('/')}}/js/moment/moment.min.js"></script>
<link href="{{url('/')}}/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script src="{{url('/')}}/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<script src="{{url('/')}}/dist/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{url('/')}}/dashboard/dist/js/sweetalert.min.js"></script>

<script type="text/javascript" src="{{url('/')}}/vendors/echart/echarts.min.js">
<script type="text/javascript" src="{{url('/')}}/js/echarts.min.js">
</script>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
              <div class="navbar nav_title" style="border: 0;">
                  <a href="{{url('/')}}" class="site_title"><img src="{{url('/')}}/images/Logo_Web_1_Launcher.png"
                          style="    height: 50px;"></a>
              </div>

              <div class="clearfix"></div>

              <!-- menu profile quick info -->

              <!-- /menu profile quick info -->

              <br>

              <!-- sidebar menu -->
              <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General Overview</h3>
                            <ul class="nav side-menu">
                                <li class=""><a><i class="fa fa-home"></i> Tank Farm <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" >



                                        <li  id="menu_company" style="display:none" class=""><a>Company<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu" style="display: block;">
                                            <li><a href="javascript:UpdateContenedor('Customers');">New / Edit Company</a></li>


                                            </ul>
                                        </li>


                                        <li  id="menu_Users" style="display:none" class=""><a>Users<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu" style="display: block;">
                                                <li id="liuser" style="display:none"><a href="javascript:UpdateContenedor('users');">User</a></li>
                                                
                                                <li id="lidepartment"style="display:none"><a href="javascript:UpdateContenedor('Department');">Department</a>
                                                </li>
                                                <li id="lirole" style="display:none"><a href="javascript:UpdateContenedor('Roles');">Role</a></li>
                                                <li id="liCentroCostos"style="display:none"><a href="javascript:UpdateContenedor('CostCenter');">Cost Center</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li  id="menu_Vehicles" style="display: none" class=""><a>Vehicles<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu" style="display: block;">
                                                <li id="lidriver"style="display:none"><a href="javascript:UpdateContenedor('Drivers');">New / Edit Driver</a></li>
                                                <li id="livehicle" style="display:none"><a href="javascript:UpdateContenedor('Vehicles');">New / Edit Vehicle</a></li>
                                                <li id="liProfile" style="display:none"><a href="javascript:UpdateContenedor('Perfiles');">New / Edit Profile</a></li>
                                                <li id="librand" style="display:none"><a href="javascript:UpdateContenedor('Marca');">New / Edit Brand</a></li>
                                                <li id="limodal" style="display:none"><a href="javascript:UpdateContenedor('Model');">New / Edit Model</a></li>

                                            </ul>
                                        </li>








                                    </ul>
                                </li>
                                <li><a><i class="fa fa-tachometer"></i> Fuel Tanks <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="">
                                        <li><a href="javascript:UpdateContenedor('FuelTankLevel');">Fuel Tank Level</a>
                                        </li>

                                    </ul>
                                </li>
                                <li><a><i class="fa fa-tachometer"></i> Consumption Reports<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="">
                                        <li><a href="javascript:UpdateContenedor('Reporte1');">Fuel Dispenser 1 (Tank Farm)</a></li>
                                       
                                    </ul>
                                </li>
                                <li  id="menuConfiguracion" style="display: none"><a><i class="fa fa-cog"></i> Settings <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="">
                                        <li><a href="javascript:UpdateContenedor('');">Shedule Email</a></li>
                                        <li><a href="javascript:UpdateContenedor('');">Shedule Reports</a></li>

                                    </ul>
                                </li>



                            </ul>
                        </div>


                    </div>
              <!-- /sidebar menu -->
              <div class="sidebar-footer hidden-small">
                  <a href="https://www.tdcon40.com" style="    background: #2a3f54;"><img
                          src="{{url('/')}}/images/tdcon_gris.png" alt="" title=""
                          style="margin-left: 20%;/* width: 58%; */"></a>
              </div>
              <!-- /menu footer buttons -->
              <div class="sidebar-footer hidden-small" style="display:none;">
                  <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="" data-original-title="FullScreen">
                      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock">
                      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                  </a>
                  <a data-toggle="tooltip" data-placement="top" title="" href="{{url('/Login')}}"
                      data-original-title="Logout">
                      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                  </a>
              </div>
              <!-- /menu footer buttons -->
          </div>
      </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a  href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">

                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a data-toggle="modal" data-target="#modalLoginAvatar" class="dropdown-item"  href="javascript:;"> Profile</a>


                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="{{url('/Login')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>


                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

<div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal " role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-dialog">
        <img src="images/user3.webp" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

      <div class="md-form ml-0 mr-0" style = "text-align: -webkit-auto;">
        <h5 class="mt-1 mb-2">User: <a id="userlbl" style = "font-family:courier,arial,helvética;">User</a></h5>

        </div>
        <div class="md-form ml-0 mr-0" style ="text-align: -webkit-auto;">
        <h5  class="mt-1 mb-2">Name: <a id="namelbl" style = "font-family:courier,arial,helvética;">Name</a></h5>

        </div>
        <div class="md-form ml-0 mr-0" style = "text-align: -webkit-auto;">
        <h5  class="mt-1 mb-2">Role: <a id="rolelbl" style = "font-family:courier,arial,helvética;">Role</a></h5>

        </div>

        <div class="md-form ml-0 mr-0" style = "text-align: -webkit-auto;">
        <h5  class="mt-1 mb-2">Email: <a id="emaillbl" style = "font-family:courier,arial,helvética">Email</a></h5>

        </div>

        <div class="md-form ml-0 mr-0" style = "text-align: -webkit-auto;">
        <h5  class="mt-1 mb-2">Telephone: <a id="telephonelbl" style = "font-family:courier,arial,helvética;">Telephone</a></h5>

        </div>





        <div class="text-center mt-4">
        <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4"
          data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<script>
          //**************ip de servidor

          var IPSERVIDOR = "{{url('/')}}".replace(":83", "");
          //var IPSERVIDOR = "{{url('/')}}".replace("/", "");
          var IPWS = IPSERVIDOR + ":85/Home/";

      </script>


