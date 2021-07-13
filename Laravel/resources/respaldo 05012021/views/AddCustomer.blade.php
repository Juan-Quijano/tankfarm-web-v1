<style>
.letraGrande {
    font-size: 20px;
}

#borderResumen {
    border: 5px ridge #1C6EA4;
    border-radius: 5px;
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

div.ridge {
    border-style: ridge;
}

/* Style the label to display next to the inputs */
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

/* Style the submit button */


/* Style the container */

label {
    white-space: nowrap;
}

.linea {
    display: inline-block;
}

.form-group {
    margin-bottom: 26px;
}



.x_content input {
    display: block;
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
    border-radius: 1 !important;
}

.btn-group-lg>.btn,
.btn-lg {
    padding: .5rem 1rem;
    font-size: 1.25rem;
    line-height: 1.5;
    border-radius: .3rem;
}

.asterisco {
    color: red;
}

#newrol {
    border-radius: 0px 25px 25px 0px;
    border: 1px solid rgba(221, 226, 232, 0.49);
    border-left: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);

    margin-bottom: 0 !important;
}

form label {
    display: inline-block;
    width: 150px;
}

form input {
    display: inline-block;
    width: 200px;
    margin-bottom: 10px;
}

.tamano {
    display: inline-block;
    margin-right: -10%;

}

.tamano1 {
    display: inline-block;
    margin-right: 1%;

}

label {
    font-family: Vegur, 'PT Sans', Verdana, sans-serif;
}

* {
    box-sizing: border-box;
}

body {
    font-family: 'Roboto', sans-serif;
    background: #E5E5E5;
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

@media screen and (max-width: 800px) {
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
@media screen and (max-width: 800px) {
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
</style>


<div class="clearfix"></div>

<div class="row">

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>New Company </h2>

                <div class="clearfix"></div>
            </div>

            <div class="col-sm-9">
                <div class="x_content">


                    <!-- Tabs -->


                    <div id="wizard_verticle" class="form_wizard wizard_horizontal">
                        <ul class="list-unstyled wizard_steps">
                            <li>
                                <a href="#step-11" class="selected" isdone="1" rel="1">
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
                            <form class="form-horizontal form-label-left" id="formulario1">

                                <h2 class="section">Identification</h2>


                                <div class="form-group row  " id="grupo__BusinessName">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Company
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-auto col-md-6" id="divCombo2">
                                        <input type="text" id="BusinessName" name="BusinessName" required="required"
                                            class="form-control t validar" autocomplete="off"
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                        <i class=" fas fa-times-circle"></i>
                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="RFC">RFC
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 " id="grupo__RFC">
                                        <input type="text" id="RFC" name="RFC" required="required"
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
                            <form class="form-horizontal form-label-center" id="formulario3">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="Adress">Address
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3" id="grupo__Adress">
                                        <input type="text" id="Adress" name="Adress" required="required"
                                            class="form-control formulario__input validar" autocomplete="off">
                                    </div>

                                    <div class="col-md-3" id="NumInterior">

                                        <div class="input-group" id="NumInterior2">
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
                            <form class="form-horizontal form-label-center" id="formulario4">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="Telephone">Telephone
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3" id="divTel">
                                        <input type="text" id="Telephone" placeholder="(555) 555-5555"
                                            required="required" class="form-control  validar" autocomplete="off">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="Email">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3" id="divCorreo">
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
                    <div class="col-md-12" id="divMensajeError" style="display:none">
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                            <h6 class="pull-left" id="mensajeError">Error:.</h6>
                            <div class="clearfix"></div>
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
                        <div class="form-group text-left">
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




<script>
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
    var direccion3 = ($('#estados').val() != "") ? "<BR>, " + $('#estados').val() : "";

    $('#SumaryAddress').html(direccion);
    $('#SumaryAddress2').html(direccion2);
    $('#SumaryAddress3').html(direccion3);
    $('#SumaryEmail').html(($('#Email').val() != "") ? $('#Email').val() : "----");
    $('#SumaryTelephone').html(($('#Telephone').val() != "") ? $('#Telephone').val() : "----");


}
$(document).ready(function() {
    //init_SmartWizard();
    $("#Name").prop('disabled', true);
    $("#LastName").prop('disabled', true);
    //init_SmartWizard();
    //Fillestados();
    // Fillmunicipios();


});
var DatosCP;
var arrColonias = [];
var colonias = "";
var click = 0;

function GetDatosCP() {
    var cp = $('#CP').val();
    var sURL = IPWS +"/WsGetDatosCP?cp='" + cp + "'";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,

        success: function(data) {
            DatosCP = data.lstcp;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

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
        swal("Error", "This zip code does not exist", "error");
    }


}





var sestados = '';
var ArrayEstados;

function Fillestados() {

    var sURL = IPWS +"/WsGetestados";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            ArrayEstados = data.lstestados;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
    $(ArrayEstados).each(function(i) {
        sestados += '<option value="' + this.id + '">' + this.nombre + '</option>';
    });
    $('#estados').html(sestados);
}


var ArrayMunicipios;

function Fillmunicipios() {

    var sURL = IPWS +"/WsGetmunicipios";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            ArrayMunicipios = data.lstmunicipios;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });


}
$('#estados').change(function() {
    $('#municipios').prop('disabled', false);

    var estado = $('#estados').val();
    var pmunicipios = $.grep(ArrayMunicipios, function(n, i) {
        return (n.estado_id == estado);
    }); //filtramos por estado
    var smunicipios = '<option value="" disabled>Municipalities</option>';
    $(pmunicipios).each(function(i) {
        smunicipios += '<option value="' + this.estado_id + '">' + this.nombre + '</option>';
    });
    $('#municipios').html(smunicipios);
});




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

        if (inputs[i].id == "BusinessName" || inputs[i].id == "RFC") {
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

            SaveCustomer()
            return true;
        }
    } else {
        var valcorreo = validarcorreo();
        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
        return false;
    }

}

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






function SaveCustomer() {
    console.log("Customer");
    var BusinessName = $('#BusinessName').val();
    var Name = $('#Name').val();
    var LastName = $('#LastName').val();
    var PhysicalPerson = $('#PhysicalPerson').prop('checked');
    var RFC = $('#RFC').val();

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

    swal({
            title: "Are you sure?",
            text: "THIS COMPANY WILL BE SAVED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {
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


                };
                var sURL = IPWS +"/WsInsertarClienteControlGas";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    data: para,
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("OK! COMPANY SAVED SUCCESSFULL!", {
                                icon: "success",
                            });
                            UpdateContenedor('Customers');
                        } else {
                            swal("Error", "ERROR SAVING DATA", "error");
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
            .append($this.buttons.previous).append($this.buttons.next);
        $this.target.append(elmActionBar);
        this.contentWidth = $this.elmStepContainer.width();
        $('.actionBar').append(
            "<button type='input' onclick='validaciones();' id='Save_Customer'class='btn btn-round' style='color:white;' >Save<span class='glyphicon glyphicon-chevron-right'></span></button>"
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
    $("#Save_Customer").hide();
};
</script>
