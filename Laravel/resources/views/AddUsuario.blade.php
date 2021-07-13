
<style>
body {
    display: none;
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

.form-group {
    margin-bottom: 26px;
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
    left: 2%;
    right: 2%;
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




<div class="x_panel">
    <div class="">
        <h2>New User <small>Please complete all fields</small></h2>

        <div class="clearfix"></div>
    </div>

    <div class="x_content col-sm-8">
        <br>


        <div id="wizard_verticle" class="form_wizard wizard_verticle">

            <ul class="list-unstyled wizard_steps">
                <li>
                    <a href="#step-11">
                        <span class="step_no">1</span>

                    </a>
                </li>
                <li>
                    <a href="#step-22">
                        <span class="step_no">2</span>

                    </a>
                </li>

            </ul>

            <div id="step-11">
                <h2 class="StepTitle">Step 1</h2>
                <form class="form-horizontal form-label-left">

                    <span class="section">Personal Info</span>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name"> Name <span
                                class="required asterisco">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6" id="DivName">
                            <input data-validate-length-range="6" data-validate-words="2" type="text"
                                required="required" class="form-control validar" id="Name" autocomplete="off"
                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span
                                class="required asterisco">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6" id="DivLastName">
                            <input type="text" name="last-name" required="required" class="form-control validar"
                                autocomplete="off" id="LastName"
                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Second Last Name
                            <span class="required asterisco">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6" id="DivSecondLastName">
                            <input type="text" name="last-name" required="required" class="form-control validar"
                                autocomplete="off" id="SecondLastName"
                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">User Name <span
                                class="required asterisco">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6" id="DivUserName">
                            <input type="text" name="last-name" required="required" class="form-control validar"
                                id="UserName" autocomplete="off">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password <span
                                class="required asterisco">*</span></label>
                        <div class="col-md-6 col-sm-6" id="DivPass">
                            <input id="Password" class="form-control validar" required="required" type="password"
                                autocomplete="off" name="middle-name">
                        </div>
                        <a style="margin:0 15px 0 0;" data-toggle="tooltip" data-placement="bottom" title="* La contraseña debe contener 8 caracteres especiales o mas. 
* Debe de contener al menos 1 letra minuscula.
* La contraseña debe contener  al menos 1 letra mayuscula.
* Tiene que  tener al menos 1 número en su estructura." data-original-title="Ayuda"><img
                                src="{{url('/')}}/images/info_208px.png" alt="Girl in a jacket" width="30px"
                                height="30px"></a>
                    </div>




                    <div class="form-group row">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Confirm Password
                            <span class="required asterisco">*</span></label>
                        <div class="col-md-6 col-sm-6" id="DivPass1">
                            <input id="ConfirmPassword" class="form-control validar" required="required" type="password"
                                autocomplete="off" name="middle-name" onblur="validarPassword();">
                        </div>
                    </div>

                    <div class="form-group row">
                        <span id="verificarPass" style="color: rgb(220, 53, 69);margin-left: 26%;"></span>
                    </div>


                    <div class="form-group">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Password Security
                            Level <span class="required asterisco">*</span></label>
                        <div class="progress" style="WIDTH: 50%;">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
                                aria-valuemin="0" aria-valuemax="100" style="width:0%" id="progess">
                            </div>
                        </div>
                        <span id="Spanpassword" style="color: rgb(220, 53, 69);"></span>
                    </div>


                    <div class="form-group row">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Department <span
                                class="required asterisco">*</span></label>
                        <div class="col-md-6 col-sm-6" id="Divdep">
                            <input type="text" name="department" required="required" class="form-control validar"
                                id="department" data-id="" autocomplete="off"
                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Role <span
                                class="required asterisco">*</span></label>
                        <div class="col-md-6 col-sm-6" id="DivRole">

                            <select id="Rol" class="form-control validarCombo">
                                <option value="Select Option" required="required" selected="selected">Select Option
                                </option>

                            </select>

                        </div>
                        <span class="input-group-btn">
                            <button type="button" id="newrol" style="color:white" class="btn"
                                onclick="UpdateContenedor('AddRol')">New Role</button>
                        </span>
                    </div>



                </form>
            </div>
            <div id="step-22">
                <h2 class="StepTitle">Step 2</h2>
                <form class="form-horizontal form-label-left">

                    <span class="section">Personal Info</span>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="phone">Telephone <span
                                class="required asterisco">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6" id="DivTel">
                            <input type="text" required="required" class="form-control validar" id="Phone"
                                placeholder="(555) 555-5555" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Company <span
                                class="required asterisco">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 autocomplete" id="DivCompany" autocomplete="off">
                            <input type="text" name="company" required="required" class="form-control validar"
                                id="Company" data-id="" autocomplete="off"
                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Languague <span
                                class="required asterisco">*</span></label>
                        <div class="col-md-6 col-sm-6" id="DivLanguage">
                            <select id="Languague" class="form-control validarCombo">
                                <option value="Select Option" required="required" selected="selected">Select Option
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Manager <span
                                class="required asterisco">*</span></label>
                        <div class="col-md-6 col-sm-6" id="DivManager">
                            <input type="text" name="Manager" required="required" class="form-control validar"
                                id="manager" data-id="" autocomplete="off"
                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                        </div>
                    </div>
                    <div class="form-group row" id="divCorreo">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span
                                class="required asterisco">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6" id="DivEmail">
                            <input type="text" name="company" required="required" class="form-control validar"
                                autocomplete="off" id="Email">
                            <div id="xmail" class="" style="display: none;">
                                <h6 class="text-danger">
                                    Invalid email</h6>
                            </div>
                        </div>
                    </div>


            </div>

        </div>

        <!-- End SmartWizard Content -->
    </div>
    <div class="col-sm-4">
        <h2>Summary</h2>
        <div id="borderResumen">
            <form>
                <div class="form-group text-left sepborder">
                    <h5 class="card-title" style="margin-top: 10px;">Full Name</h5>
                    <p class="" id="SumaryFullName">------------------</p>
                    <h5 class="card-title">User Name</h5>
                    <p class="" id="SumaryUserNAme">------------------</p>
                    <h5 class="card-title">Company / Role</h5>
                    <p class="" id="SumaryCompany">------------------</p>

                    <h5 class="card-title">Telephone</h5>
                    <p id="SumaryTelephone">-----------</p>
                    <h5 class="card-title">Email</h5>
                    <p id="SumaryEmail">-----------</p>

                </div>

            </form>
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












<script>
/*codigo utilizado para eviar clickjacking*/
if (self == top) {
    document.getElementsByTagName("body")[0].style.display = 'block';
} else {
    top.location = self.location;
}

if (top.location != location) top.location = self.location;
//**********************************************************


var mensajeError = "";
var click = 0;
var ArrCompany = [];
var ArrCompany1 = [];
var ArrDep = [];
var ArrDep1 = [];
var ArrManager = [];
var ArrManager1 = [];
$("#SaveUser").hide();

function HacerResumen() {

    $('#SumaryFullName').html(($('#Name').val() != "") ? $('#Name').val() : "----");
    $('#SumaryUserNAme').html(($('#UserName').val() != "") ? $('#UserName').val() : "----");
    var compañia = ($('#Company').val() != "") ? $('#Company').val() : "----";
    //$('select[name="Rol"] option:selected').text() != "Select Option"
    //var Department=($('#Department option:selected').text().trim() != "Select Option") ? $('#Department option:selected').text() : "----";
    //$("#SumaryDepartment").html(Department);
    var rol = ($('#Rol option:selected').text().trim() != "Select Option") ? $('#Rol option:selected').text() : "----";
    $('#SumaryCompany').html(compañia + "/" + rol);

    $('#SumaryEmail').html(($('#Email').val() != "") ? $('#Email').val() : "----");
    $('#SumaryTelephone').html(($('#Phone').val() != "") ? $('#Phone').val() : "----");


}
$(document).ready(function() {
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    $('#error').hide();
    FillRol();
    FillLanguague();
    FillCustomer();
    FillDepartment();
    FillUsers();

});

function validarPassword() {
    var pass1 = $('#Password').val();
    var pass2 = $('#ConfirmPassword').val();
    if (pass1 == "" || pass2 == "") {

    } else {
        if (pass1 == pass2) {
            $("#verificarPass").html("Correct Password");
        } else {
            $("#verificarPass").html("Incorrect Password, please check it");
            $('#ConfirmPassword').val('');
        }
    }

}

var porcentaje = 0;
$("#Password").keyup(function(e) {
    var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
    var mediumRegex = new RegExp(
        "^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
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
document.getElementById('Phone').addEventListener('input', function(e) {
    var x = e.target.value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
});



var customer;

function FillCustomer() {
    try {
        var sURL = IPWS + "GetClientes";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            headers: {
                Authorization: 'Bearer ' + objUsuario.Token
            },
            success: function(data) {
                customer = data.lstClients;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                try {
                    mensajeError = textStatus;
                    if (mensajeError == "error") {
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
            ArrCompany.push([customer[i].den, customer[i].cod]);
            ArrCompany1.push(customer[i].den);
        }

    } catch (error) {

    }

}



var departamento;

function FillDepartment() {
    try {
        var sURL = IPWS + "GetDepartamentos";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            headers: {
                Authorization: 'Bearer ' + objUsuario.Token
            },
            async: false,
            success: function(data) {
                departamento = data.lstDep;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                try {
                    mensajeError = textStatus;
                    if (mensajeError == "error") {
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
        var sURL = IPWS + "GetUsuarios";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            headers: {
                Authorization: 'Bearer ' + objUsuario.Token
            },
            success: function(data) {
                usuarios = data.lstUsuarios;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                try {
                    mensajeError = textStatus;
                    if (mensajeError == "error") {
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
        for (var i = 0; i < usuarios.length; i++) {
            ArrManager.push([usuarios[i].Nombre.trim() + " " + usuarios[i].LastName.trim() + " " + usuarios[i]
                .SecondLastName.trim(), usuarios[i].ID
            ]);
            ArrManager1.push(usuarios[i].Nombre.trim() + " " + usuarios[i].LastName.trim() + " " + usuarios[i]
                .SecondLastName.trim());
        }
    } catch (error) {

    }

}

var Languague;

function FillLanguague() {


    var sURL = IPWS + "GetLanguague";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {
            Authorization: 'Bearer ' + objUsuario.Token
        },
        success: function(data) {
            Languague = data.lstLanguague;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            try {
                mensajeError = textStatus;
                if (mensajeError == "error") {
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
    for (var i = 0; i < Languague.length; i++) {
        $("#Languague").append('<option value="' + Languague[i].ID +
            '" data-id=" ' + Languague[i].ID + '" >' + Languague[i].Idioma + '</option>');
    }



}
var Roles;

function FillRol() {

    var sURL = IPWS + "GetRol";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {
            Authorization: 'Bearer ' + objUsuario.Token
        },
        success: function(data) {
            roles = data.lstRoles;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            try {
                mensajeError = textStatus;
                if (mensajeError == "error") {
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
    for (var i = 0; i < roles.length; i++) {
        $("#Rol").append('<option value="' + roles[i].ID +
            '" data-id=" ' + roles[i].ID + '" >' + roles[i].Rol + '</option>');
    }
}

function ClearForm() {
    $('#Name').val("");
    $('#UserName').val("");
    $('#Password').val("");
    $('#ConfirmPassword').val("");
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




$("#Email").keyup(function() {
    var valcorreo = validarcorreo();
    if (valcorreo == true) {
        $("#DivEmail").removeClass("has-error has-danger");
        $("#DivEmail").addClass("has-ok has-success");
    } else {
        $("#DivEmail").removeClass("has-ok has-success");
        $("#DivEmail").addClass("has-error has-danger");
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

function validaciones() {
    var textIdioma1 = "";
    var Idioma = "English";
    var alertManagerInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The manager is invalid.';
    var alertCompanyInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The company is invalid.';
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

            $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
            $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
            var Company = $("#Company").val();
            //var manager = $("#manager").val();

            var resultCompany = validarAutocomplete(ArrCompany1, Company);
            //var resultManager = validarAutocomplete(ArrManager1, manager);
            if (resultCompany == "true") {
                $("#DivCompany").addClass("has-ok has-success");
                $("#DivCompany").removeClass("has-error has-danger");
                band.push(0);
            } else {
                $("#DivCompany").removeClass("has-ok has-success");
                $("#DivCompany").addClass("has-error has-danger");
                band.push(2);
            }
            /*
                        if (resultManager == "true") {
                            $("#DivManager").addClass("has-ok has-success");
                            $("#DivManager").removeClass("has-error has-danger");
                            band.push(0);
                        } else {
                            $("#DivManager").removeClass("has-ok has-success");
                            $("#DivManager").addClass("has-error has-danger");
                            band.push(3);
                        }
                        */

        }

    }


    var languague = $("#Languague").val();
    var Combos = $(".validarCombo");
    console.log("combo");
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
    if (result != -1) {
        band2 = 1;

    } else if (result2 != -1) {

        band2 = 2;
    } else if (result3 != -1) {

        band2 = 3;
    }


    if (band2 == 0) {
        //ok
        $('#divMensajeError').hide();
        var valcorreo = validarcorreo();
        if (valcorreo == true) {
            SaveUser2();
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
    var alertInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The department is invalid.';
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

        if (inputs[i].id == "Name" || inputs[i].id == "LastName" || inputs[i].id == "SecondLastName" || inputs[i].id ==
            "UserName" || inputs[i].id == "Password" || inputs[i].id == "ConfirmPassword" || inputs[i].id ==
            "department") {
            if (inputs[i].value == "") {
                $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                band.push(1);
            } else {

                $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                var department = $("#department").val();
                var result = validarAutocomplete(ArrDep1, department);
                if (result == "true") {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);
                } else {
                    $("#Divdep").removeClass("has-ok has-success");
                    $("#Divdep").addClass("has-error has-danger");
                    band.push(2);
                }
            }
        }


    }

    var Combos = $(".validarCombo");
    for (let i = 0; i < Combos.length; i++) {

        if (Combos[i].id == "Rol") {
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




function SaveUser2() {
    console.log("vacio");
    var Name = $('#Name').val();
    var LastName = $('#LastName').val();
    var SecondLastName = $('#SecondLastName').val();
    var Password = $('#Password').val();
    var UserName = $('#UserName').val();
    var Rol = $('#Rol option:selected').val();
    var Idioma = $('#Languague option:selected').val();
    var Telefono = $('#Phone').val();
    var Correo = $('#Email').val();
    var Compania = document.getElementById("Company").dataset.id;
    var manager = $('#manager').val();
    var department = document.getElementById("department").dataset.id;

    var FisrtStep;
    var SecondStep;



    swal.fire({
            title: "Are you sure?",
            text: "THIS USER WILL BE SAVED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {
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
                    "Manager": manager,
                    "Departamento": department,


                };
                var sURL = IPWS + "WsInsertarUsuario";
                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    headers: {
                        Authorization: 'Bearer ' + objUsuario.Token
                    },
                    async: false,
                    data: para,
                    success: function(data) {
                        //objCombos = data.GetCatalogosResult;
                        console.log("WS Add");
                        console.log(data);
                        if (data.Status == "OK") {
                            swal.fire("OK! THE USER SAVED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('users');
                        } else {
                            swal.fire("Error", "ERROR SAVING DATA", "error");
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        try {
                            mensajeError = textStatus;
                            if (mensajeError == "error") {
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
                                                    b.textContent = Swal
                                                        .getTimerLeft()
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
autocomplete(document.getElementById("manager"), ArrManager);
autocomplete(document.getElementById("department"), ArrDep);

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
        previous: $('<a id="Previous" class="glyphicon glyphicon-chevron-left">' + options.labelPrevious + '</a>')
            .attr("href", "#").addClass("buttonPrevious btn btn-round btn-info"),
        next: $('<a id="next" class="glyphicon glyphicon-chevron-right">' + options.labelNext + '</a>').attr("href",
            "#").addClass("buttonNext btn btn-round btn-info"),



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
            "<button id='SaveUser'class='btn btn-round' style='color:white;' >Save<span class='glyphicon glyphicon-chevron-right'></span></button>"
        );
        $("#SaveUser").css({
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
                if ($("#Spanpassword").text() != "Strong") {
                    $("#verificarPass").html("The password security level is not allowed");
                } else {
                    var valid = validateStep1();
                }

            }
            if (valid == true) {
                $this.goForward();
                click = click + 1;
                if (click == 1) {
                    $("#SaveUser").show();
                } else {
                    $("#SaveUser").hide();
                }
                HacerResumen();
                return false;
            } else {

            }




        });

        $("#SaveUser").click(function() {
            validaciones();
        });
        $($this.buttons.previous).click(function() {
            $('#divMensajeError').hide();
            $this.goBackward();
            click = click - 1;
            if (click < 1) {
                $("#SaveUser").hide();
            } else {
                $("#SaveUser").show();
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
    $("#SaveUser").hide();
};
</script>
<!-- Custom Theme Scripts -->