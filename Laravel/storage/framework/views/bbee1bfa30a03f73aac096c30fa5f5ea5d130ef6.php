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
.centrado {
    text-align: center;
    align-content: center;
}

.step_descr {
    font-size: 26px;
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

#myInput {
    /*border: 1px solid transparent;*/
    /*background-color: #f1f1f1;*/
    padding: 10px;
    font-size: 16px;
}



.btn-primary {
    color: #fff !important;
    background-color: #92A2BD !important;
    border-color: #92A2BD !important;
}

.btn {
    border-radius: 1 !important;
}
</style>


<div class="x_panel" id="divCatalogoUsuarios">
    <div class="x_title">
        <h2>Drivers </h2>

        <div class="clearfix"></div>
    </div>
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
                                        >NAME</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >DEPARTMENT</th>
                                    
                                        <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >COST CENTER</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >TELEPHONE</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >EMAIL</th>

                                        <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >MANAGER</th>

                                        <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >MANAGER EMAIL</th>



                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >STATUS</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                     >EDIT</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >ACTIONS
                                    </th>



                                </tr>

                            </thead>


                            <tbody>


                                <div class="text-right">
                                    <!--You can add col-lg-12 if you want -->
                                    <button id="seeAll" class="btn btn-warning" type="button"> <span id="icono"
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> SEE ALL
                                        |</button>
                                    <!--You can add col-lg-12 if you want -->
                                    <button type="button" class="btn btn-primary "
                                        onclick="javascript:UpdateContenedor('AddDriver');"> <span class=""
                                            id="icon_enabled" style="color:white;"></span><i
                                            class="glyphicon glyphicon-plus"></i> NEW DRIVER</button>

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
                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="COMPANY"
                                value="option1">
                            <label class="form-check-label" for="COMPANY">COMPANY</label>
                        </div>
                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="NAME"
                                value="option2">
                            <label class="form-check-label" for="NAME">NAME</label>
                        </div>
                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="DEPARTMENT" value="optionq">
                            <label class="form-check-label" for="DEPARTMENT">DEPARTMENT</label>
                        </div>
                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="COSTCENTER" value="optionw">
                            <label class="form-check-label" for="COSTCENTER">COSTCENTER</label>
                        </div>
                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="TELEPHONE" value="optione">
                            <label class="form-check-label" for="TELEPHONE">TELEPHONE</label>
                        </div>
                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="EMAIL" value="optionr">
                            <label class="form-check-label" for="EMAIL">EMAIL</label>
                        </div>

                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="MANAGER" value="optiont">
                            <label class="form-check-label" for="MANAGER">MANAGER</label>
                        </div> 

                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="MANAGEREMAIL" value="optiony">
                            <label class="form-check-label" for="MANAGEREMAIL">MANAGER EMAIL</label>
                        </div>

                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="STATUS" value="optionu">
                            <label class="form-check-label" for="STATUS">STATUS</label>
                        </div>
                        
                        <div class="form-check form-check-inline  ">
                            <input class="form-check-input " type="checkbox" id="ALL" value="optioni">
                            <label class="form-check-label" for="All">ALL</label>
                        </div>
                        <div class="form-check form-check-inline  ">
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
                <th colspan=3 style="text-align: left;background: #233461;"><img
                        src="<?php echo e(url('/')); ?>/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=6
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DRIVERS REPORT</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=6
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    </th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=6 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=4
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=4
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=4
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTT"></th>
                <th colspan=1
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=4
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=4
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTT"></th>
                <th colspan=1
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=4
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=4
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=3 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
                <th colspan=6 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            </tr>
            <tr>
                <th class="company"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY</th>
                <th class="name"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    NAME</th>
                <th class="department"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DEPARTMENT</th>
                <th class="costcenter"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COST CENTER </th>
                <th class="telephone"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TELEPHONE</th>
                <th class="email"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    EMAIL</th>
                <th class="manager"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    MANAGER</th>
                <th class="manageremail"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    MANAGER EMAIL</th>
                <th class="status"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    STATUS</th>
                    
            </tr>
        </thead>
        <tbody id="emp_body1">
        </tbody>
        <tr>
            <th colspan=6
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2 style="text-align: right;background: #233461;color:#fff"><img
            src="<?php echo e(url('/')); ?>/images/logogrisM.png"></th>
        </tr>
        <tr>
            <th colspan=6
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=6
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=2 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>




<div class="clearfix"></div>

<div class="row" id="divEditarUsuario" onload="nobackbutton();">

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Driver </h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content col-sm-10">


                <!-- Tabs -->


                <div id="wizard_verticle" class="form_wizard wizard_horizontal">
                    <ul class="list-unstyled wizard_steps">
                        <li>
                            <a href="#step-11">
                                <span class="step_no">1</span>
                                <span class="step_descr">Company</span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-22">
                                <span class="step_no">2</span>
                                <span class="step_descr">Identification</span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-33">
                                <span class="step_no">3</span>
                                <span class="step_descr">Profile</span>
                            </a>
                        </li>

                    </ul>

                    <div id="step-11">
                        <h2 class="StepTitle">Step 1</h2>
                        <form class="form-horizontal form-label-left" id="formulario">

                            <h2 class="section">Select A Company</h2>






                            <div class="col-md-6">

                                <div class="input-group autocomplete" id="grupo__BusinessName">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Company
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control validar" id="myInput" name="myInput"
                                        autocomplete="off" placeholder="Name Company" data-id="">
                                    <input type="text" class="form-control" style="display: none;" id="ID" name=""
                                        autocomplete="off"
                                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                </div>
                                <div class="input-group autocomplete" id="divManager">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Manager
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control validar" id="manager" name="description"
                                        placeholder="Name Manager" autocomplete="off" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                </div>
                            </div>


                        </form>
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
                    </div>
                    <div id="step">

                    </div>

                    <div id="step-22">
                        <h2 class="StepTitle">Step 2</h2>
                        <h2 class="section">Driver Information</h2>
                        <form class="form-horizontal form-label-center" id="formulario">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="Adress">Complete Name
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-3" id="divNAme">
                                    <input type="text" id="name" name="name" required="required"
                                        class="form-control  validar" autocomplete="off"
                                        data-original-title="Company with which the driver will be registered"
                                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                </div>

                                <div class="col-md-3">

                                    <div class="input-group" id="divtel">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Tel
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control validar" id="telefono" name="telefono"
                                            placeholder="(555) 555-5555" autocomplete="off">



                                    </div>
                                </div>

                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="LastName">Last Name
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-3" id="divLastName">
                                    <input type="text" class="form-control validar" id="LastName" name="tag" placeholder=""
                                        autocomplete="off"
                                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">

                                </div>
                                <div class="col-md-3">

                                    <div class="input-group" id="divSecondLastName">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Second Last Name
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control validar" id="SecondLastName"
                                            name="SecondLastName" placeholder="" autocomplete="off"
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-3" id="divCorreo">
                                    <input type="email" id="correo" name="correo" required="required"
                                        class="form-control  validar" autocomplete="off" data-validation="email" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    <div id="xmail" class="" style="display: none;">
                                        <h6 class="text-danger">
                                            Invalid email</h6>
                                    </div>
                                </div>

                                <div class="col-md-3">

                                    <div class="input-group" id="divDescription">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Description
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control validar" id="description"
                                            name="description" placeholder="" autocomplete="off" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    </div>
                                </div>




                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Department
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-3" id="divDepartamento">
                                    <select style="display:inline;" name="comboDepartamento" id="comboDepartamento"
                                        class="form-control validarCombo" data-toggle="tooltip" data-placement="right">
                                        <option value="Select Option" selected disabled>Select Option</option>
                                    </select>

                                </div>




                                <div class="col-md-3">

                                    <div class="input-group" id="divDescription">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Cost
                                            Center</label>
                                        <select style="display:inline;" name="comboCentroCostos" id="comboCentroCostos"
                                            class="form-control validarCombo" data-toggle="tooltip"
                                            data-placement="right">
                                            <option value="Select Option" selected disabled>Select Option</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="City">TAG
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-6" id="divTag">
                                    <input type="text" class="form-control validar" id="tag" name="tag" placeholder=""
                                         autocomplete="off" style="background: white;">

                                </div>

                            </div>
                        </form>
                    </div>










                    <div id="step-33" class="" style="text-align: -webkit-center;">


                        <h2 class="StepTitle text-left">Step 3 Driver Profile</h2>

                        <div class="col-md-6 centrado " style="    margin-left: 25%;">
                            <label clas="" for="">Select a Driver Profile  *</label>
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
                        <div id="divHorario" style="display:inline">
                            <div class="form-check form-check-inline checkbox" id="chmonday">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Monday" value="option1">
                                <label class="form-check-label" for="Monday">Monday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Tuesday" value="option2">
                                <label class="form-check-label" for="Tuesday">Tuesday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Wednesday" value="option3">
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
                                <input class="form-check-input inputPerfiles" type="checkbox" id="ALL" value="option3">
                                <label class="form-check-label" for="ALL">ALL</label>
                            </div>
                            <br><br><br>
                            <div class="form-group mb-0 ridge">
                                <div class="col-sm-12">
                                    <div class="row" style="justify-content: center;  align-items: center;">

                                        <div class="">
                                            <label clas="" for="">Start Time</label>

                                            <div class="input-group" id="hrainii">
                                                <input type='text' class="form-control validar inputPerfiles" id="hraini1" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>

                                            </div>
                                        </div>


                                        <div class="">
                                            <label clas="" for="">End Time</label>

                                            <div class="input-group" id="hrafinn">
                                                <input type='text' class="form-control validar inputPerfiles" id="hrafin2" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>

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

            <div class="col-sm-2">
                <h2>Summary</h2>
                <div id="borderResumen">
                    <form>
                        <div class="form-group text-left sepborder">
                            <h5 class="card-title" style="margin-top: 10px;">Company</h5>
                            <p class="" id="SumaryCompany">------------------</p>
                            <h5 class="card-title">Driver Name</h5>
                            <p class="" id="SumaryUserNAme">------------------</p>

                            <h5 class="card-title">Manager</h5>
                            <p class="" id="SumaryManager">------------------</p>

                            <h5 class="card-title">Telephone</h5>
                            <p id="SumaryTelephone">-----------</p>
                            <h5 class="card-title">Email</h5>
                            <p id="SumaryEmail">-----------</p>

                        </div>

                    </form>
                </div>

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




document.getElementById('telefono').addEventListener('input', function(e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});

function HacerResumen() {
    //SumaryCompany SumaryModel SumaryBarCode SumaryResponsible

    $('#SumaryCompany').html(($('#myInput').val() != "") ? $('#myInput').val() : "----");
    $('#SumaryUserNAme').html(($('#name').val() != "") ? $('#name').val() : "----");
    $('#SumaryManager').html(($('#manager').val() != "") ? $('#manager').val() : "----");



    $('#SumaryEmail').html(($('#correo').val() != "") ? $('#correo').val() : "----");
    $('#SumaryTelephone').html(($('#telefono').val() != "") ? $('#telefono').val() : "----");


}
Tabla_Choferes = "";
var ArrChoferes = [];
var ArrChoferes1 = [];
var arrCustomers_1 = [];
var arrCustomers1 = [];
var click = 0;
var TagOld = "";
var IDP = 0;
$(document).ready(function() {

    init_DataTables();
    llenarObjDrivers("");
    FillCustomer();
    FillChoferes();

    llenarComboPerfiles();
    llenarComboDepartamento();
    $('.inputPerfiles').prop("disabled", true);
    habilitarCombos = false;
    //$("#Name").prop('disabled', true);
    //$("#LastName").prop('disabled', true);
    //Fillestados();
    //Fillmunicipios();
});


var mensajeError="";
var customer;

function FillCustomer() {
    try {
        var sURL = IPWS +"GetClientes";
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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
            arrCustomers_1.push([customer[i].den, customer[i].cod]);
            arrCustomers1.push(customer[i].den);
        }

    } catch (error) {

    }

}

var choferes;

function FillChoferes() {
    try {
        var sURL = IPWS + "GetChoferes";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            headers: {Authorization: 'Bearer '+objUsuario.Token },
            success: function(data) {
                choferes = data.lstChoferes;
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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
        for (var i = 0; i < choferes.length; i++) {
            ArrChoferes.push([choferes[i].Nombre.trim() + " " + choferes[i].LastName.trim() + " " + choferes[i].SecondLastName.trim(),
                choferes[i].ID
            ]);
            ArrChoferes1.push(choferes[i].Nombre.trim() + " " + choferes[i].LastName.trim() + " " + choferes[i].SecondLastName.trim());
        }
    } catch (error) {

    }

}




var ObjDrivers;

function llenarObjDrivers(all) {
    var para = {
        "All": all,
    };
    limpiarTabla();
    var sURL = IPWS +"GetChoferes";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        data: para,
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        crossDomain: true,

        xhrFields: {
            cors: false
        },
        cache: false,
        //data: para,

        //dataFilter: function (data) { return data; },
        success: function(data) {
            ObjDrivers = data.lstChoferes;
            llenarTabla();
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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

function limpiarTabla() {

}

function validarcorreo() {
    console.log("correo");
    var email = $("#correo").val();
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    if (caract.test(email) == false) {
        $("#xmail").show();

        return false;
    } else {
        $("#xmail").hide();

        return true;
    }
}

/*
function llenarTabla() {
    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var StatusChofer = "";
    limpiarTabla();
    var htmlBotonStatus = "";
    for (var i = 0; i < ObjDrivers.length; i++) {
        if (ObjDrivers[i].Status == "1") {
            htmlBotonStatus = 'icon-user-minus';
            colorIcon = "color:red;";
            title = "Disabled";
        } else {
            htmlBotonStatus = 'icon-user-check';
            colorIcon = "color:black;";
            title = "Disabled";
            colorBoton = "color:green";

        }
        if (ObjDrivers[i].Status == "0" || ObjDrivers[i].Status == 0) {
            StatusChofer = "<label class='label label-success'> ENABLED </label>";

        } else {
            StatusChofer = "<label class='label label-danger'> DISABLED </label>";
        }
        if (pos == 0) {
            Tabla_Choferes.row.add([
                String(ObjDrivers[i].Company),
                String(ObjDrivers[i].Nombre),
                String(ObjDrivers[i].Gerente),
                String(ObjDrivers[i].Telefono),
                String(ObjDrivers[i].Correo),
                String(StatusChofer),
                String(
                    ' <a type="submit" style="background:##0172ec;color:white" class="col-sm-12 btn btn-primary" onclick="MostrarDivEditar(' +
                    i +

                    ')"><span class="icon-pencil" style="color:white" id="icon_edit"> </span>' + textIdioma2 +
                    ' </a>'),
                String(' <a type="submit"  style="background:#d9534f;color:white" class="col-sm-12 btn btn-' +
                    class1 +
                    '" onclick="UpdateDriverDisabled(' +
                    ObjDrivers[i].tag + ',' + valorEstatus + ')"><span class=' + htmlBotonStatus +
                    ' id="icon_enabled" style=color:white> </span> ' + title + '</a>'),
            ]);
        }
    }
    Tabla_Choferes.column('1:visible').order('desc').draw()
}
*/
function quitarCaracteres(cadena) {
    var dato= cadena.replace(/[^a-zA-Z 0-9.]+/g, ' ');
    return dato;
}
function llenarTabla() {
    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var StatusChofer = "";
    limpiarTabla();
    Tabla_Choferes.clear().draw();
    var htmlBotonStatus = "";
    for (var i = 0; i < ObjDrivers.length; i++) {
        if (ObjDrivers[i].Status == "0") {
        } else {
        }
        if (ObjDrivers[i].Status == "0" || ObjDrivers[i].Status == 0) {
            htmlBotonStatus = 'boton_danger';
            title = "DISABLE";
            StatusChofer = "<label class='label label-success'> ENABLED </label>";

        } else {
            StatusChofer = "<label class='label label-danger'> DISABLED </label>";
            htmlBotonStatus = 'boton_success';
            title = "ENABLE";
        }
        if (pos == 0) {
            Tabla_Choferes.row.add([
                String(quitarCaracteres(ObjDrivers[i].Company)),
                String(quitarCaracteres(ObjDrivers[i].Nombre) + " " + quitarCaracteres(ObjDrivers[i].LastName)),
                String(ObjDrivers[i].DepartamentoName),
                String(ObjDrivers[i].CentroCostosName),
                String(ObjDrivers[i].Telefono),
                String(ObjDrivers[i].Correo),
                String(quitarCaracteres(ObjDrivers[i].Gerente)),
                
                String(((ObjDrivers[i].ManagerEmail == "" || ObjDrivers[i].ManagerEmail == null) ? "--" : ObjDrivers[i].ManagerEmail)),
                String(StatusChofer),
                String('<button type="button" onclick="MostrarDivEditar(' + i +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button" onclick="statusDrivers(' + i + ',' +
                    ObjDrivers[i].ID + ')" class="' + htmlBotonStatus + '"> ' + title + '</button>'),
            ]);
        }
    }
    Tabla_Choferes.column('1:visible').draw()
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







function addVehicle() {
    $('#divEditarUsuario').hide();
    $('#divVehicle').show();

    $('#divCatalogoUsuarios').hide();

}

var habilitarCombos;
$("#comboHorario").change(function() {
    var op = $("#comboHorario").val();
    if (op == 1) {
        llenarDatosHorario(op);
        //$("#divHorario").hide();
    }
    if (op == 2) {
        llenarDatosHorario(op);
        //$("#divHorario").show();
    }
});
$("#comboPerfiles").change(function() {

    llenarDatosHorario(3);

});

var ListaDeDias = [];
var ListaHoras = [];


function llenarDatosHorario(op) {
    try {
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
                limpiarDatosPerfiles();

            } else {
                limpiarDatosPerfiles();
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
                    //hora2=(ObjDrivers[pos].hrafin == 0) ? "00:00" : ObjDrivers[pos].hrafin;
                }
                $('#hraini1').val(hora1);

                $('#hrafin1').val(hora2);
            }


        }
    } catch (error) {

    }




}

function limpiarDatosPerfiles(){
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
}

var ListaDeDias = [];
var ListaHoras = [];

function MostrarDivEditar(pos, id) {
    try {
        console.log("pruebas");
        var Dias = [1, 2, 4, 8, 16, 32, 64];
        var NombresDias = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        $('#divEditarUsuario').show();
        $('#divCatalogoUsuarios').hide();

        $('#ID').val(ObjDrivers[pos].tag);

        document.getElementById("myInput").dataset.id = ObjDrivers[pos].codcli;

        $('#myInput').val(ObjDrivers[pos].Company);
        IDP = 0;
        TagOld = "";
        TagOld = ObjDrivers[pos].tag
        IDP = ObjDrivers[pos].ID;
        $('#name').val(ObjDrivers[pos].Nombre);
        $('#correo').val(ObjDrivers[pos].Correo);
        $('#tag').val(ObjDrivers[pos].tag);
        $('#telefono').val(ObjDrivers[pos].Telefono);
        $('#manager').val(ObjDrivers[pos].Gerente);
        $('#description').val(ObjDrivers[pos].den);
        $('#LastName').val(ObjDrivers[pos].LastName);
        $('#SecondLastName').val(ObjDrivers[pos].SecondLastName);
        $("#comboDepartamento  option[value='" + ObjDrivers[pos].Departamento + "']").attr("selected", true);
        llenarCentroCostos();
        $("#comboCentroCostos  option[value='" + ObjDrivers[pos].CentroCostos + "']").attr("selected", true);
        $("#comboPerfiles  option[value='" + ObjDrivers[pos].Perfil + "']").attr("selected", true);

        var hora1 = "";
        var hora2 = "";
        if (String(ObjDrivers[pos].hraini).length == 3) {
            var h1 = String(ObjDrivers[pos].hraini).substring(0, 1);
            var min1 = String(ObjDrivers[pos].hraini).substring(1, 3);
            hora1 = "0" + h1 + ":" + min1;
        }
        if (String(ObjDrivers[pos].hraini).length == 4) {
            var h1 = String(ObjDrivers[pos].hraini).substring(0, 2);
            var min1 = String(ObjDrivers[pos].hraini).substring(2, 4);
            hora1 = h1 + ":" + min1;
        }
        if (String(ObjDrivers[pos].hraini).length == 1) {
            hora1 = (ObjDrivers[pos].hraini == 0) ? "00:00" : ObjDrivers[pos].hraini;

        }
        if (String(ObjDrivers[pos].hrafin).length == 3) {
            var h1 = String(ObjDrivers[pos].hrafin).substring(0, 1);
            var min1 = String(ObjDrivers[pos].hrafin).substring(1, 3);
            hora2 = "0" + h1 + ":" + min1;
        }
        if (String(ObjDrivers[pos].hrafin).length == 4) {
            var h1 = String(ObjDrivers[pos].hrafin).substring(0, 2);
            var min1 = String(ObjDrivers[pos].hrafin).substring(2, 4);
            hora2 = h1 + ":" + min1;
        }
        if (String(ObjDrivers[pos].hrafin).length == 1) {
            hora2 = (ObjDrivers[pos].hrafin == 0) ? "00:00" : ObjDrivers[pos].hrafin;
            //hora2=(ObjDrivers[pos].hrafin == 0) ? "00:00" : ObjDrivers[pos].hrafin;
        }
        $('#hraini1').val(hora1);

        $('#hrafin2').val(hora2);

        ListaHoras.push({
            hraini1: hora1
        });
        ListaHoras.push({
            hrafin2: hora2
        });
        HacerResumen();

        console.log("llenarEditar");
        for (var i = 0; i < Dias.length; i++) {

            var num = parseInt(ObjDrivers[pos].diacar) / Dias[i];
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

        //llenarComboHorario();
    } catch (error) {

    }


}

function llenarComboHorario() {
    try {

        if (ListaHoras[0].hraini1 == "00:00" && ListaHoras[1].hrafin2 == "23:59" && ListaDeDias.length == 7) {
            $("#comboHorario  option[value='1']").attr("selected", true);
            $("#divHorario").hide();
        } else {
            $("#comboHorario  option[value='2']").attr("selected", true);
            $("#divHorario").show();
        }

    } catch (error) {
        console.error("Error: convert shudule");
    }

}



function UpdateDriverDisabled(tag, valor) {
    swal.fire({
            title: "Sure you want disabled this Driver?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    tag: tag
                };

                var sURL = IPWS +"WsDisabledChofer";
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
                            swal.fire("Good Job!", "Driver disabled succefull!", "success");
                            llenarObjDrivers("");
                            UpdateContenedor('Drivers');
                        }
                        if (data.Status == "ERROR") {
                            swal.fire("Error, Try again!", "error");
                            llenarObjDrivers("");
                            UpdateContenedor('Drivers');
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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







function UpdateDriver() {
    console.log("update driver");
    //$('#ID').val();
    var diacar = 0;
    var codcli = document.getElementById("myInput").dataset.id; //$("#myInput").data("id");
    var Nombre = $('#name').val();
    var Correo = $('#correo').val();
    var tag = $('#tag').val();
    var Telefono = $('#telefono').val();
    var Gerente = $('#manager').val();
    var den = $('#description').val();

    var LastName = $('#LastName').val();
    var SecondLastName = $('#SecondLastName').val();
    var Perfil = parseInt($('#comboPerfiles option:selected').val());
    var Departamento = parseInt($('#comboDepartamento option:selected').val());
    var CentroCostos = parseInt($('#comboCentroCostos option:selected').val());
    var hraini = $('#hraini1').val();
    var hrafin = $('#hrafin2').val();
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

    var regex = /(\d+)/g;
    //Gerente = Gerente.match(regex);
    //codcli = codcli.match(regex);

    swal.fire({
            title: "Are you sure?",
            text: "THIS DRIVER WILL BE UPDATED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {
                    "codcli": codcli,
                    "den": den,
                    "diacar": diacar,
                    "hraini": hraini,
                    "hrafin": hrafin,
                    "tag": tag,
                    "Nombre": Nombre,
                    "LastName":LastName,
                    "SecondLastName":SecondLastName,
                    "Correo": Correo,
                    "Gerente": Gerente,
                    "Telefono": Telefono,
                    "Perfil": Perfil,
                    "Departamento": Departamento,
                    "CentroCostos": CentroCostos,
                     "TagOld": TagOld,
                    "IDP": IDP,
                };
                var sURL = IPWS +"WsUpdateChofer";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    data: para,
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal.fire("OK! DRIVER UPDATED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('Drivers');
                        } else {
                            if (data.Status == "DUPLICATE") {
                                swal.fire("Error", "DUPLICATE TAG", "error");
                            } else {
                                swal.fire("Error", "ERROR UPDATING DATA", "error");
                            }

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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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
            $("#" + Combos[i].parentNode.id).addClass("has-ok has-success");
            $("#" + Combos[i].parentNode.id).removeClass("has-error has-danger");
            band.push(0);
        }

    }

    var cmbo_Perfiles = $("#comboPerfiles").val()
    if (cmbo_Perfiles == '-1') {
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
        var valcorreo = validarcorreo();
        if (valcorreo == true) {
            UpdateDriver();
        }

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
    var alertManagerInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The Manager is invalid.';
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

        if (inputs[i].id == "myInput" || inputs[i].id == "manager") {
            if (inputs[i].value == "") {
                $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                band.push(1);
            } else {
                $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                var company = $("#myInput").val();
                var result = validarAutocomplete(arrCustomers1, company);

               // var manager = $("#manager").val();
               // var resultmanager = validarAutocomplete(ArrChoferes1, manager);


                if (result == "true") {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);
                } else {
                    $("#grupo__BusinessName").removeClass("has-ok has-success");
                    $("#grupo__BusinessName").addClass("has-error has-danger");
                    band.push(2);
                }

                //if (resultmanager == "true") {
                //    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                //    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                //    band.push(0);

                //} else {
                //    $("#divManager").removeClass("has-ok has-success");
                //    $("#divManager").addClass("has-error has-danger");
                 //   band.push(3);
                //}


            }
        }


    }




    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1 || band[j] == 2 || band[j] == 3) {
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
    }else if (band2 == 3) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(alertManagerInvalid);
        return false;
    }

}

function validateStep2() {
    var textIdioma1 = "";
    var Idioma = "English";
    var alertInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The manager is invalid.';
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

        if (inputs[i].id == "name" || inputs[i].id == "LastName"|| inputs[i].id == "SecondLastName"|| inputs[i].id == "correo" || inputs[i].id == "tag" || inputs[i].id == "telefono" || inputs[i].id == "description") {
            if (inputs[i].value == "") {
                $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                band.push(1);
            } else {
                $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                //var manager = $("#manager").val();
                //var result = validarAutocomplete(ArrChoferes1, manager);
                //if (result == "true") {
                 //   $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                //    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                //    band.push(0);
                //} else {
                //    $("#divManager").removeClass("has-ok has-success");
                //   $("#divManager").addClass("has-error has-danger");
                 //   band.push(2);
                //}
            }
        }


    }

    var Combos = $(".validarCombo");
    for (let i = 0; i < Combos.length; i++) {

        if (Combos[i].id == "Suburb") {
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
    var result = $.inArray(1, band);
    var result2 = $.inArray(2, band);

    if (result != -1) {
        band2 = 1;

    } else if (result2 != -1) {

        band2 = 2;
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


$("#correo").keyup(function() {
    var valcorreo = validarcorreo();
    if (valcorreo == true) {
        $("#divCorreo").removeClass("has-error has-danger");
        $("#divCorreo").addClass("has-ok has-success");
    } else {
        $("#divCorreo").removeClass("has-ok has-success");
        $("#divCorreo").addClass("has-error has-danger");
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
            Tabla_Choferes = $("#datatable-buttons").DataTable({
                dom: "Blfrtip",
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                "ordering":false,
                "aaShorting":[],
                

                buttons: [{
                        //Botón para Excel
                        //extend: 'excelHtml5',
                        footer: true,
                        "aaShorting":[],
                        title: 'Drivers_' + today,
                        filename: 'Drivers_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5,6,7,8],
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
                            $('row c:nth-child(2)', sheet).attr('s', '7');
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
                            var col = $('col', sheet);
                            col.each(function() {
                                $(this).attr('width', 10);
                            });
                            $(col[0]).attr('width', 35);
                            $(col[1]).attr('width', 30);
                            $(col[2]).attr('width', 35);
                            $(col[3]).attr('width', 30);
                            $(col[4]).attr('width', 20);
                            $(col[5]).attr('width', 30);
                            $(col[6]).attr('width', 30);
                            $(col[7]).attr('width', 30);
                            $(col[8]).attr('width', 30);
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
                        title: 'Drivers_' + today,
                        filename: 'Drivers_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8],
                        },

                        orientation: 'landscape',
                        pageSize: 'LEGAL',

                        tableHeader: {
                            alignment: 'center'
                        },
                        //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                        customize: function(doc) {
                           
                            age = Tabla_Choferes.column(8).data().toArray();
                            for (var i = 0; i < age.length; i++) {
                                var text = age[i].substring(35, 43);
                                if (text != "DISABLED") {
                                    doc.content[1].table.body[i + 1][8].fillColor = '#72DB3A';
                                } else {
                                    doc.content[1].table.body[i + 1][8].fillColor = '#FF0000';
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
            "<button type='input' onclick='validaciones();' id='Save_Drivers'class='btn btn-round' style='color:white;' >Update<span class='glyphicon glyphicon-chevron-right'></span></button>"
        );
        $("#Save_Drivers").css({
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
            }
            if (valid == true) {
                $this.goForward();
                click = click + 1;
                if (click == 2) {
                    $("#Save_Drivers").show();
                } else {
                    $("#Save_Drivers").hide();
                }
                HacerResumen();
                return false;
            } else {

            }

            if (click == 1) {
                var valid = validateStep2();
            }
            if (valid == true) {
                $this.goForward();
                click = click + 1;
                if (click == 2) {
                    $("#Save_Drivers").show();
                } else {
                    $("#Save_Drivers").hide();
                }
                HacerResumen();
                return false;
            } else {

            }




        });


        $($this.buttons.previous).click(function() {
            $this.goBackward();
            click = click - 1;
            if (click < 2) {
                $("#Save_Drivers").hide();
            } else {
                $("#Save_Drivers").show();
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
    $('#divEditarUsuario').hide();
    $("#Save_Drivers").hide();
    $('#divVehicle').hide();
};

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



autocomplete(document.getElementById("myInput"), arrCustomers_1);
autocomplete(document.getElementById("manager"), ArrChoferes);


$(function() {
    $('#hraini').datetimepicker({
        format: 'HH:mm'
    });
    $('#hrafin').datetimepicker({
        format: 'HH:mm'
    });
    $('#hrainii').datetimepicker({
        format: 'HH:mm'
    });
    $('#hrafinn').datetimepicker({
        format: 'HH:mm'
    });
});


var ocultarelementos = 0;
$('#seeAll').click(function() {
    if (ocultarelementos == 0) {
        ocultarelementos = 1;
        $("#icono").removeClass("glyphicon glyphicon-eye-open");
        $("#icono").addClass("glyphicon glyphicon-eye-close");
        llenarObjDrivers("1");
    } else {
        ocultarelementos = 0;
        $("#icono").removeClass("glyphicon glyphicon-eye-close");
        $("#icono").addClass("glyphicon glyphicon-eye-open");
        llenarObjDrivers("");
    }
});


function statusDrivers(pos, id) {
    console.log("dis");

    if (ObjDrivers[pos].Status == "0") {
        UpdateDisabledLocal(pos, id, "CHOFERES", "ID", "Local");
        if (result) {
            UpdateDisabled(pos, ObjDrivers[pos].tag, "ClientesChoferes", "tag", "ControlGas");
        } else {
            //swal.fire("Error,TRY AGAIN!", "error");
        }
        result = "";

    } else {
        UpdateEnabledLocal(pos, id, "CHOFERES", "ID", "Local");
        if (result) {
            UpdateEnabled(pos, ObjDrivers[pos].tag, "ClientesChoferes", "tag", "ControlGas");
        } else {
            //swal.fire("Error,TRY AGAIN!", "error");
        }
        result = "";
    }
}
function UpdateDisabled(pos, id, table, nameid, BDD) {
    swal.fire({
            title: "SURE YOU WANT DISABLED THIS DRIVER?",
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
                    nameStatus: "codest"
                };

                var sURL = IPWS +"WsStatusChangue";
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
                            swal.fire("GOOD JOB!", "DRIVER DISABLED SUCCESSFULLY!", "success");
                            llenarObjDrivers("");
                            UpdateContenedor('Drivers');
                            return "OK";
                        }
                        if (data.Status == "ERROR") {
                            //swal("Error,TRY AGAIN!", "error");
                            llenarObjDrivers("");
                            UpdateContenedor('Drivers');
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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
    swal.fire({
            title: "SURE YOU WANT ENABLED THIS DRIVERS?",
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
                    nameStatus: "codest"
                };

                var sURL = IPWS +"WsStatusChangue";
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
                            swal.fire("GOOD JOB!", "DRIVER ENABLED SUCCESSFULLY!", "success");
                            llenarObjDrivers("");
                            UpdateContenedor('Drivers');
                            return "OK";
                        }
                        if (data.Status == "ERROR") {
                            //swal.fire("Error,TRY AGAIN!", "error");
                            llenarObjDrivers("");
                            UpdateContenedor('Drivers');
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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




var result;

function UpdateDisabledLocal(pos, id, table, nameid, BDD) {
    var para = {
        Id: id,
        Status: -1,
        table: table,
        nameid: nameid,
        BDD: BDD,
        nameStatus: "Status"
    };
    var sURL = IPWS +"WsStatusChangue";
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
        success: function(data) {
            if (data.Status == "OK") {
                result = true;
            }
            if (data.Status == "ERROR") {
                result = false;
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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





function UpdateEnabledLocal(pos, id, table, nameid, BDD) {
    var para = {
        Id: id,
        Status: 0,
        table: table,
        nameid: nameid,
        BDD: BDD,
        nameStatus: "Status"
    };
    var sURL = IPWS +"WsStatusChangue";
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
        success: function(data) {
            if (data.Status == "OK") {
                result = true;
            }
            if (data.Status == "ERROR") {
                result = false;
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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

var Perfiles;

function llenarComboPerfiles() {
    console.log('perfiles');
    try {
        var sURL = IPWS + "GetPerfiles?TipoPerfil=DRIVER&all=undefined";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            headers: {Authorization: 'Bearer '+objUsuario.Token },
            success: function(data) {
                Perfiles = data.lstPerfiles;
                if (Perfiles.length > 0) {
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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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



    } catch (error) {

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
            headers: {Authorization: 'Bearer '+objUsuario.Token },
            success: function(data) {
                Departamentos = data.lstDep;
                if (Departamentos.length > 0) {
                    //Perfiles.sort();
                    var optionsCombo = "";
                    $('#comboDepartamento').empty();
                    optionsCombo +=
                        '<option value="Select Option" selected disabled>Select Option</option>';

                    $(Departamentos).each(function(i) {
                        optionsCombo += '<option data-pos="' + i + '" value="' + Departamentos[i]
                            .ID +
                            '">' +
                            Departamentos[i].Departamento + '</option>';
                    });
                    $('#comboDepartamento').html(optionsCombo);

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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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



    } catch (error) {

    }
}
var CentroCostos;
$('#comboDepartamento').change(function() {
     //comboDepartamento
     llenarCentroCostos();


});
function llenarCentroCostos(){
    try {
        var depa =  parseInt($('#comboDepartamento option:selected').val());
        //http://localhost:85/home/GetPerfiles?TipoPerfil=DRIVER
        var sURL = IPWS + "GetCentroCostos?idDepartamento="+depa;
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            headers: {Authorization: 'Bearer '+objUsuario.Token },
            success: function(data) {
                CentroCostos = data.lstCentroCostos;
                if (CentroCostos.length > 0) {
                    //Perfiles.sort();
                    var optionsCombo = "";
                    $('#comboCentroCostos').empty();
                    optionsCombo +=
                        '<option value="Select Option" selected disabled>Select Option</option>';

                    $(CentroCostos).each(function(i) {
                        optionsCombo += '<option data-pos="' + i + '" value="' + CentroCostos[i]
                            .id +
                            '">' +
                            CentroCostos[i].nameCentro + '</option>';
                    });
                    $('#comboCentroCostos').html(optionsCombo);

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
                            location.href = "<?php echo e(url('/cerrarSesion')); ?>";
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



    } catch (error) {

    }
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
pdfMake.createPdf(documentDefinition).download('DRIVERS_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY')+'".pdf');
}

var datos = [];
var detalle = [];
function getDatosBMW() {
var dentro;

var company = document.getElementById("COMPANY").checked;
var name = document.getElementById("NAME").checked;
var department = document.getElementById("DEPARTMENT").checked;
var cost = document.getElementById("COSTCENTER").checked;
var tele = document.getElementById("TELEPHONE").checked;
var email = document.getElementById("EMAIL").checked;
var manager = document.getElementById("MANAGER").checked;
var manageremail = document.getElementById("MANAGEREMAIL").checked;
var status = document.getElementById("STATUS").checked;

var arrayN = ['COMPANY', 'NAME', 'DEPARTMENT', 'COSTCENTER', 'TELEPHONE', 'EMAIL', 'MANAGER', 'MANAGEREMAIL', 'STATUS'];
var detail = [
    [
        {
            text: 'COMPANY',
            style: 'tableSubtitulo'
        },
        {
            text: 'NAME',
            style: 'tableSubtitulo'
        },
        {
            text: 'DEPARTMENT',
            style: 'tableSubtitulo'
        },
        {
            text: 'COSTCENTER',
            style: 'tableSubtitulo'
        },
        {
            text: 'TELEPHONE',
            style: 'tableSubtitulo'
        },
        {
            text: 'EMAIL',
            style: 'tableSubtitulo'
        },
        {
            text: 'MANAGER',
            style: 'tableSubtitulo'
        },
        {
            text: 'MANAGEREMAIL',
            style: 'tableSubtitulo'
        },
        {
            text: 'STATUS',
            style: 'tableSubtitulo'
        }
    ]
];
for (let index = 0; index < ObjDrivers.length; index++) {
    if (company) {
        datos.push({
            text: quitarCaracteres(ObjDrivers[index].Company),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (name) {
        datos.push({
            text: quitarCaracteres(ObjDrivers[index].Nombre),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (department) {
        datos.push({
            text: ObjDrivers[index].DepartamentoName,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (cost) {
        datos.push({
            text: ObjDrivers[index].CentroCostosName,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (tele) {
        datos.push({
            text: ObjDrivers[index].Telefono,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (email) {
        datos.push({
            text: ObjDrivers[index].Correo,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (manager) {
        datos.push({
            text: quitarCaracteres(ObjDrivers[index].Gerente),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (manageremail) {
        datos.push({
            text: ObjDrivers[index].ManagerEmail,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    
    if (status) {
        var estatus="";
        if (ObjDrivers[index].Status == 0) {
            estatus = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (ObjDrivers[index].Status != 0) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            estatus = "DISABLED";
        }
        datos.push({
            text: estatus,
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
        widths: [70, 70, 50, 50, 40, 100, 100, 90, 60],
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
        text: 'DRIVERS REPORT',
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
var name = document.getElementById("NAME").checked;
var department = document.getElementById("DEPARTMENT").checked;
var cost = document.getElementById("COSTCENTER").checked;
var tele = document.getElementById("TELEPHONE").checked;
var email = document.getElementById("EMAIL").checked;
var manager = document.getElementById("MANAGER").checked;
var manageremail = document.getElementById("MANAGEREMAIL").checked;
var status = document.getElementById("STATUS").checked;

llenarTablaExcel();

if (company) {
    $(".company").show();
} else {
    $(".company").hide();
}
if (name) {
    $(".name").show();
} else {
    $(".name").hide();
}
if (department) {
    $(".department").show();
} else {
    $(".department").hide();
}
if (cost) {
    $(".cost").show();
} else {
    $(".cost").hide();
}
if (tele) {
    $(".tele").show();
} else {
    $(".tele").hide();
}

if (email) {
    $(".email").show();
} else {
    $(".email").hide();
}
if (manager) {
    $(".manager").show();
} else {
    $(".manager").hide();
}
if (manageremail) {
    $(".manageremail").show();
} else {
    $(".manageremail").hide();
}
if (status) {
    $(".status").show();
} else {
    $(".status").hide();
}

descargarExcel();
}
function LimpiarChecks(){
$("#COMPANY").prop("checked", false);
$("#NAME").prop("checked", false);
$("#DEPARTMENT").prop("checked", false);
$("#COSTCENTER").prop("checked", false);
$("#TELEPHONE").prop("checked", false);
$("#EMAIL").prop("checked", false);
$("#MANAGER").prop("checked", false);
$("#MANAGEREMAIL").prop("checked", false);
$("#STATUS").prop("checked", false);
$("#ALL").prop("checked", false);
}

$('#ALL').change(function() {

if ($(this).is(":checked")) {

$("#COMPANY").prop("checked", true);
$("#NAME").prop("checked", true);
$("#DEPARTMENT").prop("checked", true);
$("#COSTCENTER").prop("checked", true);
$("#TELEPHONE").prop("checked", true);
$("#EMAIL").prop("checked", true);
$("#MANAGER").prop("checked", true);
$("#MANAGEREMAIL").prop("checked", true);
$("#STATUS").prop("checked", true);

} else {
$("#COMPANY").prop("checked", false);
$("#NAME").prop("checked", false);
$("#DEPARTMENT").prop("checked", false);
$("#COSTCENTER").prop("checked", false);
$("#TELEPHONE").prop("checked", false);
$("#EMAIL").prop("checked", false);
$("#MANAGER").prop("checked", false);
$("#MANAGEREMAIL").prop("checked", false);
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
    link.download = "DRIVERS_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click();
}
function llenarTablaExcel() {
    document.getElementById('fechaReporteTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD, YYYY');

        document.getElementById('horareporteTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');
var company = document.getElementById("COMPANY").checked;
var name = document.getElementById("NAME").checked;
var department = document.getElementById("DEPARTMENT").checked;
var cost = document.getElementById("COSTCENTER").checked;
var tele = document.getElementById("TELEPHONE").checked;
var email = document.getElementById("EMAIL").checked;
var manager = document.getElementById("MANAGER").checked;
var manageremail = document.getElementById("MANAGEREMAIL").checked;
var status = document.getElementById("STATUS").checked;


    $("#emp_body1").empty();
    var tr;
    for (var i = 0; i < ObjDrivers.length; i++) {
        tr = $('<tr/>');
        if(company){
            tr.append(
            "<td class='company' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            quitarCaracteres(ObjDrivers[i].Company) + "</td> ");
        }else{
            tr.append(
            "<td class='company' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(name){
            tr.append(
            "<td class='name' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            quitarCaracteres(ObjDrivers[i].Nombre) + "</td>");
        }else{
            tr.append(
            "<td class='name' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(department){
            tr.append(
            "<td class='department' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            ObjDrivers[i].DepartamentoName + "</td>");
        }else{
            tr.append(
            "<td class='department' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(cost){
            tr.append(
            "<td class='cost' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            ObjDrivers[i].CentroCostosName + "</td>");
        }else{
            tr.append(
            "<td class='cost' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(tele){
            tr.append(
            "<td class='tele' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            ObjDrivers[i].Telefono + "</td>");
        }else{
            tr.append(
            "<td class='tele' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(email){
            tr.append(
            "<td class='email' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            ObjDrivers[i].Correo + "</td>");
        }else{
            tr.append(
            "<td class='email' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(manager){
            tr.append(
            "<td class='manager' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            quitarCaracteres(ObjDrivers[i].Gerente) + "</td>");
        }else{
            tr.append(
            "<td class='manager' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(manageremail){
            if(ObjDrivers[i].ManagerEmail=='--' || ObjDrivers[i].ManagerEmail=='' || ObjDrivers[i].ManagerEmail===null  || ObjDrivers[i].ManagerEmail=='undefined'){

                ObjDrivers[i].ManagerEmail='--'
            }else{
                
            }
            tr.append("<td class='manageremail' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            ObjDrivers[i].ManagerEmail + "</td>");
        }else{
            tr.append(
            "<td class='manageremail' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }




        if(status){
            if(ObjDrivers[i].Status==0){
            var estatus="ENABLED";
        }else{
            estatus="DISABLED";
        }
            tr.append(
            "<td class='status' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            estatus + "</td>");
        }else{
            tr.append(
            "<td class='status' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        $('#emp_body1').append(tr);
    }
}
</script>
<?php /**PATH C:\xampp\htdocs\TANKFARM\Laravel\resources\views/Drivers.blade.php ENDPATH**/ ?>