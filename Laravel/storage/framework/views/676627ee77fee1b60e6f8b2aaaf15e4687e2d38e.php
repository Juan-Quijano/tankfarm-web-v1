<script src="<?php echo e(url('/')); ?>/vendors/loading/loadingoverlay.min.js"></script>
<style>
 
.wrapper_div{

margin: auto;

width: 1000px;

height: 545px;

}
div.dataTables_wrapper div.dataTables_filter input{
  
   
  width: 600px;
  
}
.dataTables_filter {
    margin-inline: auto;
 
  width: 600px;
}


    .pull-center{
        float:center !important;
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
                                <option value="1">FUEL CONSUMPTIONS TGF</option>
                                <option value="2">TOTALS CONSUMPTIONS TGF</option>
                               
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



                    <div class="col-md-10 hijo" style="   ">
                        <label clas="" for="">Select type Fuel*</label>
                        <div class="input-group" id="divcomboTipoFuel">
                            <select name="comboTipoFuel" id="comboTipoFuel" class="form-control"
                                data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Select the type  Fuel ">
                                <option value="0" selected>Select Option</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Regular">Gasoline</option>
                               
                            </select>
                        </div>
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


                    <div class="col-md-5 hijo">
                        <label clas="" for="">Select type field *</label>
                        <div class="input-group" id="divcomboTipoCampo">
                            <select name="comboTipoCampo" id="comboTipoCampo" class="form-control" data-toggle="tooltip"
                                data-placement="right" title="" data-original-title="Select type field">
                                <option value="0" disabled>Select Option</option>
                                <option value="xCliente">COMPANY</option>
                                <option value="xChofer">CHOFER</option>
                                <option value="Departamento">DEPARTMENT</option>
                                <option value="CentroCostos" selected>COST CENTER</option>
                            </select>
                        </div>
                    </div>



                    <div class="col-md-5 hijo">
                        <label clas="" for="">Select type fuel *</label>
                        <div class="input-group" id="divcomboTipoCombustible">
                            <select name="comboTipoCombustible" id="comboTipoCombustible" class="form-control"
                                data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Select type fuel">
                                <option value="0" disabled>Select Option</option>
                                <option value="Regular" selected>REGULAR</option>
                                <option value="Diesel" selected>DIESEL</option>
                            </select>
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
                                <a class="nav-link" id="home-tabG" data-toggle="tab" href="#gasoline" role="tab"
                                    aria-controls="gasoline" aria-selected="false">Gasoline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Consumption</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div id="mainDiesel" style="width: 1280px; height: 600px">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="gasoline" role="tabpanel" aria-labelledby="home-tabG">
                                <div id="mainGas" style="width: 1280px; height: 600px">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div id="mainDiesel1" style="width: 1280px; height: 600px">
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
                <div class="tab-pane fade show" id="tabla1" role="tabpanel" aria-labelledby="tabla1-tab">
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
                                <table id="datatable-buttons2a"
                                    class="table table-striped table-bordered dataTable no-footer dtr-inline"
                                    style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 257px;" 
                                               >DEPARTMENT</th>
                                            <th  tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 380px;"
                                               >COST-CENTER
                                            </th>
                                            <th  tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 155px;"
                                                >COMPANY</th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 257px;" 
                                               >DATE</th>
                                            <th  tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 380px;"
                                                >FUEL</th>
                                            <th  tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 155px;"
                                               >QUANTITY</th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 257px;" 
                                                >DRIVER NAME</th>
                                            <th  tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 380px;"
                                                >VEHICLE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="tabla2" role="tabpanel" aria-labelledby="tabla2-tab">
                    <div class="col-sm-12">
                        <div id="datatable-buttons_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                            <button class="btn btn-success" onclick="exceller1();"> <i
                                    class="fa fa-file-excel-o"></i></button>
                            
                        </div>
                        <br>
                        <div id="datatable-buttons_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                        </div>
                        <div class="card-box table-responsive">
                            <div id="datatable-buttons_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                <br>
                                <br>
                                <table id="datatable-buttons222"
                                    class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%;"
                                    role="grid" aria-describedby="datatable-buttons_info">
                                    <thead>
                                        <tr id="encaTT" style="font-weight: bold;"></tr>
                                    </thead>
                                    <tbody id="tbodydatatable-buttons222">
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Section: Live preview -->
    </div>
</div>



<div class="tbl_container1">
    <table id="tablaC" class="table table-striped" cellspacing="0" width="100%"
        style="border: 1px solid black;display:none">
        <thead>
        <tr>
                <th colspan=2 style="text-align: left;background: #233461;"><img
                        src="<?php echo e(url('/')); ?>/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=6
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    FUEL CONSUMPTIONS REPORT</th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=6
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TGF</th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=6
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=4 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTT"></th>
                <th colspan=3
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTT"></th>
                <th colspan=3
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #ffffff;"></th>
                <th colspan=4 style="text-align: right;background: #ffffff; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    START DATE</th>
                <th colspan=2
                    style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    END
                    DATE</th>
                <th colspan=2
                    style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY</th>
                <th colspan=2
                    style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COST CENTER</th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: left;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;"
                    id="fechainicio">PARAMETER F1</th>
                <th colspan=2
                    style="text-align: left;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;"
                    id="fechafin">PARAMETER F2</th>
                <th colspan=2
                    style="text-align: left;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;"
                    id="campani">PARAMETER F3</th>
                <th colspan=2
                    style="text-align: left;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;"
                    id="centro">PARAMETER F4</th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    VEHICLE TAG</th>
                <th colspan=2
                    style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DEPARTMENT</th>
                <th colspan=4
                    style="text-align: left;background: #233461;font-size: 14px;color:#ffffff;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DRIVER TAG</th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: left;background: #ffffff;font-size: 12px;color:#000000;font-family:BMWTypeCondensedRegular;font-weight: bold;font-weight: normal;"
                    id="vehiculo">PARAMETER F5</th>
                <th colspan=2
                    style="text-align: left;background: #ffffff;font-size: 12px;color:#000000;font-family:BMWTypeCondensedRegular;font-weight: bold;font-weight: normal;"
                    id="departamento">PARAMETER F6</th>
                <th colspan=4
                    style="text-align: left;background: #ffffff;font-size: 12px;color:#000000;font-family:BMWTypeCondensedRegular;font-weight: bold;font-weight: normal;"
                    id="conductor">PARAMETER F7</th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #ffffff;"></th>
                <th colspan=4 style="text-align: right;background: #ffffff; color:#000000;"></th>
            </tr>
            <tr>
                <th class="tbdepa"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DEPARTMENT</th>
                <th class="tbcos"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COST CENTER</th>
                <th class="tbcomp"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY</th>
                <th class="tbdate"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DATE</th>
                <th class="tbfuel"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    FUEL</th>
                <th class="tbquan"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    QUANTITY</th>
                <th class="tbdriver"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DRIVER NAME</th>
                <th class="tbvehicle"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    VEHICLE</th>
            </tr>
        </thead>
        <tbody id="emp_body1">
        </tbody>
        <tr>
            <th colspan=5
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                Powered
                by</th>
            <th colspan=2 style="text-align: right;background: #233461;color:#fff"><img
            src="<?php echo e(url('/')); ?>/images/tdcon_gris.png"></th>
        </tr>
        <tr>
            <th colspan=5
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=5
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>
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
                                            <th  tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 257px;" 
                                                >DEPARTMENT</th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 380px;"
                                                >COST-CENTER
                                            </th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 155px;"
                                                >COMPANY</th>
                                            <th  tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 257px;" 
                                                >DATE</th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 380px;"
                                               >FUEL</th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 155px;"
                                               >QUANTITY</th>
                                            <th  tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 257px;" 
                                               >DRIVER NAME</th>
                                            <th class="" tabindex="0" aria-controls="datatable-buttons"
                                                rowspan="1" colspan="1" style="width: 380px;"
                                                >VEHICLE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show" id="tabla2" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col-sm-12">
                        <div id="datatable-buttons_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                            <button class="btn btn-success" onclick="exceller1();"> <i
                                    class="fa fa-file-excel-o"></i></button>
                        </div>
                        <br>
                        <div id="datatable-buttons_wrapper"
                            class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                        </div>
                        <div class="card-box table-responsive">
                            <div id="datatable-buttons_wrapper"
                                class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                <br>
                                <br>
                                <table id="datatable-buttons222"
                                    class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%;"
                                    role="grid" aria-describedby="datatable-buttons_info">
                                    <thead>
                                        <tr id="encaTT" style="font-weight: bold;"></tr>
                                    </thead>
                                    <tbody id="tbodydatatable-buttons222">
                                    </tbody>
                                </table>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Section: Live preview -->
    </div>
</div>

 <!-- Section:CKECKS -->
 <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="modalColumnasTF" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Select the columns you want to view in the reports</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="DEPARTMENT"
                                value="option1">
                            <label class="form-check-label" for="DEPARTMENT">DEPARTMENT</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="COSTCENTER"
                                value="option2">
                            <label class="form-check-label" for="COSTCENTER">COST CENTER</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="COMPANY" value="option3">
                            <label class="form-check-label" for="COMPANY">COMPANY</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="DATE" value="option4">
                            <label class="form-check-label" for="DATE">DATE</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="FUEL" value="option5">
                            <label class="form-check-label" for="FUEL">FUEL</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="QUANTITY" value="option6">
                            <label class="form-check-label" for="QUANTITY">QUANTITY</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="DRIVERNAME"
                                value="option7">
                            <label class="form-check-label" for="DRIVERNAME">DRIVER NAME</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="VEHICLE" value="option8">
                            <label class="form-check-label" for="VEHICLE">VEHICLE</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="ALL" value="option9">
                            <label class="form-check-label" for="All">ALL</label>
                        </div>


                        <div class="form-check form-check-inline checkbox combosDias">
                            <button type="button" class="btn btn-info btn-sm"
                                onclick="CreateExcelOrPdf();">APPLY</button>
                        </div>
                       



                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="tbl_container1">
    <table id="tablaC1" class="table table-striped" cellspacing="0" width="100%"
        style="border: 1px solid black;display:none;">
        <thead>
        <tr>
                <th colspan=1 style="text-align: left;background: #233461;"><img
                        src="<?php echo e(url('/')); ?>/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=2
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                   TOTALS CONSUMPTIONS REPORT</th>
            </tr>
            <tr>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=2
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TGF</th>
            </tr>
            <tr>
                <th colspan=1
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=2
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
            </tr>
            <tr>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=2 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=1
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=1
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTTT"></th>
               
                <th colspan=1
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=1
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTTT"></th>
                <th colspan=1
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=1
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=1
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #ffffff;"></th>
                <th colspan=4 style="text-align: right;background: #ffffff; color:#004D9C;"></th>
            </tr>
            
            <tr>
                <th colspan=1 style="text-align: left;background: #fcfcfc;"></th>
                <th colspan=1 style="text-align: right;background: #fcfcfc; color:#004D9C;"></th>
                <th colspan=1 style="text-align: left;background: #fcfcfc;"></th>
            </tr>
            <tr>
                <th colspan=1  style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">START
                    DATE</th>
                <th colspan=1   style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">END
                DATE</th>
                <th colspan=1   style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">FIELD
                </th>
            </tr>


          


            <tr>
                <th colspan=1
                style="width:10px;text-align: center;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;"
                    id="fechainicioTT">PARAMETER F1</th>
                <th colspan=1
                style="text-align: center;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;"
                    id="fechafinTT">PARAMETER F2</th>
                <th colspan=1
                style="text-align: center;background: #ffffff;font-size: 12px;font-family:BMWTypeCondensedRegular;font-weight: bold;color:#000000;font-weight: normal;"
                    id="fieldTT">PARAMETER F3</th>
            </tr>
            
          
          
            <tr>
                <th colspan=1 style="text-align: left;background: #fcfcfc;"></th>
                <th colspan=1 style="text-align: right;background: #fcfcfc; color:#004D9C;"></th>
                <th colspan=1 style="text-align: left;background: #fcfcfc;"></th>
            </tr>
            <!--tr id="filasTable1" style="font-weight: bold; color: black; text-align: center;font-family: Calibri;"></tr-->
            <tr>
                <th id="FILTERNAME" colspan=1  tabindex="0" aria-controls="" rowspan="1" colspan="1"
                    style="width: 155px;background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    aria-label="FILTER NAME: activate to sort column descending" >FILTER NAME</th>
                <th id="AMOUNT" colspan=1 class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                    colspan="1"
                    style="width: 257px;background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    aria-label="AMOUNT: activate to sort column ascending">AMOUNT</th>
                <th id="DATE" colspan=1 class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                    colspan="1"
                    style="width: 380px;background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    aria-label="DATE: activate to sort column ascending">DATE</th>
            </tr>
        </thead>
        <tbody id="tbodyTT">
        </tbody>
        <tr > 
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
           
            <th colspan=1 style="margin-right: -69px;text-align: right;background: #233461;color:#fff">
            <img style="margin-right: -69px;text-align: right; "src="<?php echo e(url('/')); ?>/images/logogrisM.png"></th>    
       
            
        </tr>
        <tr>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>

</div>

<script type="text/javascript">
var despachos1;
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
var myChartGas = echarts.init(document.getElementById('mainGas'));
var myChartDiesel1 = echarts.init(document.getElementById('mainDiesel1'));
var option2;

TablaX11 = "";
TablaX2 = "";
var arrCustomers1 = [];
var arrTagChof = [];
var arrTagVehi = [];

var ArrayFechasDieselTGF = [];
var ArrayFechasGasTGF=[];
var ArrayGasolinaTGF = [];
var ArrayDieselTGF = [];
var ArrayTrnTGF = [];
var bandera = false;

$(document).ready(function() {
    var FechaP = new Date();

    var fechaInicial= new Date(FechaP.getFullYear(),FechaP.getMonth(),1);
    var fechaFinal= new Date(FechaP.getFullYear(),FechaP.getMonth()+1,0);     

    fechaInicial= moment(fechaInicial).format('YYYY-MM-DD');
    fechaFinal= moment(fechaFinal).format('YYYY-MM-DD');

    hrInicioTT =fechaInicial;
    hrFinalTT = fechaFinal;

    $("#hraini1").val(hrInicioTT);
    $("#hrafin1").val(hrFinalTT);

    init_DataTables();
    FillCustomer();
    FillDriverTag();
    llenarComboDepartamento();
    FillVehicleTag();
    FiltrosDespachos("","", "", "", "", "", hrInicioTT, hrFinalTT);
    gerenarGrapoh2();
    $('#PanelDatasheet').hide();
});
$(document).click(function(event){
    var id =event.target.id;
        if(id=='profile-tab'|| id=='home-tabG'){
        closeNav();
        }
        if(id=='home-tab'){
            closeNav();
        }
})
function showChart(show) {
    if (show == 1) {
        $("#SelectTable").hide();
        $('#PanelGraphs').show();
        $('#PanelDatasheet').hide();
        if($('.nav-tabs .active').text()=='Diesel'){
            $('#tabla1').show(); 
            $('#tabla2').hide(); 
        }else{
            $('#tabla1').hide(); 
            $('#tabla2').show(); 
        }
    }
    if (show == 0 ){
        $("#SelectTable").show();
        $('#PanelGraphs').hide();
        $('#PanelDatasheet').show()
        if($('.nav-tabs .active').text()=='Consumption'){
            $('#tabla1').hide(); 
            $('#tabla2').show(); 
        }else{
            $('#tabla1').show(); 
            $('#tabla2').hide(); 
        }
            }

}

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



function tableSelected(){
    if($('#SelectTable').val()=='1'){
       

        $('#tabla1').show(); 
        $('#tabla2').hide(); 
    }else{
        $('#tabla1').hide(); 
        $('#tabla2').show(); 

    }
}
var Departamentos;

function llenarComboDepartamento() {
    //comboDepartamento
    try {
        //http://localhost:85/home/GetPerfiles?TipoPerfil=DRIVER
        var sURL = IPWS + "GetDepartamentos";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                Departamentos = data.lstDep;
                if (Departamentos.length > 0) {
                    //Perfiles.sort();
                    var optionsCombo = "";
                    $('#department').empty();
                    optionsCombo +=
                        '<option value="Select Option" selected disabled>Select Option</option>';

                    $(Departamentos).each(function(i) {
                        optionsCombo += '<option data-pos="' + i + '" value="' + Departamentos[i]
                            .ID +
                            '">' +
                            Departamentos[i].Departamento + '</option>';
                    });
                    $('#department').html(optionsCombo);

                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });



    } catch (error) {

    }
}
var CentroCostos;
$('#department').change(function() {
    //comboDepartamento
    try {
        var depa = parseInt($('#department option:selected').val());
        //http://localhost:85/home/GetPerfiles?TipoPerfil=DRIVER
        var sURL = IPWS + "GetCentroCostos?idDepartamento=" + depa;
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                CentroCostos = data.lstCentroCostos;
                if (CentroCostos.length > 0) {
                    //Perfiles.sort();
                    var optionsCombo = "";
                    $('#cost').empty();
                    optionsCombo +=
                        '<option value="Select Option" selected disabled>Select Option</option>';

                    $(CentroCostos).each(function(i) {
                        optionsCombo += '<option data-pos="' + i + '" value="' +
                            CentroCostos[i]
                            .id +
                            '">' +
                            CentroCostos[i].nameCentro + '</option>';
                    });
                    $('#cost').html(optionsCombo);

                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });



    } catch (error) {

    }


});
function CreateExcelOrPdf(){
    
    if(tipoArchivo=='Excel'){
        columnasreporteTF();
    }
    if(tipoArchivo=='PDF'){
        generatePDF();
    }
    
    }
    function columnasreporteTF() {
var depa = document.getElementById("DEPARTMENT").checked;
var cos = document.getElementById("COSTCENTER").checked;
var comp = document.getElementById("COMPANY").checked;
var dat = document.getElementById("DATE").checked;
var fue = document.getElementById("FUEL").checked;
var quan = document.getElementById("QUANTITY").checked;
var driv = document.getElementById("DRIVERNAME").checked;
var vehi = document.getElementById("VEHICLE").checked;

llenarTablaExcel();

if (depa) {
    $(".tbdepa").show();
} else {
    $(".tbdepa").hide();
}
if (cos) {
    $(".tbcos").show();
} else {
    $(".tbcos").hide();
}
if (comp) {
    $(".tbcomp").show();
} else {
    $(".tbcomp").hide();
}
if (dat) {
    $(".tbdate").show();
} else {
    $(".tbdate").hide();
}
if (fue) {
    $(".tbfuel").show();
} else {
    $(".tbfuel").hide();
}
if (quan) {
    $(".tbquan").show();
} else {
    $(".tbquan").hide();
}
if (driv) {
    $(".tbdriver").show();
} else {
    $(".tbdriver").hide();
}
if (vehi) {
    $(".tbvehicle").show();
} else {
    $(".tbvehicle").hide();
}

descargarExcel();
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
$('#ALL').change(function() {

if ($(this).is(":checked")) {

    $("#DEPARTMENT").prop("checked", true);

    $("#COSTCENTER").prop("checked", true);

    $("#COMPANY").prop("checked", true);

    $("#DATE").prop("checked", true);

    $("#FUEL").prop("checked", true);

    $("#QUANTITY").prop("checked", true);

    $("#DRIVERNAME").prop("checked", true);

    $("#VEHICLE").prop("checked", true);
} else {
    $("#DEPARTMENT").prop("checked", false);

    $("#COSTCENTER").prop("checked", false);

    $("#COMPANY").prop("checked", false);

    $("#DATE").prop("checked", false);

    $("#FUEL").prop("checked", false);

    $("#QUANTITY").prop("checked", false);

    $("#DRIVERNAME").prop("checked", false);

    $("#VEHICLE").prop("checked", false);
}

});
function llenarTablaExcel() {
    var depa = document.getElementById("DEPARTMENT").checked;
    var cos = document.getElementById("COSTCENTER").checked;
    var comp = document.getElementById("COMPANY").checked;
    var dat = document.getElementById("DATE").checked;
    var fue = document.getElementById("FUEL").checked;
    var quan = document.getElementById("QUANTITY").checked;
    var driv = document.getElementById("DRIVERNAME").checked;
    var vehi = document.getElementById("VEHICLE").checked;

    $("#emp_body1").empty();
    var tr;
    for (var i = 0; i < despachos1.length; i++) {
        tr = $('<tr/>');
        if(depa){
            tr.append(
            "<td class='tbdepa' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            despachos1[i].xDepartamento + "</td> ");
        }else{
            tr.append(
            "<td class='tbdepa' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(cos){
            tr.append(
            "<td class='tbcos' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            despachos1[
                i].xCentroCostos + "</td>");
        }else{
            tr.append(
            "<td class='tbcos' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(comp){
            tr.append(
            "<td class='tbcomp' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            despachos1[
                i].xCliente + "</td>");
        }else{
            tr.append(
            "<td class='tbcomp' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(dat){
            tr.append(
            "<td class='tbdate' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            despachos1[
                i].xFecha + "</td>");
        }else{
            tr.append(
            "<td class='tbdate' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(fue){
            tr.append(
            "<td class='tbfuel' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            despachos1[
                i].xProducto + "</td>");
        }else{
            tr.append(
            "<td class='tbfuel' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(quan){
            tr.append(
            "<td class='tbquan' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            despachos1[
                i].can + "</td>");
        }else{
            tr.append(
            "<td class='tbquan' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(driv){
            tr.append(
            "<td class='tbdriver' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            despachos1[
                i].xNombreChofer + "</td>");
        }else{
            tr.append(
            "<td class='tbdriver' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(vehi){
            tr.append(
            "<td class='tbvehicle' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            despachos1[
                i].xPlacas + "</td>");
        }else{
            tr.append(
            "<td class='tbvehicle' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        $('#emp_body1').append(tr);
    }
}

function llenarTabla2() {
 try {
    var j=0;
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
    TablaX11.clear().draw();
    //TablaX2.clear().draw();
    var htmlBotonStatus = "";
    for (var i = 0; i < despachos1.length; i++) {
        //if(despachos1[i].xProducto.trim()==){
                TablaX11.row.add([
            String(((despachos1[i].xDepartamento == "" || despachos1[i].xDepartamento == null) ? "UNDEFINED" : despachos1[i].xDepartamento)),
            String(((despachos1[i].xCentroCostos == "" || despachos1[i].xCentroCostos == null) ? "UNDEFINED" : despachos1[i].xCentroCostos)),
            String(((despachos1[i].xCliente == "" || despachos1[i].xCliente == null) ? "UNDEFINED" : despachos1[i].xCliente)),
            String(((despachos1[i].xFecha == "" || despachos1[i].xFecha == null) ? "UNDEFINED" : despachos1[i].xFecha +" "+ despachos1[i].xHoraDespacho)),
            String(((despachos1[i].xProducto == "" || despachos1[i].xProducto == null) ? "UNDEFINED" : despachos1[i].xProducto)),
            String(((despachos1[i].can == "" || despachos1[i].can == null) ? "UNDEFINED" : despachos1[i].can)),
            String(((despachos1[i].xNombreChofer.trim() == "" || despachos1[i].xNombreChofer.trim() == null) ? "UNDEFINED" : despachos1[i].xNombreChofer)),
            String(((despachos1[i].xPlacas == "" || despachos1[i].xPlacas == null) ? "UNDEFINED" : despachos1[i].xPlacas)),
        ]);
       // }
    }
    TablaX11.column('1:visible').draw()
 } catch (error) {
     
 }
}

function llenarTablaTotales() {
try {
        //debugger
        if (datosxReporte == "" || datosxReporte == undefined) {

} else {
    for (var i = 0; i < datosxReporte.length; i++) {
        arrayFechaReporte = datosxReporte[i].ArrayFechas;
        arrayDatosReporte[i] = datosxReporte[i].ArrayProc;
    }


    for (var i = 0; i < arrayFechaReporte.length; i++) {
        $('#datatable-buttons222 tr').append($("<td>"));
        $('#datatable-buttons222 thead tr>td:last').html(arrayFechaReporte[i]);
        $('#datatable-buttons222 tbody tr').each(function() {
            $(this).children('td:last').append()
        });
    }


    var tr;
    for (var i = 0; i < arrayDatosReporte.length; i++) {
        tr = $('<tr/>');
        for (var j = 0; j < arrayDatosReporte[i].length; j++) {
            tr.append("<td style='text-align: left;'> " + arrayDatosReporte[i][j] + "</td> ");
        }
        $('#datatable-buttons222').append(tr);
    }
    /*
            for (var i = 0; i < arrayFechaReporte.length; i++) {
                $('#tablaC1 tr').append($("<td>"));
                $('#tablaC1 thead tr>td:last').html(arrayFechaReporte[i]);
                $('#tablaC1 tbody tr').each(function() {
                    $(this).children('td:last').append()
                });
            }
            var tr;
            for (var i = 0; i < arrayDatosReporte.length; i++) {
                tr = $('<tr/>');
                for (var j = 0; j < arrayDatosReporte[i].length; j++) {
                    tr.append(
                        "<td style='text-align: center;background: rgb(188, 218, 239);border: 1px solid black;font-family: Calibri;'> " +
                        arrayDatosReporte[i][j] + "</td> ");
                }
                $('#tablaC1').append(tr);
            }

    */
}
} catch (error) {
    
}

}



function FiltrosDespachos(LastConsum,Producto, Estacion, Company, DriverTag, VehicleTag, Department, Cost, StartDate, EndDate) {
    $.LoadingOverlay("show");
    despachos1=[];
    /*
    if (LastConsum != "" && LastConsum != "0" && LastConsum != undefined) {} else {
        LastConsum = $("#comboTipoReporte").val();
    }
    */
    Company = $("#company1").val();
    DriverTag = $("#DriverTag1").val();
    VehicleTag = $("#VehicleTag1").val();
    StartDate = $("#hraini1").val();
    EndDate = $("#hrafin1").val();
    Department = $("#department option:selected").text();
    if(Department=="Select Option"){
        Department="";
    }
    Cost = $("#cost option:selected").text();
    if(Cost=="Select Option"){
        Cost="";
    }
   
    hrInicioTT = $("#hrinicio").val();
    hrFinalTT = $("#hrfinal").val();
    campoTipoTT = $("#comboTipoCampo").val();
    combustibleTT = $("#comboTipoCombustible").val();
    comboTipoFuel=$("#comboTipoFuel").val();
    ArrayFechasDieselTGF = [];
    ArrayGasolinaTGF = [];
    ArrayDieselTGF = [];
    ArrayTrnTGF = [];
    
    if (LastConsum == "0" && Company == "" && VehicleTag == "" && DriverTag == "" && Department == "" && Cost == "" &&
        StartDate == "" && EndDate == "" && comboTipoFuel=="") {
        swal("Error", "No filter selected", "error");
    } else {
       
        var para = {
            "LastConsum": LastConsum,
            "Producto":comboTipoFuel,
            "Estacion": 2,
            "Company": Company,
            "DriverTag": DriverTag,
            "VehicleTag": VehicleTag,
            "Department": Department,
            "Cost": Cost,
            "StartDate": StartDate,
            "EndDate": EndDate,
            "EST": "TGF",
        };
        try {
           
            
            //var sURL = "http://10.70.100.137:85/home/GetDespachosFiltros";
            var sURL =  IPWS + "GetDespachosFiltros";

           
            $.ajax({     
                url: sURL,
                async: true,
                dataType: "json",
                type: "GET",
                data: para,
                
               
                success: function(data) {
                   
                   
                    despachos1 = data.lstDespachos;
                    $.LoadingOverlay("hide");
                    if (despachos1.length > 0) {
                       
                        ArrayFechasGasTGF= despachos1[0].ArrayFechasGasTGF;
                        ArrayFechasDieselTGF = despachos1[0].ArrayFechasDieselTGF;
                        ArrayGasolinaTGF= despachos1[0].ArrayGasolinaTGF;
                        ArrayDieselTGF = despachos1[0].ArrayDieselTGF;
                        ArrayTrnTGF = despachos1[0].ArrayTrnTGF;

                        fillGraphDiesel();
                        fillGraphGasoline();
                        llenarTabla2();
                        llenarTablaExcel();
                        mostrarParametros();
                        
                    } else {
                        $.LoadingOverlay("hide");
                        ArrayFechasGasTGF="";
                        ArrayFechasDieselTGF = "";
                        ArrayGasolinaTGF = "";
                        ArrayDieselTGF = "";
                        ArrayTrnTGF = "";
                        myChartDiesel.clear();
                        myChartDiesel1.clear();
                        myChartGas.clear();
                        TablaX11.clear().draw();
                    }
                   
                },
              
                error: function(XMLHttpRequest, textStatus, errorThrown) {  $.LoadingOverlay("hide");}
            });
           
           

        } catch (error) {  $.LoadingOverlay("hide");}
    }
}
function gerenarGrapoh2(){

    var FechaP = new Date();

    var fechaInicial= new Date(FechaP.getFullYear(),FechaP.getMonth(),1);
    var fechaFinal= new Date(FechaP.getFullYear(),FechaP.getMonth()+1,0);     

    fechaInicial= moment(fechaInicial).format('YYYY-MM-DD');
    fechaFinal= moment(fechaFinal).format('YYYY-MM-DD');

    hrInicioTT =fechaInicial;
    hrFinalTT = fechaFinal;

    $("#hrinicio").val(hrInicioTT);
    $("#hrfinal").val(hrFinalTT);

    GetxReporte(hrInicioTT,hrFinalTT, campoTipoTT, combustibleTT);
    llenarTablaTotales();
    fillGraphGas11();
    llenarTablaExcel();
    mostrarParametrosTT();
    llenarTablaConsums();

}
function mostrarParametros() {
try {
    var Company = $("#company1").val();
    var DriverTag = $("#DriverTag1").val();
    var VehicleTag = $("#VehicleTag1").val();
    var StartDate = $("#hraini1").val();
    var EndDate = $("#hrafin1").val();
    var Department = $("#department option:selected").text();
    var Cost = $("#cost option:selected").text();

    document.getElementById('fechaReporteTTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'DD [de] MMMM [de] YYYY');

        document.getElementById('horareporteTTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');

    if (Company == "") {
        $('#campani').text("");
    } else {
        $('#campani').text(Company);
    }
    if (DriverTag == "") {
        $('#conductor').text("");
    } else {
        $('#conductor').text(DriverTag);
    }
    if (VehicleTag == "") {
        $('#vehiculo').text("");
    } else {
        $('#vehiculo').text(VehicleTag);
    }
    if (StartDate == "") {
        $('#fechainicio').text("");
    } else {
        $('#fechainicio').text(StartDate);
    }
    if (EndDate == "") {
        $('#fechafin').text("");
    } else {
        $('#fechafin').text(EndDate);
    }
    if (Department == "" || Department=="Select Option") {
        $('#departamento').text("");
    } else {
        $('#departamento').text(Department);
    }
    if (Cost == "" || Cost=="Select Option") {
        $('#centro').text("");
    } else {
        $('#centro').text(Cost);
    }
} catch (error) {
    
}
}

function mostrarParametrosTT() {
try {
    var StartDateTT = $("#hrinicio").val();
    var EndDateTT = $("#hrfinal").val();
    var Field = $("#comboTipoCampo").val();
    var Fuel = $("#comboTipoCombustible").val();

    document.getElementById('fechaReporteTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'DD [de] MMMM [de] YYYY');

        document.getElementById('horareporteTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');



    if (StartDateTT == "") {
        $('#fechainicioTT').text("");
    } else {
        $('#fechainicioTT').text(StartDateTT);
    }
    if (EndDateTT == "") {
        $('#fechafinTT').text("");
    } else {
        $('#fechafinTT').text(EndDateTT);
    }
    if (Field == "") {
        $('#fieldTT').text("");
    } else {
        $('#fieldTT').text(Field);
    }
    if (Fuel == "") {
        $('#fuelTT').text("");
    } else {
        $('#fuelTT').text(Fuel);
    }
} catch (error) {
    
}
}
var datosxReporte;
var arrayPadre;
var enca;
var ArrayColumna1 = [];
var ArrayColumna2 = [];

function GetxReporte(FechaIni, FechaFin, columnaBuscar, TipoCombustible) {
    if (FechaIni == "" && FechaFin == "" && columnaBuscar == "" && TipoCombustible == "" ) {
        swal("Error", "No filter selected", "error");
    } else {
        var para = {
            "FechaIni": FechaIni,
            "FechaFin": FechaFin,
            "columnaBuscar": columnaBuscar,
            "TipoCombustible": TipoCombustible,
        };
        try {
            //var sURL =  "http://10.70.100.137:85/home/GetDatosProc";
            var sURL =  IPWS + "GetDatosProc";
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
                        myChartDiesel1.clear();
                    }
                    */
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {}
            });
        } catch (error) {}
    }
}

function GetxReporteFiltro() {
    hrInicioTT = $("#hrinicio").val();
    hrFinalTT = $("#hrfinal").val();
    campoTipoTT = $("#comboTipoCampo").val();
    combustibleTT = $("#comboTipoCombustible").val();
    GetxReporte(hrInicioTT, hrFinalTT, campoTipoTT, combustibleTT);
    $("#encaTT").empty();
    $("#tbodydatatable-buttons222").empty();
    
    $("#filasTable").empty();
    $("#filasTable1").empty();
    nombres = [];
    fechasC = [];
    myChartDiesel1.clear();
    llenarTablaTotales();
    fillGraphGas11();
    mostrarParametrosTT();
    llenarTablaConsums();
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
        //var sURL =  "http://10.70.100.137:85/home/GetClientes";
        var sURL =  IPWS + "GetClientes";
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
        //var sURL =  "http://10.70.100.137:85/home/GetChoferes";
        var sURL =  IPWS + "GetChoferes";
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
        //var sURL =  "http://10.70.100.137:85/home/GetVehiculos";
        var sURL =  IPWS + "GetVehiculos";
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
    if (ventanaSeleccionada == "Diesel" || ventanaSeleccionada=="Gasoline") {
        document.getElementById("mySidenav").style.width = "600px";
        document.getElementById("mySidenavTotales").style.width = "0px";  
       
    }
    
    if (ventanaSeleccionada == "Consumption") {
        document.getElementById("mySidenav").style.width = "0px";
        document.getElementById("mySidenavTotales").style.width = "600px";  
       
    }
}

function closeNav() {
    var ventanaSeleccionada = $('.nav-tabs .active').text();
    if (ventanaSeleccionada == "Diesel" ||  ventanaSeleccionada=="Gasoline") {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("mySidenavTotales").style.width = "0";
    }
    if (ventanaSeleccionada == "Consumption") {
        document.getElementById("mySidenavTotales").style.width = "0";
        document.getElementById("mySidenav").style.width = "0";
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

function init_DataTables() {
    if (typeof($.fn.DataTable) === 'undefined') {
        return;
    }
    var handleDataTableButtons = function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;
        if ($("#datatable-buttons2a").length) {
            TablaX11 = $("#datatable-buttons2a").DataTable({
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],
                buttons: [{
                        //Botón para Excel
                        //extend: 'excelHtml5',
                        footer: true,
                        title: 'Dispatches TGF_' + today,
                        filename: 'Dispatches TGF_' + today,
                        exportOptions: {
                            //columns: [0, 1, 2],
                            orthogonal: 'export'
                        },
                        //Aquí es donde generas el botón personalizado
                        //text: '<button class="btn btn-success"> <i class="fa fa-file-excel-o"></i></button>',
                        customize: function(xlsx) {
                            var sheet1 = xlsx.xl['styles.xml'];
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //All cells
                            $('row c', sheet).attr('s', '25');
                            //Second column
                            //First row
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
                    //Botón para PDF
                    {
                        //extend: 'pdf',
                        footer: true,
                        title: 'Dispatches TGF_' + today,
                        filename: 'Dispatches TGF_' + today,
                        exportOptions: {
                            columns: [0, 1, 2],
                        },
                        tableHeader: {
                            alignment: 'center'
                        },
                        //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                        customize: function(doc) {
                            doc.content[1].margin = [120, 0, 120, 0] //left, top, right, bottom
                        }
                    }
                ],
                responsive: true,
            });
        }



        /*
                if ($("#tablaC1").length) {
                    TablaX2 = $("#tablaC1").DataTable({
                        dom: "Blfrtip",
                        buttons: [{
                                //Botón para Excel
                                //extend: 'excelHtml5',
                                footer: true,
                                title: 'Dispatches TF_' + today,
                                filename: 'Dispatches TF_' + today,
                                exportOptions: {
                                    //columns: [0, 1, 2],
                                    orthogonal: 'export'
                                },
                                //Aquí es donde generas el botón personalizado
                                //text: '<button class="btn btn-success"> <i class="fa fa-file-excel-o"></i></button>',
                                customize: function(xlsx) {
                                    var sheet1 = xlsx.xl['styles.xml'];
                                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                    //All cells
                                    $('row c', sheet).attr('s', '25');
                                    //Second column
                                    //First row
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
                            //Botón para PDF
                            {
                                //extend: 'pdf',
                                footer: true,
                                title: 'Dispatches TF_' + today,
                                filename: 'Dispatches TF_' + today,
                                exportOptions: {
                                    columns: [0, 1, 2],
                                },
                                tableHeader: {
                                    alignment: 'center'
                                },
                                //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                                customize: function(doc) {
                                    doc.content[1].margin = [120, 0, 120, 0] //left, top, right, bottom
                                }
                            }
                        ],
                        responsive: true,
                    });
                }
        */

        /*

                if ($("#datatable-buttons22").length) {
                    TablaX2 = $("#datatable-buttons22").DataTable({
                        dom: "Blfrtip",
                        buttons: [{
                                //Botón para Excel
                                //extend: 'excelHtml5',
                                footer: true,
                                title: 'Dispatches TF_' + today,
                                filename: 'Dispatches TF_' + today,
                                exportOptions: {
                                    //columns: [0, 1, 2],
                                    orthogonal: 'export'
                                },
                                //Aquí es donde generas el botón personalizado
                                //text: '<button class="btn btn-success"> <i class="fa fa-file-excel-o"></i></button>',
                                customize: function(xlsx) {
                                    var sheet1 = xlsx.xl['styles.xml'];
                                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                                    //All cells
                                    $('row c', sheet).attr('s', '25');
                                    //Second column
                                    //First row
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
                            //Botón para PDF
                            {
                                //extend: 'pdf',
                                footer: true,
                                title: 'Dispatches TF_' + today,
                                filename: 'Dispatches TF_' + today,
                                exportOptions: {
                                    columns: [0, 1, 2],
                                },
                                tableHeader: {
                                    alignment: 'center'
                                },
                                //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                                customize: function(doc) {
                                    doc.content[1].margin = [120, 0, 120, 0] //left, top, right, bottom
                                }
                            }
                        ],
                        responsive: true,
                    });
                }
        */


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

function fillGraphDiesel() {

    myChartDiesel.clear();
    option = {
        color: ['#2d4453'],
        title: {
            text: 'DIESEL CONSUMPTIONS TGF'
        },
        legend: {
        data: ['Diesel']
    },
        
        toolbox: {
            itemSize:25,
             //y: 'center',
            // x: 'center',
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
        tooltip: {},
        xAxis: {
            data: ArrayFechasDieselTGF,
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
            
            symbolSize:20,
            name: 'Diesel',
            type: 'bar',
            data: ArrayDieselTGF,
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

function fillGraphGasoline() {
   
myChartGas.clear();
option = {
    color: ['#dc3545'],
    title: {
        text: 'GASOLINE CONSUMPTIONS TGF'
    },
    legend: {
        data: ['Gasoline'],
       
    },
    toolbox: {
        itemSize:25,
        // y: 'bottom',
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
    tooltip: {},
    xAxis: {
        data: ArrayFechasGasTGF,
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
      
        symbolSize:20,
        name: 'Gasoline' ,
      
        type: 'bar',
        
        data: ArrayGasolinaTGF,
        animationDelay: function(idx) {
            return idx * 10;
        }
    }],
    animationEasing: 'elasticOut',
    animationDelayUpdate: function(idx) {
        return idx * 5;
    }
};
myChartGas.setOption(option);

}
function fillGraphGas11() {
    myChartDiesel1.clear();
    var longitud = 0;
    var js1 = [];
    longitud = datosxReporte.length - 1;
    for (var i = 0; i < datosxReporte.length; i++) {
        const json = {
            "name": datosxReporte[i].ArrayProc[0],
            "type": 'bar',
            "data": datosxReporte[i].ArrayProc,
            animationDelay: function(idx) {
                return idx * 10;
            }
        };
        js1.push(json);
        if (i == longitud) {
            for (var j = 0; j < datosxReporte[longitud].ArrayFechas.length; j++) {
                fechasC.push(datosxReporte[i].ArrayFechas[j]);
            }
        }
        nombres.push(datosxReporte[i].ArrayProc[0])
    }
    option = {
        title: {
            text: 'TOTALS GRAPH'
        },
        legend: {
            data: nombres
        },
        toolbox: {
            // y: 'bottom',
            itemSize:25,
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
        tooltip: {},
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
        xAxis: {
            data: fechasC,
            splitLine: {
                show: false
            }
        },
        yAxis: {},
        series: js1,
        animationEasing: 'elasticOut',
        animationDelayUpdate: function(idx) {
            return idx * 5;
        }
    };


    myChartDiesel1.setOption(option);
}
autocomplete(document.getElementById("company1"), arrCustomers1);
autocomplete(document.getElementById("DriverTag1"), arrTagChof);
autocomplete(document.getElementById("VehicleTag1"), arrTagVehi);

function OpenModalCol(open) {
    tipoArchivo='';
   if(open=='Excel'){
    tipoArchivo='Excel';
       LimpiarChecks();
    $('#modalColumnasTF').modal('show');
   }

   if(open=='PDF'){
    tipoArchivo='PDF';
       LimpiarChecks();
    $('#modalColumnasTF').modal('show');
   }
   
}
function descargarExcel(){
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
    var fecha=moment(new Date()).subtract(5, 'hours').format('DD [de] MMMM [de] YYYY');
    link.download = "FUEL_CONSUMPTIONS_REPORT_"+fecha+"_TGF.xls";
    link.href = uri + base64(format(template, ctx))
    link.click();
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
    var fecha=moment(new Date()).subtract(5, 'hours').format('DD [de] MMMM [de] YYYY');
    link.download = "TOTALS_CONSUMPTIONS_REPORT_"+fecha+"_TGF.xls";
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

pdfMake.createPdf(documentDefinition).download('FUEL_CONSUMPTION_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('DD [de] MMMM [de] YYYY')+'"_TGF.pdf');
}


var datos = [];
var detalle = [];
function getDatosBMW() {
var dentro;
var depa = document.getElementById("DEPARTMENT").checked;
var cos = document.getElementById("COSTCENTER").checked;
var comp = document.getElementById("COMPANY").checked;
var dat = document.getElementById("DATE").checked;
var fue = document.getElementById("FUEL").checked;
var quan = document.getElementById("QUANTITY").checked;
var driv = document.getElementById("DRIVERNAME").checked;
var vehi = document.getElementById("VEHICLE").checked;
var arrayN = ['DEPARTMENT', 'COSTCENTER', 'COMPANY', 'DATE', 'FUEL', 'QUANTITY', 'DRIVERNAME', 'VEHICLE'];
var detail = [
    [
        {
            text: 'DEPARTMENT',
            style: 'tableSubtitulo'
        },
        {
            text: 'COST CENTER',
            style: 'tableSubtitulo'
        },
        {
            text: 'COMPANY',
            style: 'tableSubtitulo'
        },
        {
            text: 'DATE',
            style: 'tableSubtitulo'
        },
        {
            text: 'FUEL',
            style: 'tableSubtitulo'
        },
        {
            text: 'QUANTITY',
            style: 'tableSubtitulo'
        },
        {
            text: 'DRIVER NAME',
            style: 'tableSubtitulo'
        },
        {
            text: 'VEHICLE',
            style: 'tableSubtitulo'
        }
    ]
];
for (let index = 0; index < despachos1.length; index++) {
    if (depa) {
        datos.push({
            text: despachos1[index].xDepartamento,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (cos) {
        datos.push({
            text: despachos1[index].xCentroCostos,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (comp) {
        datos.push({
            text: despachos1[index].xCliente,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (dat) {
        datos.push({
            text: despachos1[index].xFecha,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (fue) {
        datos.push({
            text: despachos1[index].xProducto,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (quan) {
        datos.push({
            text: despachos1[index].can,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (driv) {
        datos.push({
            text: despachos1[index].xNombreChofer,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (vehi) {
        datos.push({
            text: despachos1[index].xPlacas,
            style: 'tableText'
        });

    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    detail.push(datos);
    datos = [];
}
return detail;
}

function detallesInformacion() {
return infDetallesTabla = [{
    margin: [0, 20, 0, 0],
    table: {
        widths: [70, 70, 120, 70, 60, 60, 120, 70],
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
                            'DD [de] MMMM [de] YYYY [a las] HH:mm:ss') + ' hrs.',
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
        text: 'FUEL CONSUMPTIONS REPORT',
        fontStyle: 'BMWTypeCondensedRegular',
        listType: 'none',
        style: 'listaDatos'
    },
    {
        text: 'TGF',
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
<?php /**PATH C:\xampp\htdocs\Laravel\resources\views/ReportFuel2.blade.php ENDPATH**/ ?>