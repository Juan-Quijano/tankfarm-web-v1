<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
body { display:none; }
div.dataTables_wrapper div.dataTables_filter input{
  width: 600px;
}
.dataTables_filter {
    margin-inline: auto;
  width: 600px;
}
.checkbox * {
    box-sizing: border-box;
    position: relative;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.checkbox {
    display: inline-block;
}
.checkbox>input {
    display: none;
}

.checkbox>label {
    vertical-align: top;

    padding-left: 30px;
}

.checkbox>[type="checkbox"]+label:before {
    color: #777;
    content: '';
    position: absolute;
    left: 0px;
    display: inline-block;
    min-height: 20px;
    height: 20px;
    width: 20px;
    border: 2px solid #777;

    vertical-align: top;
    text-align: center;
    transition: all 0.2s ease-in;
    content: '';
}

.checkbox.radio-square>[type="checkbox"]+label:before {
    border-radius: 0px;
}

.checkbox.radio-rounded>[type="checkbox"]+label:before {
    border-radius: 25%;
}

.checkbox.radio-blue>[type="checkbox"]+label:before {
    border: 2px solid #ccc;
}

.checkbox>[type="checkbox"]+label:hover:before {
    border-color: lightgreen;
}

.checkbox>[type="checkbox"]:checked+label:before {
    width: 8px;
    height: 16px;
    border-top: transparent;
    border-left: transparent;
    border-color: green;
    border-width: 4px;
    transform: rotate(45deg);
    top: -4px;
    left: 4px;
}

.centrado {

    background-color: #fafafa;
    margin: 1rem;
    padding: 1rem;
    border: 2px solid #ccc;
    /* IMPORTANTE */
    text-align: center;

}

.centrado {
    text-align: center;
    align-content: center;
}

.letraGrande {
    font-size: 20px;
}

#borderResumen {
    border: 5px ridge #1C6EA4;
    border-radius: 5px;
}



.step_descr {
    font-size: 26px;
}

.tfoot input {
    width: 100%;
    padding: 3px;
    box-sizing: border-box;
}

#mydatatable tfoot input {
    width: 100% !important;
}

#mydatatable tfoot {
    display: table-header-group !important;
}



.btn-primary {
    color: #fff !important;
    background-color: #92A2BD !important;
    border-color: #92A2BD !important;
}

.btn {
    border-radius: 1 !important;
}

.btn-group-lg>.btn,
.btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem;
}

label {
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
}

table {

    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
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

.form-control:disabled,
.form-control[readonly] {
    background-color: #ffffff;
    opacity: 1;
}
</style>
<style>
    .dropbtn {
        background-color: #1abb9c;
        border: none;
        color: white;
        padding: 4px 8px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
        font-weight: 900;
        font-size: 125%;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {}
    select option[disabled] {
        color:#000;
        font-weight: bold;
    }
</style>
<div></div>

<div class="form-group mb-0" id="divTypeAll">

    <div class="col-sm-12">
        <div class="row" style="margin-left: 25%;">

            <div class="col-md-6">
                <label clas="" for="">Select Type Profile</label>
                <div class="input-group" id="divTypeProfile">
                    <select name="TypeProfile" id="TypeProfile" class="form-control" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="Select Profile Type">
                        <option value="Select Option" selected disabled>Select Option
                        </option>
                        <option value="0">Driver Profile</option>
                        <option value="1">Vehicle Profile</option>




                    </select>


                </div>
            </div>





        </div>
    </div>
</div>




<div class="x_panel" id="divTypeVehicle">
    <div class="x_title">
        <h2>Vehicles Profiles </h2>

        <div class="clearfix"></div>
    </div>
    <iframe id="iframe2" style="display:none;" frameborder="0" width='600' height='400'></iframe>
    <div class="x_content">
        <div class="row">

            <div class="col-sm-12">

                <div class="card-box table-responsive">

                    <div id="datatable-buttons_wrapper"
                        class="dataTables_wrapper container-fluid dt-bootstrap no-footer">

                        <button class="btn btn-success" onclick="OpenModalColV('Excel');"> <i
                                    class="fa fa-file-excel-o"></i></button>
                            <button class="btn btn-danger" onclick="OpenModalColV('PDF');"><i
                                    class="fa fa-file-pdf-o"></i></button>

                        <table id="datatable-buttons"
                            class="table table-striped table-bordered dataTable no-footer dtr-inline"
                            style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info;"
                            style="display: none;">

                            <thead>

                                <tr role="row">

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 257px;" 
                                       >ID</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 380px;"
                                       >Profile</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                       >Type Profile</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        >Company</th>



                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >Loading days</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >Start Time/End Time</th>
                                       <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >Associate Department</th>
                                        
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >Max Loader (Lts)</th>
                                    

                                    
                                    


                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >Station</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >Product</th>


                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >Status</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >Edit</th>

                                    <th id="colU" class="" tabindex="0" aria-controls="datatable-buttons"
                                        rowspan="1" colspan="1" style="width: 155px;"
                                       >Actions
                                    </th>


                                </tr>

                            </thead>
                            <tbody id="tablaPerfiles">

                            </tbody>

                            <tbody id="tablaN">


                                <div class="text-right">
                                    <button id="seeAll" class="btn btn-warning" type="button"> <span id="icono"
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> SEE ALL
                                        |</button>
                                    <!--You can add col-lg-12 if you want -->
                                    <button type="button" class="btn btn-primary "
                                        onclick="javascript:UpdateContenedor('AddPerfiles');">
                                        <pan class="" id="icon_enabled" style="color:white;"></span><i
                                                class="glyphicon glyphicon-plus"></i> NEW PROFILE
                                    </button>

                                </div>

                                <br>



                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->

<div class="x_panel" id="divTypeDriver">
    <div class="x_title">
        <h2>Drivers Profiles</h2>

        <div class="clearfix"></div>
    </div>
    <iframe id="iframe2" style="display:none;" frameborder="0" width='600' height='400'></iframe>
    <div class="x_content">
        <div class="row">

            <div class="col-sm-12">

                <div class="card-box table-responsive">

                    <div id="datatable-buttons_wrapperD"
                        class="dataTables_wrapper container-fluid dt-bootstrap no-footer">

                        <button class="btn btn-success" onclick="OpenModalColD('Excel');"> <i
                                    class="fa fa-file-excel-o"></i></button>
                            <button class="btn btn-danger" onclick="OpenModalColD('PDF');"><i
                                    class="fa fa-file-pdf-o"></i></button>

                        <table id="datatable-buttonsD"
                            class="table table-striped table-bordered dataTable no-footer dtr-inline"
                            style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info;"
                            style="display: none;">

                            <thead>

                                <tr role="row">

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 257px;" 
                                      >ID</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 380px;"
                                       >Profile</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                       >Type Profile</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                       >Company</th>



                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >Loading days</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >Start Time</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >End Time</th>



                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >Status</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >Edit</th>

                                    <th id="colU" class="" tabindex="0" aria-controls="datatable-buttons"
                                        rowspan="1" colspan="1" style="width: 155px;"
                                      >Actions
                                    </th>


                                </tr>

                            </thead>


                            <tbody>


                                <div class="text-right">
                                    <button id="seeAllD" class="btn btn-warning" type="button"> <span id="icono"
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> SEE ALL
                                        |</button>
                                    <!--You can add col-lg-12 if you want -->
                                    <button type="button" class="btn btn-primary "
                                        onclick="javascript:UpdateContenedor('AddPerfiles');">
                                        <pan class="" id="icon_enabled" style="color:white;"></span><i
                                                class="glyphicon glyphicon-plus"></i> NEW PROFILE
                                    </button>

                                </div>

                                <br>



                            </tbody>
                        </table>



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->

<!-- Section:CKECKS -->

<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="modalColumnasTFV" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Select the columns you want to view in the reports</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="ID"
                                value="option1">
                            <label class="form-check-label" for="ID">ID</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="PROFILE"
                                value="option2">
                            <label class="form-check-label" for="PROFILE">PROFILE</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="COMPANY" value="option4">
                            <label class="form-check-label" for="COMPANY">COMPANY</label>
                        </div>


                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="TYPEPROFILE" value="optionq">
                            <label class="form-check-label" for="TYPEPROFILE">TYPE PROFILE</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="LOADINGDAYS" value="option4">
                            <label class="form-check-label" for="LOADINGDAYS">LOADING DAYS</label>
                        </div>
                       

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="STARTTIME" value="optionr">
                            <label class="form-check-label" for="STARTTIME">START TIME/END TIME</label>
                        </div> 

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="ASSOCIATEDEPARTMENT" value="optionxxx">
                            <label class="form-check-label" for="ASSOCIATEDEPARTMENT">ASSOCIATE DEPARTMENT</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="MAXLOADER" value="optionp">
                            <label class="form-check-label" for="MAXLOADER">MAXLOADER</label>
                        </div>


                        

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="AMOUNTDAY" value="optionu">
                            <label class="form-check-label" for="AMOUNTDAY">AMOUNT DAY</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="AMOUNTWEEK" value="optioni">
                            <label class="form-check-label" for="AMOUNTWEEK">AMOUNT WEEK</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="AMOUNTMONTH" value="optiono">
                            <label class="form-check-label" for="AMOUNT MONTH">AMOUNT MONTH</label>
                        </div>
                        

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="STATION" value="optionCC">
                            <label class="form-check-label" for="STATION">STATION</label>
                        </div> 
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="PRODUCT" value="optiony">
                            <label class="form-check-label" for="PRODUCT">PRODUCT</label>
                        </div>

                        
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="STATUS" value="optiona">
                            <label class="form-check-label" for="STATUS">STATUS</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="ALLV" value="option9">
                            <label class="form-check-label" for="All">ALL</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <button type="button" class="btn btn-info btn-sm"
                                onclick="CreateExcelOrPdfV();">APPLY</button>
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


<!-- TABLA VEHICLESSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->
<table id="tablaCV" class="table table-striped" cellspacing="0" width="100%"
        style="border: 1px solid black;display:none">
        <thead>
        <tr>
                <th colspan=2 style="text-align: left;background: #233461;"><img
                        src="{{url('/')}}/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=12
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    VEHICLES PROFILE REPORT</th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=12
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    </th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=12 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=6 style="text-align: left;background: #233461;"></th>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=6
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=6 style="text-align: left;background: #233461;"></th>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=6
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=6
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTT"></th>
                <th colspan=2
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=6
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=6
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTT"></th>
                <th colspan=2
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=6
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=6 style="text-align: left;background: #233461;"></th>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=6
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=2 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
                <th colspan=12 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            </tr>
            <tr>
            

            <th class="id"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ID</th>

                    <th class="profile"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    PROFILE</th>

                    <th class="typeprofile"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TYPE PROFILE</th>

                <th class="company"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY</th>
               

                    <th class="loadingdays"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    LOADING DAYS</th>

               

                    <th class="starttime"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    START TIME/END TIME</th>

                <th class="associatedepartment"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ASSOCIATE DEPARTMENT</th>

                    <th class="maxloader"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    MAX LOADER</th>

                    <th class="amountday"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    AMOUNT DAY</th>


                <th class="amountweek"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    AMOUNT WEEK</th>

                <th class="amountmonth"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    AMOUNT MONTH</th>

                <th class="station"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    STATION</th>
                
               
                <th class="product"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    PRODUCT</th>
                            

                <th class="status"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    STATUS</th>

                    
                    
            </tr>
        </thead>
        <tbody id="emp_body1">
        </tbody>
        <tr>
            <th colspan=9
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
               </th>
            <th colspan=3 style="text-align: right;background: #233461;color:#fff"><img
            src="{{url('/')}}/images/logogrisM.png"></th>
        </tr>
        <tr>
            <th colspan=9
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=9
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>
















<!-- tabla driversssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->

<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="modalColumnasTFD" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Select the columns you want to view in the reports</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="IDD"
                                value="option12">
                            <label class="form-check-label" for="IDD">ID</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="PROFILED"
                                value="option21">
                            <label class="form-check-label" for="PROFILED">PROFILE</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="COMPANYD" value="option43">
                            <label class="form-check-label" for="COMPANYD">COMPANY</label>
                        </div>


                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="TYPEPROFILED" value="optionq1">
                            <label class="form-check-label" for="TYPEPROFILED">TYPE PROFILE</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="LOADINGDAYSD" value="option41">
                            <label class="form-check-label" for="LOADINGDAYSD">LOADING DAYS</label>
                        </div>
                       

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="STARTTIMED" value="optionr1">
                            <label class="form-check-label" for="STARTTIMED">START TIME</label>
                        </div> 

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="ENDTIMED" value="optiont1">
                            <label class="form-check-label" for="ENDTIMED">END TIME</label>
                        </div>

                        

                        
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="STATUSD" value="optiona1">
                            <label class="form-check-label" for="STATUSD">STATUS</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="ALLD" value="option91">
                            <label class="form-check-label" for="All">ALL</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <button type="button" class="btn btn-info btn-sm"
                                onclick="CreateExcelOrPdfD();">APPLY</button>
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



<table id="tablaCD" class="table table-striped" cellspacing="0" width="100%"
        style="border: 1px solid black;display:none">
        <thead>
        <tr>
                <th colspan=2 style="text-align: left;background: #233461;"><img
                        src="{{url('/')}}/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=6
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DRIVERS PROFILE REPORT</th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=6
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    </th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=6 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTTD"></th>
                <th colspan=2
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTTD"></th>
                <th colspan=2
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=2 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
                <th colspan=6 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            </tr>
            <tr>
            

            <th class="iddr"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ID</th>

                    <th class="profiledr"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    PROFILE</th>

                    <th class="typeprofiledr"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TYPE PROFILE</th>

                <th class="companydr"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY</th>
               

                    <th class="loadingdaysdr"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    LOADING DAYS</th>

               

                    <th class="starttimedr"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    START TIME</th>

                <th class="endtimedr"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    END TIME</th>
                            

                <th class="statusdr"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    STATUS</th>

                    
                    
            </tr>
        </thead>
        <tbody id="emp_body1D">
        </tbody>
        <tr>
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
            <th colspan=3 style="text-align: right;background: #233461;color:#fff"><img
            src="{{url('/')}}/images/logogrisM.png"></th>
        </tr>
        <tr>
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>



<!-- TERMINA TABLA  driversssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss-->
















<input type="text" class="form-control" style="display: none;" id="ID">

<div class="clearfix"></div>

<div class="row" id="divEditarPV">

    <div class="x_panel">
        <div class="">
            <h2>Edit Profile </h2>

            <div class="clearfix"></div>
        </div>

        <div class="col-sm-12">
            <div class="x_content">

                <div class="form-group mb-0">

                    <div class="col-sm-12">
                        <div class="row" style="margin-left: 25%;">

                            <div class="col-md-4">
                                <label clas="" for="">Company</label>
                                <div class="input-group autocomplete" id="divCompany">
                                    <input type="text" class="form-control validar" id="Company" data-id=""
                                        name="company" autocomplete="off" placeholder="Name Company"
                                        data-placement="right"
                                        data-original-title="Company with which the vehicle will be registered"
                                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">


                                </div>
                            </div>

                            <div class="col-md-4">
                                <label clas="" for="">Name Profile</label>
                                <div class="input-group" id="divNameProfile">
                                    <input name="NameProfile" id="NameProfile" type="text" required
                                        class="form-control validar" placeholder="Profile Name" data-toggle="tooltip"
                                        data-placement="right" title="">


                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                

                <div id="step-5" class="" style="text-align: -webkit-center;">





                    <!--
                    <div class="col-md-6 centrado " style="    margin-left: 25%;">
                        <label clas="" for="">Select a Type Profile *</label>
                        <div class="input-group" id="divcomboHorario">
                            <select style="display:inline;" name="comboPerfiles" id="comboPerfiles"
                                class="form-control validarCombo" data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Select the type of schedule ">
                                <option value="Select Option" selected disabled>Select Option
                                </option>
                                <option value="DRIVER">DRIVER
                                </option>
                                <option value="VEHICLE">VEHICLE
                                </option>



                            </select>
                            <select style="display:none;" name="comboHorario" id="comboHorario"
                                class="form-control validarCombo" data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Select the type of schedule ">
                                <option value="Select Option" selected disabled>Select Option
                                </option>
                                <option value="1">Full Time [24/7]</option>

                                <option value="2">Define Schedule </option>


                            </select>


                        </div>
                    </div>

-->


                    <div id="divHorario" style="display:inline;">


                        <div class="form-check form-check-inline checkbox">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="Monday" value="option1">
                            <label class="form-check-label" for="Monday">Monday</label>
                        </div>
                        <div class="form-check form-check-inline checkbox">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="Tuesday" value="option2">
                            <label class="form-check-label" for="Tuesday">Tuesday</label>
                        </div>
                        <div class="form-check form-check-inline checkbox">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="Wednesday"
                                value="option3">
                            <label class="form-check-label" for="Wednesday">Wednesday</label>
                        </div>
                        <div class="form-check form-check-inline checkbox">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="Thursday" value="option3">
                            <label class="form-check-label" for="Thursday">Thursday</label>
                        </div>
                        <div class="form-check form-check-inline checkbox">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="Friday" value="option3">
                            <label class="form-check-label" for="Friday">Friday</label>
                        </div>
                        <div class="form-check form-check-inline checkbox">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="Saturday" value="option3">
                            <label class="form-check-label" for="Saturday">Saturday</label>
                        </div>
                        <div class="form-check form-check-inline checkbox">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="Sunday" value="option3">
                            <label class="form-check-label" for="Sunday">Sunday</label>
                        </div>
                        <div class="form-check form-check-inline checkbox">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="All" value="option3">
                            <label class="form-check-label" for="All">All</label>
                        </div>
                        <br>
                        <br>
                        <div class="form-group mb-0 ridge">
                            <div class="col-sm-12">
                                <div class="row" style="margin-left: 25%;">
                                    <br>
                                    <div class="">
                                        <br>
                                        <label clas="" for="">Start Time</label>

                                        <div class="input-group" id="hraini">
                                            <input type='text' class="form-control validar inputPerfiles" id="hraini1"
                                                data-toggle="tooltip" data-placement="right" title=""
                                                data-original-title="Enter the start time for the schedule" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>

                                        </div>
                                    </div>

                                    <div class="">
                                        <br>
                                        <label clas="" for="">End Time</label>

                                        <div class="input-group" id="hrafin">
                                            <input type='text' class="form-control validar inputPerfiles" id="hrafin1"
                                                data-toggle="tooltip" data-placement="right" title=""
                                                data-original-title="Enter the end time for the schedule" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-time"></span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <span class="section">-</span>



                    <div id="divDepartamento" style="display:inline;">
                    <div class="col-md-6 centrado" style="margin-left: 25%;" >
                        <div class="col-md-12">
                        <div id="divCombo1" class="form-group">
                            <label class="control-label mb-10 text-left">Department * </label>
                            <select id="Department" class="form-control" onchange="addDepartment()">
                                <option value="Select Option" required="required" selected="selected">Select Option
                                </option>


                            </select>
                        </div>
                        <div id="divDepartamentosButton" class="form-group">
                            <div id="DepartamentosButton"
                                style=' margin: 1rem;  padding: 1rem;  border: 2px solid #ccc; background-color: #fafafa;'>

                            </div>

                        </div>
                            


                            <input  type="text"  hidden class="" id="idDepas" name="destinatarios" >
                            <br>
                            <p id="cantDestinatarios"></p>
                            <label class="control-label mb-10 text-left">Ask for Odometer * </label>
                            <br>
                            <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input " type="checkbox" id="Odometro"
                                        value="option1">
                                    <label class="form-check-label" for="Odometro">Odometer</label>
                                </div>
                        </div>



                    </div>
                </div>
                    <div class="form-group mb-0 " id="divLimitesMaster" style="display:none;">
                        <div class="form-group mb-0"> 
                        
                            <div class="col-sm-12">
                                <div class="row" style="margin-left: 25%;">

                                    <div class="col-md-4">
                                        <label clas="" for="">Station</label>
                                        <div class="input-group" id="divstation">
                                            <select name="codgas" id="codgas"
                                                class="form-control validarCombo inputPerfiles" data-toggle="tooltip"
                                                data-placement="right" title=""
                                                data-original-title="Select the station where you can dispatch fuel">
                                                <option value="Select Option" selected disabled>Select Option
                                                </option>
                                                <option value="0">ALL</option>
                                                <option value="1">TANK FARM [DIESEL]</option>
                                                <option value="2">TGF [DIESEL/GASOLINE]</option>



                                            </select>


                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label clas="" for="">Fuel</label>
                                        <div class="input-group" id="divComb">
                                            <select name="codprd" id="codprd"
                                                class="form-control validarCombo inputPerfiles" data-toggle="tooltip"
                                                data-placement="right" title=""
                                                data-original-title="Select the type of fuel">
                                                <option value="Select Option" selected disabled>Select Option
                                                </option>
                                                <option  value="1">GASOLINE</option>

                                                <option value="3">DIESEL </option>


                                            </select>


                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 centrado " style="    margin-left: 25%; display:inline;">
                            <label clas="" for="">Limits Fuel Options *</label>
                            <div class="input-group" id="divcomboLimites">
                                <select name="comboLimites" id="comboLimites"
                                    class="form-control validarCombo inputPerfiles" data-toggle="tooltip"
                                    data-placement="right" title="" data-original-title="Select the type of schedule ">
                                    <option value="Select Option" selected disabled>Select Option
                                    </option>
                                    <option value="1">Unlimited Fuel</option>

                                    <option value="2">Define Limits </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row" style="margin-left: 25%;">

                                <div class="col-md-2">
                                    <label clas="" for=""> Max Load (Lts)</label>
                                    <div class="input-group" id="divload">
                                        <input name="" id="carmax" type="number" required
                                            class="form-control validar inputPerfiles" placeholder=""
                                            data-toggle="tooltip" data-placement="right" title=""
                                            data-original-title="The limit of the fuel that the user can dispatch">


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label clas="" for="">Day (Lts)</label>
                                    <div class="input-group" id="divday">
                                        <input name="remitosucursal" id="candia" type="number" required
                                            class="form-control validar inputPerfiles" placeholder=""
                                            data-toggle="tooltip" data-placement="right" title=""
                                            data-original-title="The limit of the fuel that the user can dispatch per day">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label clas="" for="">Week (Lts)</label>
                                    <div class="input-group" id="divweek">
                                        <input name="" id="cansem" type="number" required
                                            class="form-control validar inputPerfiles" placeholder=""
                                            data-toggle="tooltip" data-placement="right" title=""
                                            data-original-title="The limit of the fuel that the user can dispatch per week">


                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <label clas="" for="">Month (Lts)</label>
                                    <div class="input-group" id="divmonth">
                                        <input name="" id="canmes" type="number" required
                                            class="form-control validar inputPerfiles" placeholder=""
                                            data-toggle="tooltip" data-placement="right" title=""
                                            data-original-title="The limit of the fuel that the user can dispatch per month">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12" id="divMensajeError" style="display:none">
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                        <h6 class="pull-left" id="mensajeError">Error:.</h6>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>

        <div id="DivBtns" style="text-align: center;">
            <button type="button" class="btn btn-secondary" onclick="UpdateContenedor('Perfiles');">Cancel</button>
            <button type="button" class="btn btn-success" onclick="validaciones();">Update</button>
        </div>
    </div>
</div>


</div>





<script>
     /*codigo utilizado para eviar clickjacking*/
if (self == top) {
   document.getElementsByTagName("body")[0].style.display = 'block';
} else {
   top.location = self.location;
}

if (top.location != location) top.location = self.location;
//**********************************************************



Tabla_Vehicles = "";
Tabla_Drivers = "";
var click = 0;
var ArrayChoferes = [];
var ArrayChoferes1 = [];
var arrCustomers = [];
var arrCustomers1 = [];
var codigoBarras = "";
var filtro_status;


$("#TypeProfile").change(function() {
    var TipoPerfil = $("#TypeProfile").val();
    if (TipoPerfil == 0) {
        llenarObjProfiles("0", "undefined", "DRIVER");
        llenarTablaPD();

        $("#divTypeAll").show();
        $("#divTypeDriver").show();
        $("#divTypeVehicle").hide();
        $("#divEditarPV").hide();
        $("#divLimitesMaster").hide();
        $("#divDepartamento").hide();
        $('.inputPerfiles').prop("disabled", false);
    } else {
        llenarObjProfiles("0", "undefined", "VEHICLE");
        llenarTablaPV();
        $("#divTypeAll").show();
        $("#divTypeVehicle").show();
        $("#divTypeDriver").hide();
        $("#divEditarPV").hide();
        $("#divDepartamento").show();
        $("#divLimitesMaster").show();
        $('.inputPerfiles').prop("disabled", false);
    }


    //$("#divEditarPerfil").hide();
});

$("#comboLimites").change(function() {
    var comboLimites = $("#comboLimites").val();
    if (comboLimites != "2") {
        $("#carmax").prop("disabled", true);
        $("#candia").prop("disabled", true);
        $("#cansem").prop("disabled", true);
        $("#canmes").prop("disabled", true);
    } else {
        $("#carmax").prop("disabled", false);
        $("#candia").prop("disabled", false);
        $("#cansem").prop("disabled", false);
        $("#canmes").prop("disabled", false);
    }

});

var customer;
var mensajeError="";
function FillCustomer() {
    try {
        var sURL = IPWS + "GetClientes";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            headers: {Authorization: 'Bearer '+objUsuario.Token },
            success: function(data) {
                customer = data.lstClients;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                try {
                mensajeError=textStatus;
                if(mensajeError=="error"){
                    let timerInterval
                        Swal.fire({
                        title: 'The session will be closed, please log in!',
                        html: 'I will close in <b></b> milliseconds.',
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                b.textContent = Swal.getTimerLeft()
                                }
                            }
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            location.href = "{{url('/cerrarSesion')}}";
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
                }
            } catch (error) {
                
            }
            }
        });
        for (var i = 0; i < customer.length; i++) {
            arrCustomers.push([customer[i].den, customer[i].cod]);
            arrCustomers1.push(customer[i].den);
        }
    } catch (error) {

    }

}

function validaciones() {


    

    var textIdioma1 = "";
    var Idioma = "English";

    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
        var invalidCheck = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: Please select days.';
        var invalidCompany = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: Invalid Company.';
        textIdioma1 =
            '<i class="fa fa-warning  pr-15 pull-left"></i> Error: please fill in all fields correctly.';
    }

    $('#divMensajeError').hide();
    console.log("ver");
    var band = []
    var inputs = $(".validar");
    for (let i = 0; i < inputs.length; i++) {
        var typeProfile = $("#TypeProfile").val();
        if (typeProfile == "0" || typeProfile == 0) {
            if (inputs[i].id == "Company" || inputs[i].id == "NameProfile" || inputs[i].id == "hraini1" || inputs[i]
                .id == "hrafin1") {
                var name = inputs[i].id;
                if (inputs[i].value == "") {

                    $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                    band.push(1);
                } else {
                    var company = $("#Company").val();
                    var result = validarAutocomplete(arrCustomers1, company);

                    if (result == "true") {
                        $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                        $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                        band.push(0);
                    } else {
                        $("#divCompany").removeClass("has-ok has-success");
                        $("#divCompany").addClass("has-error has-danger");
                        band.push(3);



                    }

                }

                if ($("input[type='checkbox']").is(':checked') != true) {
                    band.push(2);
                } else {
                    band.push(0);
                }

            }
        } else {
            $('#divMensajeError').hide();
            var band = []
            var inputs = $(".validar");
            for (let i = 0; i < inputs.length; i++) {
                if (inputs[i].value == "") {
                    $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                    band.push(1);
                } else {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);
                }

            }



            var Combos = $(".validarCombo");
            for (let i = 0; i < Combos.length; i++) {
                if (Combos[i].value == "Select Option") {
                    $("#" + Combos[i].parentNode.id).removeClass("has-ok has-success");
                    $("#" + Combos[i].parentNode.id).addClass("has-error has-danger");
                    band.push(1);
                } else {
                    var company = $("#Company").val();
                    var result = validarAutocomplete(arrCustomers1, company);

                    if (result == "true") {
                        $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                        $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                        band.push(0);
                    } else {
                        $("#divCompany").removeClass("has-ok has-success");
                        $("#divCompany").addClass("has-error has-danger");
                        band.push(3);



                    }
                }

            }

            if($('#idDepas').val() ==""){
                $("#DepartamentosButton").css('border-color','rgba(218, 71, 58, 0.5)');
                band.push(1);
            //border-color: rgba(218, 71, 58, 0.5); 
            }else{
                $("#DepartamentosButton").css('border-color','#1abb9c');
                band.push(0);
            }

            if ($("input[type='checkbox']").is(':checked') != true) {
                band.push(2);
            } else {
                band.push(0);
            }


        }
    }


    /*
        var Combos = $(".validarCombo");
        for (let i = 0; i < Combos.length; i++) {
            if (Combos[i].value == "Select Option") {
                $("#" + Combos[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + Combos[i].parentNode.id).addClass("has-error has-danger");
                band.push(1);
            } else {
                $("#" + Combos[i].parentNode.id).addClass("has-ok has-success");
                $("#" + Combos[i].parentNode.id).removeClass("has-error has-danger");
                band.push(0);
            }

        }


        if ($("input[type='checkbox']").is(':checked') != true) {
            band.push(2);
        } else {
            band.push(0);
        }

    */

    var band2 = 0;
    var result = $.inArray(1, band);
    var result2 = $.inArray(2, band);
    var result3 = $.inArray(3, band);
    if (result != -1) {
        band2 = 1;

    } else if (result2 != -1) {

        band2 = 2;
    } else if (result3 != -1) {

        band2 = 3;
    }


    if (band2 == 0) {

        $('#divMensajeError').hide();

        UpdateVehicleProfile();


    } else if (band2 == 1) {

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
        return false;
    } else if (band2 == 2) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(invalidCheck);
        return false;
    } else if (band2 == 3) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(invalidCompany);
        return false;
    }

}



function validarAutocomplete(array, value) {
    var result = $.inArray(value, array);
    if (result != -1) {
        return "true";
    } else {
        return "false";
    }
}













$(document).ready(function() {
    //init_SmartWizard();

    // $('#datatable-buttons').empty();
    init_DataTables();
    FillCustomer();
    $("#divEditarPV").hide();
    $("#divTypeVehicle").hide();
    $("#divEditarPerfil").hide();
    $("#divTypeDriver").hide();
    $("#divEditarPV").hide();


    llenarObjProfiles("0", "undefined", "VEHICLE");

    FillDepartment();
    





});


var objDepartamentos="";
    var objIDDepa="";
    var objDepartamneto=[];
    var objID=[];
    var bandera=0;
    function addDepartment() {
        
        
    if ($('#Department').val() != 'Select Option' ) {
        
        $("#Department").addClass("has-ok has-success");
        $("#Department").removeClass("has-error has-danger");

       
        var arreDest = objDepartamentos.split(",");
        if(arreDest.length > 0){
            for (let x = 0; x < arreDest.length; x++) {
                if (arreDest[x] == $('#Department option:selected').text() &&  arreDest[x] !="" )  {
                    bandera=1;
                    
                    
                    break;        
                }else{
                    bandera=0;
                }

            }
        }
        


        if( bandera==0){
            if ($('#Department').val() != 'Select Option' ) {
                objDepartamentos = objDepartamentos  + $('#Department option:selected').text()+ ',';
            objIDDepa  = objIDDepa  + $('#Department ').val()+ ',';
            objDepartamneto=objDepartamentos;
            objID=objIDDepa;
            $('#Department option:selected').attr('disabled',true);
            $('#idDepas').val(objIDDepa);
            $('#DepartamentosButton').empty();
            arreDest = objDepartamentos.split(",");
            arreDest.forEach(function(valor, indice, array) {
                if (valor != "") {

                    if(bandera==0){
                        $('#DepartamentosButton').append(
                        '<div class="dropdown"> <button class="dropbtn">' + valor +
                        '</button> <div class="dropdown-content"> <a href="javascript:eliminarDep(' +
                        "'" + valor + "'" +
                        ');"><i class="fa fa-remove"></i>&nbsp;&nbsp;Delete</a> </div></div>'
                    );
                    }
                    
                }

            });
            }

        }

        
        

        
    } else {
        $("#Department").removeClass("has-ok has-success");
        $("#Department").addClass("has-error has-danger");
        swal("Error", "Please add correct information", "error");
        $('#DepartamentosButton').empty();
    }


}

function eliminarDep(depa) {

            
            var id;
            var objSepararDepartamneto=objDepartamneto.split(",");
            var objSepararID=objIDDepa.split(",");
            var idDepartamento="";
            for (let i = 0; i < objSepararDepartamneto.length-1; i++) {
                if (objSepararDepartamneto[i]== depa) {
                    idDepartamento =objSepararID[i];
                    id=idDepartamento;
                    if(idDepartamento==objSepararID[i]){
                        objSepararID.splice(i,1);
                        $('#Department option[value="'+id+'"]').attr('disabled',false);
                        objSepararDepartamneto.splice(i,1);
                        objDepartamneto = objDepartamneto.replace(depa + ',', '');
                        objIDDepa = objIDDepa.replace(id + ',', '');
                        objDepartamentos=objDepartamneto;
                        
                    }
                    break;
                }
            }
            $('#idDepas').val(objSepararID);
            $('#DepartamentosButton').empty();

            objSepararDepartamneto.forEach(function(valor, indice, array) {
                if (valor != "") {
                    $('#DepartamentosButton').append(
                        '<div class="dropdown"> <button class="dropbtn">' + valor +
                        '</button> <div class="dropdown-content"> <a href="javascript:eliminarDep(' +
                        "'" + valor + "'" +
                        ');"><i class="fa fa-remove"></i>&nbsp;&nbsp;Delete</a> </div></div>'
                    );
                }

            });



/*
            objDepartamentos= objDepartamentos.replace(depa + ',', '')
            //var idDepa =$("#Department option:contains('"+depa+"')").val();
            objIDDepa= objIDDepa.replace(idDepa + ',', '')
            $("#Department").addClass("has-ok has-success");
            $("#Department").removeClass("has-error has-danger");
            $('#idDepas').val(objIDDepa);
            $('#DepartamentosButton').empty();
            var arreDest = objDepartamentos.split(",");
            arreDest.forEach(function(valor, indice, array) {
                if (valor != "") {
                    $('#DepartamentosButton').append(
                        '<div class="dropdown"> <button class="dropbtn">' + valor +
                        '</button> <div class="dropdown-content"> <a href="javascript:eliminarDep(' +
                        "'" + valor + "'" +
                        ');"><i class="fa fa-remove"></i>&nbsp;&nbsp;Delete</a> </div></div>'
                    );
                }

            });
            */

/*swal({
        title: "Are you sure you want to delete this Email?  [" + depa + "]",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $('#DestinatariosButton').empty();
            objConfig.DESTINATARIOS = objConfig.DESTINATARIOS.replace(depa + ';', '')
            $('#destinatarios').html(objConfig.DESTINATARIOS);
            $('#DestinatariosButton').empty();
            var arreDest = objConfig.DESTINATARIOS.split(";");
            arreDest.forEach(function(valor, indice, array) {
                if (valor != "") {
                    $('#DepartamentosButton').append(
                    '<div class="dropdown"> <button class="dropbtn">' + valor +
                    '</button> <div class="dropdown-content"> <a href="javascript:eliminarDep(' +
                    "'" + valor + "'" +
                    ');"><i class="fa fa-remove"></i>&nbsp;&nbsp;Delete</a> </div></div>'
                    );
                }

            });

            var arrDest = $('#destinatarios').val().toString().trim().split(";");
            if (arrDest.length > 0) {
                $('#cantDestinatarios').html("you have " + (arrDest.length-1) +
                    " recipients.");
            }
        } else {
            //swal("Without changes!");
        }
    });*/


}
    var ArrayDep;

function FillDepartment() {
    console.log("llm");
    var sURL = IPWS +"GetDepartamentos";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        success: function(data) {
            ArrayDep = data.lstDep;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            try {
                mensajeError=textStatus;
                if(mensajeError=="error"){
                    let timerInterval
                        Swal.fire({
                        title: 'The session will be closed, please log in!',
                        html: 'I will close in <b></b> milliseconds.',
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                b.textContent = Swal.getTimerLeft()
                                }
                            }
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            location.href = "{{url('/cerrarSesion')}}";
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
                }
            } catch (error) {
                
            }
        }
    });
    $('#Department').empty();
    Depa = ' <option value="Select Option" selected disabled>Select Option</option>';
    $(ArrayDep).each(function(i) {
        Depa += '<option value="' + this.ID + '">' + this.Departamento + '</option>';
    });
    $('#Department').html(Depa);
}



function llenarObjProfiles(id, all, TipoPerfil) {
    console.log("vehicles");
    var para = {
        "id": id,
        "all": all,
        "TipoPerfil": TipoPerfil,


    };

    limpiarTabla();
    var sURL = IPWS + "GetPerfiles";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        crossDomain: true,
        xhrFields: {
            cors: false
        },
        cache: false,
        data: para,

        //dataFilter: function (data) { return data; },
        success: function(data) {

            objPV = data.lstPerfiles;

            var TipoPerfil = $("#TypeProfile").val();
            if (TipoPerfil == 0) {
                llenarTablaPD();

            } else {
                llenarTablaPV();
            }




        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            try {
                mensajeError=textStatus;
                if(mensajeError=="error"){
                    let timerInterval
                        Swal.fire({
                        title: 'The session will be closed, please log in!',
                        html: 'I will close in <b></b> milliseconds.',
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                b.textContent = Swal.getTimerLeft()
                                }
                            }
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            location.href = "{{url('/cerrarSesion')}}";
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
                }
            } catch (error) {
                
            }
        }
    });
}






window.addEventListener("keypress", function(event) {
    if (event.keyCode == 13 || event.keyCode == 37 || event.keyCode == 39) {
        console.log("teclas");
        event.preventDefault();

    }

}, false);


function limpiarTabla() {
    $("tablaPerfiles").empty();
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
            if (arr[i][0].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i][0].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i][0].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i][0] + "' data-id='" + arr[i][1] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/

                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    inp.dataset.id = this.getElementsByTagName("input")[0].dataset.id;
                    //console.log(arr[i][1]);

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


function llenarTablaPV() {
    console.log("tabla");
    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var StatusCutomer = "";
    var NameProd = "";
    var NameStation = "";
    var colorboton = "";
    var statusProfile = "";
    Tabla_Vehicles.clear().draw();

    var htmlBotonStatus = "";


    for (var i = 0; i < objPV.length; i++) {



        if (objPV[i].codgas == "1") {
            NameStation = "TF";
        } else {
            NameStation = "TGF";
        }


        if (objPV[i].codprd == "1") {
            NameProd = "<label class='label label-danger'> GASOLINE </label>";
        } else if (objPV[i].codprd == "2") {
            NameProd = "<label class='label label-success'> GASOLINE </label>";
        } else if (objPV[i].codprd == "3") {
            NameProd = "<label class='label label-dark'> DIESEL </label>";
        }

        if (objPV[i].status == 0) {
            statusProfile = "<label class='label label-success'> ENABLED </label>";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else  {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusProfile = "<label class='label label-danger' >DISABLED</label>";
        }
        limpiarTabla();
        if (pos == 0) {
            var NombreDepartamento="";
            if(objPV[i].NombreDepartamento != ""){
                NombreDepartamento=objPV[i].NombreDepartamento.slice(0,-1);
            }
            Tabla_Vehicles.row.add([
                String(objPV[i].ID),
                String(objPV[i].namePerfil),
                String(objPV[i].tipoPerfil),
                String(quitarCaracteres(objPV[i].xNombreCliente)),
                //String("<label class='label label-info2'> " + objPV[i].tag + " </label>"),
                //String(objPV[i].den),
                String(convertDays(objPV[i].diacar)), //
                //String("<label class='label label-info2'> Mo-Tu-We-Th-Fr-Sa-Su </label>"),
                String(convertHoras(objPV[i].hraini)+"/"+(convertHoras(objPV[i].hrafin))),
                String(NombreDepartamento),
                String(objPV[i].carmax),
                
                //String(objPV[i].candia),
                //String(objPV[i].cansem),
                //String(objPV[i].canmes),
               

                String(NameStation),
                String(NameProd),

                String(statusProfile),
                String('<button type="button" onclick="MostrarDivEditarPV(' + i +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button" onclick="statusProfiles(' + i + ')" class="' + htmlBotonStatus +
                    '"> ' + title + '</button>'),

            ]);
        }



    }

    Tabla_Vehicles.column('1:visible').draw()



}



function quitarCaracteres(cadena) {
    var dato= cadena.replace(/[^a-zA-Z 0-9.]+/g, ' ');
    return dato;
}

function llenarTablaPD() {

    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var StatusCutomer = "";
    var NameProd = "";
    var NameStation = "";
    var colorboton = "";
    var statusProfile = "";
    Tabla_Drivers.clear().draw();
    var htmlBotonStatus = "";
    for (var i = 0; i < objPV.length; i++) {
        if (objPV[i].status == 0) {
            statusProfile = "<label class='label label-success'> ENABLED </label>";
            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objPV[i].status != 0) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusProfile = "<label class='label label-danger' >DISABLED</label>";
        }
        limpiarTabla();
        if (pos == 0) {
            Tabla_Drivers.row.add([
                String(objPV[i].ID),
                String(objPV[i].namePerfil),
                String(objPV[i].tipoPerfil),
                String(quitarCaracteres(objPV[i].xNombreCliente)),
                //String("<label class='label label-info2'> " + objPV[i].tag + " </label>"),
                //String(objPV[i].den),
                String(convertDays(objPV[i].diacar)), //
                //String("<label class='label label-info2'> Mo-Tu-We-Th-Fr-Sa-Su </label>"),
                String(convertHoras(objPV[i].hraini)),
                String(convertHoras(objPV[i].hrafin)),
                String(statusProfile),
                String('<button type="button" onclick="MostrarDivEditarPV(' + i +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button" onclick="statusProfiles(' + i + ')" class="' + htmlBotonStatus +
                    '"> ' + title + '</button>'),
            ]);
        }
    }
    Tabla_Drivers.column('1:visible').draw()
}



function convertDays(numdias = 0) {
    var ListaDeDias = "";
    var Dias = [1, 2, 4, 8, 16, 32, 64];
    var NombresDias = ["Mo", "Tu", "We", "Th", "Fr", "Sa", "Sun"];
    for (var i = 0; i < Dias.length; i++) {

        var num = parseInt(numdias) / Dias[i];
        num = parseInt(num);
        if (num % 2 == 0) {

        } else {
            if (num >= 1) {

                ListaDeDias += NombresDias[i] + "-";
            }

        }
    }
    return ListaDeDias;
}

function convertHoras(numhoras = 0) {
    var hora1 = "";
    if (String(numhoras).length == 3) {
        var h1 = String(numhoras).substring(0, 1);
        var min1 = String(numhoras).substring(1, 3);
        hora1 = "0" + h1 + ":" + min1;
    }
    if (String(numhoras).length == 4) {
        var h1 = String(numhoras).substring(0, 2);
        var min1 = String(numhoras).substring(2, 4);
        hora1 = h1 + ":" + min1;
    }
    if (String(numhoras).length == 1) {
        hora1 = (numhoras == 0) ? "00:00" : numhoras;

    }


    return hora1;
}


function LlenarDepartamento(ObjPerfil){
    var objseparar=ObjPerfil.Departamentos.split(",");

    for (var i = 0; i < objseparar.length-1; i++) {
        for (var j = 0; j < ArrayDep.length; j++) {
     
            if(objseparar[i]==ArrayDep[j].ID && objseparar[i] != ""){
                objDepartamentos= objDepartamentos + ArrayDep[j].Departamento + ",";
                objIDDepa= objIDDepa + ArrayDep[j].ID + ",";
                $('#Department option[value="'+ArrayDep[j].ID+'"]').attr('disabled',true);
            }

       
    }
}

llenarDepartamentoVista();

    if(ObjPerfil.Odometro=="true"){
        $("#Odometro").attr("checked", true);
    }else{
        $("#Odometro").attr("checked", false);
    }
}

function llenarDepartamentoVista(){
            
    if (true ) {
        
        $("#Department").addClass("has-ok has-success");
        $("#Department").removeClass("has-error has-danger");

       
        var arreDest = objDepartamentos.split(",");
        //objDepartamentos = objDepartamentos  + $('#Department option:selected').text()+ ',';
        //objIDDepa  = objIDDepa  + $('#Department ').val()+ ',';
        objDepartamneto=objDepartamentos;
        objID=objIDDepa;
       
        $('#idDepas').val(objIDDepa);
        $('#DepartamentosButton').empty();
        arreDest = objDepartamentos.split(",");
        arreDest.forEach(function(valor, indice, array) {
            if (valor != "") {

                if(bandera==0){
                    $('#DepartamentosButton').append(
                    '<div class="dropdown"> <button class="dropbtn">' + valor +
                    '</button> <div class="dropdown-content"> <a href="javascript:eliminarDep(' +
                    "'" + valor + "'" +
                    ');"><i class="fa fa-remove"></i>&nbsp;&nbsp;Delete</a> </div></div>'
                );
                }
                
            }

        });
        


       
            
                
            

        
    }   
}


var ListaDeDias = [];
var ListaHoras = [];
var nroveh;

function MostrarDivEditarPV(pos, id) {

   
    $("#divTypeVehicle").hide();
    $("#divTypeDriver").hide();
    $("#divTypeAll").hide();
    if (objPV[pos].carmax >= "999" && objPV[pos].candia >= "999" && objPV[pos].cansem >= "999" && objPV[pos].canmes >=
        "999") {
        $("#carmax").prop("disabled", true);
        $("#candia").prop("disabled", true);
        $("#cansem").prop("disabled", true);
        $("#canmes").prop("disabled", true);
    } else {
        $("#carmax").prop("disabled", false);
        $("#candia").prop("disabled", false);
        $("#cansem").prop("disabled", false);
        $("#canmes").prop("disabled", false);
    }
    LlenarDepartamento(objPV[pos]);




    console.log("ped");
    var Dias = [1, 2, 4, 8, 16, 32, 64];
    var NombresDias = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

    $('#divEditarPV').show();

    //llenar la informacion del usuario
    //$('#ID').val(objPV[pos].tag);

    var hora1 = "";
    var hora2 = "";
    if (String(objPV[pos].hraini).length == 3) {
        var h1 = String(objPV[pos].hraini).substring(0, 1);
        var min1 = String(objPV[pos].hraini).substring(1, 3);
        hora1 = "0" + h1 + ":" + min1;
    }
    if (String(objPV[pos].hraini).length == 4) {
        var h1 = String(objPV[pos].hraini).substring(0, 2);
        var min1 = String(objPV[pos].hraini).substring(2, 4);
        hora1 = h1 + ":" + min1;
    }
    if (String(objPV[pos].hraini).length == 1) {
        hora1 = (objPV[pos].hraini == 0) ? "00:00" : ObjDrivers[pos].hraini;

    }
    if (String(objPV[pos].hrafin).length == 3) {
        var h1 = String(objPV[pos].hrafin).substring(0, 1);
        var min1 = String(objPV[pos].hrafin).substring(1, 3);
        hora2 = "0" + h1 + ":" + min1;
    }
    if (String(objPV[pos].hrafin).length == 4) {
        var h1 = String(objPV[pos].hrafin).substring(0, 2);
        var min1 = String(objPV[pos].hrafin).substring(2, 4);
        hora2 = h1 + ":" + min1;
    }
    if (String(objPV[pos].hrafin).length == 1) {
        hora2 = (objPV[pos].hrafin == 0) ? "00:00" : ObjDrivers[pos].hrafin;
        //hora2=(ObjDrivers[pos].hrafin == 0) ? "00:00" : ObjDrivers[pos].hrafin;
    }
    $('#hraini1').val(hora1);
    $('#hrafin1').val(hora2);
    document.getElementById("Company").dataset.id = objPV[pos].codcli;

    $('#ID').val(objPV[pos].ID);
    $('#Company').val(objPV[pos].xNombreCliente);
    $('#NameProfile').val(objPV[pos].namePerfil);

    ListaHoras.push({
        hraini1: hora1
    });
    ListaHoras.push({
        hrafin2: hora2
    });
    var typeProfile = $("#TypeProfile").val();
    if (typeProfile == "1" || typeProfile == 1) {
        $("#codprd  option[value='" + objPV[pos].codprd + "']").attr("selected", true);
        $("#codgas  option[value='" + objPV[pos].codgas + "']").attr("selected", true);
        $("#est  option[value='" + objPV[pos].est + "']").attr("selected", true);
        $('#candia ').val(objPV[pos].candia);
        $('#cansem').val(objPV[pos].cansem);
        $('#canmes').val(objPV[pos].canmes);
        $('#carmax').val(objPV[pos].carmax);
        llenarComboHorario();
    }






    for (var i = 0; i < Dias.length; i++) {

        var num = parseInt(objPV[pos].diacar) / Dias[i];
        num = parseInt(num);
        if (num % 2 == 0) {

        } else {
            if (num >= 1) {
                $('#' + NombresDias[i]).prop('checked', true);
                var nomDia = JSON.parse('{"' + NombresDias[i] + '":true}');

                ListaDeDias.push(nomDia);
            }

        }
    }



}

function llenarDatosHorario(op) {
    if (op == 1) {
        $("#Monday").prop("checked", true);
        $("#Tuesday").prop("checked", true);
        $("#Wednesday").prop("checked", true);
        $("#Thursday").prop("checked", true);
        $("#Friday").prop("checked", true);
        $("#Saturday").prop("checked", true);
        $("#Sunday").prop("checked", true);
        //$("#Sunday").prop("checked", true);
        $('#hraini1').val("00:00");
        $('#hrafin1').val("23:59");
    }
    if (op == 2) {
        $("#Monday").prop("checked", false);
        $("#Tuesday").prop("checked", false);
        $("#Wednesday").prop("checked", false);
        $("#Thursday").prop("checked", false);
        $("#Friday").prop("checked", false);
        $("#Saturday").prop("checked", false);
        $("#Sunday").prop("checked", false);
        $('#hraini1').val("");
        $('#hrafin1').val("");
    }



}

$("#comboHorario").change(function() {
    var op = $("#comboHorario").val();
    if (op == 1) {
        llenarDatosHorario(op);
        $("#divHorario").hide();
    }
    if (op == 2) {
        llenarDatosHorario(op);
        $("#divHorario").show();
    }
});
$("#comboLimites").change(function() {
    var op = $("#comboLimites").val();
    if (op == 1) {
        $('#carmax').val("900");
        $('#candia').val("9999");
        $('#cansem').val("9999");
        $('#canmes').val("9999");
        $("#divLimites").hide();
    }
    if (op == 2) {
        $('#carmax').val("");
        $('#candia').val("");
        $('#cansem').val("");
        $('#canmes').val("");
        $("#divLimites").show();
    }
});

function llenarComboHorario() {
    try {
        //limites de
        if (ListaHoras[0].hraini1 == "00:00" && ListaHoras[1].hrafin2 == "23:59" && ListaDeDias.length == 7) {
            $("#comboHorario  option[value='1']").attr("selected", true);
            $("#divHorario").hide();
        } else {
            $("#comboHorario  option[value='2']").attr("selected", true);
            $("#divHorario").show();
        }
        //limites de litros
        if ($('#carmax').val() == "900" && $('#candia').val() == "9999" && $('#cansem').val() == "9999" && $('#canmes')
            .val() == "9999") {
            $("#comboLimites  option[value='1']").attr("selected", true);
            $("#divLimites").hide();
        } else {
            $("#comboLimites  option[value='2']").attr("selected", true);
            $("#divLimites").show();
        }
    } catch (error) {
        console.error("Error: convert shudule");
    }

}





function ClearForm() {
    $('#Name').val("");
    $('#UserName').val("");
    $('#Password').val("");
    $('#Phone').val("");
    $('#Email').val("");
    $('#Company').val("");
    $('#Rol option:first').prop('selected', true);
    $('#Languague option:first').prop('selected', true);
    //"IdRol": 1,
    //"IdIdioma": 1,
}
$("#Clear").on('click', function() {
    ClearForm();
});







function UpdateVehicleProfile() {

    var ID = $('#ID').val();
    var diacar = 0;
    var codcli = document.getElementById("Company").dataset.id;
    var namePerfil = $('#NameProfile').val();
    var hraini = $('#hraini1').val();
    var hrafin = $('#hrafin1').val();
    var hrai = hraini;
    var hraf = hrafin;
    var PedirOdometro =$('#Odometro').is(':checked');
    hrai = hrai.replace(/:/g, "");
    hraf = hraf.replace(/:/g, "");
    hraini = hrai;
    hrafin = hraf;
    if (hraini == "00:00" || hraini == "0000" || hraini == "") {
        hraini = "0";
    }
    if (hrafin == "00:00" || hrafin == "0000" || hrafin == "") {
        hrafin = "0";
    }
    var typeProfile = $("#TypeProfile").val();
    if (typeProfile == "1" || typeProfile == 1) {

        var codgas = $('#codgas').val();
        var codprd = $('#codprd').val();
        var carmax = $('#carmax').val();
        var candia = $('#candia').val();
        var cansem = $('#cansem').val();
        var canmes = $('#canmes').val();
        var comboLimites = $("#comboLimites").val();


    } else {

    }


    if ($('#Monday').is(':checked')) {
        diacar = 1;
    }
    if ($('#Tuesday').is(':checked')) {
        diacar = diacar + 2;
    }
    if ($('#Wednesday').is(':checked')) {
        diacar = diacar + 4;
    }
    if ($('#Thursday').is(':checked')) {
        diacar = diacar + 8;
    }
    if ($('#Friday').is(':checked')) {
        diacar = diacar + 16;
    }
    if ($('#Saturday').is(':checked')) {
        diacar = diacar + 32;
    }
    if ($('#Sunday').is(':checked')) {
        diacar = diacar + 64;
    }



    swal.fire({
            title: "Are you sure?",
            text: "THIS PROFILE WILL BE UPDATED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {

                    "ID": ID,
                    "codcli": codcli,
                    "Unlimited":comboLimites,
                    "namePerfil": namePerfil,
                    "diacar": diacar,
                    "hraini": hraini,
                    "hrafin": hrafin,
                    "codgas": codgas,
                    "codprd": codprd,
                    "carmax": carmax,
                    "candia": candia,
                    "cansem": cansem,
                    "canmes": canmes,
                    "Departamentos":objIDDepa,
                    "Odometro":PedirOdometro,




                };
                var sURL = IPWS +"WsUpdatePerfil";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    data: para,
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal.fire("OK! PROFILE UPDATED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('Perfiles');
                        } else {
                            swal.fire("Error", "ERROR UPDATING DATA", "error");
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        try {
                mensajeError=textStatus;
                if(mensajeError=="error"){
                    let timerInterval
                        Swal.fire({
                        title: 'The session will be closed, please log in!',
                        html: 'I will close in <b></b> milliseconds.',
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                b.textContent = Swal.getTimerLeft()
                                }
                            }
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            location.href = "{{url('/cerrarSesion')}}";
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
                }
            } catch (error) {
                
            }
                    }
                });

            } else {
                swal.fire("without changes!");
            }
        });





}


$('#All').change(function() {

    if ($(this).is(":checked")) {

        $("#Monday").prop("checked", true);

        $("#Tuesday").prop("checked", true);

        $("#Wednesday").prop("checked", true);

        $("#Thursday").prop("checked", true);

        $("#Friday").prop("checked", true);

        $("#Saturday").prop("checked", true);

        $("#Sunday").prop("checked", true);
    } else {
        $("#Monday").prop("checked", false);

        $("#Tuesday").prop("checked", false);

        $("#Wednesday").prop("checked", false);

        $("#Thursday").prop("checked", false);

        $("#Friday").prop("checked", false);

        $("#Saturday").prop("checked", false);

        $("#Sunday").prop("checked", false);
    }

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

        if ($("#datatable-buttons").length) {
            Tabla_Vehicles = $("#datatable-buttons").DataTable({
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],

                buttons: [{
                        //Botón para Excel
                        //extend: 'excelHtml5',
                        footer: true,
                        title: 'Vehicles_Profile_' + today,
                        filename: 'Vehicles_Profile_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7,8,9,10,11,12,13],
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
                            //$('row c:nth-child(4)', sheet).attr('s', '7');
                            //First row
                            $('row:first c', sheet).attr('s', '47');

                            // One cell
                            // $('row c[r^="D6"]', sheet).attr('s', '32');
                            // Loop over the cells in column `E` the amount column

                            //All cells of row 10

                            //Search all cells for a specific text


                            $('row c[r^="M"]', sheet).each(function() {
                                if ($(this).text() == 'ENABLED') {
                                    $(this).attr('s', '40');
                                } else if ($(this).text() == 'DISABLED') {
                                    $(this).attr('s', '35');
                                }



                            });


                            var col = $('col', sheet);
                            col.each(function() {
                                $(this).attr('width', 10);
                            });
                            $(col[0]).attr('width', 10);
                            $(col[1]).attr('width', 25);
                            $(col[2]).attr('width', 25);
                            $(col[3]).attr('width', 25);
                            $(col[4]).attr('width', 20);
                            $(col[5]).attr('width', 15);
                            $(col[6]).attr('width', 15);

                            $(col[7]).attr('width', 15);
                            $(col[8]).attr('width', 15);
                            $(col[9]).attr('width', 15);
                            $(col[10]).attr('width', 15);
                            $(col[11]).attr('width', 15);
                            $(col[12]).attr('width', 15);
                            $(col[13]).attr('width', 15);
                            
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
                        title: 'Vehicles_Profile_' + today,
                        filename: 'Vehicles_Profile_' + today,

                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7,8,9,10,11,12,13],
                            alignment:'center',
                        },

                        orientation: 'landscape',
                        pageSize: 'LEGAL',

                        tableHeader: {
                            alignment: 'center'
                        },
                        //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                        customize: function(doc) {
                           
                            age = Tabla_Vehicles.column(13).data().toArray();
                            for (var i = 0; i < age.length; i++) {
                                var text = age[i].substring(35, 43);
                                if (text != "DISABLED") {
                                    doc.content[1].table.body[i + 1][13].fillColor = '#72DB3A';
                                } else {
                                    doc.content[1].table.body[i + 1][13].fillColor = '#FF0000';
                                }
                            }
                        }


                    }


                ],
                responsive: true,

            });
        }


        if ($("#datatable-buttonsD").length) {
            Tabla_Drivers = $("#datatable-buttonsD").DataTable({
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,

                buttons: [{
                        //Botón para Excel
                        //extend: 'excelHtml5',
                        footer: true,
                        title: 'Drivers_Profile_' + today,
                        filename: 'Drivers_Profile_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7],
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
                           // $('row c:nth-child(4)', sheet).attr('s', '7');
                            //First row
                            $('row:first c', sheet).attr('s', '47');

                            // One cell
                            // $('row c[r^="D6"]', sheet).attr('s', '32');
                            // Loop over the cells in column `E` the amount column

                            //All cells of row 10

                            //Search all cells for a specific text

                            


                            $('row c[r^="M"]', sheet).each(function() {
                                if ($(this).text() == 'ENABLED') {
                                    $(this).attr('s', '40');
                                } else if ($(this).text() == 'DISABLED') {
                                    $(this).attr('s', '35');
                                }



                            });


                            var col = $('col', sheet);
                            col.each(function() {
                                $(this).attr('width', 10);
                            });
                            $(col[0]).attr('width', 10);
                            $(col[1]).attr('width', 20);
                            $(col[2]).attr('width', 20);
                            $(col[3]).attr('width', 25);
                            $(col[4]).attr('width', 25);
                            $(col[5]).attr('width', 15);
                            $(col[6]).attr('width', 15);

                            $(col[7]).attr('width', 25);
                          
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
                        title: 'Drivers_Profile_' + today,
                        filename: 'Drivers_Profile_' + today,

                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7],
                        },

                        orientation: 'landscape',
                        pageSize: 'LEGAL',

                        tableHeader: {
                            alignment: 'center'
                        },
                        //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                        customize: function(doc) {
                            
                            age = Tabla_Drivers.column(7).data().toArray();
                            for (var i = 0; i < age.length; i++) {
                                var text = age[i].substring(35, 43);
                                if (text != "DISABLED") {
                                    doc.content[1].table.body[i + 1][7].fillColor = '#72DB3A';
                                } else {
                                    doc.content[1].table.body[i + 1][7].fillColor = '#FF0000';
                                }
                            }
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





$(function() {
    $('#hraini').datetimepicker({
        format: 'HH:mm'
    });
    $('#hrafin').datetimepicker({
        format: 'HH:mm'
    });
});


function statusProfiles(pos, id) {


    if (objPV[pos].status == "0") {

        UpdateDisabled(pos, objPV[pos].ID, "Perfiles", "ID", "Local");

    } else {

        UpdateEnabled(pos, objPV[pos].ID, "Perfiles", "ID", "Local");
    }
}

function UpdateDisabled(pos, id, table, nameid, BDD) {
    var TipoPerfil = $("#TypeProfile").val();
    var type = "";
    if (TipoPerfil == 0) {
        type = "DRIVER";

    } else {
        var type = "VEHICLE";
    }
    swal.fire({
            title: "SURE YOU WANT DISABLED THIS PROFILE?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    Id: id,
                    Status: -1,
                    table: table,
                    nameid: nameid,
                    BDD: BDD,
                    nameStatus: "status"
                };

                var sURL = IPWS + "WsStatusChangue";
                $.ajax({
                    url: sURL,
                    data: para,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal.fire("GOOD JOB!", "PROFILE DISABLED SUCCESSFULLY!", "success");
                            llenarObjProfiles("0", "undefined", type);
                            UpdateContenedor('Perfiles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal.fire("Error,TRY AGAIN!", "error");

                            llenarObjProfiles("0", "undefined", type);
                            UpdateContenedor('Perfiles');
                            return "ERROR";
                        }


                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        try {
                mensajeError=textStatus;
                if(mensajeError=="error"){
                    let timerInterval
                        Swal.fire({
                        title: 'The session will be closed, please log in!',
                        html: 'I will close in <b></b> milliseconds.',
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                b.textContent = Swal.getTimerLeft()
                                }
                            }
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            location.href = "{{url('/cerrarSesion')}}";
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
                }
            } catch (error) {
                
            }
                    }
                });
            } else {
                swal.fire("Without changes!");
            }
        });

}





function UpdateEnabled(pos, id, table, nameid, BDD) {
    var TipoPerfil = $("#TypeProfile").val();
    var type = "";
    if (TipoPerfil == 0) {
        type = "DRIVER";

    } else {
        var type = "VEHICLE";
    }
    swal.fire({
            title: "SURE YOU WANT ENABLED THIS PROFILE?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    Id: id,
                    Status: 0,
                    table: table,
                    nameid: nameid,
                    BDD: BDD,
                    nameStatus: "status",

                };

                var sURL = IPWS + "WsStatusChangue";
                $.ajax({
                    url: sURL,
                    data: para,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal.fire("GOOD JOB!", "PROFILE ENABLED SUCCESSFULLY!", "success");
                            llenarObjProfiles("0", "undefined", type);
                            UpdateContenedor('Perfiles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal.fire("Error,TRY AGAIN!", "error");

                            llenarObjProfiles("0", "undefined", type);
                            UpdateContenedor('Perfiles');
                            return "ERROR";
                        }


                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        try {
                mensajeError=textStatus;
                if(mensajeError=="error"){
                    let timerInterval
                        Swal.fire({
                        title: 'The session will be closed, please log in!',
                        html: 'I will close in <b></b> milliseconds.',
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            timerInterval = setInterval(() => {
                            const content = Swal.getHtmlContainer()
                            if (content) {
                                const b = content.querySelector('b')
                                if (b) {
                                b.textContent = Swal.getTimerLeft()
                                }
                            }
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            location.href = "{{url('/cerrarSesion')}}";
                        }
                        }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                        })
                }
            } catch (error) {
                
            }
                    }
                });
            } else {
                swal.fire("Without changes!");
            }
        });

}

var ocultarelementos = 0;
$('#seeAll').click(function() {
    var TipoPerfil = $("#TypeProfile").val();
    var type = "";
    if (TipoPerfil == 0) {
        type = "DRIVER";

    } else {
        var type = "VEHICLE";
    }
    if (ocultarelementos == 0) {
        ocultarelementos = 1;
        $("#icono").removeClass("glyphicon glyphicon-eye-open");
        $("#icono").addClass("glyphicon glyphicon-eye-close");
        llenarObjProfiles("0", "all", type);

    } else {
        ocultarelementos = 0;
        $("#icono").removeClass("glyphicon glyphicon-eye-close");
        $("#icono").addClass("glyphicon glyphicon-eye-open");
        llenarObjProfiles("0", "undefined", type);
    }
});
var ocultarelementosD = 0;
$('#seeAllD').click(function() {
    var TipoPerfil = $("#TypeProfile").val();
    var type = "";
    if (TipoPerfil == 0) {
        type = "DRIVER";

    } else {
        var type = "VEHICLE";
    }
    if (ocultarelementosD == 0) {
        ocultarelementosD = 1;
        $("#icono").removeClass("glyphicon glyphicon-eye-open");
        $("#icono").addClass("glyphicon glyphicon-eye-close");
        llenarObjProfiles("0", "all", type);

    } else {
        ocultarelementosD = 0;
        $("#icono").removeClass("glyphicon glyphicon-eye-close");
        $("#icono").addClass("glyphicon glyphicon-eye-open");
        llenarObjProfiles("0", "undefined", type);
    }
});

autocomplete(document.getElementById("Company"), arrCustomers);









//PRIMER SCRIP PARA VEHICLES REPORTSSSSSSSSSSSSSSSSSS


var tipoArchivoV="";


function generatePDFV() {

datos = [];
detail = [];
var documentDefinition = {
    pageSize: 'LETTER',
    pageOrientation: 'landscape',
    footer: pieDePaginaV(),
    content: [
        encabezadoV(),
        detallesInformacionV()
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
pdfMake.createPdf(documentDefinition).download('VEHICLES_PROFILE_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY')+'".pdf');
}

var datos = [];
var detalle = [];
function getDatosBMWV() {
var dentro;


var id = document.getElementById("ID").checked;
var profile = document.getElementById("PROFILE").checked;
var typeprofile = document.getElementById("TYPEPROFILE").checked;
var company = document.getElementById("COMPANY").checked;
var loadingdays = document.getElementById("LOADINGDAYS").checked;

var starttime = document.getElementById("STARTTIME").checked;
var associatedepartment = document.getElementById("ASSOCIATEDEPARTMENT").checked;
var maxloader = document.getElementById("MAXLOADER").checked;
var amountday = document.getElementById("AMOUNTDAY").checked;
var amountweek = document.getElementById("AMOUNTWEEK").checked;
var amountmonth = document.getElementById("AMOUNTMONTH").checked;
var station = document.getElementById("STATION").checked;
var product = document.getElementById("PRODUCT").checked;
var status = document.getElementById("STATUS").checked;

var arrayN = ['ID','PROFILE','TYPEPROFILE','COMPANY', 'LOADING DAYS', 'START TIME/END TIME', 'ASSOCIATE DEPARTMENT','MAXLOADER','AMOUNTDAY', 'AMOUNTWEEK', 'AMOUNTMONTH', 'STATION', 'PRODUCT', 'STATUS'];
var detail = [
    [
        {
            text: 'ID',
            style: 'tableSubtitulo'
        },
        {
            text: 'PROFILE',
            style: 'tableSubtitulo'
        },
        {
            text: 'TYPEP ROFILE',
            style: 'tableSubtitulo'
        },
        {
            text: 'COMPANY',
            style: 'tableSubtitulo'
        },
        {
            text: 'LOADING DAYS',
            style: 'tableSubtitulo'
        },
        {
            text: 'START TIME/END TIME',
            style: 'tableSubtitulo'
        },
        {
            text: 'ASSOCIATE DEPARTMENT',
            style: 'tableSubtitulo'
        },

        {
            text: 'MAXLOADER',
            style: 'tableSubtitulo'
        },

        {
            text: 'AMOUNT DAY',
            style: 'tableSubtitulo'
        },
        {
            text: 'AMOUNT WEEK',
            style: 'tableSubtitulo'
        },
        {
            text: 'AMOUNT MONTH',
            style: 'tableSubtitulo'
        },

        {
            text: 'STATION',
            style: 'tableSubtitulo'
        },
        
        {
            text: 'PRODUCT',
            style: 'tableSubtitulo'
        },
               
        {
            text: 'STATUS',
            style: 'tableSubtitulo'
        }

       
        
    ]
];
for (let index = 0; index < objPV.length; index++) {
    if (id) {
        datos.push({
            text: objPV[index].ID,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }



    if (profile) {
        datos.push({
            text: objPV[index].namePerfil,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }

    if (typeprofile) {
        datos.push({
            text: objPV[index].tipoPerfil,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }


    if (company) {
        datos.push({
            text: quitarCaracteres(objPV[index].xNombreCliente),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }


    if (loadingdays) {
        datos.push({
            text: convertDays(objPV[index].diacar),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    
    if (starttime) {
        datos.push({
            text: convertHoras(objPV[index].hraini) + " / " + convertHoras(objPV[index].hrafin),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (associatedepartment) {
        var NombreDepartamento="";
            if(objPV[index].NombreDepartamento != ""){
                NombreDepartamento=objPV[index].NombreDepartamento.slice(0,-1);
            }
        datos.push({
            text: NombreDepartamento,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }



    
   
    if (maxloader) {
        datos.push({
            text: objPV[index].carmax,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }

    if (amountday) {
        datos.push({
            text: objPV[index].candia,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }

    if (amountweek) {
        datos.push({
            text: objPV[index].cansem,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }

    
    if (amountmonth) {
        datos.push({
            text: objPV[index].canmes,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }

    if (station) {

var estacion="";
if (objPV[index].codgas == "0") {
   
    estacion = "ALL";
}
if (objPV[index].codgas == "1") {
   
   estacion = "TANK FARM";
}
if (objPV[index].codgas == "2") {
  
    estacion = "TGF";
}
datos.push({
    text: estacion,
    style: 'tableText'
});
}else{
datos.push({
    text: '',
    style: 'tableText'
}); 
}



    if (product) {

        var NameProd="";
    if (objPV[index].codprd == "1") {
            NameProd = "GASOLINE";
        } else if (objPV[index].codprd == "2") {
            NameProd = "GASOLINE";
        } else if (objPV[index].codprd == "3") {
            NameProd = "DIESEL";
        }
        datos.push({
            text: NameProd,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }


   

    
   

    if (status) {
var statusperfilV="";
        if (objPV[index].status == 0) {
            statusperfilV = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objPV[index].status != 0) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusperfilV = "DISABLED";
        }

        datos.push({
            text:statusperfilV,
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

function detallesInformacionV() {
return infDetallesTabla = [{
    margin: [0, 20, 0, 0],
    table: {
        widths: [20, 60, 60, 50, 55, 40, 40, 40, 45,30,30,30,40,45],
        body: getDatosBMWV()
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

function pieDePaginaV() {

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
                            'MMMM,DD, YYYY [a las] HH:mm:ss') + ' hrs.',
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

function encabezadoV() {
return header = [{
    margin: [0, -25, 0, 0],
    table: {
        widths: [130, '*', 130],
        heights: ['auto'],
        body: [
            [{
                    image: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMkAAAA9CAYAAAFwwn2cAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAEpdJREFUeNpiYBgo8P///34o/R9NHAbeo8uRasF/nvSNMMPWQ2kFdDXIlpJiPhOMwZuxCVk8gBEIgLQAFksMQDRUHmapAEk+gvkKhLHIGyAbCqQdkPQpEDKfhZDlMJcDqQsgCiYH5B9A9hnRviFSnQAs6IB0Axb59VBaAeZjbIbMJ9ViUgBAANE13/xH9xGWRLIflgBAbJJ8DDIYmsrew/IPrpQIBSBL7uNyENa8A0woibjyCVKqAskHIqWwD0CcQGxmZUHOdFgyKoalsCROSnCxgLwO1KOIpucAFp8wEBIjOzEgRTYswvcji+PRnwDLP7gMTaBm6gUIIGwuaEBK0iDXFEBz/H98Lh90eRI53+FQ8x5f6YNkhgKUPg+tAx2Q5M7TtPSCORIEYPkfhtEA3uIUGqsN6GU21HMNuMpyagGUnAV0PKjqu48s9nmGH9G5EbnmQysiPgCZgtBk+gBkB3LxAWNTmtNRquUvM/0foAc4tnINVvZBq2pkkIgtxqAeQXY4RnlIjSKLCeqw/USE/AWgZ5HlsLWUQKG+AIgdkdomcBrq+AYYm1hPoBWfAiSXxeSoQWqtwctxfPmEUOmIlkcTkMyej03NsAIAAbgxg5sGYiCKbtIAdEDSAVQAe+VkOggdhAqSXDgCLaSCXYkCshIS11VuiAsUgJQSwCO+0dfIO3aU7GGxFEVrO6vY45n/vv9vQ/md03GZBGQbygJmjBWkKawTGyvxGAFjHq7PzRhTVahFA8haTVFdakq6tXjCzHfXtDE3gST7FMoC5L6DdzwNan///MZq71L4gcriOiJU9RmVseSDMLiIGARx1zG3ghRcGDoQ1Jz1aYXHLb5XfR2tR1L1NhG5KqErZ/7TUjRav5YlHNECcxYseCmI3ftuJLM5Y5GSW2uOlkQP1a817Frjh8qDQVLDHw9eP7wWL+9fheKzkYZGPMsRfZLdlT8Wg0T0fcJOHpW99o1I07kjv4v4Rp4wVE5ok27DIlREDgZIoeE7Tk6rqvholLkmXI2PjHnlUZIdO/mRImGmYKP8bqwrPpTwKkMOKvXOWc7ccPeYhcqsEyn8jnkaTa9MwnCeV1o06bo5RsXLvxyBYXKZeN2Y1cM4KsqYxSJ3Euv3vwvH/5y6L3Og0am++bCvQgfUfgRg14pxGgaCYIx4gP0DP8H84FJSkSdcXoCfECoqFH7g/CAU9K6oieio0tATXmCyaFeMVnsX2wlJLHFSFNvns327t7uzs9cFjxWMyWJt2alw8N86KyGFGlQa4OlSnbYAEG6QSutJisqvUNe9ptPg32uaDcYVQ1WGB4HPYrwKhyxnRRBWpsfn9Ui8nZVrqqob1kVq476JLJIhMxCSEhZoDcK3InmsUsm1YUkNrOC6i+UIGS1lBCXs1EhhnUEayIKoh6SUSxQCgEdCxJI55sQNW7Vi1XKY+IYRdsVwY4ZW2AHC+wDsIcLkkdKH7fGTljd/x922b8EQixQ2HpRSeBJjNfGrrSK8pOQdG7mWSgufhXRD4BZwYQhvJrHrOD6SFh2mbnnkdgEfbwH2al93aAiV6LuyxdhPcGFLcY/IiQoahMAuwMRyeY1K37Bvrcec1FJCGdb1w4vbNfjt42t0//z+F7GN3F3KxAJ9Rx2xSGlrVnrG5yLkssUrN5xF3o7sCtdRm8ld7SIfYnxYjMwIxK+Yla3IjeIYzaONfouyFcegjGMOud2C7yMuoFS83oqJxeZQ5OHB3VcAw0/3eXhAIcTsLHauFubSGc4WuvYKxxkfT0HoDnl4ij+snIL7ElE2H58VCEjarN6QxUQsZbNVSGY858cVDTH4nirQJ5KfBFZtsgNWkl/OyDoCCiELWbZViKIo5+rche41YtModm+fLVOR96XAhhTGPHLknFu/u28GHptAz4zeFB4/bw55VFAB0DeBuUki69oqFd4t5zEOvFbUjjOuL/Fa6yIyQsweisj3hZfGFu2Uf15bjhJcBTWonOG09JWyZ0Kt2Nzg3DzsqchhQeQttiWUqsBQg8XP4dtqnpPrKyQPuUOovQ6W9Duj9i0AO1eQ2zQURF3EEkQqscfdsA5bJCQfIdzAXcHScAHcE6ScwO0J0rJgm3CC9AYJJ0huEDJlpnqdzPh/OwmpUb5UpXHib+e//2fmz3vjY+tq42UXavlxpPYLQg9M1RQiiQHYQ7HTA/ju+Dh6uwdjZJFWkCMqvcIrySeF2PuAzyoNEis3SLTSYvJVtJPvVRr3D8BY1EVZ2k7VrK5WqwUAXalE4gbQBuuJZNcMk5ldBUPMU275BGDzKo+9k/AX+2sDiM4e8HHMAlc42EBi9Y2M8KirK2PKP3Tq8Oy9SFBTrDWV/1uukBkc1+n1Ug88pPXx+KBrYBRAoQqH/kgJ/OLTbVVTK5Qr32Px5b2GgJQiekeene+v0HSuUa+46hoHrzWAlJOi3emUc1WUrc1efv5ByuSNJa/rnbhRHzTwY+6jzzkxeh02qJTJVCp9wh+To/7I93PJ/Wacm5P0vOTqFvwbiq4kOaUQgH4IaXaXLOmTQc3XYFxbYNQ0CQYI2CXnKYmLuLRSIxGmT2Y3Urs3/Krp4mv1/nsSwWA+pSaCiFzx10T+nK7BkNXStM2cGfmF+zsNnE8D+4v/XwKYD8ehfzxGlR9YZ3DZNT9+wnZ9YQ1gSJXimCxp9yp5a9YfOZJ6k0UFHzcGGNsmCtO6DECEuUoxS+DsgSpnM7tSqXbzvaqkXkTy83sHJGdbq9tw286dUHOSONosOI8mgwj1yARpbf8Fm6McytrpdcDH5xRUNAh1L/i+hoeuSHUrtiNEdCGTRe2GpUGPUh3rl1d1+q26IiBVoDSGCEvqcK50H6JPEzmU0quNdcHTIU2q+1CaD29fB0+OkAh5pinGHOLgJThQDOobDoHnYo4EDDg/i1zJGZjYq6cQZW20n1/fB0/2HlUAbek5/AY+aMIAIrjfAKQzyEKn6/dz2K/UBh1wDcm3XZGq5dA+ZOlQiXc76P/aOEblRr9jBov8Bkt3Ht0Lr5RzCRCgHGqqgoaJBlEcNwD3IOo4NBjiQ8h5p4at74f2IKEV4gnoEha6hTaFeoKI6M2y+Zy6qQzgpKCuMPrKkicmVTrhnfOsjaoxAMh8DchW+xCe6X1Hm1znD+a4AvCzJn0dxGRZNw7tXduOHTDyGr+yOVv+pnIaDSCnaebeZ53IZZEzs4gkts1tog4PyCrpUE3HwQBhZ5Y5s+o8aab9PVuvjjtndSTGg6I80zMTIgxC3eDuXr0fszijH3nNOjFc4Z2D99kyK1FYB8uQz9DEEXIj678y5KSbKBkVP94HBaGWZ6YgaCuVL9nIAOA9GKK7cQzo6vqWOjGzrlEnM/UutmhKt0YO7qppSgIB8FYIKAN71neYYEvVd1I1eENncDM1WbPQqsLnQ2itr6wCazVg38+UeTrlvNFoh2AsOMxsFeNrB80mKNfO3zmXShXm/PyWJU8KMV/yWKDbphPFM1/E08j2gUwzmkqhEIBKMPt5bnQqqvgFVCu1AeI+rZ9AQc4OwC1DNYxontBfyUN1GlzOi9TKiHssZcOKgnHmazKOBMumP37aVo0IPHixxeBr+y6mYARmJzd8RKVmswQFPRRL48PqMPBQzwmtIE2fQp9DHawYvlZMVsH96uuXKMCOHZQUuYeA8rsPIM6OAeweG6M7itD2Do+jdWz/VfsjQHtXj9y6DYTpjMsU9AmeXKW0dALTfWYsn8BSlfJJZdLIadLKKlNJPoHkE1A6gfRO8OQTkJlJ72j9vo33rUEAlEg+eYyd4dhDkcASwP5id3FSM2W1oNXQRfsXNl65gltl8x5cHAECkeyj5ZLC8dlACC8LH9c/+CtNB95/+iQISgO51B4C8QR4b/pXV2UfZrClWxYnyrM8h0ZYLc+Wql49Qwh2qH0X4GgJQxdvnPuamzrPQCTJW4mkgGiyoqi5mr8/dRhkqXIry+czh3vjuSiST/toLBGDqSliMEAzi6OnFni75PuxyNLSrpmkTLaT8lXdqZz5uEEiScT9gSndzyQBDdJYQ4LfsoK+MpNUVowouLEqhJ88JAdN+hS2BHnnyS5Yl0xVZ6KiGIZtQViUz84n7Q2N2O4hj7YI2aI+siPI0DbZTbwr0BWJZ/S9c8s7MvyaCWeAcaL2tvjtMzMy8fxDWNrNqhYZuP9ASJLYUOvByL1+/u2Rzjjp7q7x7kp311oUqc3Qzxztty2SKBMqjVT5BuK5cZ3qhoe6tVZJ3GmBetkS/vSpkoiJZFDqeMm1yMbU1Silfz5UoakQTg0Lgbj0GhzrnvZRQQAtcDDiUhk4GUmWMTxbWyYKcc8FcfQak8Q1PPg3am+IJMOxkDR0fwWJQl6vLfT2F3x31znwpwV677sPvAdcSW8bbCrCiRarzs1oob7uJcaFx5ekar8oUG53f4nxSUA8vPjv8f5ISBEex6Vv/FWAPdQtjv/FBPR5gSGHkENGx4pYaHF3KIsXyT+ZJ4G4oIUF94zFwceGMYFE6IdUlgnUtyHUuTMQ06AJwx7jdi1uFUXH9IEXE/yNo2kZKcPfsUDoLbWzEHPCba7Csq5JkkBHZpWprxKVOHSqg+dS6MJEHM6MhgrgJR1x1zcRJ0X5XOyuJw5/KliQ55CApObkNUiU1BADusXYLS3vdfA9W0cMPJ+0NRZMQ9sqEzApac/dh2VdLcjCG2tMnreKQjZG5Jnlp+GPX3+Jft9dVag6Nq9a9Fp34obrQwQIUFrdgrHZhvfJl0DW+xJIRVzcmaSOoOChUEnqULUSXZ+24vZj0UfYQP2BNslngyi3Ecg48stHrxO8dt2FStaqwuOlIw2geqZQB03nRvuAPgexJ9rPRB+Zyatn6CdxeOYSQeDPHh67OBCJ8Ix4vncspap88Vio79yXQFI4CmLYH+diz+cE9kanKCNBPXsmDHxZPX0qjHTq40y9w56rccV7QkuFX1/agx+aSCTX8dHzd1IkOSL8Lz2f+1LyeROB9ASR5TgmfquIYFPC/RorgzvH/kZP2V65VB+RJsX3khrDT/IowPfeLV/wqN/kBXS8z1/uSjfHBNLmkHl1SWQ4Aa1EGY0cxLDRC97i/doIgm2X0ABskFjwO//QkkRtiDm50pGFq/vuCVyUfN6msn3HwZHwySrK0jF2/Jxc/BOWPhjbXEmvN44CpTYuDKpySxv/8p2COWT3+hWIlsFZWOij2CTLkjr7sfjiffHolrS5TAucFpHc/EthwE9F0GXi2da5IJSR2vCU6tRUpCDcYd8nVeoYtyO9klMY6oyXjCQu8l7mIPhlyNsxE8mD8nK5JnkY+RX3qxP6//597eRwghtvD5181HfgQwgXsCmo/RH+Ej5/Ru7y0kwojE+PjXARMdARfQyi18DOjeD0S2UPnaD/HAQ7EjbODE6AsNlYdt7FYiq9mSje2csmcR3O6yCQmQd+YTMxQGWSJBKqxMC3Ngo8LcMG8eWjYmeez8vSsYFAAhxGJNBtr4RO2/UklHuI+VnNxNGhM5R9VCxIkZQ9P02W89WHzTXQ39Ft9PFpu++JEGwRE7omHem47O6bl5lscXR9J6rGJfmi3/MB46bSnJYJyqCTz0qWPduLCJAfUkdxxTvLN7INk4t73Yr732uzEvs5+SH9mGoPWuYjOfRbbcGmpwUPn2DSyfNyG33bRc49O9sIicQUSpN3CcPTZMMsYZCudsSwOGBSycDlGK03kcy1GXbfikMudbITuCnh84RvJMfIoziX4w7MgCrFkHuaxpqqwizw2yUTitzFRxHKGLUIc0EsC7TbRl9f4GCh/4diL6aF+VjBMXBdhpmwG1riJO+p/2mhUxrBBIwr93QekAOCPHMztEH4PgrcORv1VvS/RC1GXgOP6Pv/Q8+K8ME4l/fsqRzsH3qCjQPPtjqMOa6xr0S4V8fiQMzYpW5xOUUHB526JIlhjrjwdGzD2SIJe0XxXiWkaSJqXia6/qVLkohsyzkuTsK7s+GmJYkF59SGj62k8KmDQy4gVXqwU3rRqwsyPwLi6EWvcU5N4rXyqRiLQb9lmwic3IXfUxlEMEcLsRCusEC3LLHAXUeWZrY1Stm+mq9bk9SyjOenAvzyfZihLz6FNoml4RnsjRuIO+ba46YNNHCOr6JABS2QM9TEPrad4RYveqhHg8hexVLDhS68Ljj/XFQajkEYG72wxJHT+QHjLS8+HeZaVWO+LrCdpsIoXpbFA4t6LAJAY3zPBPOdC5WLxugGkqklvn+O+wfjU9qoVOVtvqKYQ1xxP21Dbao0FDsI0BRUVeaUKHMUvU0lZTVoI4zXIo7LBlm7oI1JU4Z4gACVE4lDJ6dFfwEiiA3erVyoCSsmKlf+d4AATcF/cwV0AQ4p6AcAAAAASUVORK5CYII=',
                    width: 150,
                    height: 50,
                    alignment: 'LEFT',
                    fillColor: '#233461',
                    border: [false, false, false, false],
                },
                {
                    ul: datosGeneralesV(),
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





function datosGeneralesV() {
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
        text: 'VEHICLES PROFILES REPORT',
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
function OpenModalColV(open) {
    tipoArchivoV='';
   if(open=='Excel'){
    tipoArchivoV='Excel';
       LimpiarChecksV();
    $('#modalColumnasTFV').modal('show');
   }

   if(open=='PDF'){
    tipoArchivoV='PDF';
       LimpiarChecksV();
    $('#modalColumnasTFV').modal('show');
   }
   
}
function CreateExcelOrPdfV(){
    
    if(tipoArchivoV=='Excel'){
        columnasreporteTFV();
    }
    if(tipoArchivoV=='PDF'){
        generatePDFV();
    }
    
    }
    function columnasreporteTFV() {

var id = document.getElementById("ID").checked;
var profile = document.getElementById("PROFILE").checked;
var typeprofile = document.getElementById("TYPEPROFILE").checked;
var company = document.getElementById("COMPANY").checked;
var loadingdays = document.getElementById("LOADINGDAYS").checked;

var starttime = document.getElementById("STARTTIME").checked;
var associatedepartment = document.getElementById("ASSOCIATEDEPARTMENT").checked;
var maxloader = document.getElementById("MAXLOADER").checked;
var amountday = document.getElementById("AMOUNTDAY").checked;
var amountweek = document.getElementById("AMOUNTWEEK").checked;
var amountmonth = document.getElementById("AMOUNTMONTH").checked;
var station = document.getElementById("STATION").checked;
var product = document.getElementById("PRODUCT").checked;
var status = document.getElementById("STATUS").checked;

llenarTablaExcelV();

if (id) {
    $(".id").show();
} else {
    $(".id").hide();
}
if (profile) {
    $(".profile").show();
} else {
    $(".profile").hide();
}

if (typeprofile) {
    $(".typeprofile").show();
} else {
    $(".typeprofile").hide();
}

if (company) {
    $(".company").show();
} else {
    $(".company").hide();
}
if (loadingdays) {
    $(".loadingdays").show();
} else {
    $(".loadingdays").hide();
}


if (starttime) {
    $(".starttime").show();
} else {
    $(".starttime").hide();
}
if (associatedepartment) {
    $(".associatedepartment").show();
} else {
    $(".associatedepartment").hide();
}

if (maxloader) {
    $(".maxloader").show();
} else {
    $(".maxloader").hide();
}
if (amountday) {
    $(".amountday").show();
} else {
    $(".amountday").hide();
}
if (amountweek) {
    $(".amountweek").show();
} else {
    $(".amountweek").hide();
}
if (amountmonth) {
    $(".amountmonth").show();
} else {
    $(".amountmonth").hide();
}
if (station) {
    $(".station").show();
} else {
    $(".station").hide();
}
if (product) {
    $(".product").show();
} else {
    $(".product").hide();
}


if (status) {
    $(".status").show();
} else {
    $(".status").hide();
}

descargarExcelV();
}
function LimpiarChecksV(){
$("#ID").prop("checked", false);
$("#PROFILE").prop("checked", false);
$("#TYPEPROFILE").prop("checked", false);
$("#COMPANY").prop("checked", false);

$("#LOADINGDAYS").prop("checked", false);
$("#STARTTIME").prop("checked", false);
$("#ASSOCIATEDEPARTMENT").prop("checked", false);
$("#MAXLOADER").prop("checked", false);

$("#AMOUNTDAY").prop("checked", false);
$("#AMOUNTWEEK").prop("checked", false);
$("#AMOUNTMONTH").prop("checked", false);

$("#STATION").prop("checked", false);
$("#PRODUCT").prop("checked", false);
$("#STATUS").prop("checked", false);
$("#ALLV").prop("checked", false);
}

$('#ALLV').change(function() {

if ($(this).is(":checked")) {

$("#ID").prop("checked", true);
$("#PROFILE").prop("checked", true);
$("#TYPEPROFILE").prop("checked", true);
$("#COMPANY").prop("checked", true);
$("#LOADINGDAYS").prop("checked", true);
$("#STARTTIME").prop("checked", true);
$("#ASSOCIATEDEPARTMENT").prop("checked", true);
$("#MAXLOADER").prop("checked", true);
$("#AMOUNTDAY").prop("checked", true);
$("#AMOUNTWEEK").prop("checked", true);
$("#AMOUNTMONTH").prop("checked", true);
$("#STATION").prop("checked", true);
$("#PRODUCT").prop("checked", true);
$("#STATUS").prop("checked", true);

} else {
$("#ID").prop("checked", false);
$("#PROFILE").prop("checked", false);
$("#TYPEPROFILE").prop("checked", false);
$("#COMPANY").prop("checked", false);
$("#LOADINGDAYS").prop("checked", false);
$("#STARTTIME").prop("checked", false);
$("#ASSOCIATEDEPARTMENT").prop("checked", false);
$("#MAXLOADER").prop("checked", false);
$("#AMOUNTDAY").prop("checked", false);
$("#AMOUNTWEEK").prop("checked", false);
$("#AMOUNTMONTH").prop("checked", false);
$("#STATION").prop("checked", false);
$("#PRODUCT").prop("checked", false);
$("#STATUS").prop("checked", false);

}

});
function descargarExcelV(){
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
    var toExcel = document.getElementById("tablaCV").innerHTML;
    var ctx = {
        worksheet: name || '',
        table: toExcel
    };
    var link = document.createElement("a");
    var fecha=moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY');
    link.download = "VEHICLES_PROFILE_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click();
}
function llenarTablaExcelV() {
    

    document.getElementById('fechaReporteTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD, YYYY');

        document.getElementById('horareporteTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');
       
    var id = document.getElementById("ID").checked;
var profile = document.getElementById("PROFILE").checked;
var typeprofile = document.getElementById("TYPEPROFILE").checked;
var company = document.getElementById("COMPANY").checked;
var loadingdays = document.getElementById("LOADINGDAYS").checked;

var starttime = document.getElementById("STARTTIME").checked;
var associatedepartment = document.getElementById("ASSOCIATEDEPARTMENT").checked;
var maxloader = document.getElementById("MAXLOADER").checked;
var amountday = document.getElementById("AMOUNTDAY").checked;
var amountweek = document.getElementById("AMOUNTWEEK").checked;
var amountmonth = document.getElementById("AMOUNTMONTH").checked;
var station = document.getElementById("STATION").checked;
var product = document.getElementById("PRODUCT").checked;
var status = document.getElementById("STATUS").checked;





    $("#emp_body1").empty();
    var tr;
    for (var i = 0; i < objPV.length; i++) {
        tr = $('<tr/>');
        if(id){
            tr.append(
            "<td class='id' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            objPV[i].ID + "</td> ");
        }else{
            tr.append(
            "<td class='id' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(profile){
            tr.append(
            "<td class='profile' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objPV[i].namePerfil + "</td>");
        }else{
            tr.append(
            "<td class='profile' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(typeprofile){
            tr.append(
            "<td class='typeprofile' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objPV[i].tipoPerfil + "</td>");
        }else{
            tr.append(
            "<td class='typeprofile' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(company){
            tr.append(
            "<td class='company' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            quitarCaracteres(objPV[i].xNombreCliente) + "</td>");
        }else{
            tr.append(
            "<td class='company' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(loadingdays){
            tr.append(
            "<td class='loadingdays' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            convertDays(objPV[i].diacar)+ "</td>");
        }else{
            tr.append(
            "<td class='loadingdays' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if((starttime) ){
            tr.append(
            "<td class='(starttime) ' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            convertHoras(objPV[i].hraini) + " / " + convertHoras(objPV[i].hrafin) + "</td>");
        }else{
            tr.append(
            "<td class='(starttime) ' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if((associatedepartment) ){
            var NombreDepartamento="";
            if(objPV[i].NombreDepartamento != ""){
                NombreDepartamento=objPV[i].NombreDepartamento.slice(0,-1);
            }
            tr.append(
            "<td class='(associatedepartment) ' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            NombreDepartamento + "</td>");
        }else{
            tr.append(
            "<td class='(associatedepartment) ' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(maxloader){
            tr.append(
            "<td class='maxloader' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objPV[i].carmax + "</td>");
        }else{
            tr.append(
            "<td class='maxloader' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(amountday){
            tr.append(
            "<td class='candia' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objPV[i].candia + "</td>");
        }else{
            tr.append(
            "<td class='candia' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(amountweek){
            tr.append(
            "<td class='cansem' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objPV[i].cansem + "</td>");
        }else{
            tr.append(
            "<td class='cansem' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }


        if(amountmonth){
            tr.append(
            "<td class='canmes' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objPV[i].canmes + "</td>");
        }else{
            tr.append(
            "<td class='canmes' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }


        if(station){
            var estacion="";
       if (objPV[i].codgas == "0") {
           
            estacion = "ALL";
       }
       if (objPV[i].codgas == "1") {
           
           estacion = "TANK FARM";
      }
       if (objPV[i].codgas == "2") {
          
            estacion = "TGF";
      }

            tr.append(
            "<td class='station' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            estacion + "</td>");
        }else{
            tr.append(
            "<td class='station' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        
        if(product){

            var NameProd="";
    if (objPV[i].codprd == "1") {
            NameProd = "GASOLINE";
        } else if (objPV[i].codprd == "2") {
            NameProd = "GASOLINE";
        } else if (objPV[i].codprd == "3") {
            NameProd = "DIESEL";
        }
            tr.append(
            "<td class='fuel' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            NameProd + "</td>");
        }else{
            tr.append(
            "<td class='fuel' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        
        


        if(status){
            var statusperfilV="";

            if (objPV[i].status == 0) {
            statusperfilV = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objPV[i].status != 0) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusperfilV = "DISABLED";
        }
            tr.append(
            "<td class='status' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            statusperfilV + "</td>");
        }else{
            tr.append(
            "<td class='status' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }


        $('#emp_body1').append(tr);
    }
}











//SCRIPT TABLA DRIVERSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS



var tipoArchivoD="";


function generatePDFD() {

datos = [];
detail = [];
var documentDefinition = {
    pageSize: 'LETTER',
    pageOrientation: 'landscape',
    footer: pieDePaginaD(),
    content: [
        encabezadoD(),
        detallesInformacionD()
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
pdfMake.createPdf(documentDefinition).download('DRIVERS_PROFILE_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY')+'".pdf');
}

var datos = [];
var detalle = [];
function getDatosBMWD() {
var dentro;


var id = document.getElementById("IDD").checked;
var profile = document.getElementById("PROFILED").checked;
var typeprofile = document.getElementById("TYPEPROFILED").checked;
var company = document.getElementById("COMPANYD").checked;
var loadingdays = document.getElementById("LOADINGDAYSD").checked;

var starttime = document.getElementById("STARTTIMED").checked;
var endtime = document.getElementById("ENDTIMED").checked;
var status = document.getElementById("STATUSD").checked;

var arrayN = ['ID','PROFILE','TYPEPROFILE','COMPANY', 'LOADING DAYS', 'START TIME', 'END TIME', 'STATUS'];
var detail = [
    [
        {
            text: 'ID',
            style: 'tableSubtitulo'
        },
        {
            text: 'PROFILE',
            style: 'tableSubtitulo'
        },
        {
            text: 'TYPEP ROFILE',
            style: 'tableSubtitulo'
        },
        {
            text: 'COMPANY',
            style: 'tableSubtitulo'
        },
        {
            text: 'LOADING DAYS',
            style: 'tableSubtitulo'
        },
        {
            text: 'START TIME',
            style: 'tableSubtitulo'
        },
        {
            text: 'END TIME',
            style: 'tableSubtitulo'
        },
               
        {
            text: 'STATUS',
            style: 'tableSubtitulo'
        }

       
        
    ]
];
for (let index = 0; index < objPV.length; index++) {
    if (id) {
        datos.push({
            text: objPV[index].ID,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }



    if (profile) {
        datos.push({
            text: objPV[index].namePerfil,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }

    if (typeprofile) {
        datos.push({
            text: objPV[index].tipoPerfil,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }


    if (company) {
        datos.push({
            text: objPV[index].xNombreCliente,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }


    if (loadingdays) {
        datos.push({
            text: convertDays(objPV[index].diacar),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    
    if (starttime) {
        datos.push({
            text: convertHoras(objPV[index].hraini),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (endtime) {
        datos.push({
            text: convertHoras(objPV[index].hrafin),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }




   

    if (status) {
var statusperfilV="";
        if (objPV[index].status == 0) {
            statusperfilV = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objPV[index].status != 0) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusperfilV = "DISABLED";
        }

        datos.push({
            text:statusperfilV,
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

function detallesInformacionD() {
return infDetallesTabla = [{
    margin: [0, 20, 0, 0],
    table: {
        widths: [20, '*','*', 100,'*', '*', '*', '*'],
        body: getDatosBMWD()
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

function pieDePaginaD() {

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
                            'MMMM,DD, YYYY [a las] HH:mm:ss') + ' hrs.',
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

function encabezadoD() {
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
                    ul: datosGeneralesD(),
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





function datosGeneralesD() {
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
        text: 'DRIVER PROFILES REPORT',
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
function OpenModalColD(open) {
    tipoArchivoD='';
   if(open=='Excel'){
    tipoArchivoD='Excel';
       LimpiarChecksD();
    $('#modalColumnasTFD').modal('show');
   }

   if(open=='PDF'){
    tipoArchivoD='PDF';
       LimpiarChecksD();
    $('#modalColumnasTFD').modal('show');
   }
   
}
function CreateExcelOrPdfD(){
    
    if(tipoArchivoD=='Excel'){
        columnasreporteTFD();
    }
    if(tipoArchivoD=='PDF'){
        generatePDFD();
    }
    
    }
    function columnasreporteTFD() {

var id = document.getElementById("IDD").checked;
var profile = document.getElementById("PROFILED").checked;
var typeprofile = document.getElementById("TYPEPROFILED").checked;
var company = document.getElementById("COMPANYD").checked;
var loadingdays = document.getElementById("LOADINGDAYSD").checked;
var starttime = document.getElementById("STARTTIMED").checked;
var endtime = document.getElementById("ENDTIMED").checked;
var status = document.getElementById("STATUSD").checked;

llenarTablaExcelD();

if (id) {
    $(".iddr").show();
} else {
    $(".iddr").hide();
}
if (profile) {
    $(".profiledr").show();
} else {
    $(".profiledr").hide();
}

if (typeprofile) {
    $(".typeprofiledr").show();
} else {
    $(".typeprofiledr").hide();
}

if (company) {
    $(".companydr").show();
} else {
    $(".companydr").hide();
}
if (loadingdays) {
    $(".loadingdaysdr").show();
} else {
    $(".loadingdaysdr").hide();
}


if (starttime) {
    $(".starttimedr").show();
} else {
    $(".starttimedr").hide();
}
if (endtime) {
    $(".endtimedr").show();
} else {
    $(".endtimedr").hide();
}



if (status) {
    $(".statusdr").show();
} else {
    $(".statusdr").hide();
}

descargarExcelD();
}
function LimpiarChecksD(){
$("#IDD").prop("checked", false);
$("#PROFILED").prop("checked", false);
$("#TYPEPROFILED").prop("checked", false);
$("#COMPANYD").prop("checked", false);
$("#LOADINGDAYSD").prop("checked", false);
$("#STARTTIMED").prop("checked", false);
$("#ENDTIMED").prop("checked", false);
$("#STATUSD").prop("checked", false);
$("#ALLD").prop("checked", false);
}

$('#ALLD').change(function() {

if ($(this).is(":checked")) {

$("#IDD").prop("checked", true);
$("#PROFILED").prop("checked", true);
$("#TYPEPROFILED").prop("checked", true);
$("#COMPANYD").prop("checked", true);
$("#LOADINGDAYSD").prop("checked", true);
$("#STARTTIMED").prop("checked", true);
$("#ENDTIMED").prop("checked", true);
$("#STATUSD").prop("checked", true);

} else {
$("#IDD").prop("checked", false);
$("#PROFILED").prop("checked", false);
$("#TYPEPROFILED").prop("checked", false);
$("#COMPANYD").prop("checked", false);
$("#LOADINGDAYSD").prop("checked", false);
$("#STARTTIMED").prop("checked", false);
$("#ENDTIMED").prop("checked", false);
$("#STATUSD").prop("checked", false);

}

});
function descargarExcelD(){
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
    var toExcel = document.getElementById("tablaCD").innerHTML;
    var ctx = {
        worksheet: name || '',
        table: toExcel
    };
    var link = document.createElement("a");
    var fecha=moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY');
    link.download = "DRIVERS_PROFILE_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click();
}
function llenarTablaExcelD() {

    document.getElementById('fechaReporteTTD').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD, YYYY');

        document.getElementById('horareporteTTD').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');


    
    var id = document.getElementById("IDD").checked;
var profile = document.getElementById("PROFILED").checked;
var typeprofile = document.getElementById("TYPEPROFILED").checked;
var company = document.getElementById("COMPANYD").checked;
var loadingdays = document.getElementById("LOADINGDAYSD").checked;
var starttime = document.getElementById("STARTTIMED").checked;
var endtime = document.getElementById("ENDTIMED").checked;
var status = document.getElementById("STATUSD").checked;


    $("#emp_body1D").empty();
    var tr;
    for (var i = 0; i < objPV.length; i++) {
        tr = $('<tr/>');
        if(id){
            tr.append(
            "<td class='iddr' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            objPV[i].ID + "</td> ");
        }else{
            tr.append(
            "<td class='iddr' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(profile){
            tr.append(
            "<td class='profiledr' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objPV[i].namePerfil + "</td>");
        }else{
            tr.append(
            "<td class='profiledr' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(typeprofile){
            tr.append(
            "<td class='typeprofiledr' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objPV[i].tipoPerfil + "</td>");
        }else{
            tr.append(
            "<td class='typeprofiledr' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(company){
            tr.append(
            "<td class='companydr' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            quitarCaracteres(objPV[i].xNombreCliente) + "</td>");
        }else{
            tr.append(
            "<td class='companydr' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(loadingdays){
            tr.append(
            "<td class='loadingdaysdr' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            convertDays(objPV[i].diacar)+ "</td>");
        }else{
            tr.append(
            "<td class='loadingdaysdr' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if((starttime) ){
            tr.append(
            "<td class='(starttimedr) ' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            convertHoras(objPV[i].hraini) + "</td>");
        }else{
            tr.append(
            "<td class='(starttimedr) ' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if((endtime) ){
            tr.append(
            "<td class='(endtimedr) ' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            convertHoras(objPV[i].hrafin) + "</td>");
        }else{
            tr.append(
            "<td class='(endtimedr) ' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

       

        if(status){
            var statusperfilD="";

            if (objPV[i].status == 0) {
            statusperfilD = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objPV[i].status != 0) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusperfilD = "DISABLED";
        }
            tr.append(
            "<td class='statusdr' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            statusperfilD + "</td>");
        }else{
            tr.append(
            "<td class='statusdr' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }


        $('#emp_body1D').append(tr);
    }
}
</script>
