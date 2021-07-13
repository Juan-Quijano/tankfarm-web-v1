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
.sepborder {
 margin-left: 10px;
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
    left: 25%;
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

<div class="x_panel" id="divCatalogoUsuarios">
    <div class="x_title">
        <h2>Vehicles </h2>

        <div class="clearfix"></div>
    </div>
    <iframe id="iframe2" style="display:none;" frameborder="0" width='600' height='400'></iframe>
    <div class="x_content">
        <div class="row">

            <div class="col-sm-12">

                <div class="card-box table-responsive">

                    <div id="datatable-buttons_wrapper"
                        class="dataTables_wrapper container-fluid dt-bootstrap no-footer">

                        <button class="btn btn-success" onclick="OpenModalCol('Excel');"> <i
                                    class="fa fa-file-excel-o"></i></button>
                            <button class="btn btn-danger" onclick="OpenModalCol('PDF');"><i
                                    class="fa fa-file-pdf-o"></i></button>

                        <table id="datatable-buttons"
                            class="table table-striped table-bordered dataTable no-footer dtr-inline"
                            style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">

                            <thead>

                                <tr role="row">

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 257px;" 
                                       >COMPANY</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 380px;"
                                       >PROFILE</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                      >VEHICLE MANAGER</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                       >TAG</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        >STATION</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 191px;"
                                       >LOADING DAYS </th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                      >START TIME / END TIME</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                      >ASSOCIATE DEPARTMENT</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                      >FUEL</th>

                                      <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >PLATES</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >VIN</th>
                                   
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >STATUS</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >EDIT</th>

                                    <th id="colU" class="" tabindex="0" aria-controls="datatable-buttons"
                                        rowspan="1" colspan="1" style="width: 155px;"
                                       >ACTIONS
                                    </th>
                                    <th id="colU" class="" tabindex="0" aria-controls="datatable-buttons"
                                        rowspan="1" colspan="1" style="width: 155px;"
                                       >PRINT BARCODE
                                    </th>

                                </tr>

                            </thead>
                            <tbody id="tablaVehicles">

                            <tbody >

                            <tbody id="tablaN">


                                <div class="text-right">
                                    <button id="seeAll" class="btn btn-warning" type="button"> <span id="icono"
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> SEE ALL
                                        |</button>
                                    <!--You can add col-lg-12 if you want -->
                                    <button type="button" class="btn btn-primary "
                                        onclick="javascript:UpdateContenedor('AddVehicle');">
                                        <pan class="" id="icon_enabled" style="color:white;"></span><i
                                                class="glyphicon glyphicon-plus"></i> NEW VEHICLE
                                    </button>

                                </div>

                                <br>

                                <div class="text-right" style="display: none;">

                                    <label>Status:</label>
                                    <select name="" id="status_1">

                                        <option value="3">All</option>
                                        <option value="1" selected>Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>

                                    <label>Fuel:</label>
                                    <select name="" id="fuel_1">
                                        <option value="Select filter" selected disabled>Select filter</option>
                                        <option value="0">All</option>
                                        <option value="1">Gasoline</option>
                                        <option value="2">Diesel</option>
                                    </select>
                                </div>

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
    <div class="modal fade" id="modalColumnasTF" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Select the columns you want to view in the reports</h4>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="COMPANY"
                                value="option1">
                            <label class="form-check-label" for="COMPANY">COMPANY</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="PROFILE"
                                value="option2">
                            <label class="form-check-label" for="PROFILE">PROFILE</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="PLATES" value="optionq">
                            <label class="form-check-label" for="PLATES">PLATES</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="TAG" value="option4">
                            <label class="form-check-label" for="TAG">TAG</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="STATION" value="option5">
                            <label class="form-check-label" for="STATION">STATION</label>
                        </div>
                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="LOADINGDAYS" value="optione">
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
                            <input class="form-check-input " type="checkbox" id="FUEL" value="optiony">
                            <label class="form-check-label" for="FUEL">FUEL</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="VIN1" value="optionu">
                            <label class="form-check-label" for="VIN">VIN</label>
                        </div>


                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="STATUS" value="optiona">
                            <label class="form-check-label" for="STATUS">STATUS</label>
                        </div>

                        <div class="form-check form-check-inline ">
                            <input class="form-check-input " type="checkbox" id="ALL" value="option9">
                            <label class="form-check-label" for="All">ALL</label>
                        </div>
                        <div class="form-check form-check-inline ">
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
















<table id="tablaC" class="table table-striped" cellspacing="0" width="100%"
        style="border: 1px solid black;display:none">
        <thead>
        <tr>
                <th colspan=2 style="text-align: left;background: #233461;"><img
                        src="<?php echo e(url('/')); ?>/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=9
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    VEHICLES REPORT</th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=9
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    </th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=9 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=5
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=5
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTT"></th>
                <th colspan=3
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=5
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTT"></th>
                <th colspan=3
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=5
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=5
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=2 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
                <th colspan=9 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            </tr>
            <tr>
            
                <th class="company"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY</th>
                <th class="profile"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    PROFILE</th>
                <th class="plates"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    PLATES</th>
                <th class="tag"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TAG </th>
                <th class="station"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    STATION</th>
                <th class="loadingdays"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    LOADING DAYS</th>
                <th class="starttime"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    START TIME/ END TIME</th>
                <th class="associatedepartment"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ASSOCIATE DEPARTMENT</th>
                <th class="fuel"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    FUEL</th>
                <th class="vin1"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    VIN</th>
                <th class="status"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    STATUS</th>
            </tr>
        </thead>
        <tbody id="emp_body1">
        </tbody>

        
        <tr>
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=5
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
               </th>
            <th colspan=3 style="text-align: right;background: #233461;color:#fff"><img
                        src="<?php echo e(url('/')); ?>/images/logogrisM.png"></th>
        </tr>
        <tr>
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=5
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=3
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=5
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
    </table> 







<div class="clearfix"></div>

<div class="row" id="divEditarVehicle">
    <script></script>
    <div class="x_panel">
        <div class="">
            <h2>Edit Vehicle </h2>

            <div class="clearfix"></div>
        </div>

        <div class="col-sm-8">
            <div class="x_content">


                <div id="wizard_verticle" class="form_wizard wizard_horizontal">
                    <ul class="list-unstyled wizard_steps">
                        <li>
                            <a href="#step-1" class="selected" isdone="1" rel="1">
                                <span class="step_no">1</span>
                                <span class="step_descr">
                                    <small>Company</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2" class="disabled" isdone="0" rel="2">
                                <span class="step_no">2</span>
                                <span class="step_descr">
                                    <small>Vehicle</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3" class="disabled" isdone="0" rel="3">
                                <span class="step_no">3</span>
                                <span class="step_descr">
                                    <small>Barcode</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4" class="disabled" isdone="0" rel="4">
                                <span class="step_no">4</span>
                                <span class="step_descr">
                                    <small>Responsable</small>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-5" class="disabled" isdone="0" rel="5">
                                <span class="step_no">5</span>
                                <span class="step_descr">
                                    <small>Schedule</small>
                                </span>
                            </a>
                        </li>
                    </ul>

                    <div class="">
                        <div id="step-1">
                            <h2 class="StepTitle">Step 1 Select Company</h2>
                            <form class="form-horizontal form-label-left">
                                <div class="col-md-6">
                                    <div class="input-group autocomplete" id="divCompany">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Company
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control validar" id="company" name="company"
                                            autocomplete="off" placeholder="Name Company"
                                            data-original-title="Company with which the vehicle will be registered">
                                    </div>
                                </div>

                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </form>
                        </div>
                        <div id="step-2">
                            <h2 class="StepTitle">Step 2 Select Properties The Vehicle</h2>
                            <form class="form-horizontal form-label-left">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Brand
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 " id="divBrand">
                                        <select name="marca" id="marca" class="form-control validarCombo"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Brand with which the vehicle will be registered">
                                            <option value="Select Option" selected disbled>Select Option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Model
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 " id="divModelo">
                                        <select name="modelo" id="modelo" class="form-control validarCombo"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Model with which the vehicle will be registered">
                                            <option value="Select Option" selected disabled>Select Option</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Plates
                                        <span class="required">*</span>
                                    </label>
                                    <div class="  col-md-6 col-sm-6 " id="divPlacas">
                                        <input type="text" id="placas" maxlength="10" required="required"
                                            autocomplete="off" class="form-control validar" data-toggle="tooltip"
                                            data-placement="top" title=""
                                            data-original-title="Plates with which the vehicle will be registered"
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">VIN
                                        <span class="required">*</span>
                                    </label>
                                    <div class="  col-md-6 col-sm-6 " id="divVIN">
                                        <input type="text" id="VIN" maxlength="100" required="required"
                                            autocomplete="off" class="form-control validar" data-toggle="tooltip"
                                            data-placement="right" title=""
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-3">
                            <h2 class="StepTitle">Step 3 Enter The Barcode</h2>

                            <div class="row centrado">
                                <div class="col-sm-4" id="DivCodigoBarras">
                                    <a class="btn btn-app" id="tagG" onclick="return false"
                                        href="javascript:generarBarCod();" data-toggle="tooltip" data-placement="top"
                                        title=""
                                        data-original-title="Please click to generate a barcode to the vehicle">
                                        <i class="fa fa-repeat"></i> Generate BarCode
                                    </a>
                                </div>
                                <div class="col-sm-4">
                                    <iframe id="iframe" frameborder="0" width='600' height='400'></iframe>
                                    <canvas id="CodigoBarras" style=" margin: 0% 0% 0% 20%; display:none;"></canvas>
                                </div>


                            </div>


                        </div>
                        <div id="step-4">
                            <h2 class="StepTitle">Step 4 Assign Responsable</h2>
                            <form class="form-horizontal form-label-left">

                                <div class="col-md-6">
                                    <div class="input-group autocomplete" id="divRespondable">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Responsable
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control validar" id="Responsable" data-id=""
                                            name="Responsable" autocomplete="off" placeholder="Name Responsable"
                                            data-original-title="The person who will be in charge of managing the vehicle">
                                    </div>
                                </div>

                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>

                            </form>
                        </div>

                        <div id="step-5" class="" style="text-align: -webkit-center;">


                            <h2 class="StepTitle">Step 5 Assign Profile</h2>



                            <div class="col-md-6 centrado " style="    margin-left: 25%;">
                                <label clas="" for="">Schedule Options *</label>
                                <div class="input-group" id="divcomboHorario">
                                    <select style="display:inline;" name="comboPerfiles" id="comboPerfiles"
                                        class="form-control validarCombo" data-toggle="tooltip" data-placement="right"
                                        title="" data-original-title="Select the type of schedule ">
                                        <option value="Select Option" selected disabled>Select Option
                                        </option>



                                    </select>


                                </div>
                            </div>
                            <br><br><br><br><br><br><br><br><br>
                            <div id="divHorario" style="display:inline;">
                                <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="Monday"
                                        value="option1">
                                    <label class="form-check-label" for="Monday">Monday</label>
                                </div>
                                <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="Tuesday"
                                        value="option2">
                                    <label class="form-check-label" for="Tuesday">Tuesday</label>
                                </div>
                                <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="Wednesday"
                                        value="option3">
                                    <label class="form-check-label" for="Wednesday">Wednesday</label>
                                </div>
                                <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="Thursday"
                                        value="option3">
                                    <label class="form-check-label" for="Thursday">Thursday</label>
                                </div>
                                <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="Friday"
                                        value="option3">
                                    <label class="form-check-label" for="Friday">Friday</label>
                                </div>
                                <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="Saturday"
                                        value="option3">
                                    <label class="form-check-label" for="Saturday">Saturday</label>
                                </div>
                                <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="Sunday"
                                        value="option3">
                                    <label class="form-check-label" for="Sunday">Sunday</label>
                                </div>
                                <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="All"
                                        value="option3">
                                    <label class="form-check-label" for="All">All</label>
                                </div>
                                <br>
                                <br>



                                <div class="form-group mb-0 ridge">
                                    <div class="col-sm-12">
                                        <div class="row" style="margin-left: 25%;">
                                            <div class="">
                                                <label clas="" for="">Start Time</label>

                                                <div class="input-group" id="hraini">
                                                    <input type='text' class="form-control validar inputPerfiles"
                                                        id="hraini1" data-toggle="tooltip" data-placement="right"
                                                        title=""
                                                        data-original-title="Enter the start time for the schedule" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>

                                                </div>
                                            </div>

                                            <div class="">
                                                <label clas="" for="">End Time</label>

                                                <div class="input-group" id="hrafin">
                                                    <input type='text' class="form-control validar inputPerfiles"
                                                        id="hrafin1" data-toggle="tooltip" data-placement="right"
                                                        title=""
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
                            <label class="control-label mb-10 text-left">Departments  </label>
                            
                        </div>
                        <div id="divDepartamentosButton" class="form-group">
                            <div id="DepartamentosButton"
                                style=' margin: 1rem;  padding: 1rem;  border: 2px solid #ccc; background-color: #fafafa;'>

                            </div>

                        </div>
                            


                            <input  type="text"  hidden class="" id="idDepas" name="destinatarios" >
                            <br>
                            <p id="cantDestinatarios"></p>
                            <label class="control-label mb-10 text-left">Ask for Odometer  </label>
                            <br>
                            <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input " disabled type="checkbox" id="Odometro"
                                        value="option1">
                                    <label class="form-check-label" for="Odometro">Odometer</label>
                                </div>
                        </div>



                    </div>
                </div>
                            <div class="form-group mb-0">
                                
                                <div class="col-sm-12">
                                    <div class="row" style="margin-left: 25%;">

                                        <div class="col-md-4">
                                            <label clas="" for="">Station</label>
                                            <div class="input-group" id="divstation">
                                                <select name="codgas" id="codgas"
                                                    class="form-control validarCombo inputPerfiles"
                                                    data-toggle="tooltip" data-placement="right" title=""
                                                    data-original-title="Select the station where you can dispatch fuel">
                                                    <option value="Select Option" selected disabled>Select Option
                                                    </option>
                                                    <option value="0">ALL</option>
                                                    <option value="1">TANK FARM [DIESEL]</option>
                                                    <option style="display:none;" value="2">TGF 2 [GAS]</option>



                                                </select>


                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label clas="" for="">Fuel</label>
                                            <div class="input-group" id="divComb">
                                                <select name="codprd" id="codprd"
                                                    class="form-control validarCombo inputPerfiles"
                                                    data-toggle="tooltip" data-placement="right" title=""
                                                    data-original-title="Select the type of fuel">
                                                    <option value="Select Option" selected disabled>Select Option
                                                    </option>
                                                    <option style="display:none;" value="1">GASOLINE</option>

                                                    <option value="3">DIESEL </option>


                                                </select>


                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 centrado " style="    margin-left: 25%;">
                                <label clas="" for="">Limits Fuel Options *</label>
                                <div class="input-group" id="divcomboLimites">
                                    <select name="comboLimites" id="comboLimites"
                                        class="form-control validarCombo inputPerfiles" data-toggle="tooltip"
                                        data-placement="right" title=""
                                        data-original-title="Select the type of schedule ">
                                        <option value="Select Option" selected disabled>Select Option
                                        </option>
                                        <option value="1">Unlimited Fuel</option>

                                        <option value="2">Define Limits </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-0 " id="divLimites">

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
        <div class="col-sm-4">
            <h2>Summary</h2>
            <div id="borderResumen">
                <form>
                    <div class="form-group text-left sepborder">
                        <h5 class="card-title" style="margin-top: 10px;">Company</h5>

                        <p class="" id="SumaryCompany">------------------</p>
                        <h5 class="card-title">Brand/Model/Plates</h5>
                        <label class="" id="SumaryModel">---/---/----</label>
                        <h5 class="card-title">BarCode</h5>
                        <label id="SumaryBarCode">-----------</label>
                        <h5 class="card-title">Responsable</h5>
                        <label id="SumaryResponsible">---------</label>
                    </div>
            </div>

            </form>
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
var click = 0;
var ArrayChoferes = [];
var ArrayChoferes1 = [];
var arrCustomers = [];
var arrCustomers1 = [];
var codigoBarras = "";
var filtro_status;
var ListaDeDias = [];
function validaciones() {




    var textIdioma1 = "";
    var Idioma = "English";

    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
        var invalidCheck = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: Please select days.';
        textIdioma1 =
            '<i class="fa fa-warning  pr-15 pull-left"></i> Error: please fill in all fields correctly.';
    }

    $('#divMensajeError').hide();
    var band = []
    var inputs = $(".validar");
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].parentNode.id != "DivInputCodigoBarras") {
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


    }



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
    var cmbo_horario = $("#comboPerfiles").val()
    if (cmbo_horario == '-1') {
        if ($("input[type='checkbox']").is(':checked') != true) {
            band.push(2);
        } else {
            band.push(0);
        }
    }

    var band2 = 0;
    var result = $.inArray(1, band);
    var result2 = $.inArray(2, band);
    if (result != -1) {
        band2 = 1;

    } else if (result2 != -1) {

        band2 = 2;
    }


    if (band2 == 0) {

        $('#divMensajeError').hide();

        UpdateVehicle();


    } else if (band2 == 1) {

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
        return false;
    } else if (band2 == 2) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(invalidCheck);
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



function validateStep1() {
    var textIdioma1 = "";
    var Idioma = "English";
    var alertCustomerInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The company is invalid.';

    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
        textIdioma1 = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: please fill in all fields correctly.';
    }
    $('#divMensajeError').hide();
    var band = []
    var inputs = $(".validar");
    for (let i = 0; i < inputs.length; i++) {

        if (inputs[i].id == "company") {
            if (inputs[i].value == "") {
                $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                band.push(1);
            } else {
                console.log("validation");
                var company = $("#company").val();
                var result = validarAutocomplete(arrCustomers1, company);
                if (result == "true") {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);
                } else {
                    $("#divCompany").removeClass("has-ok has-success");
                    $("#divCompany").addClass("has-error has-danger");
                    band.push(2);
                }


            }
        }


    }



    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1 || band[j] == 2) {
            band2 = band[j];
            break;
        } else {

        }

    }
    if (band2 == 0) {

        $('#divMensajeError').hide();
        return true;

    } else if (band2 == 1) {

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
        return false;
    } else if (band2 == 2) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(alertCustomerInvalid);
        return false;
    }

}


function validateStep2() {
    var textIdioma1 = "";
    var Idioma = "English";

    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
        textIdioma1 = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: please fill in all fields correctly.';
    }
    $('#divMensajeError').hide();
    var band = []
    var inputs = $(".validar");
    for (let i = 0; i < inputs.length; i++) {

        if (inputs[i].id == "placas" || inputs[i].id=="VIN") {
            if (inputs[i].value == "" ) {
                $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");

                band.push(1);
            } else {
                $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                band.push(0);
            }
        }


    }

    var Combos = $(".validarCombo");
    for (let i = 0; i < Combos.length; i++) {

        if (Combos[i].id == "marca" || Combos[i].id == "modelo") {
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
    }


    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1) {
            band2 = 1;
            break;
        } else {

        }

    }
    if (band2 == 0) {

        $('#divMensajeError').hide();
        return true;

    } else {

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
        return false;
    }

}





function validateStep3() {
    var band = []
    var textIdioma1 = "";
    var Idioma = "English";

    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
        textIdioma1 = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: please fill in all fields correctly.';
    }
    $('#divMensajeError').hide();


    if (codigoBarras == "") {
        $("#DivCodigoBarras").removeClass("has-ok has-success");
        $("#DivCodigoBarras").addClass("has-error has-danger");
        band.push(1);
    } else {
        $("#DivCodigoBarras").addClass("has-ok has-success");
        $("#DivCodigoBarras").removeClass("has-error has-danger");
        band.push(0);
    }

    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1) {
            band2 = 1;
            break;
        } else {

        }

    }
    if (band2 == 0) {

        $('#divMensajeError').hide();
        return true;

    } else {

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
        return false;
    }

}



function validateStep4() {
    var textIdioma1 = "";
    var Idioma = "English";
    var alertInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The Responsable is invalid.';

    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
        textIdioma1 = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: please fill in all fields correctly.';
    }
    $('#divMensajeError').hide();
    var band = []
    var inputs = $(".validar");
    for (let i = 0; i < inputs.length; i++) {

        if (inputs[i].id == "Responsable") {
            if (inputs[i].value == "") {
                $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                band.push(1);
            } else {

                var responsable = $("#Responsable").val();
                var result = validarAutocomplete(ArrayChoferes1, responsable);
                if (result == "true") {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);
                } else {
                    $("#divRespondable").removeClass("has-ok has-success");
                    $("#divRespondable").addClass("has-error has-danger");
                    band.push(2);
                }
            }
        }


    }



    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1 || band[j] == 2) {
            band2 = band[j];
            break;
        } else {

        }

    }
    if (band2 == 0) {

        $('#divMensajeError').hide();
        return true;

    } else if (band2 == 1) {

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
        return false;
    } else if (band2 == 2) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(alertInvalid);
        return false;
    }
}









function HacerResumen() {
    //SumaryCompany SumaryModel SumaryBarCode SumaryResponsible

    $('#SumaryCompany').html(($('#company').val() != "") ? $('#company').val() : "----");


    var marca = ($('select[name="marca"] option:selected').text() != "Select Option") ? $(
        'select[name="marca"] option:selected').text() : "----";
    var modelo = ($('select[name="modelo"] option:selected').text() != "Select Option") ? $(
        'select[name="modelo"] option:selected').text() : "----";
    var placas = ($('#placas').val() != "") ? $('#placas').val() : "----";

    $('#SumaryModel').html(marca + "/" + modelo + "/" + placas);
    $('#SumaryResponsible').html(($('#Responsable').val() != "") ? $('#Responsable').val() : "----");


}
$(document).ready(function() {
    //init_SmartWizard();

    // $('#datatable-buttons').empty();
    init_DataTables();

   
    FillCustomer();
    fillresponsability();
    Fillmarcas();
    Fillmodelos();
    llenarComboPerfiles();
    llenarObjVehicles("");
    $('.inputPerfiles').prop("disabled", true);
    $("#Name").prop('disabled', true);
    $("#LastName").prop('disabled', true);



   


});


var Perfiles;

function llenarComboPerfiles() {
    console.log('perfiles');
    try {
        //http://localhost:85/home/GetPerfiles?TipoPerfil=DRIVER
        var sURL = IPWS + "GetPerfiles?TipoPerfil=VEHICLE&all=undefined";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            headers: {Authorization: 'Bearer '+objUsuario.Token },
            success: function(data) {
                Perfiles = data.lstPerfiles;
                if (Perfiles.length > 0) {
                    //Perfiles.sort();
                    var optionsCombo = "";
                    $('#comboPerfiles').empty();
                    optionsCombo +=
                        '<option value="Select Option" selected disabled>Select Option</option>';
                    optionsCombo += '<option value="-1"  >CUSTOM</option>';
                    $(Perfiles).each(function(i) {
                        optionsCombo += '<option data-pos="' + i + '" value="' + Perfiles[i].ID +
                            '">' +
                            Perfiles[i].namePerfil + '</option>';
                    });
                    $('#comboPerfiles').html(optionsCombo);

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

$('#status_1').on('change', function() {
    var res_status = $("#status_1 option:selected").val();
    llenarTabla(res_status);

});


var marca = '';
var modelos = '';

function llenarObjVehicles(all) {

    var para = {
        "All": all,


    };
    console.log("vehicles");
    limpiarTabla();
    var sURL = IPWS + "GetVehiculos";
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

            objVehicles = data.lstVehicles;

            var res_status = $("#status_1 option:selected").val();
            llenarTabla(res_status);




        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
}





var ArrayMarcas;

function Fillmarcas() {

    var sURL = IPWS + "WsGetmarcas";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        success: function(data) {
            ArrayMarcas = data.lstmarcas;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
    marca = ' <option value="Select Option" selected disabled>Select Option</option>';
    $(ArrayMarcas).each(function(i) {
        marca += '<option value="' + this.MarcID + '">' + this.MarcDesc + '</option>';
    });
    $('#marca').html(marca);
}

var ArrayModelos;

function Fillmodelos() {

    var sURL = IPWS + "WsGetmodelos";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        success: function(data) {
            ArrayModelos = data.lstmodelo;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });

}

var Choferes;

function fillresponsability() {

    try {
        var sURL = IPWS + "GetChoferes";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            headers: {Authorization: 'Bearer '+objUsuario.Token },
            success: function(data) {
                Choferes = data.lstChoferes;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });
        for (var i = 0; i < Choferes.length; i++) {
            ArrayChoferes.push([Choferes[i].Nombre  + " " + Choferes[i].LastName.trim() + " " + Choferes[i].SecondLastName.trim(), Choferes[i].nrocho]);
            ArrayChoferes1.push(Choferes[i].Nombre + " " + Choferes[i].LastName.trim() + " " + Choferes[i].SecondLastName.trim());
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
            headers: {Authorization: 'Bearer '+objUsuario.Token },
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
            arrCustomers.push([customer[i].den, customer[i].cod]);
            arrCustomers1.push(customer[i].den);
        }
    } catch (error) {

    }

}

window.addEventListener("keypress", function(event) {
    if (event.keyCode == 13 || event.keyCode == 37 || event.keyCode == 39) {
        console.log("teclas");
        event.preventDefault();

    }

}, false);

$('#marca').change(function() {
    $('#modelo').prop('disabled', false);
    var marca = $('#marca').val();
    var pmodelos = $.grep(ArrayModelos, function(n, i) {
        return (n.MarcID == marca);
    });
    var smodelos = '<option value="0" disabled>Models</option>';
    $(pmodelos).each(function(i) {
        smodelos += '<option value="' + this.ModelId + '">' + this.ModelDesc + '</option>';
    });
    $('#modelo').html(smodelos);
});

function SelectModelos() {
    $('#modelo').empty();
    $('#modelo').prop('disabled', false);

    var marca = $('#marca').val();
    var pmodelos = $.grep(ArrayModelos, function(n, i) {
        return (n.MarcID == marca);
    });
    var smodelos = '';
    $(pmodelos).each(function(i) {
        smodelos += '<option value="' + this.ModelId + '">' + this.ModelDesc + '</option>';
    });
    $('#modelo').html(smodelos);


}

function limpiarTabla() {
    $("#tablaVehicles").empty();
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

function quitarCaracteres(cadena) {
    var dato= cadena.replace(/[^a-zA-Z 0-9.]+/g, ' ');
    return dato;
}
function llenarTabla() {
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
    var colorboton = "";
    var statusVehicle = "";
    Tabla_Vehicles.clear().draw();

    var htmlBotonStatus = "";


    for (var i = 0; i < objVehicles.length; i++) {




        if (objVehicles[i].codprd == "1") {
            NameProd = "<label class='label label-danger'> GASOLINE </label>";
        } else if (objVehicles[i].codprd == "2") {
            NameProd = "<label class='label label-success'> GASOLINE </label>";
        } else if (objVehicles[i].codprd == "3") {
            NameProd = "<label class='label label-dark'> DIESEL </label>";
        }

        if (objVehicles[i].est == 1) {
            statusVehicle = "<label class='label label-success'> ENABLED </label>";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objVehicles[i].est != 1) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusVehicle = "<label class='label label-danger' >DISABLED</label>";
        }
        var nombrePerfil="";
        if (objVehicles[i].profileName == "VEHICLE-PRODUCTION") {
            nombrePerfil = "<label class='label label-success'> VEHICLE-PRODUCTION </label>";

        }
        if (objVehicles[i].profileName == "VEHICLE") {
           
            nombrePerfil = "<label class='label label-danger' >VEHICLE</label>";
        }
        if (objVehicles[i].profileName == "DRIVER") {
           
           nombrePerfil = "<label class='label label-dark' >DRIVER</label>";
       }
       var estacion="";
       if (objVehicles[i].codgas == "0") {
           
            estacion = "<label class='label label-success' >ALL</label>";
       }
       if (objVehicles[i].codgas == "1") {
           
           estacion = "<label class='label label-danger' >TANK FARM</label>";
      }
       if (objVehicles[i].codgas == "2") {
          
            estacion = "<label class='label label-dark' >TGF</label>";
      }

        limpiarTabla();
        if (pos == 0) {
            var NombreDepartamento="";
            if(objVehicles[i].NombreDepartamento != ""){
                NombreDepartamento=objVehicles[i].NombreDepartamento.slice(0,-1);
            }
            Tabla_Vehicles.row.add([
                String(objVehicles[i].company),
                String(nombrePerfil),
                String(quitarCaracteres(objVehicles[i].rsp)),
                String("<label class='label label-info2'> " + objVehicles[i].tag + " </label>"),
                String(estacion),
                String(convertDays(objVehicles[i].diacar)), //
                //String("<label class='label label-info2'> Mo-Tu-We-Th-Fr-Sa-Su </label>"),
                String(convertHoras(objVehicles[i].hraini) + " / " + convertHoras(objVehicles[i].hrafin)),
                String(NombreDepartamento),
                String(NameProd),
                String(objVehicles[i].plc),
                String(objVehicles[i].tagex1),
                //String(objVehicles[i].carmax),
                //String(objVehicles[i].cansem),
                //String(objVehicles[i].canmes),
                //String(objVehicles[i].carmax),
                String(statusVehicle),
                String('<button type="button" onclick="MostrarDivEditar(' + i +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button" onclick="statusVehicles(' + i + ')" class="' + htmlBotonStatus +
                    '"> ' + title + '</button>'),
                String('<button type="button" class="boton_info" onclick="ReimprimirCodigoBarras(' +
                    objVehicles[i].tag + ')">PRINT</button>'),
            ]);
        }



    }











    Tabla_Vehicles.column('1:visible').draw()



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

function generarBarCod(op = "") {
    codigoBarras = "";
    codigoBarras = addControl();

    //$("#CodigoBarras").JsBarcode(codigo,{displayValue:true,fontSize:20});
    $('#iframe').empty();
    $('#SumaryBarCode').empty();
    $('#SumaryBarCode').html(codigoBarras);


    var url = "<?php echo e(url('/CodigoBarras?codigo=')); ?>" + codigoBarras;
    console.log(url);
    $('#iframe').attr({
        src: url
    });
}

function generarBarCod1() {
    $('#iframe').empty();
    $('#SumaryBarCode').empty();
    $('#SumaryBarCode').html(codigoBarras);


    var url = "<?php echo e(url('/CodigoBarras?codigo=')); ?>" + codigoBarras;
    console.log(url);
    $('#iframe').attr({
        src: url
    });
}

function ReimprimirCodigoBarras(tag) {



    var url = "<?php echo e(url('/CodigoBarras?codigo=')); ?>" + tag + "&op=reimprimir";
    console.log(url);
    $('#iframe2').attr({
        src: url
    });
}

function addZero(x, n) {
    while (x.toString().length < n) {
        x = "0" + x;
    }
    return x;
}

function addControl() {
    var res = "";
    var marca = $('select[name="marca"] option:selected').text();
    var modelo = $('select[name="modelo"] option:selected').text();
    marca = marca.substr(0, 2);
    modelo = modelo.substr(0, 2);
    var d = new Date();
    var x = document.getElementById("demo");
    var h = addZero(d.getHours(), 2);
    var m = addZero(d.getMinutes(), 2);
    var s = addZero(d.getSeconds(), 2);
    var ms = addZero(d.getMilliseconds(), 3);

    res = marca +  modelo +  h + m + s + ms;
    return res;
}




var ListaHoras = [];
var nroveh;

function MostrarDivEditar(pos, id) {
    ListaDeDias=[];
    nroveh = "";

    var Dias = [1, 2, 4, 8, 16, 32, 64];
    var NombresDias = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
    console.log("pos" + pos);
    $('#divEditarVehicle').show();
    $('#divCatalogoUsuarios').hide();
    //llenar la informacion del usuario
    //$('#ID').val(objVehicles[pos].tag);


    nroveh = objVehicles[pos].nroveh;
    codigoBarras = objVehicles[pos].tag;
    generarBarCod1();
    $('#tar').val(objVehicles[pos].tar);
    $('#tag').val(codigoBarras);
    $('#placas').val(objVehicles[pos].plc);
    $('#den').val(objVehicles[pos].den);
    $('#ctapre').val(objVehicles[pos].ctapre);
    $('#grp').val(objVehicles[pos].grp);
    $('#Responsable').val(objVehicles[pos].rsp);
    document.getElementById("company").dataset.id = objVehicles[pos].codcli;
    //$("#company").data("id", objVehicles[pos].company);
    $('#company').val(objVehicles[pos].company);

    $('#rut').val(objVehicles[pos].rut);
    $('#limtur').val(objVehicles[pos].limtur);
    var hora1 = "";
    var hora2 = "";
    if (String(objVehicles[pos].hraini).length == 3) {
        var h1 = String(objVehicles[pos].hraini).substring(0, 1);
        var min1 = String(objVehicles[pos].hraini).substring(1, 3);
        hora1 = "0" + h1 + ":" + min1;
    }
    if (String(objVehicles[pos].hraini).length == 4) {
        var h1 = String(objVehicles[pos].hraini).substring(0, 2);
        var min1 = String(objVehicles[pos].hraini).substring(2, 4);
        hora1 = h1 + ":" + min1;
    }
    if (String(objVehicles[pos].hraini).length == 1) {
        hora1 = (objVehicles[pos].hraini == 0) ? "00:00" : objVehicles[pos].hraini;

    }
    if (String(objVehicles[pos].hrafin).length == 3) {
        var h1 = String(objVehicles[pos].hrafin).substring(0, 1);
        var min1 = String(objVehicles[pos].hrafin).substring(1, 3);
        hora2 = "0" + h1 + ":" + min1;
    }
    if (String(objVehicles[pos].hrafin).length == 4) {
        var h1 = String(objVehicles[pos].hrafin).substring(0, 2);
        var min1 = String(objVehicles[pos].hrafin).substring(2, 4);
        hora2 = h1 + ":" + min1;
    }
    if (String(objVehicles[pos].hrafin).length == 1) {
        hora2 = (objVehicles[pos].hrafin == 0) ? "00:00" : objVehicles[pos].hrafin;
        //hora2=(objVehicles[pos].hrafin == 0) ? "00:00" : objVehicles[pos].hrafin;
    }
    $('#hraini1').val(hora1);
    $('#hrafin1').val(hora2);
    ListaHoras.push({
        hraini1: hora1
    });
    ListaHoras.push({
        hrafin2: hora2
    });
    $("#codprd  option[value='" + objVehicles[pos].codprd + "']").attr("selected", true);
    $("#codgas  option[value='" + objVehicles[pos].codgas + "']").attr("selected", true);
    $("#est  option[value='" + objVehicles[pos].est + "']").attr("selected", true);
    $('#candia ').val(objVehicles[pos].candia);
    $('#cansem').val(objVehicles[pos].cansem);
    $('#canmes').val(objVehicles[pos].canmes);
    $('#carmax').val(objVehicles[pos].carmax);
    $('#VIN').val(objVehicles[pos].tagex1);
    $('#comboPerfiles').val(objVehicles[pos].tagex2);
    $("#marca  option[value='" + objVehicles[pos].cnvemp + "']").attr("selected", true);

    SelectModelos();
    $("#modelo  option[value='" + objVehicles[pos].cnvobs + "']").attr("selected", true);

    for (var i = 0; i < Dias.length; i++) {

        var num = parseInt(objVehicles[pos].diacar) / Dias[i];
        num = parseInt(num);
        if (num % 2 == 0) {

        } else {
            if (num >= 1) {
                $('#' + NombresDias[i]).prop('checked', true);
                var nomDia = JSON.parse('{"' + NombresDias[i] + '":true}');

                ListaDeDias.push("1");
            }

        }
    }
    
    llenarDepartamentoVista(objVehicles[pos]);
    llenarComboHorario(3);
    HacerResumen();

}

$("#comboPerfiles").change(function() {

    llenarDatosHorario(3);

});

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
    if (op == 3) {
        if (parseInt($('#comboPerfiles option:selected').val()) == -1) {
            limpiarDatosPerfil();
        } else {
            limpiarDatosPerfil();
            habilitarCombos = false;
            $('.inputPerfiles').prop("disabled", true);


            var pos = parseInt($('#comboPerfiles option:selected').data("pos"));
            var Dias = [1, 2, 4, 8, 16, 32, 64];
            var NombresDias = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
            for (var i = 0; i < Dias.length; i++) {

                var num = parseInt(Perfiles[pos].diacar) / Dias[i];
                num = parseInt(num);
                if (num % 2 == 0) {

                } else {
                    if (num >= 1) {
                        $('#' + NombresDias[i]).prop('checked', true);
                        //console.log("{'"+NombresDias[i]+"':true}");
                        var nomDia = JSON.parse('{"' + NombresDias[i] + '":true}');

                        ListaDeDias.push(nomDia);
                    }

                }
            }

            var hora1 = "";
            var hora2 = "";
            if (String(Perfiles[pos].hraini).length == 3) {
                var h1 = String(Perfiles[pos].hraini).substring(0, 1);
                var min1 = String(Perfiles[pos].hraini).substring(1, 3);
                hora1 = "0" + h1 + ":" + min1;
            }
            if (String(Perfiles[pos].hraini).length == 4) {
                var h1 = String(Perfiles[pos].hraini).substring(0, 2);
                var min1 = String(Perfiles[pos].hraini).substring(2, 4);
                hora1 = h1 + ":" + min1;
            }
            if (String(Perfiles[pos].hraini).length == 1) {
                hora1 = (Perfiles[pos].hraini == 0) ? "00:00" : Perfiles[pos].hraini;

            }
            if (String(Perfiles[pos].hrafin).length == 3) {
                var h1 = String(Perfiles[pos].hrafin).substring(0, 1);
                var min1 = String(Perfiles[pos].hrafin).substring(1, 3);
                hora2 = "0" + h1 + ":" + min1;
            }
            if (String(Perfiles[pos].hrafin).length == 4) {
                var h1 = String(Perfiles[pos].hrafin).substring(0, 2);
                var min1 = String(Perfiles[pos].hrafin).substring(2, 4);
                hora2 = h1 + ":" + min1;
            }
            if (String(Perfiles[pos].hrafin).length == 1) {
                hora2 = (Perfiles[pos].hrafin == 0) ? "00:00" : Perfiles[pos].hrafin;
                //hora2=(objVehicles[pos].hrafin == 0) ? "00:00" : objVehicles[pos].hrafin;
            }
            $('#hraini1').val(hora1);

            $('#hrafin1').val(hora2);
            $("#codgas  option[value='" + Perfiles[pos].codgas + "']").attr("selected", true);
            $("#codprd  option[value='" + Perfiles[pos].codprd + "']").attr("selected", true);
            $("#comboLimites  option[value='" + Perfiles[pos].Unlimited + "']").attr("selected", true);

            $("#codgas").val(Perfiles[pos].codgas);
            $("#codprd").val(Perfiles[pos].codprd);
            $("#comboLimites").val(Perfiles[pos].Unlimited);

            hacerComboLimites();

            $("#carmax").val(Perfiles[pos].carmax);
            $("#candia").val(Perfiles[pos].candia);
            $("#cansem").val(Perfiles[pos].cansem);
            $("#canmes").val(Perfiles[pos].canmes);

            llenarDepartamentoVista(Perfiles[pos]);

        }


    }


}

function llenarDepartamentoVista(objDepartamentos,bandera=0){
            
            if (true ) {
                debugger

                if(objDepartamentos.Odometro=="true" && objDepartamentos.Odometro != undefined){
                    $("#Odometro").prop("checked", true);
                }else{
                    //$("#Odometro").prop("checked", false);
                    if(objDepartamentos.ValidacionOdometro=="true" && objDepartamentos.ValidacionOdometro != undefined){
                        $("#Odometro").prop("checked", true);
                    }else{
                        $("#Odometro").prop("checked", false);
                    }
                }
        
                

                var arreDest = objDepartamentos.NombreDepartamento.split(",");
                //objDepartamentos = objDepartamentos  + $('#Department option:selected').text()+ ',';
                //objIDDepa  = objIDDepa  + $('#Department ').val()+ ',';
               // objDepartamneto=objDepartamentos;
                //objID=objIDDepa;
                
                //$('#idDepas').val(objIDDepa);
                $('#DepartamentosButton').empty();
                
                arreDest.forEach(function(valor, indice, array) {
                    if (valor != "") {
        
                        if(bandera==0){
                            $('#DepartamentosButton').append(
                            '<div class="dropdown"> <button class="dropbtn">' + valor +
                            '</button> <div class="dropdown-content">  </div></div>'
                        );
                        }
                        
                    }
        
                });
                
        
        
                
                    
                        
                    
        
                
            }   
        }
function limpiarDatosPerfil(){
    habilitarCombos = true;
            $("#Monday").prop("checked", false);
            $("#Tuesday").prop("checked", false);
            $("#Wednesday").prop("checked", false);
            $("#Thursday").prop("checked", false);
            $("#Friday").prop("checked", false);
            $("#Saturday").prop("checked", false);
            $("#Sunday").prop("checked", false);
            $('#hraini1').val("");
            $('#hrafin1').val("");
            $('.inputPerfiles').prop("disabled", false);
            $("#codgas  option[value='Select Option']").attr("selected", true);
            $("#codprd  option[value='Select Option']").attr("selected", true);

            $("#codgas").val("Select Option");
            $("#codprd").val("Select Option");
            $("#comboLimites").val("Select Option");

            $("#carmax").val("");
            $("#candia").val("");
            $("#cansem").val("");
            $("#canmes").val("");

}
$("#comboHorario").change(function() {
    var op = $("#comboHorario").val();
    if (op == 1) {
        llenarDatosHorario(op);
        //$("#divHorario").hide();
    }
    if (op == 2) {
        llenarDatosHorario(op);
       // $("#divHorario").show();
    }
});
$("#comboLimites").change(function() {
    hacerComboLimites();
});

function hacerComboLimites(){
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
}

function llenarComboHorario() {
    try {
        //limites de
        if (ListaHoras[0].hraini1 == "00:00" && ListaHoras[1].hrafin2 == "23:59" && ListaDeDias.length == 7) {
            $("#comboHorario  option[value='1']").attr("selected", true);
            //$("#divHorario").hide();
        } else {
            $("#comboHorario  option[value='2']").attr("selected", true);
            //$("#divHorario").show();
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

function UpdateVehicleDisabled(i, valor) {
    var tag = objVehicles[i].tag;
    swal({
            title: "Sure you want disabled this vehicle?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    tag: tag
                };

                var sURL = IPWS + "WsDisabledVehicle";
                $.ajax({
                    url: sURL,
                    data: para,
                    dataType: "json",
                    type: "GET",
                    async: false,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("Good Job!", "vehicle disabled succefull!", "success")

                            llenarObjVehicles();
                            UpdateContenedor('Vehicles');

                        }
                        if (data.Status == "ERROR") {
                            swal("Error, Try again!", "error");
                            llenarObjVehicles();
                            UpdateContenedor('Vehicles');
                        }


                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {

                        swal("Error", "No se pudo: " + errorThrown, "error");
                    }
                });
                //swal("OK!", "Registro guardado correctamente.", "success");





            } else {
                swal("Without changes!");
            }
        });

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







function UpdateVehicle() {
    console.log("easkdnsajd");
    var diacar = 0;
    //var nroveh = $('#nroveh').val();
    var tar = $('#tar').val();
    var est = $('#est').val();
    var tag = codigoBarras;
    var plc = $('#placas').val();
    var den = $('#den').val();
    var ctapre = $('#ctapre').val();
    var grp = $('#grp').val();
    var rsp = $('#Responsable').val();
    var rut = $('#rut').val();

    var limtur = $('#limtur').val();
    var hraini = $('#hraini1').val();
    var hrafin = $('#hrafin1').val();
    var hrai = hraini;
    var hraf = hrafin;
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
    var codgas = $('#codgas').val();
    var codprd = $('#codprd').val();
    var carmax = $('#carmax').val();
    var candia = $('#candia').val();
    var cansem = $('#cansem').val();
    var canmes = $('#canmes').val();
    var vin = $('#VIN').val();
    var perfil = $('#comboPerfiles').val();

    var marca = $('#marca').val();
    var modelo = $('#modelo').val();
    var regex = /(\d+)/g;
    // codcli = $("#company").val();
    var codcli = document.getElementById("company").dataset.id;

    //codcli = codcli.match(regex)

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



    swal({
            title: "Are you sure?",
            text: "THIS VEHICLE WILL BE UPDATED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {
                    "codcli": codcli,
                    "nroveh": nroveh,
                    "tar": tar,
                    "est": est,
                    "tag": tag,
                    "plc": plc,
                    "den": den,
                    "ctapre": ctapre,
                    "grp": grp,
                    "rsp": rsp,
                    "rut": rut,
                    "diacar": diacar,
                    "limtur": limtur,
                    "hraini": hraini,
                    "hrafin": hrafin,
                    "codgas": codgas,
                    "codprd": codprd,
                    "carmax": carmax,
                    "candia": candia,
                    "cansem": cansem,
                    "canmes": canmes,
                    "cnvemp": marca,
                    "cnvobs": modelo,
                    "tagex1": vin,
                    "tagex2": perfil,



                };
                var sURL = IPWS + "WsUpdateVehiculoControlGas";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    data: para,
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("OK! VEHICLE UPDATED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('Vehicles');
                        } else {
                            swal("Error", "ERROR UPDATING DATA", "error");
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {

                    }
                });

            } else {
                swal("without changes!");
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
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                buttons: [{
                        //Botón para Excel
                        //extend: 'excelHtml5',
                        footer: true,
                        title: 'Vehicles_' + today,
                        filename: 'Vehicles_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,13],
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
                            $('row c:nth-child(4)', sheet).attr('s', '7');
                            //First row
                            $('row:first c', sheet).attr('s', '47');

                            // One cell
                            // $('row c[r^="D6"]', sheet).attr('s', '32');
                            // Loop over the cells in column `E` the amount column

                            //All cells of row 10

                            //Search all cells for a specific text

                            $('row* c[r]', sheet).each(function() {
                                if ($('is t', this).text().match(
                                        /(?:^|\b)(cover)(?=\b|$)/gmi)) {
                                    $(this).attr('s', '20');
                                }

                            });

                            $('row c[r^="H"]', sheet).each(function() {
                                if ($(this).text() == 'GASOLINE') {
                                    $(this).attr('s', '40');
                                } else if ($(this).text() == 'DIESEL') {
                                    $(this).attr('s', '35');
                                }



                            });


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
                            $(col[1]).attr('width', 10);
                            $(col[2]).attr('width', 20);
                            $(col[3]).attr('width', 25);
                            $(col[4]).attr('width', 25);
                            $(col[5]).attr('width', 15);
                            $(col[6]).attr('width', 15);

                            $(col[8]).attr('width', 25);
                            $(col[9]).attr('width', 25);
                            $(col[10]).attr('width', 25);
                            $(col[11]).attr('width', 30);
                            $(col[12]).attr('width', 25);
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
                        title: 'Vehicles_' + today,
                        filename: 'Vehicles_' + today,

                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,13],
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


function SmartWizard(target, options) {
    this.target = target;
    this.options = options;
    this.curStepIdx = options.selected;
    this.steps = $(target).children("ul").children("li").children("a"); // Get all anchors
    this.contentWidth = 0;
    this.msgBox = $('<div class="msgBox"><div class="content"></div><a href="#" class="close">X</a></div>');
    this.elmStepContainer = $('<div></div>').addClass("stepContainer");
    this.loader = $('<div>Loading</div>').addClass("loader");
    this.buttons = {
        next: $('<a id="next" class="glyphicon glyphicon-chevron-right">' + options.labelNext + '</a>').attr("href",
            "#").addClass("buttonNext btn btn-round btn-info"),
        previous: $('<a id="Previous" class="glyphicon glyphicon-chevron-left">' + options.labelPrevious + '</a>')
            .attr("href", "#").addClass("buttonPrevious btn btn-round btn-info"),


    };

    /*
     * Private functions
     */

    var _init = function($this) {
        var elmActionBar = $('<div></div>').addClass("actionBar");
        elmActionBar.append($this.msgBox);
        $('.close', $this.msgBox).click(function() {
            $this.msgBox.fadeOut("normal");
            return false;
        });

        var allDivs = $this.target.children('div');
        $this.target.children('ul').addClass("anchor");
        allDivs.addClass("content");

        // highlight steps with errors
        if ($this.options.errorSteps && $this.options.errorSteps.length > 0) {
            $.each($this.options.errorSteps, function(i, n) {
                $this.setError({
                    stepnum: n,
                    iserror: true
                });
            });
        }

        $this.elmStepContainer.append(allDivs);
        elmActionBar.append($this.loader);
        $this.target.append($this.elmStepContainer);
        elmActionBar.append($this.buttons.finish)
            .append($this.buttons.previous)
            .append($this.buttons.next);
        $this.target.append(elmActionBar);
        this.contentWidth = $this.elmStepContainer.width();
        $('.actionBar').append(
            "<button type='input' onclick='validaciones();' id='Save_Vehicle'class='btn btn-round' style='color:white;' >Update<span class='glyphicon glyphicon-chevron-right'></span></button>"
        );
        $("#Save_Vehicle").css({
            'background': '#26B99A'
        });
        $("#next").css({
            'background': '#0464b3'
        });
        $("#Previous").css({
            'background': '#0464b3'
        });
        $("#newrol").css({
            'background': '#0464b3'
        });


        $($this.buttons.next).click(function() {
            if (click == 0) {
                var valid = validateStep1();
                if (valid == true) {
                    $this.goForward();
                    click = click + 1;
                    HacerResumen();
                    return false;
                }
            }


            if (click == 1) {
                var valid = validateStep2();
                if (valid == true) {
                    $this.goForward();
                    click = click + 1;
                    HacerResumen();
                    return false;
                }
            }


            if (click == 2) {
                var valid = validateStep3();
                if (valid == true) {
                    $this.goForward();
                    click = click + 1;
                    HacerResumen();
                    return false;
                }
            }


            if (click == 3) {
                var valid = validateStep4();
                if (valid == true) {
                    $this.goForward();
                    click = click + 1;
                    if (click == 4) {
                        $("#Save_Vehicle").show();
                    } else {
                        $("#Save_Vehicle").hide();
                    }
                    HacerResumen();
                    return false;
                }
            }





        });


        $($this.buttons.previous).click(function() {
            $('#divMensajeError').hide();
            $this.goBackward();
            click = click - 1;
            if (click < 4) {
                $("#Save_Vehicle").hide();
            } else {
                $("#Save_Vehicle").show();
            }
            HacerResumen();
            return false;
        });
        $($this.buttons.finish).click(function() {
            if (!$(this).hasClass('buttonDisabled')) {
                if ($.isFunction($this.options.onFinish)) {
                    var context = {
                        fromStep: $this.curStepIdx + 1
                    };
                    if (!$this.options.onFinish.call(this, $($this.steps), context)) {
                        return false;
                    }
                } else {
                    var frm = $this.target.parents('form');
                    if (frm && frm.length) {
                        frm.submit();
                    }
                }
            }
            HacerResumen();
            return false;
        });

        $($this.steps).bind("click", function(e) {
            if ($this.steps.index(this) == $this.curStepIdx) {
                return false;
            }
            var nextStepIdx = $this.steps.index(this);
            var isDone = $this.steps.eq(nextStepIdx).attr("isDone") - 0;
            if (isDone == 1) {
                _loadContent($this, nextStepIdx);
            }
            HacerResumen();
            return false;
        });

        // Enable keyboard navigation
        /*
        if ($this.options.keyNavigation) {
            $(document).keyup(function(e) {
                if (e.which == 39) { // Right Arrow
                    $this.goForward();
                } else if (e.which == 37) { // Left Arrow
                    $this.goBackward();
                }
            });
        }
        */
        //  Prepare the steps
        _prepareSteps($this);
        // Show the first slected step
        _loadContent($this, $this.curStepIdx);
    };

    var _prepareSteps = function($this) {
        if (!$this.options.enableAllSteps) {
            $($this.steps, $this.target).removeClass("selected").removeClass("done").addClass("disabled");
            $($this.steps, $this.target).attr("isDone", 0);
        } else {
            $($this.steps, $this.target).removeClass("selected").removeClass("disabled").addClass("done");
            $($this.steps, $this.target).attr("isDone", 1);
        }

        $($this.steps, $this.target).each(function(i) {
            $($(this).attr("href").replace(/^.+#/, '#'), $this.target).hide();
            $(this).attr("rel", i + 1);
        });
    };

    var _step = function($this, selStep) {
        return $(
            $(selStep, $this.target).attr("href").replace(/^.+#/, '#'),
            $this.target
        );
    };

    var _loadContent = function($this, stepIdx) {
        var selStep = $this.steps.eq(stepIdx);
        var ajaxurl = $this.options.contentURL;
        var ajaxurl_data = $this.options.contentURLData;
        var hasContent = selStep.data('hasContent');
        var stepNum = stepIdx + 1;
        if (ajaxurl && ajaxurl.length > 0) {
            if ($this.options.contentCache && hasContent) {
                _showStep($this, stepIdx);
            } else {
                var ajax_args = {
                    url: ajaxurl,
                    type: "POST",
                    data: ({
                        step_number: stepNum
                    }),
                    dataType: "text",
                    beforeSend: function() {
                        $this.loader.show();
                    },
                    error: function() {
                        $this.loader.hide();
                    },
                    success: function(res) {
                        $this.loader.hide();
                        if (res && res.length > 0) {
                            selStep.data('hasContent', true);
                            _step($this, selStep).html(res);
                            _showStep($this, stepIdx);
                        }
                    }
                };
                if (ajaxurl_data) {
                    ajax_args = $.extend(ajax_args, ajaxurl_data(stepNum));
                }
                $.ajax(ajax_args);
            }
        } else {
            _showStep($this, stepIdx);
        }
    };

    var _showStep = function($this, stepIdx) {
        var selStep = $this.steps.eq(stepIdx);
        var curStep = $this.steps.eq($this.curStepIdx);
        if (stepIdx != $this.curStepIdx) {
            if ($.isFunction($this.options.onLeaveStep)) {
                var context = {
                    fromStep: $this.curStepIdx + 1,
                    toStep: stepIdx + 1
                };
                if (!$this.options.onLeaveStep.call($this, $(curStep), context)) {
                    return false;
                }
            }
        }
        $this.elmStepContainer.height(_step($this, selStep).outerHeight());
        var prevCurStepIdx = $this.curStepIdx;
        $this.curStepIdx = stepIdx;
        if ($this.options.transitionEffect == 'slide') {
            _step($this, curStep).slideUp("fast", function(e) {
                _step($this, selStep).slideDown("fast");
                _setupStep($this, curStep, selStep);
            });
        } else if ($this.options.transitionEffect == 'fade') {
            _step($this, curStep).fadeOut("fast", function(e) {
                _step($this, selStep).fadeIn("fast");
                _setupStep($this, curStep, selStep);
            });
        } else if ($this.options.transitionEffect == 'slideleft') {
            var nextElmLeft = 0;
            var nextElmLeft1 = null;
            var nextElmLeft = null;
            var curElementLeft = 0;
            if (stepIdx > prevCurStepIdx) {
                nextElmLeft1 = $this.contentWidth + 10;
                nextElmLeft2 = 0;
                curElementLeft = 0 - _step($this, curStep).outerWidth();
            } else {
                nextElmLeft1 = 0 - _step($this, selStep).outerWidth() + 20;
                nextElmLeft2 = 0;
                curElementLeft = 10 + _step($this, curStep).outerWidth();
            }
            if (stepIdx == prevCurStepIdx) {
                nextElmLeft1 = $($(selStep, $this.target).attr("href"), $this.target).outerWidth() + 20;
                nextElmLeft2 = 0;
                curElementLeft = 0 - $($(curStep, $this.target).attr("href"), $this.target).outerWidth();
            } else {
                $($(curStep, $this.target).attr("href"), $this.target).animate({
                    left: curElementLeft
                }, "fast", function(e) {
                    $($(curStep, $this.target).attr("href"), $this.target).hide();
                });
            }

            _step($this, selStep).css("left", nextElmLeft1).show().animate({
                left: nextElmLeft2
            }, "fast", function(e) {
                _setupStep($this, curStep, selStep);
            });
        } else {
            _step($this, curStep).hide();
            _step($this, selStep).show();
            _setupStep($this, curStep, selStep);
        }
        return true;
    };

    var _setupStep = function($this, curStep, selStep) {
        $(curStep, $this.target).removeClass("selected");
        $(curStep, $this.target).addClass("done");

        $(selStep, $this.target).removeClass("disabled");
        $(selStep, $this.target).removeClass("done");
        $(selStep, $this.target).addClass("selected");

        $(selStep, $this.target).attr("isDone", 1);

        _adjustButton($this);

        if ($.isFunction($this.options.onShowStep)) {
            var context = {
                fromStep: parseInt($(curStep).attr('rel')),
                toStep: parseInt($(selStep).attr('rel'))
            };
            if (!$this.options.onShowStep.call(this, $(selStep), context)) {
                return false;
            }
        }
        if ($this.options.noForwardJumping) {
            // +2 == +1 (for index to step num) +1 (for next step)
            for (var i = $this.curStepIdx + 2; i <= $this.steps.length; i++) {
                $this.disableStep(i);
            }
        }
    };

    var _adjustButton = function($this) {
        if (!$this.options.cycleSteps) {
            if (0 >= $this.curStepIdx) {
                $($this.buttons.previous).addClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.previous).hide();
                }
            } else {
                $($this.buttons.previous).removeClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.previous).show();
                }
            }
            if (($this.steps.length - 1) <= $this.curStepIdx) {
                $($this.buttons.next).addClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.next).hide();
                }
            } else {
                $($this.buttons.next).removeClass("buttonDisabled");
                if ($this.options.hideButtonsOnDisabled) {
                    $($this.buttons.next).show();
                }
            }
        }
        // Finish Button
        if (!$this.steps.hasClass('disabled') || $this.options.enableFinishButton) {
            $($this.buttons.finish).removeClass("buttonDisabled");
            if ($this.options.hideButtonsOnDisabled) {
                $($this.buttons.finish).show();
            }
        } else {
            $($this.buttons.finish).addClass("buttonDisabled");
            if ($this.options.hideButtonsOnDisabled) {
                $($this.buttons.finish).hide();
            }
        }
    };

    /*
     * Public methods
     */

    SmartWizard.prototype.goForward = function() {
        var nextStepIdx = this.curStepIdx + 1;
        if (this.steps.length <= nextStepIdx) {
            if (!this.options.cycleSteps) {
                return false;
            }
            nextStepIdx = 0;
        }
        _loadContent(this, nextStepIdx);
    };

    SmartWizard.prototype.goBackward = function() {
        var nextStepIdx = this.curStepIdx - 1;
        if (0 > nextStepIdx) {
            if (!this.options.cycleSteps) {
                return false;
            }
            nextStepIdx = this.steps.length - 1;
        }
        _loadContent(this, nextStepIdx);
    };

    SmartWizard.prototype.goToStep = function(stepNum) {
        var stepIdx = stepNum - 1;
        if (stepIdx >= 0 && stepIdx < this.steps.length) {
            _loadContent(this, stepIdx);
        }
    };
    SmartWizard.prototype.enableStep = function(stepNum) {
        var stepIdx = stepNum - 1;
        if (stepIdx == this.curStepIdx || stepIdx < 0 || stepIdx >= this.steps.length) {
            return false;
        }
        var step = this.steps.eq(stepIdx);
        $(step, this.target).attr("isDone", 1);
        $(step, this.target).removeClass("disabled").removeClass("selected").addClass("done");
    }
    SmartWizard.prototype.disableStep = function(stepNum) {
        var stepIdx = stepNum - 1;
        if (stepIdx == this.curStepIdx || stepIdx < 0 || stepIdx >= this.steps.length) {
            return false;
        }
        var step = this.steps.eq(stepIdx);
        $(step, this.target).attr("isDone", 0);
        $(step, this.target).removeClass("done").removeClass("selected").addClass("disabled");
    }
    SmartWizard.prototype.currentStep = function() {
        return this.curStepIdx + 1;
    }

    SmartWizard.prototype.showMessage = function(msg) {
        $('.content', this.msgBox).html(msg);
        this.msgBox.show();
    }
    SmartWizard.prototype.hideMessage = function() {
        this.msgBox.fadeOut("normal");
    }
    SmartWizard.prototype.showError = function(stepnum) {
        this.setError(stepnum, true);
    }
    SmartWizard.prototype.hideError = function(stepnum) {
        this.setError(stepnum, false);
    }
    SmartWizard.prototype.setError = function(stepnum, iserror) {
        if (typeof stepnum == "object") {
            iserror = stepnum.iserror;
            stepnum = stepnum.stepnum;
        }

        if (iserror) {
            $(this.steps.eq(stepnum - 1), this.target).addClass('error')
        } else {
            $(this.steps.eq(stepnum - 1), this.target).removeClass("error");
        }
    }

    SmartWizard.prototype.fixHeight = function() {
        var height = 0;

        var selStep = this.steps.eq(this.curStepIdx);
        var stepContainer = _step(this, selStep);
        stepContainer.children().each(function() {
            height += $(this).outerHeight();
        });

        // These values (5 and 20) are experimentally chosen.
        stepContainer.height(height + 5);
        this.elmStepContainer.height(height + 20);
    }

    _init(this);
    $('#divEditarVehicle').hide();
    $('#Save_Vehicle').hide();
};



$(function() {
    $('#hraini').datetimepicker({
        format: 'HH:mm'
    });
    $('#hrafin').datetimepicker({
        format: 'HH:mm'
    });
});

autocomplete(document.getElementById("company"), arrCustomers);
autocomplete(document.getElementById("Responsable"), ArrayChoferes);



var ocultarelementos = 0;
$('#seeAll').click(function() {
    console.log("Haber");
    if (ocultarelementos == 0) {
        ocultarelementos = 1;
        $("#icono").removeClass("glyphicon glyphicon-eye-open");
        $("#icono").addClass("glyphicon glyphicon-eye-close");
        llenarObjVehicles("7");
    } else {
        ocultarelementos = 0;
        $("#icono").removeClass("glyphicon glyphicon-eye-close");
        $("#icono").addClass("glyphicon glyphicon-eye-open");
        llenarObjVehicles("");
    }
});


function statusVehicles(pos, id) {
    console.log("dis");

    if (objVehicles[pos].est == "1") {

        UpdateDisabled(pos, objVehicles[pos].tag, "ClientesVehiculos", "tag", "ControlGas");

    } else {

        UpdateEnabled(pos, objVehicles[pos].tag, "ClientesVehiculos", "tag", "ControlGas");
    }
}

function UpdateDisabled(pos, id, table, nameid, BDD) {
    swal({
            title: "SURE YOU WANT DISABLED THIS VEHICLE?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    Id: id,
                    Status: 3,
                    table: table,
                    nameid: nameid,
                    BDD: BDD,
                    nameStatus: "est"
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
                            swal("GOOD JOB!", "VEHICLE DISABLED SUCCESSFULLY!", "success")

                            llenarObjVehicles("");
                            UpdateContenedor('Vehicles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");

                            llenarObjVehicles("");
                            UpdateContenedor('Vehicles');
                            return "ERROR";
                        }


                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {

                        swal("Error", "No se pudo: " + errorThrown, "error");
                    }
                });
                //swal("OK!", "Registro guardado correctamente.", "success");





            } else {
                swal("Without changes!");
            }
        });

}





function UpdateEnabled(pos, id, table, nameid, BDD) {
    swal({
            title: "SURE YOU WANT ENABLED THIS VEHICLE?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    Id: id,
                    Status: 1,
                    table: table,
                    nameid: nameid,
                    BDD: BDD,
                    nameStatus: "est"
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
                            swal("GOOD JOB!", "VEHICLE ENABLED SUCCESSFULLY!", "success")

                            llenarObjVehicles("");
                            UpdateContenedor('Vehicles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");

                            llenarObjVehicles("");
                            UpdateContenedor('Vehicles');
                            return "ERROR";
                        }


                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {

                        swal("Error", "No se pudo: " + errorThrown, "error");
                    }
                });
                //swal("OK!", "Registro guardado correctamente.", "success");





            } else {
                swal("Without changes!");
            }
        });

}








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
pdfMake.createPdf(documentDefinition).download('VEHICLES_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY')+'".pdf');
}

var datos = [];
var detalle = [];
function getDatosBMW() {
var dentro;

var company = document.getElementById("COMPANY").checked;
var profile = document.getElementById("PROFILE").checked;
var plates = document.getElementById("PLATES").checked;
var tag = document.getElementById("TAG").checked;
var station = document.getElementById("STATION").checked;
var loadingdays = document.getElementById("LOADINGDAYS").checked;
var starttime = document.getElementById("STARTTIME").checked;
var associatedepartment = document.getElementById("ASSOCIATEDEPARTMENT").checked;
var fuel = document.getElementById("FUEL").checked;

var vin1 = document.getElementById("VIN1").checked;
//var amountweek = document.getElementById("AMOUNTWEEK").checked;
//var amountmonth = document.getElementById("AMOUNTMONTH").checked;
//var maxloader = document.getElementById("MAXLOADER").checked;
var status = document.getElementById("STATUS").checked;

var arrayN = ['COMPANY', 'PROFILE', 'PLATES', 'TAG', 'STATION', 'LOADING DAYS', 'START TIME/END TIME','ASSOCIATE DEPARTMENT', 'FUEL', 'VIN', 'STATUS'];
var detail = [
    [
        {
            text: 'COMPANY',
            style: 'tableSubtitulo'
        },
        {
            text: 'PROFILE',
            style: 'tableSubtitulo'
        },
        {
            text: 'PLATES',
            style: 'tableSubtitulo'
        },
        {
            text: 'TAG',
            style: 'tableSubtitulo'
        },
        {
            text: 'STATION',
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
            text: 'FUEL',
            style: 'tableSubtitulo'
        },
        {
            text: 'VIN',
            style: 'tableSubtitulo'
        },
        {
            text: 'STATUS',
            style: 'tableSubtitulo'
        }
    ]
];
for (let index = 0; index < objVehicles.length; index++) {
    if (company) {
        datos.push({
            text: objVehicles[index].company,
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
            text: objVehicles[index].profileName,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (plates) {
        datos.push({
            text: objVehicles[index].plc,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (tag) {
        datos.push({
            text: objVehicles[index].tag,
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
       if (objVehicles[index].codgas == "0") {
           
            estacion = "ALL";
       }
       if (objVehicles[index].codgas == "1") {
           
           estacion = "TANK FARM";
      }
       if (objVehicles[index].codgas == "2") {
          
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
    if (loadingdays) {
        datos.push({
            text: convertDays(objVehicles[index].diacar),
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
            text: convertHoras(objVehicles[index].hraini) + " / " + convertHoras(objVehicles[index].hrafin),
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
            if(objVehicles[index].NombreDepartamento != ""){
                NombreDepartamento=objVehicles[index].NombreDepartamento.slice(0,-1);
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
    if (fuel) {

        var NameProd="";
    if (objVehicles[index].codprd == "1") {
            NameProd = "GASOLINE";
        } else if (objVehicles[index].codprd == "2") {
            NameProd = "GASOLINE";
        } else if (objVehicles[index].codprd == "3") {
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


    if (vin1) {
        datos.push({
            text: objVehicles[index].tagex1,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }

    if (status) {
        var statusVehicle="";
        if (objVehicles[index].est == 1) {
            statusVehicle = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objVehicles[index].est != 1) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusVehicle = "DISABLED";
        }

        datos.push({
            text:statusVehicle,
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
        widths: [100, 70, 70, 45, 45, 60, 45,45, 45,45,45],
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

function encabezado() {
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
        text: 'VEHICLES REPORT',
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
function CreateExcelOrPdf(){
    
    if(tipoArchivo=='Excel'){
        columnasreporteTF();
    }
    if(tipoArchivo=='PDF'){
        generatePDF();
    }
    
    }
    function columnasreporteTF() {

        var company = document.getElementById("COMPANY").checked;
var profile = document.getElementById("PROFILE").checked;
var plates = document.getElementById("PLATES").checked;
var tag = document.getElementById("TAG").checked;
var station = document.getElementById("STATION").checked;
var loadingdays = document.getElementById("LOADINGDAYS").checked;
var starttime = document.getElementById("STARTTIME").checked;
var associatedepartment = document.getElementById("ASSOCIATEDEPARTMENT").checked;
var fuel = document.getElementById("FUEL").checked;

var vin1 = document.getElementById("VIN1").checked;
//var amountweek = document.getElementById("AMOUNTWEEK").checked;
//var amountmonth = document.getElementById("AMOUNTMONTH").checked;
//var maxloader = document.getElementById("MAXLOADER").checked;
var status = document.getElementById("STATUS").checked;



if (company) {
    $(".company").show();
} else {
    $(".company").hide();
}
if (profile) {
    $(".profile").show();
} else {
    $(".profile").hide();
}
if (plates) {
    $(".plates").show();
} else {
    $(".plates").hide();
}
if (tag) {
    $(".tag").show();
} else {
    $(".tag").hide();
}
if (station) {
    $(".station").show();
} else {
    $(".station").hide();
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

if (fuel) {
    $(".fuel").show();
} else {
    $(".fuel").hide();
}

if (vin1) {
    $(".vin1").show();
} else {
    $(".vin1").hide();
}
if (status) {
    $(".status").show();
} else {
    $(".status").hide();
}
llenarTablaExcel();
descargarExcel();
}
function LimpiarChecks(){
$("#COMPANY").prop("checked", false);
$("#PROFILE").prop("checked", false);
$("#PLATES").prop("checked", false);
$("#TAG").prop("checked", false);
$("#STATION").prop("checked", false);
$("#LOADINGDAYS").prop("checked", false);
$("#STARTTIME").prop("checked", false);
$("#ASSOCIATEDEPARTMENT").prop("checked", false);
$("#FUEL").prop("checked", false);
$("#VIN1").prop("checked", false);
$("#STATUS").prop("checked", false);
$("#ALL").prop("checked", false);
}

$('#ALL').change(function() {

if ($(this).is(":checked")) {

$("#COMPANY").prop("checked", true);
$("#PROFILE").prop("checked", true);
$("#PLATES").prop("checked", true);
$("#TAG").prop("checked", true);
$("#STATION").prop("checked", true);
$("#LOADINGDAYS").prop("checked", true);
$("#STARTTIME").prop("checked", true);
$("#ASSOCIATEDEPARTMENT").prop("checked", true);
$("#FUEL").prop("checked", true);
$("#VIN1").prop("checked", true);
$("#STATUS").prop("checked", true);

} else {
$("#COMPANY").prop("checked", false);
$("#PROFILE").prop("checked", false);
$("#PLATES").prop("checked", false);
$("#TAG").prop("checked", false);
$("#STATION").prop("checked", false);
$("#LOADINGDAYS").prop("checked", false);
$("#STARTTIME").prop("checked", false);
$("#ASSOCIATEDEPARTMENT").prop("checked", false);
$("#FUEL").prop("checked", false);
$("#VIN1").prop("checked", false);
$("#STATUS").prop("checked", false);
}

});
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
    var fecha=moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY');
    link.download = "VEHICLES_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click();
}
function llenarTablaExcel() {
    document.getElementById('fechaReporteTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD, YYYY');

        document.getElementById('horareporteTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');
    var company = document.getElementById("COMPANY").checked;
var profile = document.getElementById("PROFILE").checked;
var plates = document.getElementById("PLATES").checked;
var tag = document.getElementById("TAG").checked;
var station = document.getElementById("STATION").checked;
var loadingdays = document.getElementById("LOADINGDAYS").checked;
var starttime = document.getElementById("STARTTIME").checked;
var associatedepartment = document.getElementById("ASSOCIATEDEPARTMENT").checked;
var fuel = document.getElementById("FUEL").checked;

var vin1 = document.getElementById("VIN1").checked;
//var amountweek = document.getElementById("AMOUNTWEEK").checked;
//var amountmonth = document.getElementById("AMOUNTMONTH").checked;
//var maxloader = document.getElementById("MAXLOADER").checked;
var status = document.getElementById("STATUS").checked;


    $("#emp_body1").empty();
    
    var tr;
    for (var i = 0; i < objVehicles.length; i++) {
        tr = $('<tr/>');
        if(company){
            tr.append(
            "<td class='company' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            objVehicles[i].company + "</td> ");
        }else{
            tr.append(
            "<td class='company' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(profile){
            tr.append(
            "<td class='profile' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            quitarCaracteres(objVehicles[i].profileName) + "</td>");
        }else{
            tr.append(
            "<td class='profile' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(plates){
            tr.append(
            "<td class='plates' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objVehicles[i].plc + "</td>");
        }else{
            tr.append(
            "<td class='plates' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(tag){
            tr.append(
            "<td class='tag' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objVehicles[i].tag + "</td>");
        }else{
            tr.append(
            "<td class='tag' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(station){
            var estacion="";
       if (objVehicles[i].codgas == "0") {
           
            estacion = "ALL";
       }
       if (objVehicles[i].codgas == "1") {
           
           estacion = "TANK FARM";
      }
       if (objVehicles[i].codgas == "2") {
          
            estacion = "TGF";
      }

            tr.append(
            "<td class='station' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            estacion + "</td>");
        }else{
            tr.append(
            "<td class='station' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(loadingdays){
            tr.append(
            "<td class='loadingdays' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            convertDays(objVehicles[i].diacar)+ "</td>");
        }else{
            tr.append(
            "<td class='loadingdays' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if((starttime) ){
            tr.append(
            "<td class='(starttime) ' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            convertHoras(objVehicles[i].hraini) + " / " + convertHoras(objVehicles[i].hrafin) + "</td>");
        }else{
            tr.append(
            "<td class='(starttime) ' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if((associatedepartment) ){
            var NombreDepartamento="";
            if(objVehicles[i].NombreDepartamento != ""){
                NombreDepartamento=objVehicles[i].NombreDepartamento.slice(0,-1);
            }
            tr.append(
            "<td class='(associatedepartment) ' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            NombreDepartamento + "</td>");
        }else{
            tr.append(
            "<td class='(associatedepartment) ' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(fuel){

            var NameProd="";
    if (objVehicles[i].codprd == "1") {
            NameProd = "GASOLINE";
        } else if (objVehicles[i].codprd == "2") {
            NameProd = "GASOLINE";
        } else if (objVehicles[i].codprd == "3") {
            NameProd = "DIESEL";
        }
            tr.append(
            "<td class='fuel' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            NameProd + "</td>");
        }else{
            tr.append(
            "<td class='fuel' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(vin1){
            tr.append(
            "<td class='candia' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objVehicles[i].tagex1 + "</td>");
        }else{
            tr.append(
            "<td class='candia' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(status){
            var statusVehicle="";

            if (objVehicles[i].est == 1) {
            statusVehicle = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objVehicles[i].est != 1) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusVehicle = "DISABLED";
        }
            tr.append(
            "<td class='status' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            statusVehicle + "</td>");
        }else{
            tr.append(
            "<td class='status' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }


        $('#emp_body1').append(tr);
    }
}
</script>
<?php /**PATH C:\xampp\htdocs\TANKFARM\Laravel\resources\views/Vehicles.blade.php ENDPATH**/ ?>