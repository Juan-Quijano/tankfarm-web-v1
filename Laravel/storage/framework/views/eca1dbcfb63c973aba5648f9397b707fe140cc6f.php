<script src="<?php echo e(url('/')); ?>/vendors/loading/loadingoverlay.min.js"></script>
<style>
    div.dataTables_wrapper div.dataTables_filter input{
  
   
  width: 600px;
  
}
.dataTables_filter {
    margin-inline: auto;
 
  width: 600px;
}

.centrado {
    background-color: #fafafa;
    margin: 1rem;
    padding: 1rem;
    border: 2px solid #ccc;
    /* IMPORTANTE */
    text-align: left;
}

.padre {
    /* IMPORTANTE */
    text-align: center;
}

.hijo {
    background-color: #fafafa;
    padding: 10px;
    margin: 10px;
    border: 2px solid #ccc;
    /* IMPORTANTE */
    display: inline-block;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #f8f9fa;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media  screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }

    .sidenav a {
        font-size: 18px;
    }
}

.autocomplete {
    /*the container must be positioned relative:*/
    position: relative;
}

.autocomplete-items {
    position: absolute;
    border: 1px solid #d4d4d4;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    /*position the autocomplete items to be the same width as the container:*/
    top: 100%;
    left: 0%;
    right: 0;
}

.autocomplete-items div {
    padding: 10px;
    cursor: pointer;
    background-color: #fff;
    border-bottom: 1px solid #d4d4d4;
}

.autocomplete-items div:hover {
    /*when hovering an item:*/
    background-color: #e9e9e9;
}

.autocomplete-active {
    /*when navigating through the items using the arrow keys:*/
    background-color: DodgerBlue !important;
    color: #ffffff;
}
</style>
<div class="row">
    <!--
      <div class="col-md-12" style="display:none;">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Fuel Dispenser Reports </h2>

                  <div class="filter">
                      <div id="reportrange" class="pull-right"
                          style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                          <button type="button" onclick="Refresh(0)" class="boton_info"> Send</button>
                      </div>
                  </div>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="col-sm-12 padre ">

                      <h2>Please select the fields to make the report</h2>
                      <div class="col-md-2 hijo" style="   ">
                          <label clas="" for="">Select type Report *</label>
                          <div class="input-group" id="divComboConsumos">
                              <select name="comboHorario" id="comboHorario" class="form-control validarCombo"
                                  data-toggle="tooltip" data-placement="right" title=""
                                  data-original-title="Select the type of schedule ">
                                  <option value="Select Option" selected disabled>Select Option
                                  </option>
                                  <option value="1">Last consumptions </option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-2 hijo" style="    ">
                          <label clas="" for="">Company *</label>
                          <div class="input-group autocomplete" id="divCompany">
                              <input type="text" class="form-control validar" id="company" name="company"
                                  autocomplete="off" placeholder="Name Company"
                                 >
                          </div>
                      </div>
                      <div class="col-md-2 hijo" style="    ">
                          <label clas="" for="">Driver Tag *</label>
                          <div class="input-group" id="divTagDriver">
                              <input type="text" class="form-control validar" id="DriverTag" name="DriverTag"
                                  autocomplete="off" placeholder="######"
                                  >
                          </div>
                      </div>
                      <div class="col-md-2 hijo" style="    ">
                          <label clas="" for="">Vehicle Tag *</label>
                          <div class="input-group" id="divTagVehicle">
                              <input type="text" class="form-control validar" id="VehicleTag" name="VehicleTag"
                                  autocomplete="off" placeholder="######"
                                 >
                          </div>
                      </div>
                      <div class="col-md-3 hijo" style="    ">
                          <label clas="" for="">Start Date - End Date *</label>
                          <div class="input-group" id="divFechas">
                              <input type="text" class="form-control has-feedback-left" id="Start1"
                                  placeholder="Start Time" aria-describedby="inputSuccess2Status">
                              <input type="text" class="form-control has-feedback-left" id="End1"
                                  placeholder="End Time" aria-describedby="inputSuccess2Status">
                          </div>
                      </div>





                  </div>


              </div>
          </div>
      </div>


      -->
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <div class="text-left">
                    <button id="seeAll" class="btn btn-danger" type="button" onclick="showChart(1)"> <span id="icono"
                            class="fa fa-tachometer" aria-hidden="true"></span> GRAPHS
                        |</button>
                    <!--You can add col-lg-12 if you want -->
                    <button type="button" class="btn btn-primary " onclick="showChart(0)"> <span class=""
                            id="icon_enabled" style="color:white;"></span><i class="glyphicon glyphicon-plus"></i>
                        DATATABLE</button>
                    <button type="button" class="btn btn-primary " onclick="openNav()"> <span class="" id="icon_enabled"
                            style="color:white;"> &#9776; SEARCH FILTERS</button>
                            



                            <select  name="SelectTable" id="SelectTable" class="btn btn-primary" style='height: 38px; display:none'
                                data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Change table" onchange=tableSelected();>
                                <option value="0" selected disabled>CHANGE TABLE</option>
                                <option value="1">GLOBAL DIESEL CONSUMPTIONS REPORT</option>
                                <option value="2">GLOBAL GASOLINE CONSUMPTIONS REPORT</option>
                               
                            </select>
                </div>
            </div>




            <div class="x_content">



                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="col-md-5 hijo" style="   ">
                        <label clas="" for="">Select type Report *</label>
                        <div class="input-group" id="divcomboTipoReporte">
                            <select name="comboTipoReporte" id="comboTipoReporte" class="form-control"
                                data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Select the type of schedule ">
                                <option value="0" selected>Select Option</option>
                                <option value="15">Last 15 days</option>
                                <option value="30">Last Month</option>
                                <option value="90">Last trimester</option>
                                <option value="180">Last semester</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 hijo" style="    ">
                        <label clas="" for="">Company *</label>
                        <div class="input-group autocomplete" id="divCompany1">
                            <input type="text" class="form-control validar" id="company1" name="" autocomplete="off"
                                placeholder="Name Company">
                        </div>
                    </div>
                    <div class="col-md-5 hijo" style="    ">
                        <label clas="" for="">Driver Tag *</label>
                        <div class="input-group autocomplete" id="divDriverTag1">
                            <input type="text" class="form-control validar" id="DriverTag1" name="DriverTag1"
                                autocomplete="off" placeholder="Tag">
                        </div>
                    </div>
                    <div class="col-md-5 hijo" style="    ">
                        <label clas="" for="">Vehicle Tag *</label>
                        <div class="input-group autocomplete" id="divVehicleTag1">
                            <input type="text" class="form-control validar" id="VehicleTag1" name="VehicleTag1"
                                autocomplete="off" placeholder="Tag">
                        </div>
                    </div>
                    <div class="col-md-5 hijo" style="    ">
                        <label clas="" for="">Department *</label>
                      
                                    <select style="display:inline;" name="department" id="department"
                                        class="form-control validarCombo" data-toggle="tooltip" data-placement="right">
                                        <option value="Select Option" selected disabled>Select Option</option>
                                    </select>

                               
                    </div>
                    <div class="col-md-5 hijo" style="    ">
                        <label clas="" for="">Cost Center *</label>
                        <select style="display:inline;" name="cost" id="cost"
                                        class="form-control validarCombo" data-toggle="tooltip" data-placement="right">
                                        <option value="Select Option" selected disabled>Select Option</option>
                                    </select>
                    </div>
                    <div class="col-md-10 hijo" style="    ">
                        <label clas="" for="">Start Date - End Date</label>
                        <div class="input-group" id="divFechas1">
                            <div class="input-group col-md-6" id="hraini">
                                <input type='text' class="form-control validar" id="hraini1" data-toggle="tooltip"
                                    data-placement="right" title=""
                                    data-original-title="Enter the start time for the schedule" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                            </div>
                            <div class="input-group col-md-6" id="hrafin">
                                <input type='text' class="form-control validar" id="hrafin1" data-toggle="tooltip"
                                    data-placement="right" title=""
                                    data-original-title="Enter the start time for the schedule" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                            </div>
                        </div>
                    </div>
                    <div class="hijo" style="margin-left: 25%;">
                        <button id="ApplyFilter" type="button" class="btn btn-primary " onclick="FiltrosDespachos();">
                            <span class="" id="icon_enabled" style="color:white;"> &#9776; Apply filter</button>


                            <button id="Clearfilter" type="button" class="btn btn-danger " onclick="ClearFilter();">
                            <span class="" id="icon_enabled" style="color:white;"> &#9776; Clear filter</button>
                    </div>
                </div>


                <div id="mySidenavTotales" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="col-md-10 hijo">
                        <label clas="" for="">Start Date - End Date</label>
                        <div class="input-group" id="divFechasTotales">
                            <div class="input-group col-md-6" id="horaInicio">
                                <input type='text' class="form-control validar" id="hrinicio" data-toggle="tooltip"
                                    data-placement="right" title=""
                                    data-original-title="Enter the start time for the schedule" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                            </div>
                            <div class="input-group col-md-6" id="horaFinal">
                                <input type='text' class="form-control validar" id="hrfinal" data-toggle="tooltip"
                                    data-placement="right" title=""
                                    data-original-title="Enter the start time for the schedule" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                            </div>
                        </div>
                    </div>

                    <div class="hijo" style="margin-left: 27%;">
                        <button id="ApplyFilterTablaTotales" type="button" class="btn btn-primary " onclick="GetxReporteFiltro();">
                            <span class="" id="icon_enabled" style="color:white;"> &#9776; Apply filter</button>
                    </div>


                    
                </div>





















                <div class="col-xl-10" id="PanelGraphs">

                    <!-- Title -->
                    <!-- Description -->
                    <!-- Section: Live preview -->
                    <section class="mx-2 pb-3">
                        <ul class="nav nav-tabs" id="myTabGrafica" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Diesel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Gasoline</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div id="mainDiesel" style="width: 1280px; height: 600px">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div id="mainGasoline" style="width: 1280px; height: 600px">
                                </div>


                            </div>







                    </section>
                    <!-- Section: Live preview -->
                </div>
            </div>

            <!-- Grid column -->
        </div>
    </div>

    <div class="col-xl-12" id="PanelDatasheet">
        <br>
        <br>
        <section class="mx-2 pb-3">

           

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show" id="tabla1" role="tabpanel" aria-labelledby="home-tab">
                    <div class="col-sm-12">
                        <div id="datatable-buttons_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                            <button class="btn btn-success" onclick="OpenModalCol('Excel');"> <i
                                    class="fa fa-file-excel-o"></i></button>
                            <button class="btn btn-danger" onclick="OpenModalCol('PDF');"><i
                                    class="fa fa-file-pdf-o"></i></button>
                        </div>

                        <div class="card-box table-responsive">
                            <div id="datatable-buttons_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                <table id="datatable-buttons2"
                                    class="table table-striped table-bordered dataTable no-footer dtr-inline"
                                    style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 380px;"
                                                >COST-CENTER
                                            </th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 155px;"
                                                >QUANTITY</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="tabla2" role="tabpanel" aria-labelledby="home-tab">
                    <div class="col-sm-12">
                        <div id="datatable-buttons_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                            <button class="btn btn-success" onclick="OpenModalColG('Excel');"> <i
                                    class="fa fa-file-excel-o"></i></button>
                            <button class="btn btn-danger" onclick="OpenModalColG('PDF');"><i
                                    class="fa fa-file-pdf-o"></i></button>
                        </div>

                        <div class="card-box table-responsive">
                            <div id="datatable-buttons_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                <table id="datatable-buttons222"
                                    class="table table-striped table-bordered dataTable no-footer dtr-inline"
                                    style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 380px;"
                                                >COST-CENTER
                                            </th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 155px;"
                                                >QUANTITY</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Section: Live preview -->
    </div>
</div>









<div class="tbl_container1">
    <table id="tablaC" class="table table-striped" cellspacing="0" width="100%" style="border: 1px solid black;display:none">
        <thead>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"><img
                        src="<?php echo e(url('/')); ?>/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=3
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    GLOBAL DIESEL CONSUMPTIONS REPORT</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TGF-TANK FARM</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
               
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTT"></th>
               
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTT"></th>
               
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
               
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #ffffff;"></th>
                <th colspan=3 style="text-align: right;background: #ffffff; color:#004D9C;"></th>
            </tr>
            <tr> 
                <th colspan=3 style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">START DATE</th>
                <th colspan=3 style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">END DATE</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;" id="fechaInicioG">PARAMETER F1</th>
                <th colspan=3 style="text-align: left;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;" id="fechafinG">PARAMETER F2</th>
            </tr>
          
          
           
            <tr>
               
                <th    colspan=3 class="tcostcenter"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COST CENTER</th>
                <th  colspan=3 class="tquantity"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TOTAL QUANTITY</th>
               
            </tr>
        </thead>
        <tbody id="emp_body1">
        </tbody>
        <tr>
           
            <th colspan=3
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            <th colspan=3 style="text-align: right;background: #233461;color:#fff"><img
            src="<?php echo e(url('/')); ?>/images/logogrisM.png"></th>
        </tr>
        <tr>
            
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
           
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>
</div>
 







<div class="tbl_container1">
<table id="tablaC1" class="table table-striped" cellspacing="0" width="100%" style="border: 1px solid black;display:none">
        <thead>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"><img
                        src="<?php echo e(url('/')); ?>/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=3
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    GLOBAL GASOLINE CONSUMPTIONS REPORT</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TGF-TANK FARM</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
               
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTTT"></th>
               
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTTT"></th>
               
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
               
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #ffffff;"></th>
                <th colspan=3 style="text-align: right;background: #ffffff; color:#004D9C;"></th>
            </tr>
            <tr> 
                <th colspan=3 style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">START DATE</th>
                <th colspan=3 style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">END DATE</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;" id="fechaInicioG1">PARAMETER F1</th>
                <th colspan=3 style="text-align: left;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;" id="fechafinG1">PARAMETER F2</th>
            </tr>
          
          
           
            <tr>
               
                <th    colspan=3 class="tcostcenter"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COST CENTER</th>
                <th  colspan=3 class="tquantity"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TOTAL QUANTITY</th>
               
            </tr>
        </thead>
        <tbody id="emp_body1G">
        </tbody>
        <tr>
           
            <th colspan=3
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            <th colspan=3 style="text-align: right;background: #233461;color:#fff"><img
            src="<?php echo e(url('/')); ?>/images/logogrisM.png"></th>
        </tr>
        <tr>
            
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
           
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>

</div>

<script type="text/javascript">

var ArrayCentroCostosDiesel=[];
    var ArrayCantidadDiesel=[];
    var ArrayCentroCostosDieselGas=[];
    var ArrayCantidadGas=[];




var tipoArchivo="";
var hrInicioTT;
var hrFinalTT;
var campoTipoTT;
var combustibleTT;


var arrayFechaReporte;
var arrayDatosReporte = [];

var arrayDatosG = [];
var arrayNombresG = [];
var arrayFechasG = [];

var fechasC = [];
var datos = [];
var objeto = {};
var seriess = {};
var nombres = [];
// based on prepared DOM, initialize echarts instance
var array1 = [];
var obj = "";
var arrayGral = {};
var datos;
var myChartDiesel = echarts.init(document.getElementById('mainDiesel'));
var myChartGasoline = echarts.init(document.getElementById('mainGasoline'));
var option2;

TablaX1 = "";
TablaX2 = "";
var arrCustomers1 = [];
var arrTagChof = [];
var arrTagVehi = [];

var ArrayFechasTF = [];
var ArrayGasolinaTF = [];
var ArrayDieselTF = [];
var ArrayTrnTF = [];
var bandera = false;
var centroCostos=[];

$(document).ready(function() {
    init_DataTablesDiesel();
    init_DataTablesGasoline();

    var FechaP = new Date();

    var fechaInicial= new Date(FechaP.getFullYear(),FechaP.getMonth(),1);
    var fechaFinal= new Date(FechaP.getFullYear(),FechaP.getMonth()+1,0);     

    fechaInicial= moment(fechaInicial).format('YYYY-MM-DD');
    fechaFinal= moment(fechaFinal).format('YYYY-MM-DD');
    
    hrInicioTT =fechaInicial;
    hrFinalTT = fechaFinal;
                
    $("#hrinicio").val(hrInicioTT);
    $("#hrfinal").val(hrFinalTT);

    ReporteGlobalDiesel(hrInicioTT,hrFinalTT);
    ReporteGlobalGasoline(hrInicioTT,hrFinalTT);

    $('#PanelDatasheet').hide();
});

$(document).click(function(event){
    var id =event.target.id;
        if(id=='profile-tab'){
        closeNav();
        }
        if(id=='home-tab'){
        closeNav();
        }
})

function showChart(show) {
    if (show == 1) {
        $('#PanelGraphs').show();
        $('#PanelDatasheet').hide();
        $("#SelectTable").hide();
        if($('.nav-tabs .active').text()=='Diesel'){
            
            $('#tabla1').show(); 
            $('#tabla2').hide(); 
        }else{
            $('#tabla1').hide(); 
            $('#tabla2').show(); 
        }
    }
    if (show == 0 ){
        
        $('#PanelGraphs').hide();
        $('#PanelDatasheet').show();
        $("#SelectTable").show();
        if($('.nav-tabs .active').text()=='Gasoline'){
            $('#tabla1').hide(); 
            $('#tabla2').show(); 
        }else{
            $('#tabla1').show(); 
            $('#tabla2').hide(); 
        }
            }
}


function tableSelected(){
    if($('#SelectTable').val()=='1'){
        $('#tabla1').show(); 
        $('#tabla2').hide(); 
    }else{
        $('#tabla1').hide(); 
        $('#tabla2').show(); 
    }
}
/*
function CreateExcelOrPdf(){
if(tipoArchivo=='Excel'){
    columnasreporteTF();
}
if(tipoArchivo=='PDF'){
    generatePDF();
}
}
*/

function ClearFilter(){
$("#comboTipoReporte").val(0)
$("#department").val('Select Option');
$("#cost").val('Select Option');
$("#comboTipoFuel").val(0)
$("#company1").val("");
$("#DriverTag1").val("");
$("#VehicleTag1").val("");
$("#hraini1").val("");
$("#hrafin1").val("");
}



function columnasreporteTF() {
llenarTablaExcel();


descargarExcel();

}
function columnasreporteG() {
llenarTablaExcelG();


exceller1();

}


function LimpiarChecks(){
$("#DEPARTMENT").prop("checked", false);

$("#COSTCENTER").prop("checked", false);

$("#COMPANY").prop("checked", false);

$("#DATE").prop("checked", false);

$("#FUEL").prop("checked", false);

$("#QUANTITY").prop("checked", false);

$("#DRIVERNAME").prop("checked", false);

$("#VEHICLE").prop("checked", false);

$("#ALL").prop("checked", false);

}

function llenarTablaExcel() {
   
   
   

    $("#emp_body1").empty();
    var tr;
    for (var i = 0; i < datosReporteGlobalDiesel[0].ArrayCentroCostos.length; i++) {
        tr = $('<tr/>');
       
            tr.append(
            "<td  colspan=3 class='tcostcenter' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            datosReporteGlobalDiesel[0].ArrayCentroCostos[i] + "</td> ");
      
        

            tr.append(
            "<td  colspan=3 class='tquantity' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            datosReporteGlobalDiesel[0].ArrayCantidad[i] + "</td>");
       
        
        
        

        $('#emp_body1').append(tr);
    }
}
function llenarTablaExcelG() {
   
   
   

   $("#emp_body1G").empty();
   var tr;
   for (var i = 0; i < datosReporteGlobalGasoline[0].ArrayCentroCostos.length; i++) {
       tr = $('<tr/>');
      
           tr.append(
           "<td  colspan=3 class='tcostcenter' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
           datosReporteGlobalGasoline[0].ArrayCentroCostos[i] + "</td> ");
     
       

           tr.append(
           "<td  colspan=3 class='tquantity' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
           datosReporteGlobalGasoline[0].ArrayCantidad[i] + "</td>");
      
       
       
       

       $('#emp_body1G').append(tr);
   }
}
function DosDecimales(n){
let t=n.toString();
let regex=/(\d*.\d{0,2})/;
return t.match(regex)[0];

}
function llenarTablaDiesel() {
    try {
        var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var StatusCutomer = "";
    var NameProd = "";
    var colorboton = "";
    var statusVehicle = "";
    TablaX1.clear().draw();
    var htmlBotonStatus = "";
    for (var i = 0; i < datosReporteGlobalDiesel[0].ArrayCentroCostos.length; i++) {

if(datosReporteGlobalDiesel[0].ArrayCantidad[i]==0 || datosReporteGlobalDiesel[0].ArrayCantidad[i]=="0"){
    datosReporteGlobalDiesel[0].ArrayCantidad[i]="0";

}else{
    datosReporteGlobalDiesel[0].ArrayCantidad[i]= DosDecimales( datosReporteGlobalDiesel[0].ArrayCantidad[i]);
}

        TablaX1.row.add([
            String(((datosReporteGlobalDiesel[0].ArrayCentroCostos[i] == "" || datosReporteGlobalDiesel[0].ArrayCentroCostos[i] == null) ? "" : datosReporteGlobalDiesel[0].ArrayCentroCostos[i])),
            String(((datosReporteGlobalDiesel[0].ArrayCantidad[i] == "" || datosReporteGlobalDiesel[0].ArrayCantidad[i] == null) ? "" : datosReporteGlobalDiesel[0].ArrayCantidad[i])),
            
        ]);
    }
    TablaX1.column('1:visible').draw()
    } catch (error) {
        
    }

}
function llenarTablaGasoline() {
    try {
    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var StatusCutomer = "";
    var NameProd = "";
    var colorboton = "";
    var statusVehicle = "";
    TablaX2.clear().draw();
    var htmlBotonStatus = "";
    for (var i = 0; i < datosReporteGlobalGasoline[0].ArrayCentroCostos.length; i++) {

if(datosReporteGlobalGasoline[0].ArrayCantidad[i]==0 || datosReporteGlobalGasoline[0].ArrayCantidad[i]=="0"){
    datosReporteGlobalGasoline[0].ArrayCantidad[i]="0";

}else{
    datosReporteGlobalGasoline[0].ArrayCantidad[i]= DosDecimales( datosReporteGlobalGasoline[0].ArrayCantidad[i]);
}

        TablaX2.row.add([
            String(((datosReporteGlobalGasoline[0].ArrayCentroCostos[i] == "" || datosReporteGlobalGasoline[0].ArrayCentroCostos[i] == null) ? "" : datosReporteGlobalGasoline[0].ArrayCentroCostos[i])),
            String(((datosReporteGlobalGasoline[0].ArrayCantidad[i] == "" || datosReporteGlobalGasoline[0].ArrayCantidad[i] == null) ? "" : datosReporteGlobalGasoline[0].ArrayCantidad[i])),
            
        ]);
    }
    TablaX2.column('1:visible').draw()
    } catch (error) {
        
    }

}

var datosReporteGlobalDiesel;

function ReporteGlobalDiesel(StartDate, EndDate) {
    //$.LoadingOverlay("show");
    ArrayCentroCostosDiesel=[];
    ArrayCantidadDiesel=[];
    if (StartDate == "" && EndDate == "") {
        swal("Error", "No filter selected", "error");
    } else {
        var para = {
            "FechaIni": StartDate,
            "FechaFin": EndDate,
            "Combustible": "Diesel",
        };
        try {
            var sURL = IPWS + "GetReporteGlobal";
            $.ajax({
                url: sURL,
                dataType: "json",
                type: "GET",
                data: para,
                async: false,
                success: function(data) {
                    datosReporteGlobalDiesel = data.lstReporteGlobal;
                    //$.LoadingOverlay("hide");
                    //closeNav();
                    if (datosReporteGlobalDiesel.length > 0) {
                        ArrayCentroCostosDiesel = datosReporteGlobalDiesel[0].ArrayCentroCostos;
                        

                        for(var i=0; i<datosReporteGlobalDiesel[0].ArrayCantidad.length;i++){
                            ArrayCantidadDiesel .push(DosDecimales(datosReporteGlobalDiesel[0].ArrayCantidad[i]));
                        }

                        fillGraphDieselGlobal();
                        llenarTablaDiesel();
                        //llenarTablaExcel();         
                        mostrarParametrosTT();
                        
                    } else {
                        $.LoadingOverlay("hide");
                        ArrayCentroCostosDiesel = "";
                        ArrayCantidadDiesel = "";
                        myChartDiesel.clear();
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {  $.LoadingOverlay("hide");}
            });
        } catch (error) {  $.LoadingOverlay("hide");}
    }
}
var datosReporteGlobalGasoline;

function ReporteGlobalGasoline(StartDate, EndDate) {
    //$.LoadingOverlay("show");
    ArrayCentroCostosGas=[];
    ArrayCantidadGas=[];
    if (StartDate == "" && EndDate == "") {
        swal("Error", "No filter selected", "error");
    } else {
        var para = {
            "FechaIni": StartDate,
            "FechaFin": EndDate,
            "Combustible": "Regular",
        };
        try {
            var sURL = IPWS + "GetReporteGlobal";
            $.ajax({
                url: sURL,
                dataType: "json",
                type: "GET",
                data: para,
                async: false,
                success: function(data) {
                    datosReporteGlobalGasoline = data.lstReporteGlobal;
                    //$.LoadingOverlay("hide");
                    //closeNav();
                    if (datosReporteGlobalGasoline.length > 0) {
                        ArrayCentroCostosGas = datosReporteGlobalGasoline[0].ArrayCentroCostos;

                        for(var i=0; i<datosReporteGlobalGasoline[0].ArrayCantidad.length;i++){
                            ArrayCantidadGas .push(DosDecimales(datosReporteGlobalGasoline[0].ArrayCantidad[i]));
                          
                        }
                        
                     

                        fillGraphGasolineGlobal();
                        llenarTablaGasoline();
                        //llenarTablaExcel();         
                        mostrarParametros();
                    } else {
                        $.LoadingOverlay("hide");
                        ArrayCentroCostosGas = "";
                        ArrayCantidadGas = "";
                        myChartGasoline.clear();
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {  $.LoadingOverlay("hide");}
            });
        } catch (error) {  $.LoadingOverlay("hide");}
    }
}
function gerenarGrapoh2(){
 //12365478998778998778984565221151245
 var FechaP = new Date();
                FechaP.setDate(FechaP.getDate() - 30 );
                let dayF=FechaP.getDate();
                let monthF=FechaP.getMonth()+1;
                let yearF=FechaP.getFullYear();
                var fechaInicial= yearF + "-" + monthF + "-" + dayF;
                

                let date=new Date();
                let day=date.getDate();
                let month=date.getMonth()+1;
                let year=date.getFullYear();              
                var fechaFinal= year + "-" + month + "-" + day;

                hrInicioTT =fechaInicial;
                hrFinalTT = fechaFinal;
                
                $("#hrinicio").val(fechaFinal);
                $("#hrfinal").val(fechaFinal);
                

            GetxReporte(hrInicioTT, hrFinalTT, campoTipoTT, combustibleTT);
            llenarTablaTotales();
            fillGraphGas11();
            llenarTablaExcel();
            mostrarParametrosTT();
            llenarTablaConsums();
            //GetxReporte('2020-11-19', '2020-11-30', 'CentroCostos', 'Diesel');
}
function mostrarParametros() {
    var StartDateTT = $("#hrinicio").val();
    var EndDateTT = $("#hrfinal").val();
    

   
    document.getElementById('fechaReporteTTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD,YYYY');

        document.getElementById('horareporteTTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');

    if ($("#hrinicio").val() == "") {
        $('#fechaInicioG1').text("");
    } else {
        $('#fechaInicioG1').text($("#hrinicio").val());
    }
    if ($("#hrfinal").val() == "") {
        $('#fechafinG1').text("");
    } else {
        $('#fechafinG1').text($("#hrfinal").val());
    }
}

function mostrarParametrosTT() {
    var StartDateTT = $("#hrinicio").val();
    var EndDateTT = $("#hrfinal").val();
    

   
    document.getElementById('fechaReporteTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD,YYYY');

        document.getElementById('horareporteTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');

    if ($("#hrinicio").val() == "") {
        $('#fechaInicioG').text("");
    } else {
        $('#fechaInicioG').text($("#hrinicio").val());
    }
    if ($("#hrfinal").val() == "") {
        $('#fechafinG').text("");
    } else {
        $('#fechafinG').text($("#hrfinal").val());
    }
    
}
var datosxReporte;
var arrayPadre;
var enca;
var ArrayColumna1 = [];
var ArrayColumna2 = [];

function GetxReporte(FechaIni, FechaFin, columnaBuscar, TipoCombustible) {
    if (FechaIni == "" && FechaFin == "" && columnaBuscar == "" && TipoCombustible == "") {
        swal("Error", "No filter selected", "error");
    } else {
        var para = {
            "FechaIni": FechaIni,
            "FechaFin": FechaFin,
            "columnaBuscar": columnaBuscar,
            "TipoCombustible": TipoCombustible,
        };
        try {
            var sURL = IPWS + "GetDatosProc";
            $.ajax({
                url: sURL,
                dataType: "json",
                type: "GET",
                data: para,
                async: false,
                success: function(data) {
                    datosxReporte = data.lstProc;
                    /*
                    if (datosxReporte == "") {
                        $("#datatable-buttons22").empty();
                        $("#tbodydatatable-buttons22").empty();
                        $("#filasTable").empty();
                        $("#filasTable1").empty();
                        nombres = [];
                        fechasC = [];
                        myChartGasoline.clear();
                    }
                    */
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {}
            });
        } catch (error) {}
    }
}

function GetxReporteFiltro() {
    closeNav();
    hrInicioTT = $("#hrinicio").val();
    hrFinalTT = $("#hrfinal").val();
    
    ReporteGlobalDiesel(hrInicioTT, hrFinalTT);
    ReporteGlobalGasoline(hrInicioTT, hrFinalTT);
    $("#encaTT").empty();
    $("#tbodydatatable-buttons222").empty();
    
    $("#filasTable").empty();
    $("#filasTable1").empty();
    nombres = [];
    fechasC = [];
    //myChartGasoline.clear();
      
    //llenarTablaTotales();
    fillGraphDieselGlobal();
    fillGraphGasolineGlobal();
    mostrarParametrosTT();
    mostrarParametros();
    //llenarTablaConsums();
}

function llenarTablaConsums() {
try {
    var longitud = 0;
    var longitudFechas = 0;
    var total = "";
    longitud = datosxReporte.length - 1;
    arrayFechasG.push(datosxReporte[longitud].ArrayFechas);
    arrayFechasG[0].splice(0, 1);
    longitudFechas = arrayFechasG[0].length - 1;
    //TablaX2.clear().draw();
    for (var i = 0; i < datosxReporte.length; i++) {
        arrayNombresG.push(datosxReporte[i].ArrayProc[0]);
        arrayDatosG.push(datosxReporte[i].ArrayProc);
        arrayDatosG[i].splice(0, 1);

    }
    var tr;
    for (var i = 0; i < arrayNombresG.length; i++) {
        for (var j = 0; j < arrayFechasG[0].length; j++) {
            if (arrayFechasG[0][j] == "TOTAL") {

                total = "<label class='label label-success'> TOTAL </label>";
            } else {
                total = arrayFechasG[0][j];
            }
            //$("#tbodyTT").empty();
            tr = $('<tr/>');
            tr.append("<td class='FilterName' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
                arrayNombresG[i] + "</td> ");
            tr.append("<td class='Amount' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
                arrayDatosG[i][j] + "</td>");
            tr.append("<td class='Date' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
                total + "</td>");

            $('#tbodyTT').append(tr);


        }
    }
} catch (error) {
    
}

}
var customer;

function FillCustomer() {

    try {
        var sURL = IPWS + "GetClientes";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                customer = data.lstClients;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });
        for (var i = 0; i < customer.length; i++) {

            arrCustomers1.push(customer[i].den);
        }
    } catch (error) {

    }

}
var choferes;

function FillDriverTag() {

    try {
        var sURL = IPWS + "GetChoferes";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                choferes = data.lstChoferes;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });
        for (var i = 0; i < choferes.length; i++) {

            arrTagChof.push(choferes[i].tag);
        }
    } catch (error) {

    }

}

var vehicles;

function FillVehicleTag() {

    try {
        var sURL = IPWS + "GetVehiculos";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                vehicles = data.lstVehicles;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });
        for (var i = 0; i < vehicles.length; i++) {

            arrTagVehi.push(vehicles[i].tag);
        }
    } catch (error) {

    }

}

function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) {
            return false;
        }
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });

    function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }

    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function(e) {
        closeAllLists(e.target);
    });
}

function openNav() {
    var ventanaSeleccionada = $('.nav-tabs .active').text();
    if (ventanaSeleccionada == "Diesel") {
        document.getElementById("mySidenavTotales").style.width = "600px";
        
       
    }
    if (ventanaSeleccionada == "Gasoline") {
        document.getElementById("mySidenavTotales").style.width = "600px";  
       
    }
}

function closeNav() {
    var ventanaSeleccionada = $('.nav-tabs .active').text();
    if (ventanaSeleccionada == "Diesel") {
        document.getElementById("mySidenavTotales").style.width = "0";
    }
    if (ventanaSeleccionada == "Gasoline") {
        document.getElementById("mySidenavTotales").style.width = "0";
    }
}
$(function() {
    $('#hraini').datetimepicker({
        defaultDate: new Date(),
        format: 'YYYY-MM-DD'

    });
    $('#hrafin').datetimepicker({
        defaultDate: new Date(),
        format: 'YYYY-MM-DD'
    });
    $("#hraini1").val("");
    $("#hrafin1").val("");



    $('#horaInicio').datetimepicker({
        defaultDate: new Date(),
        format: 'YYYY-MM-DD'

    });
    $('#horaFinal').datetimepicker({
        defaultDate: new Date(),
        format: 'YYYY-MM-DD'
    });
    //$("#hrinicio").val();
    //$("#hrfinal").val("");
});

function init_DataTablesDiesel() {
    if (typeof($.fn.DataTable) === 'undefined') {
        return;
    }
    var handleDataTableButtons = function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;
        if ($("#datatable-buttons2").length) {
            TablaX1 = $("#datatable-buttons2").DataTable({
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],
                buttons: [{
                        footer: true,
                        title: 'Dispatches TF_' + today,
                        filename: 'Dispatches TF_' + today,
                        exportOptions: {
                            orthogonal: 'export'
                        },
                        customize: function(xlsx) {
                            var sheet1 = xlsx.xl['styles.xml'];
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            $('row c', sheet).attr('s', '25');
                            $('row:first c', sheet).attr('s', '47');
                            $('row* c[r]', sheet).each(function() {
                                if ($('is t', this).text().match(
                                        /(?:^|\b)(cover)(?=\b|$)/gmi)) {
                                    $(this).attr('s', '20');
                                }
                            });
                            var col = $('col', sheet);
                            col.each(function() {
                                $(this).attr('width', 10);
                            });
                            $(col[0]).attr('width', 20);
                            $(col[1]).attr('width', 20);
                            $(col[2]).attr('width', 20);
                            var tagName = sheet1.getElementsByTagName('sz');
                            for (i = 0; i < tagName.length; i++) {
                                tagName[i].setAttribute("val", "12")
                            }
                        }
                    },
                    {
                        footer: true,
                        title: 'Dispatches TF_' + today,
                        filename: 'Dispatches TF_' + today,
                        exportOptions: {
                            columns: [0, 1, 2],
                        },
                        tableHeader: {
                            alignment: 'center'
                        },
                        customize: function(doc) {
                            doc.content[1].margin = [120, 0, 120, 0] //left, top, right, bottom
                        }
                    }
                ],
                responsive: true,
            });
        }
    };
    TableManageButtons = function() {
        "use strict";
        return {
            init: function() {
                handleDataTableButtons();
            }
        };
    }();
    $('#datatable').dataTable();

    $('#datatable-keytable').DataTable({
        keys: true
    });

    $('#datatable-responsive').DataTable();

    $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
    });

    $('#datatable-fixed-header').DataTable({
        fixedHeader: true
    });

    var $datatable = $('#datatable-checkbox');

    $datatable.dataTable({
        'order': [
            [1, 'asc']
        ],
        'columnDefs': [{
            orderable: false,
            targets: [0]
        }]
    });
    $datatable.on('draw.dt', function() {
        $('checkbox input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
        });
    });
    TableManageButtons.init();
};
function init_DataTablesGasoline() {
    if (typeof($.fn.DataTable) === 'undefined') {
        return;
    }
    var handleDataTableButtons = function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;
        if ($("#datatable-buttons222").length) {
            TablaX2 = $("#datatable-buttons222").DataTable({
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],
                buttons: [{
                        footer: true,
                        title: 'Dispatches TF_' + today,
                        filename: 'Dispatches TF_' + today,
                        exportOptions: {
                            orthogonal: 'export'
                        },
                        customize: function(xlsx) {
                            var sheet1 = xlsx.xl['styles.xml'];
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            $('row c', sheet).attr('s', '25');
                            $('row:first c', sheet).attr('s', '47');
                            $('row* c[r]', sheet).each(function() {
                                if ($('is t', this).text().match(
                                        /(?:^|\b)(cover)(?=\b|$)/gmi)) {
                                    $(this).attr('s', '20');
                                }
                            });
                            var col = $('col', sheet);
                            col.each(function() {
                                $(this).attr('width', 10);
                            });
                            $(col[0]).attr('width', 20);
                            $(col[1]).attr('width', 20);
                            $(col[2]).attr('width', 20);
                            var tagName = sheet1.getElementsByTagName('sz');
                            for (i = 0; i < tagName.length; i++) {
                                tagName[i].setAttribute("val", "12")
                            }
                        }
                    },
                    {
                        footer: true,
                        title: 'Dispatches TF_' + today,
                        filename: 'Dispatches TF_' + today,
                        exportOptions: {
                            columns: [0, 1, 2],
                        },
                        tableHeader: {
                            alignment: 'center'
                        },
                        customize: function(doc) {
                            doc.content[1].margin = [120, 0, 120, 0] //left, top, right, bottom
                        }
                    }
                ],
                responsive: true,
            });
        }
    };
    TableManageButtons = function() {
        "use strict";
        return {
            init: function() {
                handleDataTableButtons();
            }
        };
    }();
    $('#datatable').dataTable();

    $('#datatable-keytable').DataTable({
        keys: true
    });

    $('#datatable-responsive').DataTable();

    $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
    });

    $('#datatable-fixed-header').DataTable({
        fixedHeader: true
    });

    var $datatable = $('#datatable-checkbox');

    $datatable.dataTable({
        'order': [
            [1, 'asc']
        ],
        'columnDefs': [{
            orderable: false,
            targets: [0]
        }]
    });
    $datatable.on('draw.dt', function() {
        $('checkbox input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
        });
    });
    TableManageButtons.init();
};
function fillGraphDieselGlobal() {
    
    myChartDiesel.clear();
    option = {
        color: ['#2d4453'],
        title: {
            text: 'GLOBAL DIESEL CONSUMPTIONS REPORT\n'
            
        },
        legend: {
            data: ['Diesel']
        },
        toolbox: {
            itemSize:25,
             //y: 'bottom',
            
            feature: {
                mark: {
                    show: true
                },
                magicType: {
                   
                    iconStyle:{
borderColor:'#fd0808'

                    },
                   
                    show: true,
                    type: ["line", "bar"],
                    
                   
                    title: {
                        line: "Line",
                        
                        bar: "Bar",

                    }
                },
                dataView: {
                    iconStyle:{
borderColor:'#fd0808'

                    },
                    title: 'DataView',
                    lang: ['DataView', 'Close', 'Refresh']
                },
                saveAsImage: {
                    iconStyle:{
borderColor:'#fd0808'

                    },
                    title: 'Save as image',
                    name: 'Dispatch',
                    pixelRatio: 2
                }
            }
        },
        tooltip: {
            
            




        },

        
        xAxis: {
            data: ArrayCentroCostosDiesel,
            splitLine: {
                show: false
            }
        },

        yAxis: {},
        dataZoom: [{
                show: true,
                type: 'slider',
                start: 0,
                end: 100,
                filterMode: 'filter'
            },
            {
                type: 'inside',
                start: 0,
                end: 100
            },
            {
                show: false,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series: [{

            name: 'Diesel',
           
            type: 'bar',
          
            symbolSize:20,
            data: ArrayCantidadDiesel ,
           
            animationDelay: function(idx) {
                return idx * 10;
            }
        }],
        animationEasing: 'elasticOut',
        animationDelayUpdate: function(idx) {
            return idx * 5;
        }
    };
    myChartDiesel.setOption(option);
   
}

function fillGraphGasolineGlobal() {
  
    for(var i=0; i<ArrayCentroCostosGas.length; i++){
        centroCostos.push(ArrayCentroCostosGas[i]);
    }
    myChartGasoline.clear();
    option = {
        color: ['#dc3545'],
        title: {
            text: 'GLOBAL GASOLINE CONSUMPTIONS REPORT \n'
            
        },
        legend: {
            data:['Gasoline','America','Canada']
        },
        toolbox: {
            itemSize:25,
             //y: 'bottom',
            
            feature: {
                mark: {
                    show: true
                },
                magicType: {
                   
                    iconStyle:{
borderColor:'#fd0808'

                    },
                   
                    show: true,
                    type: ["line", "bar"],
                    
                   
                    title: {
                        line: "Line",
                        
                        bar: "Bar",

                    }
                },
                dataView: {
                    iconStyle:{
borderColor:'#fd0808'

                    },
                    title: 'DataView',
                    lang: ['DataView', 'Close', 'Refresh']
                },
                saveAsImage: {
                    iconStyle:{
borderColor:'#fd0808'

                    },
                    title: 'Save as image',
                    name: 'Dispatch',
                    pixelRatio: 2
                }
            }
        },
        tooltip: {
            
            




        },

        
        xAxis: {
            data: ArrayCentroCostosGas,
            splitLine: {
                show: false
            }
        },

        yAxis: {},
        dataZoom: [{
                show: true,
                type: 'slider',
                start: 0,
                end: 100,
                filterMode: 'filter'
            },
            {
                type: 'inside',
                start: 0,
                end: 100
            },
            {
                show: false,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series: [
            
            {

            name: 'Gasoline',
           
            type: 'bar',
          
            symbolSize:20,
            data: ArrayCantidadGas ,
           
            animationDelay: function(idx) {
                return idx * 10;
            }
        }

    
    ],
        animationEasing: 'elasticOut',
        animationDelayUpdate: function(idx) {
            return idx * 5;
        }
    };
    myChartGasoline.setOption(option);
   
}
autocomplete(document.getElementById("company1"), arrCustomers1);
autocomplete(document.getElementById("DriverTag1"), arrTagChof);
autocomplete(document.getElementById("VehicleTag1"), arrTagVehi);

function OpenModalCol(open) {
    if(open=='Excel'){
       
    columnasreporteTF();
}
if(open=='PDF'){

    swal({
                title: "ARE YOU SURE",
                text: "TO WANT DOWNLOAD THIS DOCUMENT?",
                icon: "warning",
                buttons: true,

            })
            .then((willDelete) => {
                if (willDelete) {

                  
                    generatePDF();

                } else {
                    swal("without changes!");
                }
            });

    
}
   
}
function OpenModalColG(open) {
    if(open=='Excel'){
       
    columnasreporteG();
}
if(open=='PDF'){

    swal({
                title: "ARE YOU SURE",
                text: "TO WANT DOWNLOAD THIS DOCUMENT?",
                icon: "warning",
                buttons: true,

            })
            .then((willDelete) => {
                if (willDelete) {

                  
                    generatePDFG();

                } else {
                    swal("without changes!");
                }
            });
    
}
   
}
function descargarExcel(){



    swal({
                title: "ARE YOU SURE",
                text: "TO WANT DOWNLOAD THIS DOCUMENT?",
                icon: "warning",
                buttons: true,

            })
            .then((willDelete) => {
                if (willDelete) {

                    var uri = 'data:application/vnd.ms-excel;base64,',
        template =
        '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
        base64 = function(s) {
            return window.btoa(unescape(encodeURIComponent(s)))
        },
        format = function(s, c) {
            return s.replace(/{(\w+)}/g, function(m, p) {
                return c[p];
            })
        }
    var toExcel = document.getElementById("tablaC").innerHTML;
    var ctx = {
        worksheet: name || '',
        table: toExcel
    };
    var link = document.createElement("a");
    var fecha=moment(new Date()).subtract(5, 'hours').format('MMMM,DD,YYYY');
    link.download = "GLOBAL_DIESEL_CONSUMPTIONS_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click();

                  


                } else {
                    swal("without changes!");
                }
            });



   
}


function exceller1() {

   
  
        swal({
                title: "ARE YOU SURE",
                text: "TO WANT DOWNLOAD THIS DOCUMENT?",
                icon: "warning",
                buttons: true,

            })
            .then((willDelete) => {
                if (willDelete) {

                    var uri = 'data:application/vnd.ms-excel;base64,',
        template =
        '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
        base64 = function(s) {
            return window.btoa(unescape(encodeURIComponent(s)))
        },
        format = function(s, c) {
            return s.replace(/{(\w+)}/g, function(m, p) {
                return c[p];
            })
        }
    var toExcel = document.getElementById("tablaC1").innerHTML;
    var ctx = {
        worksheet: name || '',
        table: toExcel
    };
    var link = document.createElement("a");
    var fecha=moment(new Date()).subtract(5, 'hours').format('MMMM,DD,YYYY');
    link.download = "GLOBAL_GASOLINE_CONSUMPTIONS_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click(); 

                  


                } else {
                    swal("without changes!");
                }
            });


    


   
}



var datosBMW;

function generatePDF() {

    datos = [];
    detail = [];
    var documentDefinition = {
        pageSize: 'LETTER',
        pageOrientation: 'landscape',
        footer: pieDePagina(),
        content: [
            encabezado(),
            detallesInformacion()
        ],
        styles: {
            tableSubtitulo: {
                fontSize: 10,
                color: 'white',
                alignment: 'center',
                fillColor: '#233461',
                lineHeight: [1],
            },
            tableText: {
                fontSize: 9.5,
                color: '#black',
                alignment: 'center',
            },
        }
    };

    pdfMake.createPdf(documentDefinition).download('GLOBAL_DIESEL_CONSUMPTIONS_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD,YYYY')+'.pdf');
}


var datos = [];
var detalle = [];
function getDatosBMW() {
    var dentro;
  
   
  
    var detail = [
        [
            {
                text: 'COSTCENTER',
                style: 'tableSubtitulo'
            },
            {
                text: 'TOTAL QUANTITY',
                style: 'tableSubtitulo'
            },
            
        ]
    ];
    for (let index = 0; index < datosReporteGlobalDiesel[0].ArrayCentroCostos.length; index++) {
       
            datos.push({
                text: datosReporteGlobalDiesel[0].ArrayCentroCostos[index],
                style: 'tableText'
            });
      
       
       
            datos.push({
                text: datosReporteGlobalDiesel[0].ArrayCantidad[index],
                style: 'tableText'
            });
      
        
        detail.push(datos);
        datos = [];
    }
    return detail;
}

function detallesInformacion() {
    return infDetallesTabla = [{
        margin: [0, 20, 0, 0],
        table: {
            widths: ['*', '*'],
            body: getDatosBMW()
        },
        layout: {
            hLineWidth: function(i, node) {
                return (i === 0 || i === node.table.body.length) ? 1 : 1;
            },
            vLineWidth: function(i, node) {
                return (i === 0 || i === node.table.widths.length) ? 1 : 1;
            },
            hLineColor: function(i, node) {
                return (i === 0 || i === node.table.body.length) ? '#ccc' : '#ccc';
            },
            vLineColor: function(i, node) {
                return (i === 0 || i === node.table.widths.length) ? '#ccc' : '#ccc';
            },
            fillColor: function(rowIndex, node, columnIndex) {
                return (rowIndex % 2 === 0) ? '#dddede' : null;
            }
        }
    }];
}

function pieDePagina() {

    return footer = [{
            canvas: [{
                type: 'line',
                x1: 0,
                y1: 0,
                x2: 800,
                y2: 0,
                lineWidth: 0.1,
                lineColor: '#233461'
            }]
        },
        {
            margin: [0, 5, 0, 0],
            text: 'BMW GROUP',
            fontSize: 10,
            color: '#233461',
            bold: true,
            alignment: 'center'
        },
        {
            table: {
                widths: ['*', '*'],
                body: [
                    [{
                            text: 'Powered by TDCON IIII.0',
                            style: 'tableText',
                            border: [false, false, false, false],
                            alignment: 'center',
                            color: '#233461',
                            bold: true,
                        },
                        {
                            text: moment(new Date()).subtract(5, 'hours').format(
                                'MMMM,DD, YYYY [-] HH:mm:ss') + ' hrs.',
                            style: 'tableText',
                            border: [false, false, false, false],
                            color: '#233461',
                            bold: true,
                            alignment: 'center'
                        },
                    ],
                ]
            },
            layout: {
                hLineWidth: function(i, node) {
                    return (i === 0 || i === node.table.body.length) ? 1 : 1;
                },
                vLineWidth: function(i, node) {
                    return (i === 0 || i === node.table.widths.length) ? 1 : 1;
                },
                hLineColor: function(i, node) {
                    return (i === 0 || i === node.table.body.length) ? '#ccc' : '#ccc';
                },
                vLineColor: function(i, node) {
                    return (i === 0 || i === node.table.widths.length) ? '#ccc' : '#ccc';
                }

            }
        },
    ];
}

function encabezado() {
    return header = [{
        margin: [0, -25, 0, 0],
        table: {
            widths: [130, '*', 130],
            heights: ['auto'],
            body: [
                [{
                        image: 'data:image/png;base64,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',
                        width: 150,
                        height: 50,
                        alignment: 'LEFT',
                        fillColor: '#233461',
                        border: [false, false, false, false],
                    },
                    {
                        ul: datosGenerales(),
                        alignment: 'center',
                        color: '#ffffff',
                        fillColor: '#233461',
                        border: [false, false, false, false],
                    },

                    {
                        image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALIAAABFCAYAAADuHbzJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADMSURBVHhe7dJBEQAgEAAhu1jBQtc/hOZwhwcNWPvMhd+JTILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIBMx9XNJKhbGABRgAAAAASUVORK5CYII=',
                        width: 150,
                        height: 50,
                        alignment: 'right',
                        fillColor: '#233461',
                        border: [false, false, false, false],
                    }

                ],
            ]
        }
    }];
}



function getBase64ImageFromURL(url) {
    return new Promise((resolve, reject) => {
        var img = new Image();
        img.setAttribute("crossOrigin", "anonymous");

        img.onload = () => {
            var canvas = document.createElement("canvas");
            canvas.width = img.width;
            canvas.height = img.height;

            var ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0);

            var dataURL = canvas.toDataURL("image/png");

            resolve(dataURL);
        };

        img.onerror = error => {
            reject(error);
        };

        img.src = url;
    });
}

function datosGenerales() {
    return ul = [{
            text: [{
                text: 'BMW GROUP',
                listType: 'none',
                fontStyle: 'BMWTypeCondensedRegular',
                style: 'listaDatos'
            }],
            listType: 'none'
        },

        {
            text: 'Planta San Luis Potosí',
            fontStyle: 'BMWTypeCondensedRegular',
            listType: 'none',
            style: 'listaDatos'
        },
        // { text: moment(cliente.fechaCreacion).format('LL'), listType: 'none', style: 'listaDatos' },
        {
            text: '\n',
            listType: 'none'
        },
        {
            text: 'GLOBAL DIESEL CONSUMPTIONS REPORT',
            fontStyle: 'BMWTypeCondensedRegular',
            listType: 'none',
            style: 'listaDatos'
        },
        {
            text: 'TGF-TANK FARM',
            fontStyle: 'BMWTypeCondensedRegular',
            listType: 'none',
            style: 'listaDatos'
        },
        {
            text: '\n',
            listType: 'none'
        },
        {
            text: [{
                text: 'Boulevard BMW No. 655 Parque Industrial,',
                fontStyle: 'BMWTypeCondensedRegular',
                listType: 'none',
                style: 'listaDatos'
            }, {
                text: 'Desarrollo Logistic II,' + 'C.P. 79526 Villa de Reyes San Luis Potosí, Mexico',
                fontStyle: 'Elephant',
                listType: 'none',
                style: 'listaDatos',
                bold: true
            }],
            listType: 'none'
        },
    ];
}

























var datosBMW;

function generatePDFG() {

    datos = [];
    detail = [];
    var documentDefinition = {
        pageSize: 'LETTER',
        pageOrientation: 'landscape',
        footer: pieDePaginaG(),
        content: [
            encabezadoG(),
            detallesInformacionG()
        ],
        styles: {
            tableSubtitulo: {
                fontSize: 10,
                color: 'white',
                alignment: 'center',
                fillColor: '#233461',
                lineHeight: [1],
            },
            tableText: {
                fontSize: 9.5,
                color: '#black',
                alignment: 'center',
            },
        }
    };

    pdfMake.createPdf(documentDefinition).download('GLOBAL_GASOLINE_CONSUMPTIONS_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD,YYYY')+'.pdf');
}


var datos = [];
var detalle = [];
function getDatosBMWG() {
    var dentro;
  
   
  
    var detail = [
        [
            {
                text: 'COSTCENTER',
                style: 'tableSubtitulo'
            },
            {
                text: 'TOTAL QUANTITY',
                style: 'tableSubtitulo'
            },
            
        ]
    ];
    for (let index = 0; index < datosReporteGlobalGasoline[0].ArrayCentroCostos.length; index++) {
       
            datos.push({
                text: datosReporteGlobalGasoline[0].ArrayCentroCostos[index],
                style: 'tableText'
            });
      
       
       
            datos.push({
                text: datosReporteGlobalGasoline[0].ArrayCantidad[index],
                style: 'tableText'
            });
      
        
        detail.push(datos);
        datos = [];
    }
    return detail;
}

function detallesInformacionG() {
    return infDetallesTabla = [{
        margin: [0, 20, 0, 0],
        table: {
            widths: ['*', '*'],
            body: getDatosBMWG()
        },
        layout: {
            hLineWidth: function(i, node) {
                return (i === 0 || i === node.table.body.length) ? 1 : 1;
            },
            vLineWidth: function(i, node) {
                return (i === 0 || i === node.table.widths.length) ? 1 : 1;
            },
            hLineColor: function(i, node) {
                return (i === 0 || i === node.table.body.length) ? '#ccc' : '#ccc';
            },
            vLineColor: function(i, node) {
                return (i === 0 || i === node.table.widths.length) ? '#ccc' : '#ccc';
            },
            fillColor: function(rowIndex, node, columnIndex) {
                return (rowIndex % 2 === 0) ? '#dddede' : null;
            }
        }
    }];
}

function pieDePaginaG() {

    return footer = [{
            canvas: [{
                type: 'line',
                x1: 0,
                y1: 0,
                x2: 800,
                y2: 0,
                lineWidth: 0.1,
                lineColor: '#233461'
            }]
        },
        {
            margin: [0, 5, 0, 0],
            text: 'BMW GROUP',
            fontSize: 10,
            color: '#233461',
            bold: true,
            alignment: 'center'
        },
        {
            table: {
                widths: ['*', '*'],
                body: [
                    [{
                            text: 'Powered by TDCON IIII.0',
                            style: 'tableText',
                            border: [false, false, false, false],
                            alignment: 'center',
                            color: '#233461',
                            bold: true,
                        },
                        {
                            text: moment(new Date()).subtract(5, 'hours').format(
                                'MMMM,DD,YYYY [-] HH:mm:ss') + ' hrs.',
                            style: 'tableText',
                            border: [false, false, false, false],
                            color: '#233461',
                            bold: true,
                            alignment: 'center'
                        },
                    ],
                ]
            },
            layout: {
                hLineWidth: function(i, node) {
                    return (i === 0 || i === node.table.body.length) ? 1 : 1;
                },
                vLineWidth: function(i, node) {
                    return (i === 0 || i === node.table.widths.length) ? 1 : 1;
                },
                hLineColor: function(i, node) {
                    return (i === 0 || i === node.table.body.length) ? '#ccc' : '#ccc';
                },
                vLineColor: function(i, node) {
                    return (i === 0 || i === node.table.widths.length) ? '#ccc' : '#ccc';
                }

            }
        },
    ];
}

function encabezadoG() {
    return header = [{
        margin: [0, -25, 0, 0],
        table: {
            widths: [130, '*', 130],
            heights: ['auto'],
            body: [
                [{
                        image: 'data:image/png;base64,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',
                        width: 150,
                        height: 50,
                        alignment: 'LEFT',
                        fillColor: '#233461',
                        border: [false, false, false, false],
                    },
                    {
                        ul: datosGeneralesG(),
                        alignment: 'center',
                        color: '#ffffff',
                        fillColor: '#233461',
                        border: [false, false, false, false],
                    },

                    {
                        image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALIAAABFCAYAAADuHbzJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADMSURBVHhe7dJBEQAgEAAhu1jBQtc/hOZwhwcNWPvMhd+JTILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIJIhMgsgkiEyCyCSITILIBMx9XNJKhbGABRgAAAAASUVORK5CYII=',
                        width: 150,
                        height: 50,
                        alignment: 'right',
                        fillColor: '#233461',
                        border: [false, false, false, false],
                    }

                ],
            ]
        }
    }];
}



function datosGeneralesG() {
    return ul = [{
            text: [{
                text: 'BMW GROUP',
                listType: 'none',
                fontStyle: 'BMWTypeCondensedRegular',
                style: 'listaDatos'
            }],
            listType: 'none'
        },

        {
            text: 'Planta San Luis Potosí',
            fontStyle: 'BMWTypeCondensedRegular',
            listType: 'none',
            style: 'listaDatos'
        },
        // { text: moment(cliente.fechaCreacion).format('LL'), listType: 'none', style: 'listaDatos' },
        {
            text: '\n',
            listType: 'none'
        },
        {
            text: 'GLOBAL GASOLINE CONSUMPTIONS REPORT',
            fontStyle: 'BMWTypeCondensedRegular',
            listType: 'none',
            style: 'listaDatos'
        },
        {
            text: 'TGF-TANK FARM',
            fontStyle: 'BMWTypeCondensedRegular',
            listType: 'none',
            style: 'listaDatos'
        },
        {
            text: '\n',
            listType: 'none'
        },
        {
            text: [{
                text: 'Boulevard BMW No. 655 Parque Industrial,',
                fontStyle: 'BMWTypeCondensedRegular',
                listType: 'none',
                style: 'listaDatos'
            }, {
                text: 'Desarrollo Logistic II,' + 'C.P. 79526 Villa de Reyes San Luis Potosí, Mexico',
                fontStyle: 'Elephant',
                listType: 'none',
                style: 'listaDatos',
                bold: true
            }],
            listType: 'none'
        },
    ];
}
</script>
<?php /**PATH C:\xampp\htdocs\TANKFARM\Laravel\resources\views/FuelGeneralReport.blade.php ENDPATH**/ ?>