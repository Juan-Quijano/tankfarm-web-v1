
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

input:disabled {
    color: #202020;
    background: white;
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

#NewVehicle {


    width: 80px;
    height: 40px;
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






.formulario {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

.formulario__label {
    display: block;
    font-weight: 700;
    padding: 10px;
    cursor: pointer;
}



.formulario__validacion-estado {
    position: absolute;
    right: 25px;
    top: 10px;
    z-index: 100;
    font-size: 16px;
    opacity: 0;
}

.formulario__checkbox {
    margin-right: 10px;
}

.formulario__mensaje {
    height: 45px;
    line-height: 45px;
    background: #F66060;
    padding: 0 15px;
    border-radius: 3px;
    display: none;
}

.formulario__mensaje-activo {
    display: block;
}

.formulario__mensaje p {
    margin: 0;
}

.formulario__mensaje-exito {
    font-size: 14px;
    color: #119200;
    display: none;
}

.formulario__mensaje-exito-activo {
    display: block;
}

@media  screen and (max-width: 800px) {
    .formulario {
        grid-template-columns: 1fr;
    }


    .formulario__mensaje,


    .formulario__btn {
        width: 100%;
    }
}

.formulario__mensaje-exito {
    font-size: 14px;
    color: #119200;
    display: none;
}

.formulario__mensaje-exito-activo {
    display: block;
}

/* ----- -----  Estilos para Validacion ----- ----- */
.formulario__grupo-correcto .formulario__validacion-estado {
    color: #1ed12d;
    opacity: 1;
}

.formulario__grupo-incorrecto .formulario__label {
    color: #bb2929;
}

.formulario__grupo-incorrecto .formulario__validacion-estado {
    color: #bb2929;
    opacity: 1;
}

.formulario__grupo-incorrecto .formulario__input {
    border: 1px solid #bb2929;
}


/* ----- -----  Mediaqueries ----- ----- */
@media  screen and (max-width: 800px) {
    .formulario {
        grid-template-columns: 1fr;
    }

    .formulario__grupo-terminos,
    .formulario__mensaje,
    .formulario__grupo-btn-enviar {
        grid-column: 1;
    }

    .formulario__btn {
        width: 100%;
    }
}

.container-fluid {
    width: 100%;
    padding-right: 45px;
    padding-left: 0px;
    margin-right: auto;
    margin-left: auto;
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
</style>


<div class="x_panel" id="divCatalogoUsuarios">
    <div class="x_title">
        <h2>Company </h2>
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
                                       >COMPANY</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >RFC</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >TELEPHONE</th>
                                    <th class="" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                       >EMAIL</th>
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
                                    <button type="button" class="btn btn-primary "
                                        onclick="javascript:UpdateContenedor('AddCustomer');"> <span class=""
                                            id="icon_enabled" style="color:white;"></span><i
                                            class="glyphicon glyphicon-plus"></i> NEW COMPANY</button>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
 <div class="container">
    <div class="modal fade" id="modalColumnasTF" role="dialog">
        <div class="modal-dialog modal-lg">
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
                            <input class="form-check-input inputPerfiles" type="checkbox" id="COMPANY"
                                value="option2">
                            <label class="form-check-label" for="COMPANY">COMPANY</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="RFC" value="option3">
                            <label class="form-check-label" for="RFC">RFC</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="TELEPHONE" value="option4">
                            <label class="form-check-label" for="TELEPHONE">TELEPHONE</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="EMAIL" value="option5">
                            <label class="form-check-label" for="EMAIL">EMAIL</label>
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
                <th colspan=2 style="text-align: left;background: #233461;"><img
                        src="<?php echo e(url('/')); ?>/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=4
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY REPORT</th>
            </tr>
           
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=4 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=2
                    style="text-align: left;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;"
                    id="fechaReporteTT"></th>
                <th colspan=1
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
                <th colspan=1
                    style="text-align: right;background: #233461; color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    C.P. 79526, Villa de Reyes, San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=2 style="text-align: left;background: #233461;"></th>
                <th colspan=1 style="text-align: left;background: #233461;"></th>
                <th colspan=3
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=2 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
                <th colspan=4 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            </tr>

            <tr>
                <th class="id"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ID</th>
                <th class="company"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY</th>
                <th class="rfc"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    RFC</th>
                <th class="telephone"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    TELEPHONE</th>
                <th class="email"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    EMAIL</th>
                <th class="status"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    STATUS</th>
            </tr>
        </thead>
        <tbody id="emp_body1">
        </tbody>
        <tr>
            <th colspan=2
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
            <th colspan=3 style="text-align: right;background: #233461;color:#fff"><img
            src="<?php echo e(url('/')); ?>/images/logogrisM.png"></th>
        </tr>
        <tr>
            <th colspan=2
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=2
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
    </table>


<div class="clearfix"></div>

<div class="row" id="divEditarUsuario">

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Company </h2>

                <div class="clearfix"></div>
            </div>
            <div class="col-sm-9">
                <div class="x_content">


                    <div id="wizard_verticle" class="form_wizard wizard_horizontal">
                        <ul class="list-unstyled wizard_steps">
                            <li>
                                <a href="#step-11">
                                    <span class="step_no">1</span>
                                    <span class="step_descr">Identification</span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-22">
                                    <span class="step_no">2</span>
                                    <span class="step_descr">Location</span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-33">
                                    <span class="step_no">3</span>
                                    <span class="step_descr">Comunication</span>
                                </a>
                            </li>

                        </ul>

                        <div id="step-11">
                            <h2 class="StepTitle">Step 1</h2>
                            <form class="form-horizontal form-label-left" id="formulario">
                                <h2 class="section">Identification</h2>
                                <div class="form-group row  " id="grupo__BusinessName">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Company
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-auto col-md-6" id="divCombo2">
                                        <input type="text" id="BusinessName" name="BusinessName" required="required"
                                            class="form-control formulario__input validar" autocomplete="off"
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                        <i class="formulario__validacion-estado fas fa-times-circle"></i>

                                        <input type="text" id="ID" style="display: none;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="RFC">RFC
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 " id="grupo__RFC">
                                        <input type="text" id="RFCxx" name="RFC" required="required"
                                            class="form-control formulario__input validar" autocomplete="off"
                                            maxlength="16"
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-22">
                            <h2 class="StepTitle">Step 2</h2>
                            <h2 class="section">Location</h2>
                            <form class="form-horizontal form-label-center" id="formulario">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="Adress">Address
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3" id="grupo__Adress">
                                        <input type="text" id="Adress" name="Adress" required="required"
                                            class="form-control formulario__input validar" autocomplete="off">
                                    </div>
                                    <div class="col-md-3" id="NumInterior">
                                        <div class="input-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Num ext
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control validar" id="NumExt" name="NumExt"
                                                placeholder="" autocomplete="off">

                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Num
                                                int</label>
                                            <input type="text" class="form-control" id="NumInt" placeholder=""
                                                name="NumInt" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group" id="divCP">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Zip
                                        Code
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 input-group " id="grupo__State">
                                        <input type="text" id="CP" class="form-control validar" required="required"
                                            autocomplete="off">
                                        <span class="input-group-btn">
                                            <button type="button" id="newrol" style="color:white" class="btn"
                                                onclick="GetDatosCP();">Search</button>
                                        </span>
                                    </div>
                                    <div class="col-md-3" id="divestados">
                                        <div class="input-group" id="divestados2">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="">State
                                            </label>
                                            <input type="text" class="form-control validar" id="estados" disabled
                                                name="" placeholder="" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="City">City
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3" id="grupo__City">
                                        <input type="text" id="municipios" class="form-control validar" disabled
                                            required="required" autocomplete="off">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-group" id="divColonia">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Region
                                                <span class="required">*</span>
                                            </label>
                                            <select id="Suburb" class="form-control validarCombo">
                                                <option value="Select Option" required="required" selected="selected">
                                                    Select
                                                    Option
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-33">
                            <h2 class="StepTitle">Step 3</h2>
                            <h2 class="section">Comunication</h2>
                            <form class="form-horizontal form-label-center" id="formulario">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="Telephone">Telephone
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3" id="divTel">
                                        <input type="text" id="Telephone" name="Telephone" placeholder="(555) 555-5555"
                                            required="required" class="form-control validar" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="Email">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3" id="divemail">
                                        <input type="text" id="Email" name="Email" required="required"
                                            class="form-control validar" autocomplete="off">
                                        <div id="xmail" class="" style="display: none;">
                                            <h6 class="text-danger">
                                                Invalid email</h6>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario
                            correctamente. </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <h2>Summary</h2>
                <div id="borderResumen">
                    <form>
                        <div class="form-group text-left sepborder">
                            <h5 class="card-title" style="margin-top: 10px;">Company</h5>
                            <p class="" id="SumaryCompany">------------------</p>
                            <h5 class="card-title">Address</h5>
                            <label class="" id="SumaryAddress">------</label><br>
                            <label class="" id="SumaryAddress2">------</label><br>
                            <label class="" id="SumaryAddress3">------</label>
                            <h5 class="card-title">Telephone</h5>
                            <label id="SumaryTelephone">-----------</label>
                            <h5 class="card-title">Email</h5>
                            <label id="SumaryEmail">-----------</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12" id="divMensajeError" style="display:none">
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <i class="zmdi zmdi-block pr-15 pull-left"></i>
        <p class="pull-left" id="mensajeError">Error:.</p>
        <div class="clearfix"></div>
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
Tabla_Customers = "";

document.getElementById('Telephone').addEventListener('input', function(e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});

function HacerResumen() {
    //SumaryCompany SumaryModel SumaryBarCode SumaryResponsible
    $('#SumaryCompany').html(($('#BusinessName').val() != "") ? $('#BusinessName').val() : "----");
    var direccion = ($('#Adress').val() != "") ? $('#Adress').val() : "";
    direccion += ($('#NumExt').val() != "") ? "#" + $('#NumExt').val() : "";
    direccion += ($('#CP').val() != "") ? ", " + $('#CP').val() : "";
    var direccion2 = ($('#municipios').val() != "") ? "" + $('#municipios').val() : "";
    var direccion3 = ($('#estados').val() != "") ? " " + $('#estados').val() : "";
    $('#SumaryAddress').html(direccion);
    $('#SumaryAddress2').html(direccion2);
    $('#SumaryAddress3').html(direccion3);
    $('#SumaryEmail').html(($('#Email').val() != "") ? $('#Email').val() : "----");
    $('#SumaryTelephone').html(($('#Telephone').val() != "") ? $('#Telephone').val() : "----");
}
$(document).ready(function() {
    init_DataTables();
    llenarObjCustomers("");
    $("#Name").prop('disabled', true);
    $("#LastName").prop('disabled', true);
    // Fillestados();
    //Fillmunicipios();
});

var DatosCP;
var arrColonias = [];
var colonias = "";
var click = 0;
function GetDatosCP() {
    var cp = $('#CP').val();
    var sURL = IPWS +"WsGetDatosCP?cp=" + cp + "";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        success: function(data) {
            DatosCP = data.lstcp;
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
    if (DatosCP.length != 0) {
        console.log("suburb");
        arrColonias = [];
        colonias = "";
        $('#Suburb').empty();
        $('#estados').val(DatosCP[0].estado);
        $('#municipios').val(DatosCP[0].municipio);
        //$('#Suburb').val(DatosCP[0].colonia);
        arrColonias = DatosCP[0].colonia.split(';');
        arrColonias.sort();
        $(arrColonias).each(function(i) {
            colonias += '<option value="' + arrColonias[i] + '">' + arrColonias[i] + '</option>';
        });
        $('#Suburb').html(colonias);
    } else {
        swal.fire("Error", "This zip code does not exist", "error");
    }
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
    var company = document.getElementById("COMPANY").checked;
    var rfc = document.getElementById("RFC").checked;
    var telephone = document.getElementById("TELEPHONE").checked;
    var email = document.getElementById("EMAIL").checked;
    var status = document.getElementById("STATUS").checked;

llenarTablaExcel();

if (id) {
    $(".id").show();
} else {
    $(".id").hide();
}
if (company) {
    $(".company").show();
} else {
    $(".company").hide();
}
if (rfc) {
    $(".rfc").show();
} else {
    $(".rfc").hide();
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
if (status) {
    $(".status").show();
} else {
    $(".status").hide();
}

descargarExcel();
}
function LimpiarChecks(){
$("#ID").prop("checked", false);

$("#COMPANY").prop("checked", false);

$("#RFC").prop("checked", false);

$("#TELEPHONE").prop("checked", false);

$("#EMAIL").prop("checked", false);

$("#STATUS").prop("checked", false);

$("#ALL").prop("checked", false);

}
$('#ALL').change(function() {

if ($(this).is(":checked")) {

    $("#ID").prop("checked", true);

    $("#COMPANY").prop("checked", true);

    $("#RFC").prop("checked", true);

    $("#TELEPHONE").prop("checked", true);

    $("#EMAIL").prop("checked", true);

    $("#STATUS").prop("checked", true);

} else {
    $("#ID").prop("checked", false);

    $("#COMPANY").prop("checked", false);

    $("#RFC").prop("checked", false);

    $("#TELEPHONE").prop("checked", false);

    $("#EMAIL").prop("checked", false);

    $("#STATUS").prop("checked", false);
}

});
var sestados = '<option value="Select Option">Select Option</option>';
var smunicipios = '<option value="" disabled>Municipalities</option>';
var mensajeError="";
function llenarObjCustomers(all) {
    var para = {
    "All": all,
    };
    limpiarTabla();
    var sURL = IPWS +"GetClientes";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        data: para,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        async: true,
        crossDomain: true,
        xhrFields: {
            cors: false
        },
        cache: false,
        success: function(data) {
            objCustomer = data.lstClients;
            llenarTabla();
            llenarTablaExcel();
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
    var fecha=moment(new Date()).subtract(5, 'hours').format('MMMM,DD,YYYY');
    link.download = "COMPANY_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click();
}
function limpiarTabla() {

}

var ArrayEstados;

function Fillestados() {

    var sURL = IPWS +"WsGetestados";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        success: function(data) {
            ArrayEstados = data.lstestados;
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
    $(ArrayEstados).each(function(i) {
        sestados += '<option value="' + this.id + '">' + this.nombre + '</option>';
    });
    $('#estados').html(sestados);
}


var ArrayMunicipios;

function Fillmunicipios() {

    var sURL = IPWS +"WsGetmunicipios";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        success: function(data) {
            ArrayMunicipios = data.lstmunicipios;
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

function llenarTabla() {
    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var StatusCutomer = "";
    limpiarTabla();

    Tabla_Customers.clear().draw();
    var htmlBotonStatus = "";


    for (var i = 0; i < objCustomer.length; i++) {

        if (objCustomer[i].codest == "0" || objCustomer[i].codest == 0) {
            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
            colorStatus = "<label class='label label-success' >ENABLED</label>";


        } else {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            colorStatus = "<label class='label label-danger' >DISABLED</label>";


        }

        /*if (objCustomer[i].codest == 0) {
            StatusCutomer = "<label class='label label-success' >Enabled</label>";
        } else {

            StatusCutomer = "<label class='label label-danger' >Disabled</label>";
        }*/
        if (pos == 0) {
            Tabla_Customers.row.add([
                String(quitarCaracteres(objCustomer[i].cod)),
                String(quitarCaracteres(objCustomer[i].den)),
                /*String(objCustomer[i].dom),
                String(objCustomer[i].col),
                String(objCustomer[i].del),
                String(objCustomer[i].ciu),
                String(objCustomer[i].est),*/
                String(quitarCaracteres(objCustomer[i].rfc)),
                String((objCustomer[i].tel != "") ? objCustomer[i].tel : "###-###-####"),
                String((objCustomer[i].correo != "") ? objCustomer[i].correo : "-----"),
                //String(objCustomer[i].fax),
                //String(objCustomer[i].cto),
                String(colorStatus),

                String('<button type="button" onclick="MostrarDivEditar(' + i + ',' + objCustomer[i].cod +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button"  onclick="statusCompany(' + i + ',' + objCustomer[i].cod +
                    ')" class="' + htmlBotonStatus + '"> ' + title + '</button>'),






            ]);
        }


    }










    Tabla_Customers.column('1:visible').draw()



}

function addVehicle() {
    $('#divEditarUsuario').hide();
    $('#divVehicle').show();

    $('#divCatalogoUsuarios').hide();

}

function MostrarDivEditar(pos, id) {
    console.log("cod");
    $('#divEditarUsuario').show();

    $('#divCatalogoUsuarios').hide();
    //llenar la informacion del usuario
    $('#ID').val(objCustomer[pos].cod);
    

    $('#BusinessName').val(objCustomer[pos].den);
    $('#RFCxx').val(objCustomer[pos].rfc);
    $('#Adress').val(objCustomer[pos].dom);
    $('#NumExt').val(objCustomer[pos].domnroext);
    $('#NumInt').val(objCustomer[pos].domnroint);
    //$('#Suburb').val(objCustomer[pos].col);
    $("#Suburb option[value='" + objCustomer[pos].col + "']").attr("selected", true);
    $('#Delegation').val(objCustomer[pos].del);
    $('#City').val(objCustomer[pos].ciu);

    $('#State').val(objCustomer[pos].est);
    $('#Country').val(objCustomer[pos].pai);
    $('#Telephone').val(objCustomer[pos].tel);
    $('#Fax').val(objCustomer[pos].fax);
    $('#Email').val(objCustomer[pos].correo);
    $('#Contact').val(objCustomer[pos].cto);
    $("#CFDI option[value='" + objCustomer[pos].satuso + "']").attr("selected", true);
    $('#estados').val(objCustomer[pos].est);
    // SelectMunicipios();
    $('#municipios').val(objCustomer[pos].ciu);
    $('#CP').val(objCustomer[pos].codpos);

    GetDatosCP();
    $("#Suburb option[value='" + objCustomer[pos].col + "']").attr("selected", true);
    HacerResumen();
}

function SelectMunicipios() {
    $('#municipios').empty();
    $('#municipios').prop('disabled', false);

    var estado = $('#estados').val();
    var pmunicipios = $.grep(ArrayMunicipios, function(n, i) {
        return (n.estado_id == estado);
    }); //filtramos por estado

    $(pmunicipios).each(function(i) {
        smunicipios += '<option value="' + this.id + '" data-id="' + this.id + '">' + this.nombre +
            '</option>';
    });
    $('#municipios').html(smunicipios);


}
$('#estados').change(function() {
    smunicipios = "";
    smunicipios = '<option value="" disabled>Municipalities</option>';
    $('#municipios').empty();

    $('#municipios').prop('disabled', false);

    var estado = $('#estados').val();
    var pmunicipios = $.grep(ArrayMunicipios, function(n, i) {
        return (n.estado_id == estado);
    }); //filtramos por estado

    $(pmunicipios).each(function(i) {
        smunicipios += '<option value="' + this.id + '" data-id="' + this.id + '">' + this.nombre +
            '</option>';
    });
    $('#municipios').html(smunicipios);
});

function UpdateCustomerDisabled(cod, valor) {
    swal.fire({
            title: "Sure you want disabled this customer?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    cod: cod
                };

                var sURL = IPWS +"WsDisabledCustomer";
                $.ajax({
                    url: sURL,
                    data: para,
                    dataType: "json",
                    type: "GET",
                    async: false,
                    crossDomain: true,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal.fire("Good Job!", "COMPANY DISABLED SUCCESSFULY!", "success")

                            llenarObjCustomers("");
                            UpdateContenedor('Customers');

                        }
                        if (data.Status == "ERROR") {
                            swal.fire("Error, TRY AGAIN!", "error");
                            llenarObjCustomers("");
                            UpdateContenedor('Customers');
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
                        //swal("Error", "No se pudo: " + errorThrown, "error");
                    }
                });
                //swal("OK!", "Registro guardado correctamente.", "success");





            } else {
                swal.fire("Without changes!");
            }
        });

}

function quitarCaracteres(cadena) {
    var dato= cadena.replace(/[^a-zA-Z 0-9.]+/g, ' ');
    return dato;
}

function llenarTablaExcel() {
    document.getElementById('fechaReporteTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD, YYYY');

        document.getElementById('horareporteTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');
    var id = document.getElementById("ID").checked;
    var company = document.getElementById("COMPANY").checked;
    var rfc = document.getElementById("RFC").checked;
    var telephone = document.getElementById("TELEPHONE").checked;
    var email = document.getElementById("EMAIL").checked;
    var status = document.getElementById("STATUS").checked;


    $("#emp_body1").empty();
    var tr;
    for (var i = 0; i < objCustomer.length; i++) {
        tr = $('<tr/>');
        if(id){
            tr.append(
            "<td class='id' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            quitarCaracteres(objCustomer[i].cod) + "</td> ");
        }else{
            tr.append(
            "<td class='id' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(company){
            tr.append(
            "<td class='company' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            quitarCaracteres(objCustomer[i].den) + "</td>");
        }else{
            tr.append(
            "<td class='company' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(rfc){
            tr.append(
            "<td class='rfc' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            quitarCaracteres(objCustomer[i].rfc) + "</td>");
        }else{
            tr.append(
            "<td class='rfc' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(telephone){
            tr.append(
            "<td class='telephone' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objCustomer[i].tel + "</td>");
        }else{
            tr.append(
            "<td class='telephone' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(email){
            tr.append(
            "<td class='email' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objCustomer[i].correo + "</td>");
        }else{
            tr.append(
            "<td class='email' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }



        if(status){
            if(objCustomer[i].codest==0){
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

$('#PhysicalPerson').click(function() {
    if ($(this).is(':checked')) {
        document.getElementById('grupo__BusinessName').classList.remove('formulario__grupo-incorrecto');
        $("#Name").prop('disabled', false);
        $("#LastName").prop('disabled', false);
        $("#BusinessName").prop('disabled', true);
        $("#BusinessName").val("");

    } else {
        document.getElementById('grupo__Name').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__LastName').classList.remove('formulario__grupo-incorrecto');

        $("#Name").val("");
        $("#LastName").val("");
        $("#Name").prop('disabled', true);
        $("#LastName").prop('disabled', true);
        $("#BusinessName").prop('disabled', false);

    }



});

$("#Email").keyup(function() {
    var valcorreo = validarcorreo();
    if (valcorreo == true) {
        $("#divCorreo").removeClass("has-error has-danger");
        $("#divCorreo").addClass("has-ok has-success");
    } else {
        $("#divCorreo").removeClass("has-ok has-success");
        $("#divCorreo").addClass("has-error has-danger");
    }


});

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



function UpdateCustomer() {
    console.log("Customer");
    var cod = $('#ID').val();
    var BusinessName = $('#BusinessName').val();
    var Name = $('#Name').val();
    var LastName = $('#LastName').val();
    var PhysicalPerson = $('#PhysicalPerson').prop('checked');
    var RFC = $('#RFCxx').val();

    var CFDI = $('#CFDI').val();
    var Adress = $('#Adress').val();
    var NumExt = $('#NumExt').val();
    var NumInt = $('#NumInt').val();
    var Suburb = $('#Suburb').val();
    var Delegation = $('#Delegation').val();
    var municipio = $('#municipios').val();
    var CP = $('#CP').val();
    var estado = $('#estados').val();
    var Country = $('#Country').val();
    var Telephone = $('#Telephone').val();
    var Fax = $('#Fax').val();
    var Email = $('#Email').val();
    var Contact = $('#Contact').val();
    var BusinessConcat = "";

    if ($('#PhysicalPerson').is(':checked')) {
        BusinessConcat = Name + " " + LastName;
    } else {
        BusinessConcat = BusinessName;
    }

    swal.fire({
            title: "Are you sure?",
            text: "THIS COMPANY WILL BE UPDATED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {
                    "cod": cod,
                    "den": BusinessConcat,
                    "dom": Adress,
                    "col": Suburb,
                    "del": Delegation,
                    "ciu": municipio,
                    "est": estado,
                    "rfc": RFC,
                    "satuso": CFDI,
                    "correo": Email,
                    "domnroext": NumExt,
                    "domnroint": NumInt,
                    "pai": Country,
                    "tel": Telephone,
                    "Fax": Fax,
                    "codpos": CP,
                    "cto": Contact,
                    "codest": 0,




                };
                var sURL = IPWS +"WsUpdateClienteControlGas";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    data: para,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal.fire("OK! COMPANY  UPDATED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('Customers');
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
            Tabla_Customers = $("#datatable-buttons").DataTable({
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],

                buttons: [{
                        //Botón para Excel
                        //extend: 'excelHtml5',
                        footer: true,
                        title: 'Company_' + today,
                        filename: 'Company_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5],
                            orthogonal: 'export'
                        },
                        //Aquí es donde generas el botón personalizado
                        //text: '<button class="btn btn-success"> <i class="fa fa-file-excel-o"></i></button>',
                        customize: function(xlsx) {
                            var sheet1 = xlsx.xl['styles.xml'];
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];

                            $('row c', sheet).attr('s', '25');
                            //Second column
                            $('row c:nth-child(5)', sheet).attr('s', '3');
                            $('row c:nth-child(2)', sheet).attr('s', '7');
                            //First row
                            $('row:first c', sheet).attr('s', '47');

                            $('row c[r^="F"]', sheet).each(function() {
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
                            $(col[1]).attr('width', 40);
                            $(col[2]).attr('width', 35);
                            $(col[3]).attr('width', 30);
                            $(col[4]).attr('width', 30);
                            $(col[5]).attr('width', 10);
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
                        title: 'Company_' + today,
                        filename: 'Company_' + today,

                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5],
                        },

                        orientation: 'landscape',
                        pageSize: 'LEGAL',

                        tableHeader: {
                            alignment: 'center'
                        },
                        //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',

                        customize: function(doc) {
                           
                           age = Tabla_Customers.column(5).data().toArray();
                           for (var i = 0; i < age.length; i++) {
                               var text = age[i].substring(35, 43);
                               if (text != "DISABLED") {
                                   doc.content[1].table.body[i + 1][5].fillColor = '#72DB3A';
                               } else {
                                   doc.content[1].table.body[i + 1][5].fillColor = '#FF0000';
                               }
                           }
                       }
                        /*
                        customize: function(doc) {

                            age = Tabla_Customers.column(12).data().toArray();
                            for (var i = 0; i < age.length; i++) {
                                var text=age[i].substring(35,43);
                                if (text !="DISABLED") {
                                    doc.content[1].table.body[i + 1][12].fillColor = '#72DB3A';
                                }else{
                                    doc.content[1].table.body[i + 1][12].fillColor = '#72DB3A';
                                }
                            }
                        }
*/

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
        next: $('<a  id="next" class="glyphicon glyphicon-chevron-right">' + options.labelNext + '</a>').attr(
            "href",
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
            "<button type='input' onclick='validaciones();' id='Save_Customer'class='btn btn-round' style='color:white;' >Update<span class='glyphicon glyphicon-chevron-right'></span></button>"
        );
        $("#Save_Customer").css({
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
                    $("#Save_Customer").show();
                } else {
                    $("#Save_Customer").hide();
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
                    $("#Save_Customer").show();
                } else {
                    $("#Save_Customer").hide();
                }
                HacerResumen();
                return false;
            } else {

            }

        });


        $($this.buttons.previous).click(function() {
            $('#divMensajeError').hide();
            $this.goBackward();
            click = click - 1;
            if (click < 2) {
                $("#Save_Customer").hide();
            } else {
                $("#Save_Customer").show();
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
        /*
                // Enable keyboard navigation
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
    $("#Save_Customer").hide();
    $('#divVehicle').hide();
};

function validaciones() {
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
    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1) {
            band2 = 1;
            break;
        } else {

        }

    }
    if (band2 == 0) {
        //ok
        var valcorreo = validarcorreo();
        $('#divMensajeError').hide();
        if (valcorreo == true) {
            UpdateCustomer();
        }
    } else {
        // error
        var valcorreo = validarcorreo();
        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
    }

}



function validateStep1() {
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

        if (inputs[i].id == "BusinessName" || inputs[i].id == "RFCxx") {
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

        if (inputs[i].id == "Adress" || inputs[i].id == "CP" || inputs[i].id=="NumExt") {
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





var ocultarelementos = 0;
$('#seeAll').click(function() {
    console.log("Haber");
    if (ocultarelementos == 0) {
        ocultarelementos = 1;
        $("#icono").removeClass("glyphicon glyphicon-eye-open");
        $("#icono").addClass("glyphicon glyphicon-eye-close");
        llenarObjCustomers("7");
    } else {
        ocultarelementos = 0;
        $("#icono").removeClass("glyphicon glyphicon-eye-close");
        $("#icono").addClass("glyphicon glyphicon-eye-open");
        llenarObjCustomers("");
    }
});


function statusCompany(pos, id) {
    console.log("dis");

    if (objCustomer[pos].codest == "0") {

        UpdateDisabled(pos, objCustomer[pos].cod, "Clientes", "cod", "ControlGas");

    } else {

        UpdateEnabled(pos, objCustomer[pos].cod, "Clientes", "cod", "ControlGas");
    }
}

function UpdateDisabled(pos, id, table, nameid, BDD) {
    swal.fire({
            title: "SURE YOU WANT DISABLED THIS COMPANY?",
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
                    crossDomain: true,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal.fire("GOOD JOB!", "COMPANY DISABLED SUCCESSFULLY!", "success")

                            llenarObjCustomers("");
                            UpdateContenedor('Customers');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal.fire("Error,TRY AGAIN!", "error");

                            llenarObjCustomers("");
                            UpdateContenedor('Customers');
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
                        //swal("Error", "No se pudo: " + errorThrown, "error");
                    }
                });
                //swal("OK!", "Registro guardado correctamente.", "success");





            } else {
                swal.fire("Without changes!");
            }
        });

}

function UpdateEnabled(pos, id, table, nameid, BDD) {
    swal.fire({
            title: "SURE YOU WANT ENABLED THIS COMPANY?",
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
                            swal.fire("GOOD JOB!", "COMPANY ENABLED SUCCESSFULLY!", "success")

                            llenarObjCustomers("");
                            UpdateContenedor('Customers');
                            return "OK";
                        }
                        if (data.Status == "ERROR") {
                            swal.fire("Error,TRY AGAIN!", "error");

                            llenarObjCustomers("");
                            UpdateContenedor('Customers');
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
                        //swal("Error", "No se pudo: " + errorThrown, "error");
                    }
                });
                //swal("OK!", "Registro guardado correctamente.", "success");
            } else {
                swal.fire("Without changes!");
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
pdfMake.createPdf(documentDefinition).download('COMPANY_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY')+'".pdf');
}

var datos = [];
var detalle = [];
function getDatosBMW() {
var dentro;

var id = document.getElementById("ID").checked;
var company = document.getElementById("COMPANY").checked;
var rfc = document.getElementById("RFC").checked;
var telephone = document.getElementById("TELEPHONE").checked;
var email = document.getElementById("EMAIL").checked;
var status = document.getElementById("STATUS").checked;

var arrayN = ['ID', 'COMPANY', 'RFC', 'TELEPHONE', 'EMAIL', 'STATUS'];
var detail = [
    [
        {
            text: 'ID',
            style: 'tableSubtitulo'
        },
        {
            text: 'COMPANY',
            style: 'tableSubtitulo'
        },
        {
            text: 'RFC',
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
            text: 'STATUS',
            style: 'tableSubtitulo'
        }
    ]
];
for (let index = 0; index < objCustomer.length; index++) {
    if (id) {
        datos.push({
            text: quitarCaracteres(objCustomer[index].cod),
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
            text: quitarCaracteres(objCustomer[index].den),
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (rfc) {
        datos.push({
            text: quitarCaracteres(objCustomer[index].rfc),
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
            text: objCustomer[index].tel,
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
            text: objCustomer[index].correo,
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
        if (objCustomer[index].codest == 0) {
            estatus = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objCustomer[index].codest != 0) {
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
        widths: [30, '*', 80, 80, 100, 80],
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
        text: 'COMPANY REPORT',
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


<?php /**PATH C:\xampp\htdocs\TANKFARM\Laravel\resources\views/Customers.blade.php ENDPATH**/ ?>