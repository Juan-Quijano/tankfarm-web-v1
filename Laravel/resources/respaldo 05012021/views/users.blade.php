<style>
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



                        <table id="datatable-buttons"
                            class="table table-striped table-bordered dataTable no-footer dtr-inline"
                            style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">

                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 257px;" aria-sort="ascending"
                                        aria-label="ID: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 380px;"
                                        aria-label="Name: activate to sort column ascending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        aria-label="UserName: activate to sort column ascending">User Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 108px;"
                                        aria-label="Id rol: activate to sort column ascending">Role</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 191px;"
                                        aria-label="Id language: activate to sort column ascending">Language</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Telephone</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Mail: activate to sort column ascending">Email</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Company: activate to sort column ascending">Company</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Company: activate to sort column ascending">Department</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Company: activate to sort column ascending">Manager</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Edit: activate to sort column ascending">Edit</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label=": activate to sort column ascending">Actions
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
            ArrManager.push([usuarios[i].Nombre, usuarios[i].ID]);
            ArrManager1.push(usuarios[i].Nombre);
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
                dom: "Blfrtip",

                buttons: [{
                        extend: 'excelHtml5',
                        footer: true,
                        title: 'Users' + today,
                        filename: 'Users' + today,
                        exportOptions: {
                            columns: "0,1,2,3,5,6,7,8,9,10",
                            orthogonal: 'export'
                        },
                        text: '<button class="btn btn-success"> <i class="fa fa-file-excel-o"></i></button>',
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
                            $(col[4]).attr('width', 20);
                            $(col[5]).attr('width', 30);
                            $(col[6]).attr('width', 37);
                            $(col[7]).attr('width', 30);
                            $(col[8]).attr('width', 25);
                            $(col[9]).attr('width', 10);

                            var tagName = sheet1.getElementsByTagName('sz');
                            for (i = 0; i < tagName.length; i++) {
                                tagName[i].setAttribute("val", "12")
                            }

                        }
                    },
                    {
                        extend: 'pdf',
                        footer: true,
                        title: 'Users' + " " + today,
                        filename: 'Users' + " " + today,
                        exportOptions: {
                            columns: "0,1,2,3,5,6,7,8,9,10",
                        },
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        tableHeader: {
                            alignment: 'center'
                        },
                        text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',







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
        ArrManager.push([objUsers[i].Nombre, objUsers[i].ID]);
        ArrManager1.push(objUsers[i].Nombre);
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
                htmlIdioma = '<img src="' + "{{url('/')}}" +
                    '/images/espanol_chico.png" alt="language" style=" width: 42%;">';
            } else {
                htmlIdioma = '<img src="' + "{{url('/')}}" +
                    '/images/english_chico.png" alt="language" style=" width: 42%;">';
            }

            Tabla_Usuarios.row.add([
                String(objUsers[i].ID),
                String(objUsers[i].Nombre),
                String(objUsers[i].UserName),
                String((objUsers[i].Rol != null) ? objUsers[i].Rol : ""),
                String(htmlIdioma),
                String(objUsers[i].Telefono),
                String(objUsers[i].Correo),
                String(objUsers[i].Compania),
                String(objUsers[i].Departamento),
                String(objUsers[i].Manager),
                String(colorStatus),
                String('<button type="button" onclick="MostrarDivEditar(' + i + ',' + objUsers[i].ID +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button" onclick="statusUsers(' + i + ',' + objUsers[i].ID +
                    ')" class="' + htmlBotonStatus + '"> ' + title + '</button>'),


            ]);
        }


    }




    Tabla_Usuarios.column('1:visible').order('desc').draw()



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
    console.log("aqui");
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
            SetuSERCatalog();
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
    console.log("entrasss");
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
</script>
