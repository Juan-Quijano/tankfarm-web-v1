<style>
   div.dataTables_wrapper div.dataTables_filter input{
  
   
  width: 600px;
  
}
.dataTables_filter {
    margin-inline: auto;
 
  width: 600px;
}


[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled),
button:not(:disabled) {
    cursor: pointer;
}

.btn-primary {
    color: #fff !important;
    background-color: #92A2BD !important;
    border-color: #92A2BD !important;
}

.btn {
    border-radius: 0 !important;
}

.btn-group-lg>.btn,
.btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem;
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
    right: 0%;
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




<div class="x_panel" id="divCatalogoUsuarios">
    <div class="x_title">
        <h2>Users </h2>

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
                                       >ID</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 380px;"
                                      >NAME</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                       >USER NAME</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 108px;"
                                       >ROLE</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 191px;"
                                        >LANGUAGE</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >TELEPHONE</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >EMAIL</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >COMPANY</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                      >DEPARTMENT</th>

                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >MANAGER</th>

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
                                    <button id="seeAll" class="btn btn-warning" type="button"> <span id="icono"
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> SEE ALL
                                        |</button>
                                    <!--You can add col-lg-12 if you want -->
                                    <button type="button" class="btn btn-primary "
                                        onclick="javascript:UpdateContenedor('AddUsuario');"> <span
                                            class="glyphicon glyphicon-plus" id="icon_enabled"
                                            style="color:white;"></span> NEW USER</button>

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
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="ID"
                                value="option1">
                            <label class="form-check-label" for="ID">ID</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="NAME"
                                value="option2">
                            <label class="form-check-label" for="NAME">NAME</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="USER" value="option3">
                            <label class="form-check-label" for="USER">USER</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="ROLE" value="option4">
                            <label class="form-check-label" for="ROLE">ROLE</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="TELEPHONE" value="option5">
                            <label class="form-check-label" for="TELEPHONE">TELEPHONE</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="EMAIL" value="option6">
                            <label class="form-check-label" for="EMAIL">EMAIL</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="COMPANY" value="option6">
                            <label class="form-check-label" for="COMPANY">COMPANY</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="DEPARTMENT" value="option6">
                            <label class="form-check-label" for="DEPARTMENT">DEPARTMENT</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="MANAGER" value="option6">
                            <label class="form-check-label" for="MANAGER">MANAGER</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="STATUS" value="option6">
                            <label class="form-check-label" for="STATUS">STATUS</label>
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



<table id="tablaC" class="table table-striped" cellspacing="0" width="100%"
        style="border: 1px solid black;display:none">
        <thead>
        <tr>
                <th colspan=3 style="text-align: left;background: #233461;"><img
                        src="<?php echo e(url('/')); ?>/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=7
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    USERS REPORT</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=7
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    </th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=7 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTT"></th>
                <th colspan=4
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Boulevard BMW 655 Parque Industrial</th>
            </tr>
            <tr>
                <th colspan=3
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="horareporteTT"></th>
                <th colspan=4
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=4 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=3 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
                <th colspan=7 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            </tr>
            <tr>
                <th class="id"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ID</th>
                <th class="name"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    NAME</th>
                <th class="user"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    USER</th>
                <th class="role"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ROLE </th>
                <th class="telephone"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TELEPHONE</th>
                <th class="email"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    EMAIL</th>
                <th class="company"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY</th>
                <th class="department"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DEPARTMENT</th>
                <th class="manager"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    MANAGER</th>
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
            <th colspan=3 style="text-align: right;background: #233461;color:#fff"><img
            src="<?php echo e(url('/')); ?>/images/logogrisM.png"></th>
        </tr>
        <tr>
            <th colspan=6
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=6
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>




<!--EDITAR usuario-->

<div class="x_panel" id="divEditarUsuario" style="display:none;">
    <div class="x_title">
        <h2>Edit User <small>Please complete all fields</small> </h2>

        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <br>

        <div class="col-md-6">
            <div id="divCombo1" class="form-group">
                <label class="control-label mb-10 text-left">Name Complete * </label>
                <input type="text" class="form-control validar" name="Nombre2" id="Name" placeholder="Name Complete" autocomplete="off"
                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                <input type="text" style="display:none;" class="form-control" name="ID" id="ID">
            </div>
        </div>
        <div class="col-md-6">
            <div id="divLastName" class="form-group">
                <label class="control-label mb-10 text-left">Last Name * </label>
                <input type="text" class="form-control validar" name="LastName" id="LastName" placeholder="Last Name" autocomplete="off"
                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">

            </div>
        </div>

        <div class="col-md-6">
            <div id="divSecondLastName" class="form-group">
                <label class="control-label mb-10 text-left">Second Last Name * </label>
                <input type="text" class="form-control validar" name="SecondLastName" id="SecondLastName" placeholder="Second Last Name" autocomplete="off"
                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">

            </div>
        </div>

        <div class="col-md-6">
            <div id="divCombo2" class="form-group">
                <label class="control-label mb-10 text-left">User Name * </label>
                <input type="text" class="form-control validar" name="UserName" id="UserName"
                    placeholder="User Name/Nick" autocomplete="off">

            </div>
        </div>


        <div class="col-md-6">
            <div id="divCombo3" class="form-group">
                <label class="control-label mb-10 text-left">Password * </label>
                <input type="password" class="form-control validar" name="Password" id="Password"
                    placeholder="Password" autocomplete="off">

            </div>
            <a style="margin:0 15px 0 0;" data-toggle="tooltip" data-placement="bottom" title="* La contraseña debe contener 8 caracteres especiales o mas. 
* Debe de contener al menos 1 letra minuscula.
* La contraseña debe contener  al menos 1 letra mayuscula.
* Tiene que  tener al menos 1 número en su estructura." data-original-title="Ayuda"><img src="<?php echo e(url('/')); ?>/images/info_208px.png" alt="Girl in a jacket" width="30px" height="30px"></a>
<span id="verificarPass" style="color: rgb(220, 53, 69);margin-left: 26%;"></span>        
</div>


        <div class="col-md-6">
            <div id="divCombo31" class="form-group">
                <label class="control-label mb-10 text-left">Confirm Password * </label>
                <input type="password" class="form-control validar" name="ConfirmPassword" id="ConfirmPassword"
                    placeholder="ConfirmPassword" autocomplete="off" onblur="validarPassword();">

            </div>
        </div>

        <div class="col-md-6">
            <label for="middle-name" class="form-group">Password Security Level <span class="required asterisco">*</span></label>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                    aria-valuemin="0" aria-valuemax="100" style="width:0%" id="progess">
                    </div>
                </div>
            <span id="Spanpassword" style="color: rgb(220, 53, 69);"></span>
        </div>


        <div class="form-group row">
            
        </div>

        <div class="col-md-6">
            <div id="divCombo4" class="form-group">
                <label class="control-label mb-10 text-left">Role * </label>
                <select id="Rol" class="form-control validarCombo">
                    <option value="Select Option" selected="selected">Select Option</option>

                </select>

            </div>
        </div>

        <div class="col-md-6">
            <div id="divCombo5" class="form-group">
                <label class="control-label mb-10 text-left">Languague * </label>
                <select id="Languague" class="form-control validarCombo">
                    <option value="Select Option" selected="selected">Select Option</option>
                </select>

            </div>
        </div>
        <div class="col-md-6">
            <div id="divComboManager" class="form-group autocomplete">
                <label class="control-label mb-10 text-left">Manager * </label>
                <input type="text" class="form-control validar" name="Manager" id="Manager" placeholder="Manager"  autocomplete="off">

            </div>
        </div>
        <div class="col-md-6">
            <div id="divCombo8" class="form-group autocomplete">
                <label class="control-label mb-10 text-left">Department * </label>
                <input type="text" class="form-control validar" name="Department" id="Department"  autocomplete="off"
                    placeholder="Department">

            </div>
        </div>
        <div class="col-md-6">
            <div id="divCombo6" class="form-group">
                <label class="control-label mb-10 text-left">Telephone * </label>
                <input type="text" required="required" class="form-control validar" id="Phone"
                    placeholder="(555) 555-5555">

            </div>
        </div>
        <div class="col-md-6">
            <div id="divCombo7" class="form-group">
                <label class="control-label mb-10 text-left">Email * </label>
                <input type="text" class="form-control validar" name="Email" id="Email" placeholder="Email@Email.com" autocomplete="off">

            </div>
        </div>
        <div class="col-md-6">
            <div id="divCombo10" class="form-group autocomplete">
                <label class="control-label mb-10 text-left">Company * </label>
                <input type="text" class="form-control validar" name="Company" id="Company" placeholder="Company"  autocomplete="off">

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
    <div class="form-group row form-group row pull-left">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" onclick="UpdateContenedor('users');">Cancel</button>

            <input type="button" value="Update" class="btn btn-success" id="SaveUserF" onclick="validaciones();">

        </div>
    </div>
</div>

<div id="error" class="alert alert-danger" role="alert" style="display:none;">

</div>





<script>
var objUsers = "";
var ArrCompany = [];
var ArrDep = [];
var ArrManager = [];
var ArrCompany1 = [];
var ArrDep1 = [];
var ArrManager1 = [];
/* DATA TABLES */
var Tabla_Usuarios;
$(document).ready(function() {

    init_DataTables();
    llenarObjUsuarios("");
    FillCustomer();
    FillDepartment();
    //FillUsers();
   
});
function validarPassword(){
    var pass1=$('#Password').val();
    var pass2=$('#ConfirmPassword').val();
    if(pass1=="" || pass2==""){

    }else{
        if(pass1==pass2){
        $("#verificarPass").html("Correct Password");
    }else{
        $("#verificarPass").html("Incorrect Password, please check it");
        $('#ConfirmPassword').val('');
    }
    }

}

var porcentaje = 0;
    $("#Password").keyup(function (e) {
      var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$","g");
      var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$","g");
      var enoughRegex = new RegExp("(?=.{6,}).*", "g");
      if (false == enoughRegex.test($(this).val())) {
        $("#Spanpassword").html("Too Short");
        porcentaje = "0%";
        document.getElementById("progess").style.width = porcentaje;
        $("#progess").css("width", porcentaje + "%");
        $("#progess").attr("aria-valuenow", porcentaje);
        //$("#progess").text('');
      } else if (strongRegex.test($(this).val())) {
        $("#Spanpassword").className = "ok";
        $("#Spanpassword").html("Strong");
        porcentaje = "100%";
        document.getElementById("progess").style.backgroundColor = '#1e7e34';
        $("#progess").css("width", porcentaje + "%");
        $("#progess").attr("aria-valuenow", porcentaje);
        //$("#progess").text('');
        document.getElementById("progess").style.width = porcentaje;
      } else if (mediumRegex.test($(this).val())) {
        $("#Spanpassword").className = "alert";
        $("#Spanpassword").html("Good");
        porcentaje = "90%";
        document.getElementById("progess").style.backgroundColor = '#ffc107';
        $("#progess").css("width", porcentaje + "%");
        $("#progess").attr("aria-valuenow", porcentaje);
        //$("#progess").text('');
        document.getElementById("progess").style.width = porcentaje;
      } else {
        $("#Spanpassword").className = "error";
        $("#Spanpassword").html("Weak");
        porcentaje = "10%";
        document.getElementById("progess").style.backgroundColor = '#dc3545';
        $("#progess").css("width", porcentaje + "%");
        $("#progess").attr("aria-valuenow", porcentaje);
        //$("#progess").text('');
        document.getElementById("progess").style.width = porcentaje;
      }
      return true;
    });
var customer;

function FillCustomer() {
    try {
        var sURL = IPWS +"GetClientes";
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
            ArrCompany.push([customer[i].den, customer[i].cod]);
            ArrCompany1.push(customer[i].den);
        }

    } catch (error) {

    }

}



var departamento;

function FillDepartment() {
    try {
        var sURL = IPWS +"GetDepartamentos";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                departamento = data.lstDep;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });
        for (var i = 0; i < departamento.length; i++) {
            ArrDep.push([departamento[i].Departamento, departamento[i].ID]);
            ArrDep1.push(departamento[i].Departamento);
        }

    } catch (error) {

    }

}

var usuarios;

function FillUsers() {
    try {
        var sURL = IPWS +"GetUsuarios";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                usuarios = data.lstUsuarios;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

            }
        });
        for (var i = 0; i < usuarios.length; i++) {
            ArrManager.push([usuarios[i].Nombre.trim() + " " +usuarios[i].LastName.trim()+ " "+ usuarios[i].SecondLastName.trim(), usuarios[i].ID]);
            ArrManager1.push(usuarios[i].Nombre.trim() + " " +usuarios[i].LastName.trim()+ " "+ usuarios[i].SecondLastName.trim());
        }
    } catch (error) {

    }

}


function init_DataTables() {

    console.log('run_datatables');

    if (typeof($.fn.DataTable) === 'undefined') {
        return;
    }
    console.log('init_DataTables');

    var handleDataTableButtons = function() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();

        today = mm + '/' + dd + '/' + yyyy;
        if ($("#datatable-buttons").length) {
            Tabla_Usuarios = $("#datatable-buttons").DataTable({
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],

                buttons: [{
                        //extend: 'excelHtml5',
                        footer: true,
                        title: 'Users_' + today,
                        filename: 'Users_' + today,
                        exportOptions: {
                            columns: "0,1,2,3,5,6,7,8,9,10",
                            orthogonal: 'export'
                        },
                        //text: '<button class="btn btn-success"> <i class="fa fa-file-excel-o"></i></button>',
                        customize: function(xlsx) {
                            var sheet1 = xlsx.xl['styles.xml'];
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            //All cells
                            $('row c', sheet).attr('s', '25');
                            //Second column
                            $('row c:nth-child(2)', sheet).attr('s', '7');
                            $('row c:nth-child(7)', sheet).attr('s', '7');
                            $('row c:nth-child(8)', sheet).attr('s', '2');
                            $('row c:nth-child(6)', sheet).attr('s', '3');
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



                            $('row c[r^="C"]', sheet).each(function() {
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
                            $(col[1]).attr('width', 35);
                            $(col[2]).attr('width', 20);
                            $(col[3]).attr('width', 15);
                            //$(col[4]).attr('width', 20);
                            $(col[5]).attr('width', 30);
                            $(col[6]).attr('width', 37);
                            $(col[7]).attr('width', 30);
                            $(col[8]).attr('width', 25);
                            $(col[9]).attr('width', 10);
                            $(col[10]).attr('width', 15);

                            var tagName = sheet1.getElementsByTagName('sz');
                            for (i = 0; i < tagName.length; i++) {
                                tagName[i].setAttribute("val", "12")
                            }

                        }
                    },
                    {
                        //extend: 'pdf',
                        footer: true,
                        title: 'Users_' + "" + today,
                        filename: 'Users_' + "" + today,
                        exportOptions: {
                            columns: "0,1,2,3,4,5,6,7,8,9,10",
                        },
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        tableHeader: {
                            alignment: 'center'
                        },
                        //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',

                        customize: function(doc) {
                           
                           age = Tabla_Usuarios.column(10).data().toArray();
                           for (var i = 0; i < age.length; i++) {
                               var text = age[i].substring(35, 43);
                               if (text != "DISABLED") {
                                   doc.content[1].table.body[i + 1][10].fillColor = '#72DB3A';
                               } else {
                                   doc.content[1].table.body[i + 1][10].fillColor = '#FF0000';
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


function limpiarTabla() {

}




function llenarObjUsuarios(all) {
    var para = {
        "all": all,
    };

    limpiarTabla();
    var sURL = IPWS +"GetUsuarios";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        data: para,

        async: false,
        crossDomain: true,

        xhrFields: {
            cors: false
        },
        cache: false,
        //data: para,

        //dataFilter: function (data) { return data; },
        success: function(data) {

            objUsers = data.lstUsuarios;


            llenarTabla();



        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }


    });
    for (var i = 0; i < objUsers.length; i++) {
        ArrManager.push([objUsers[i].Nombre.trim() + " " +objUsers[i].LastName.trim()+ " "+ objUsers[i].SecondLastName.trim(), objUsers[i].ID]);
        ArrManager1.push(objUsers[i].Nombre.trim() + " " +objUsers[i].LastName.trim()+ " "+ objUsers[i].SecondLastName.trim());
    }
}
var nombresCatalogos = [];



function llenarTabla() {
    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    limpiarTabla();

    Tabla_Usuarios.clear().draw();

    var htmlBotonStatus = "";
    var colorStatus = "";


    for (var i = 0; i < objUsers.length; i++) {

        if (objUsers[i].Status == "0") {
            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
            colorStatus = "<label class='label label-success' >ENABLED</label>";



        } else {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            colorStatus = "<label class='label label-danger' >DISABLED</label>";
        }



        if (pos == 0) {
            var htmlIdioma = '';
            if (objUsers[i].IdIdioma == 2) {
                htmlIdioma = '<img src="' + "<?php echo e(url('/')); ?>" +
                    '/images/espanol_chico.png" alt="language" style=" width: 42%;">';
            } else {
                htmlIdioma = '<img src="' + "<?php echo e(url('/')); ?>" +
                    '/images/english_chico.png" alt="language" style=" width: 42%;">';
            }

            Tabla_Usuarios.row.add([
                String(objUsers[i].ID),
                String(objUsers[i].Nombre+" " +objUsers[i].LastName),
                String(objUsers[i].UserName),
                String((objUsers[i].Rol != null) ? objUsers[i].Rol : ""),
                String(htmlIdioma),
                String(objUsers[i].Telefono),
                String(objUsers[i].Correo),
                String(objUsers[i].Compania),
                String(objUsers[i].Departamento),
                String(objUsers[i].Manager +" " +objUsers[i].LastName),
                String(colorStatus),
                String('<button type="button" onclick="MostrarDivEditar(' + i + ',' + objUsers[i].ID +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button" onclick="statusUsers(' + i + ',' + objUsers[i].ID +
                    ')" class="' + htmlBotonStatus + '"> ' + title + '</button>'),


            ]);
        }


    }




    Tabla_Usuarios.column('1:visible').draw()



}

var Languague;

function FillLanguague() {

    var sURL = IPWS +"GetLanguague";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            Languague = data.lstLanguague;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
    for (var i = 0; i < Languague.length; i++) {
        $("#Languague").append('<option value="' + Languague[i].ID +
            '"data-id="' + Languague[i].ID + '" >' + Languague[i].Idioma + '</option>');
    }



}
var Roles;

function FillRol() {

    var sURL = IPWS +"GetRol";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            roles = data.lstRoles;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            //
            //VaciarDatos();
            //swal("Error", "No hay conexion con el servidor", "error");
        }
    });
    for (var i = 0; i < roles.length; i++) {
        $("#Rol").append('<option value="' + roles[i].ID +
            '" data-id="' + roles[i].ID + '">' + roles[i].Rol + '</option>');
    }
}

document.getElementById('Phone').addEventListener('input', function(e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});

function MostrarDivEditar(pos, id) {
    console.log("edit");
    FillRol();
    FillLanguague();
    $('#divEditarUsuario').show();
    $('#divCatalogoUsuarios').hide();
    //llenar la informacion del usuario
    $('#ID').val(objUsers[pos].ID);
    $('#Name').val(objUsers[pos].Nombre);
    $('#LastName').val(objUsers[pos].LastName);
    $('#SecondLastName').val(objUsers[pos].SecondLastName);
    $('#UserName').val(objUsers[pos].UserName);
    $('#Password').val(objUsers[pos].Password);
    $('#Phone').val(objUsers[pos].Telefono);
    //$('#Company').val(objUsers[pos].Compania);
    $('#Email').val(objUsers[pos].Correo);
    $("#Rol option[value='" + objUsers[pos].IdRol + "']").attr("selected", true);
    $("#Languague option[value='" + objUsers[pos].IdIdioma + "']").attr("selected", true);

    document.getElementById("Company").dataset.id = objUsers[pos].codcli;
    $('#Company').val(objUsers[pos].Compania);

    document.getElementById("Department").dataset.id = objUsers[pos].IdDep;
    $('#Department').val(objUsers[pos].Departamento);

    $('#Manager').val(objUsers[pos].Manager);

}

var datosT;

function UpdateUserEnabledDisabled(id, valor) {
    swal({
            title: "Sure you want delete user?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    Id: id
                };

                var sURL = IPWS +"WsDeleteUsuario";
                $.ajax({
                    url: sURL,
                    data: para,
                    dataType: "json",
                    type: "GET",
                    async: false,
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("Good Job!", "USER DELETED SUCCESSFULLY!", "success")

                            llenarObjUsuarios("");
                            UpdateContenedor('users');

                        }
                        if (data.Status == "ERROR") {
                            swal("Error, Try again!", "error");
                            llenarObjUsuarios("");
                            UpdateContenedor('users');
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


function validarAutocomplete(array, value) {
    var result = $.inArray(value, array);
    if (result != -1) {
        return "true";
    } else {
        return "false";
    }
}
function validarcorreo() {
    console.log("Email");
    var email = $("#Email").val();
    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);

    if (caract.test(email) == false) {
        $("#xmail").show();

        return false;
    } else {
        $("#xmail").hide();

        return true;
    }
}
function validaciones() {
    var textIdioma1 = "";
    var Idioma = "English";
    var alertManagerInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The manager is invalid.';
    var alertCompanyInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The company is invalid.';
    var alertDepartmentInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The department is invalid.';
    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
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
            var Company = $("#Company").val();
            var manager = $("#Manager").val();
            var department = $("#Department").val();

            var resultCompany = validarAutocomplete(ArrCompany1, Company);
            var resultManager = validarAutocomplete(ArrManager1, manager);
            var resultDepartment = validarAutocomplete(ArrDep1, department);
            $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
            $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
            if (resultCompany == "true") {
                $("#divCombo10").addClass("has-ok has-success");
                $("#divCombo10").removeClass("has-error has-danger");
                band.push(0);
            } else {
                $("#divCombo10").removeClass("has-ok has-success");
                $("#divCombo10").addClass("has-error has-danger");
                band.push(2);
            }

            if (resultManager == "true") {
                $("#divComboManager").addClass("has-ok has-success");
                $("#divComboManager").removeClass("has-error has-danger");
                band.push(0);
            } else {
                $("#divComboManager").removeClass("has-ok has-success");
                $("#divComboManager").addClass("has-error has-danger");
                band.push(3);
            }

            if (resultDepartment == "true") {
                $("#divCombo8").addClass("has-ok has-success");
                $("#divCombo8").removeClass("has-error has-danger");
                band.push(0);
            } else {
                $("#divCombo8").removeClass("has-ok has-success");
                $("#divCombo8").addClass("has-error has-danger");
                band.push(4);
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
    var band2 = 0;

    var result = $.inArray(1, band);
    var result2 = $.inArray(2, band);
    var result3 = $.inArray(3, band);
    var result4 = $.inArray(4, band);

    if (result != -1) {
        band2 = 1;

    } else if (result2 != -1) {

        band2 = 2;
    } else if (result3 != -1) {

        band2 = 3;
    } else if (result4 != -1) {

        band2 = 4;
    }

    if (band2 == 0) {
        //ok
        $('#divMensajeError').hide();
        var valcorreo = validarcorreo();
        if (valcorreo == true) {
            if($("#Spanpassword").text()!="Strong"){
                $("#verificarPass").html("The password security level is not allowed");
            }else{
                SetuSERCatalog();
            }
            
        }

    } else if (band2 == 1) {

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
        return false;
    } else if (band2 == 2) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(alertCompanyInvalid);
        return false;
    } else if (band2 == 3) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(alertManagerInvalid);
        return false;
    } else if (band2 == 4) {
        $('#divMensajeError').hide();
        $('#divMensajeError').show();
        $('#mensajeError').html(alertDepartmentInvalid);
        return false;
    }



}

function SetuSERCatalog() {
    var Name = $('#Name').val();
    var LastName = $('#LastName').val();
    var SecondLastName = $('#SecondLastName').val();
    var Name = $('#Name').val();
    var Password = $('#Password').val();
    var UserName = $('#UserName').val();
    var Rol = $('#Rol option:selected').val();
    var Idioma = $('#Languague option:selected').val();
    var Telefono = $('#Phone').val();
    var Correo = $('#Email').val();
    //var Compania = $('#Company').val();
    var Compania = document.getElementById("Company").dataset.id;
    var Department = document.getElementById("Department").dataset.id;
    var Manager = $('#Manager').val();

    swal({
            title: "Are you sure?",
            text: "THIS USER WILL BE UPDATED!",
            icon: "warning",
            buttons: true,

        })


        .then((willDelete) => {
            if (willDelete) {

                var para = {
                    "ID": $('#ID').val(),
                    "Nombre": $('#Name').val().trim(),
                    "LastName": $('#LastName').val().trim(),
                    "SecondLastName": $('#SecondLastName').val().trim(),
                    "UserName": $('#UserName').val(),
                    "Password": $('#Password').val(),
                    "IdRol": parseInt($('#Rol option:selected').val()),
                    "IdIdioma": parseInt($('#Languague option:selected').val()),
                    "Telefono": $('#Phone').val(),
                    "Correo": $('#Email').val(),
                    "Status": "0",
                    "Compania": Compania,
                    "Departamento": Department,
                    "Manager": Manager,


                };


                var sURL = IPWS +"WsUpdateUsuario";
                $.ajax({
                    url: sURL,
                    data: para,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {

                        if (data.Status == "OK") {
                            swal("OK!", "USER UPDATED SUCCESSFULLY", "success");
                            UpdateContenedor('users');
                        } else {
                            swal("Error", "Update error", "error");
                        }

                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {

                        swal("Error", "No se pudo: " + errorThrown, "error");
                    }
                });

            } else {
                swal("without changes!");
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

autocomplete(document.getElementById("Company"), ArrCompany);
autocomplete(document.getElementById("Manager"), ArrManager);
autocomplete(document.getElementById("Department"), ArrDep);


var ocultarelementos = 0;
$('#seeAll').click(function() {
    console.log("Haber");
    if (ocultarelementos == 0) {
        ocultarelementos = 1;
        $("#icono").removeClass("glyphicon glyphicon-eye-open");
        $("#icono").addClass("glyphicon glyphicon-eye-close");
        llenarObjUsuarios("7");
    } else {
        ocultarelementos = 0;
        $("#icono").removeClass("glyphicon glyphicon-eye-close");
        $("#icono").addClass("glyphicon glyphicon-eye-open");
        llenarObjUsuarios("");
    }
});


function statusUsers(pos, id) {


    if (objUsers[pos].Status == "0") {

        UpdateDisabled(pos, objUsers[pos].ID, "USUARIOS", "ID", "Local");

    } else {

        UpdateEnabled(pos, objUsers[pos].ID, "USUARIOS", "ID", "Local");
    }
}

function UpdateDisabled(pos, id, table, nameid, BDD) {
    swal({
            title: "SURE YOU WANT DISABLED THIS USER?",
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
                    nameStatus: "Status"
                };

                var sURL = IPWS +"WsStatusChangue";
                $.ajax({
                    url: sURL,
                    data: para,
                    dataType: "json",
                    type: "GET",
                    async: false,
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("GOOD JOB!", "USER DISABLED SUCCESSFULLY!", "success")

                            llenarObjUsuarios("");
                            UpdateContenedor('users');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");

                            llenarObjUsuarios("");
                            UpdateContenedor('users');
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
            title: "SURE YOU WANT ENABLED THIS USER?",
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
                    nameStatus: "Status"
                };

                var sURL = IPWS +"WsStatusChangue";
                $.ajax({
                    url: sURL,
                    data: para,
                    dataType: "json",
                    type: "GET",
                    async: false,
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("GOOD JOB!", "USER ENABLED SUCCESSFULLY!", "success")

                            llenarObjUsuarios("");
                            UpdateContenedor('users');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");

                            llenarObjUsuarios("");
                            UpdateContenedor('users');
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
pdfMake.createPdf(documentDefinition).download('USERS_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY')+'".pdf');
}

var datos = [];
var detalle = [];
function getDatosBMW() {
var dentro;

var id = document.getElementById("ID").checked;
var name = document.getElementById("NAME").checked;
var user = document.getElementById("USER").checked;
var role = document.getElementById("ROLE").checked;
var telephone = document.getElementById("TELEPHONE").checked;
var email = document.getElementById("EMAIL").checked;
var company = document.getElementById("COMPANY").checked;
var department = document.getElementById("DEPARTMENT").checked;
var manager = document.getElementById("MANAGER").checked;
var status = document.getElementById("STATUS").checked;

var arrayN = ['ID', 'NAME', 'USER', 'ROLE', 'TELEPHONE', 'EMAIL', 'COMPANY', 'DEPARTMENT', 'MANAGER', 'STATUS'];
var detail = [
    [
        {
            text: 'ID',
            style: 'tableSubtitulo'
        },
        {
            text: 'NAME',
            style: 'tableSubtitulo'
        },
        {
            text: 'USER',
            style: 'tableSubtitulo'
        },
        {
            text: 'ROLE',
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
            text: 'COMPANY',
            style: 'tableSubtitulo'
        },
        {
            text: 'DEPARTMENT',
            style: 'tableSubtitulo'
        },
        {
            text: 'MANAGER',
            style: 'tableSubtitulo'
        },
        {
            text: 'STATUS',
            style: 'tableSubtitulo'
        }
    ]
];
for (let index = 0; index < objUsers.length; index++) {
    if (id) {
        datos.push({
            text: objUsers[index].ID,
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
            text: objUsers[index].Nombre + " " + objUsers[index].LastName,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (user) {
        datos.push({
            text: objUsers[index].UserName,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (role) {
        datos.push({
            text: objUsers[index].Rol,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (telephone) {
        datos.push({
            text: objUsers[index].Telefono,
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
            text: objUsers[index].Correo,
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
            text: objUsers[index].Compania,
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
            text: objUsers[index].Departamento,
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
            text: objUsers[index].Manager + " " + objUsers[index].SecondLastName,
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
        if (objUsers[index].Status == 0) {
            estatus = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objUsers[index].Status != 0) {
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
        widths: [20, 100, 60, 60, 70, 80, 70, 40, 82, 40],
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
        text: 'USERS REPORT',
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

var id = document.getElementById("ID").checked;
var name = document.getElementById("NAME").checked;
var user = document.getElementById("USER").checked;
var role = document.getElementById("ROLE").checked;
var telephone = document.getElementById("TELEPHONE").checked;
var email = document.getElementById("EMAIL").checked;
var company = document.getElementById("COMPANY").checked;
var department = document.getElementById("DEPARTMENT").checked;
var manager = document.getElementById("MANAGER").checked;
var status = document.getElementById("STATUS").checked;

llenarTablaExcel();

if (id) {
    $(".id").show();
} else {
    $(".id").hide();
}
if (name) {
    $(".name").show();
} else {
    $(".name").hide();
}
if (user) {
    $(".user").show();
} else {
    $(".user").hide();
}
if (role) {
    $(".role").show();
} else {
    $(".role").hide();
}
if (telephone) {
    $(".telephone").show();
} else {
    $(".telephone").hide();
}

if (email) {
    $(".email").show();
} else {
    $(".email").hide();
}
if (company) {
    $(".company").show();
} else {
    $(".company").hide();
}
if (department) {
    $(".department").show();
} else {
    $(".department").hide();
}
if (manager) {
    $(".manager").show();
} else {
    $(".manager").hide();
}


if (status) {
    $(".status").show();
} else {
    $(".status").hide();
}

descargarExcel();
}
function LimpiarChecks(){
$("#ID").prop("checked", false);
$("#NAME").prop("checked", false);
$("#USER").prop("checked", false);
$("#ROLE").prop("checked", false);
$("#TELEPHONE").prop("checked", false);
$("#EMAIL").prop("checked", false);
$("#COMPANY").prop("checked", false);
$("#DEPARTMENT").prop("checked", false);
$("#MANAGER").prop("checked", false);
$("#STATUS").prop("checked", false);
$("#ALL").prop("checked", false);
}
$('#ALL').change(function() {

if ($(this).is(":checked")) {

$("#ID").prop("checked", true);
$("#NAME").prop("checked", true);
$("#USER").prop("checked", true);
$("#ROLE").prop("checked", true);
$("#TELEPHONE").prop("checked", true);
$("#EMAIL").prop("checked", true);
$("#COMPANY").prop("checked", true);
$("#DEPARTMENT").prop("checked", true);
$("#MANAGER").prop("checked", true);
$("#STATUS").prop("checked", true);

} else {
$("#ID").prop("checked", false);
$("#NAME").prop("checked", false);
$("#USER").prop("checked", false);
$("#ROLE").prop("checked", false);
$("#TELEPHONE").prop("checked", false);
$("#EMAIL").prop("checked", false);
$("#COMPANY").prop("checked", false);
$("#DEPARTMENT").prop("checked", false);
$("#MANAGER").prop("checked", false);
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
    link.download = "USERS_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click();
}
function llenarTablaExcel() {
    document.getElementById('fechaReporteTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD, YYYY');

        document.getElementById('horareporteTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');
var id = document.getElementById("ID").checked;
var name = document.getElementById("NAME").checked;
var user = document.getElementById("USER").checked;
var role = document.getElementById("ROLE").checked;
var telephone = document.getElementById("TELEPHONE").checked;
var email = document.getElementById("EMAIL").checked;
var company = document.getElementById("COMPANY").checked;
var department = document.getElementById("DEPARTMENT").checked;
var manager = document.getElementById("MANAGER").checked;
var status = document.getElementById("STATUS").checked;


    $("#emp_body1").empty();
    var tr;
    for (var i = 0; i < objUsers.length; i++) {
        tr = $('<tr/>');
        if(id){
            tr.append(
            "<td class='id' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            objUsers[i].ID + "</td> ");
        }else{
            tr.append(
            "<td class='id' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(name){
            tr.append(
            "<td class='name' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objUsers[i].Nombre +" "+ objUsers[i].LastName + "</td>");
        }else{
            tr.append(
            "<td class='name' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(user){
            tr.append(
            "<td class='user' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objUsers[i].UserName + "</td>");
        }else{
            tr.append(
            "<td class='user' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(role){
            tr.append(
            "<td class='role' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objUsers[i].Rol + "</td>");
        }else{
            tr.append(
            "<td class='role' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(telephone){
            tr.append(
            "<td class='telephone' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objUsers[i].Telefono + "</td>");
        }else{
            tr.append(
            "<td class='telephone' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(email){
            tr.append(
            "<td class='email' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objUsers[i].Correo + "</td>");
        }else{
            tr.append(
            "<td class='email' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(company){
            tr.append(
            "<td class='company' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objUsers[i].Compania + "</td>");
        }else{
            tr.append(
            "<td class='company' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(department){
            tr.append(
            "<td class='department' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objUsers[i].Departamento + "</td>");
        }else{
            tr.append(
            "<td class='department' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(manager){
            tr.append(
            "<td class='manager' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objUsers[i].Manager + " " + objUsers[i].SecondLastName + "</td>");
        }else{
            tr.append(
            "<td class='manager' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(status){
            if(objUsers[i].Status==0){
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
<?php /**PATH C:\xampp\htdocs\Laravel\resources\views/users.blade.php ENDPATH**/ ?>