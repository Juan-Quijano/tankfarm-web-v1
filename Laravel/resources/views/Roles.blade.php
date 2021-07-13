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
/* The switch - the box around the slider */
.label.label-danger,
.label-danger.jvectormap-tip {
    background: #da473a;
}
.label,
.jvectormap-tip {
    padding: 3px 6px 3px;
    font-size: 11px;
    border-radius: 50px;
    text-transform: capitalize;
    font-weight: 400;
}
.label-danger {
    padding: 3px 6px 3px;
    font-size: 11px;
    border-radius: 50px;
    text-transform: capitalize;
    font-weight: 400;
}
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}
/* Hide default HTML checkbox */
.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}
/* The slider */
.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}
.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}
input:checked+.slider {
    background-color: #2196F3;
}
input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
}
input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    opacity: 0.9;
}
/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}
.slider.round:before {
    border-radius: 50%;
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
.label,
.jvectormap-tip {
    padding: 3px 6px 3px;
    font-size: 11px;
    border-radius: 50px;
    text-transform: capitalize;
    font-weight: 400;
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

#datatable-buttons tbody td:eq(0) {
    text-align: left;
}

#datatable-buttons tbody td {
    text-align: center;
}
</style>






<div class="x_panel" id="divCatalogoRoles">

    <div class="x_content">
        <div class="x_title">
            <h2>Roles </h2>

            <div class="clearfix"></div>
        </div>
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
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 257px;" aria-sort="ascending"
                                        >ID</th>
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 380px;"
                                        >ROLE</th>
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        >USER</th>
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 108px;"
                                        >COMPANY</th>
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 191px;"
                                        >VEHICLE</th>
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >DRIVER</th>
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >DEPARTMENT</th>

                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >COST CENTER</th>

                                        <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >PROFILE</th>


                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >BRAND</th>
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >MODEL</th>
                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >CONFIGURATION</th>

                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >STATUS</th>

                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >EDIT</th>

                                    <th  tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        >ACTIONS</th>

                                </tr>

                            </thead>


                            <tbody>


                                <div class="text-right">
                                    <!--You can add col-lg-12 if you want -->
                                    <button id="seeAll" class="btn btn-warning" type="button"> <span id="icono"
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> SEE ALL
                                        |</button>
                                    <button type="button" class="btn btn-primary "
                                        onclick="javascript:UpdateContenedor('AddRol');"> <span
                                            class="glyphicon glyphicon-plus" id="icon_enabled"
                                            style="color:white;"></span> NEW ROLE</button>

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
                            <input class="form-check-input inputPerfiles" type="checkbox" id="ROLE"
                                value="option2">
                            <label class="form-check-label" for="ROLE">ROLE</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="USER" value="option3">
                            <label class="form-check-label" for="USER">USER</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="COMPANY" value="option4">
                            <label class="form-check-label" for="COMPANY">COMPANY</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="VEHICLE" value="option5">
                            <label class="form-check-label" for="VEHICLE">VEHICLE</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="DRIVER" value="option6">
                            <label class="form-check-label" for="DRIVER">DRIVER</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="DEPARTMENT" value="option6">
                            <label class="form-check-label" for="DEPARTMENT">DEPARTMENT</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="COST" value="option6">
                            <label class="form-check-label" for="COST">COST</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="PROFILE" value="option6">
                            <label class="form-check-label" for="PROFILE">PROFILE</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="BRAND" value="option6">
                            <label class="form-check-label" for="BRAND">BRAND</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="MODEL" value="option6">
                            <label class="form-check-label" for="MODEL">MODEL</label>
                        </div>
                        <div class="form-check form-check-inline checkbox combosDias">
                            <input class="form-check-input inputPerfiles" type="checkbox" id="CONFIGURATION" value="option6">
                            <label class="form-check-label" for="CONFIGURATION">CONFIGURATION</label>
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
                        src="{{url('/')}}/images/Logo_Web_1_Launcher.png"></th>
                <th colspan=10
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 30px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ROLES REPORT</th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=10
                    style="text-align: center;background: #233461; color:#ffffff;font-size: 19px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    </th>
            </tr>
            <tr>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=10 style="text-align: right;background: #233461; color:#004D9C;"></th>
            </tr>
            <tr>
                <th colspan=5 style="text-align: left;background: #233461;"></th>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=5
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 16px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BMW
                    Group</th>
            </tr>
            <tr>
                <th colspan=5 style="text-align: left;background: #233461;"></th>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=5
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    Plant San Luis Potosi</th>
            </tr>
            <tr>
                <th colspan=5
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
                <th colspan=5
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
                <th colspan=5 style="text-align: left;background: #233461;"></th>
                <th colspan=3 style="text-align: left;background: #233461;"></th>
                <th colspan=5
                    style="text-align: right;background: #233461;color:#ffffff;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    http://www.bmwgroup.com</th>
            </tr>
            <tr>
                <th colspan=3 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
                <th colspan=10 style="background: #233461; color: white; text-align: center;font-family:BMWTypeCondensedRegular;font-weight: bold;"></th>
            </tr>
            <tr>
                <th class="id"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ID</th>
                <th class="role"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    ROLE</th>
                <th class="user"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    USER</th>
                <th class="company"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COMPANY </th>
                <th class="vehicle"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    VEHICLE</th>
                <th class="driver"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DRIVER</th>
                <th class="department"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    DEPARTMENT</th>
                <th class="cost"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    COST</th>
                <th class="profile"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    PROFILE</th>
                    <th class="brand"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    BRAND</th>
                    <th class="model"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    MODEL</th>
                    <th class="configuration"
                    style="background: #233461; color: white; text-align: center;border: 1px solid black;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                    CONFIGURATION</th>
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
            <th colspan=1
                style="text-align: left;background: #233461;color:#d8d3d3;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
                </th>
            <th colspan=3 style="text-align: right;background: #233461;color:#fff"><img
            src="{{url('/')}}/images/logogrisM.png"></th>
        </tr>
        <tr>
            <th colspan=9
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=1
                style="text-align: left;background: #233461;font-size: 14px;font-family:BMWTypeCondensedRegular;font-weight: bold;">
            </th>
            <th colspan=3 style="text-align: right;background: #233461;"></th>
        </tr>
        <tr>
            <th colspan=9
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
    <div class="clearfix"></div>


    <div class="row">

        <div class="col-md-6 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Role Information <small>Select the views for this role</small></h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" id="formcontacto">

                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Name
                                Role</label>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" required="required" class="form-control my-error-class" id="Rol"
                                    placeholder="Name Role"
                                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                <input type="text" style="display:none;" class="form-control" name="ID" id="ID">
                            </div>
                        </div>





                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">User</label>
                            <div class="col-md-9 col-sm-9 ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Users" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Company</label>
                            <div class="col-md-9 col-sm-9 round ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Customers" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Vehicle</label>
                            <div class="col-md-9 col-sm-9 round ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Vehicles" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Driver</label>
                            <div class="col-md-3 col-sm-3 ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Drivers" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label style=" font-weight: bold;"
                                class="control-label col-md-3 col-sm-3 ">Department</label>
                            <div class="col-md-3 col-sm-3 ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Department" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Cost
                                Center</label>
                            <div class="col-md-3 col-sm-3 ">
                                <div class="">
                                    <label class="switch">
                                        <input id="CostCenter" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Profiles
                                </label>
                            <div class="col-md-3 col-sm-3 ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Profiles" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Brand</label>
                            <div class="col-md-3 col-sm-3 ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Brand" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Model</label>
                            <div class="col-md-3 col-sm-3 ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Model" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label style=" font-weight: bold;"
                                class="control-label col-md-3 col-sm-3 ">Configuration</label>
                            <div class="col-md-9 col-sm-9 ">
                                <div class="">
                                    <label class="switch">
                                        <input id="Configuration" type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label style=" font-weight: bold;" class="control-label col-md-3 col-sm-3 ">Status</label>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                                <select id="Status" class="form-control">
                                    <option value="0" required="required" selected="selected">Select Option</option>
                                    <option value="1">Enabled</option>
                                    <option value="0">Disabled</option>
                                </select>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="button" class="btn btn-primary"
                                    onclick="UpdateContenedor('Roles');">Cancel</button>

                                <button type="button" id="save-rol" class="btn btn-success"
                                    onclick="UpdateRol();">Update</button>
                            </div>
                        </div>






                        <!-- /page content -->

                        <!-- footer content -->
                        <footer>
                            <div class="pull-right">

                            </div>
                            <div class="clearfix"></div>
                        </footer>
                        <!-- /footer content -->
                </div>
            </div>



        </div>
    </div>
</div>

<div id="error" class="alert alert-danger" role="alert" style="display:none;">

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

var mensajeError="";

var objRoles = "";
/* DATA TABLES */
var Tabla_Roles;
$(document).ready(function() {

    init_DataTables();
    llenarObjRoles("");

});



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
            Tabla_Roles = $("#datatable-buttons").DataTable({
                'aLengthMenu':[[25,50,-1],[25,50,'All']],
                'iDisplayLength':25,
                dom: "Blfrtip",
                "ordering":false,
                "aaShorting":[],
                buttons: [{
                        //extend: 'excelHtml5',
                        footer: true,
                        title: 'Role' + today,
                        filename: 'Role' + today,
                        exportOptions: {
                            columns: "0,1,2,3,4,5,6,7,8,9,10",
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



                            $('row c[r^="K"]', sheet).each(function() {
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
                            $(col[2]).attr('width', 20);
                            $(col[3]).attr('width', 25);
                            $(col[4]).attr('width', 20);
                            $(col[5]).attr('width', 15);
                            $(col[6]).attr('width', 15);
                            var tagName = sheet1.getElementsByTagName('sz');
                            for (i = 0; i < tagName.length; i++) {
                                tagName[i].setAttribute("val", "12")
                            }

                        }
                    },
                    {
                        //extend: 'pdf',
                        footer: true,
                        title: 'Role' + today,
                        filename: 'Role' + today,
                        exportOptions: {
                            columns: "0,1,2,3,4,5,6,7,8,9,10",
                            alignment: 'center',
                        },

                        orientation: 'landscape',
                        pageSize: 'LEGAL',

                        tableHeader: {
                            alignment: 'center'
                        },
                        //text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',

                        customize: function(doc) {
                            var rowCount = doc.content[1].table.body.length;
                            for (i = 1; i < rowCount; i++) {


                                doc.content[1].table.body[i][0].alignment = 'center';
                                doc.content[1].table.body[i][1].alignment = 'center';
                                doc.content[1].table.body[i][2].alignment = 'center';
                                doc.content[1].table.body[i][3].alignment = 'center';
                                doc.content[1].table.body[i][4].alignment = 'center';
                                doc.content[1].table.body[i][5].alignment = 'center';
                                doc.content[1].table.body[i][6].alignment = 'center';
                                doc.content[1].table.body[i][7].alignment = 'center';
                                doc.content[1].table.body[i][8].alignment = 'center';
                                doc.content[1].table.body[i][9].alignment = 'center';
                                doc.content[1].table.body[i][10].alignment = 'center';
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


function quitarCaracteres(cadena) {
    var dato= cadena.replace(/[^a-zA-Z 0-9.]+/g, ' ');
    return dato;
}

function llenarObjRoles(all) {
    var para = {
        "All": all,


    };
    limpiarTabla();
    var sURL = IPWS + "GetRol";
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

            objRoles = data.lstRoles;


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
var nombresCatalogos = [];



function llenarTabla() {
    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var colorStatus = "";
    var colorRol = "";
    var colorUsers = "";
    var colorCustomers = "";
    var colorVehicles = "";
    var colorDrivers = "";
    var colorConfiguration = "";
    var colorDepartment = "";
    var colorCostCenter = "";
    var colorPerfiles = "";
    var colorBrand = "";
    var colorModel = "";
    limpiarTabla();
    Tabla_Roles.clear().draw();

    var htmlBotonStatus = "";


    for (var i = 0; i < objRoles.length; i++) {

        if (objRoles[i].Status == "1") {
            htmlBotonStatus = 'icon-user-minus';
            colorIcon = "color:red;";
            title = "Delete";


        } else {
            htmlBotonStatus = 'icon-user-check';
            colorIcon = "color:black;";
            title = "Delete";
            colorBoton = "color:green";

        }


        if (objRoles[i].Users == "true") {
            colorUsers =
                "<label class='label label-success' >YES</label>";
        } else {
            colorUsers =
                "<label class='label label-danger' >NO</label>";
        }
        if (objRoles[i].Customers == "true") {
            colorCustomers =
                "<label class='label label-success' >YES</label>";
        } else {
            colorCustomers =
                "<label class='label label-danger' >NO</label>";
        }
        if (objRoles[i].Vehicles == "true") {
            colorVehicles =
                "<label class='label label-success' >YES</label>";
        } else {
            colorVehicles =
                "<label class='label label-danger' >NO</label>";
        }
        if (objRoles[i].Drivers == "true") {
            colorDrivers =
                "<label class='label label-success' >YES</label>";
        } else {
            colorDrivers =
                "<label class='label label-danger' >NO</label>";
        }
        if (objRoles[i].Configuration == "true") {
            colorConfiguration =
                "<label class='label label-success' >YES</label>";
        } else {
            colorConfiguration =
                "<label class='label label-danger' >NO</label>";
        }

        if (objRoles[i].Department == "true") {
            colorDepartment =
                "<label class='label label-success' >YES</label>";
        } else {
            colorDepartment =
                "<label class='label label-danger' >NO</label>";
        }


        if (objRoles[i].CostCenter == "true") {
            colorCostCenter =
                "<label class='label label-success' >YES</label>";
        } else {
            colorCostCenter =
                "<label class='label label-danger' >NO</label>";
        }

        if (objRoles[i].Perfiles == "true") {
            colorPerfiles =
                "<label class='label label-success' >YES</label>";
        } else {
            colorPerfiles =
                "<label class='label label-danger' >NO</label>";
        }




        if (objRoles[i].Brand == "true") {
            colorBrand =
                "<label class='label label-success' >YES</label>";
        } else {
            colorBrand =
                "<label class='label label-danger' >NO</label>";
        }


        if (objRoles[i].Model == "true") {
            colorModel =
                "<label class='label label-success' >YES</label>";
        } else {
            colorModel =
                "<label class='label label-danger' >NO</label>";
        }


        if (objRoles[i].Status == "1") {
            htmlBotonStatus = 'boton_danger';
            title = "DISABLE";
            colorStatus = "<label class='label label-success' >ENABLED</label>";
        } else {
            htmlBotonStatus = 'boton_success';
            title = "ENABLE";
            colorStatus = "<label class='label label-danger' >DISABLED</label>";
        }




        if (pos == 0) {
            Tabla_Roles.row.add([
                String(objRoles[i].ID),
                String(quitarCaracteres(objRoles[i].Rol)),
                String(colorUsers),
                String(colorCustomers),
                String(colorVehicles),
                String(colorDrivers),
                String(colorDepartment),
                String(colorCostCenter),
                String(colorPerfiles),
                String(colorBrand),
                String(colorModel),
                String(colorConfiguration),
                String(colorStatus),

                String('<button type="button" onclick="MostrarDivEditar(' + i + ',' + objRoles[i].ID +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button" onclick="statusVehicles(' + i + ',' + objRoles[i].ID +
                    ')" class="' + htmlBotonStatus + '"> ' + title + '</button>'),


            ]);
        }


    }


    Tabla_Roles.column('1:visible').draw();



}







function MostrarDivEditar(pos, id) {
    console.log("edit");
    try {

        $('#divEditarUsuario').show();
        $('#divCatalogoRoles').hide();
        //llenar la informacion del usuario
        $('#ID').val(objRoles[pos].ID);
        $('#Rol').val(objRoles[pos].Rol);
        $('#Users').prop('checked', JSON.parse(objRoles[pos].Users));
        $('#Customers').prop('checked', JSON.parse(objRoles[pos].Customers));
        $('#Vehicles').prop('checked', JSON.parse(objRoles[pos].Vehicles));
        $('#Drivers').prop('checked', JSON.parse(objRoles[pos].Drivers));
        $('#Department').prop('checked', JSON.parse(objRoles[pos].Department));
        $('#CostCenter').prop('checked', JSON.parse(objRoles[pos].CostCenter));
        $('#Profiles').prop('checked', JSON.parse(objRoles[pos].Perfiles));
        $('#Brand').prop('checked', JSON.parse(objRoles[pos].Brand));
        $('#Model').prop('checked', JSON.parse(objRoles[pos].Model));
        $('#Configuration').prop('checked', JSON.parse(objRoles[pos].Configuration));
        $("#Status").val(objRoles[pos].Status);
    } catch (error) {

    }




}

var datosT;

function UpdateRolDisabled(id, valor) {
    swal.fire({
            title: "SURE YOU WANT DELETE THIS ROLE?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    Id: id
                };

                var sURL = IPWS + "WsDeleteRol";
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
                            swal("GOOD JOB!", "ROL DELETED SUCCESSFULL!", "success")

                            llenarObjRoles("");
                            UpdateContenedor('Roles');

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");
                            llenarObjRoles("");
                            UpdateContenedor('Roles');
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


function UpdateRol() {
    try {
        var ID = $('#ID').val();
        var Rol = $('#Rol').val();
        var Users = $('#Users').prop('checked');
        var Customers = $('#Customers').prop('checked');
        var Vehicles = $('#Vehicles').prop('checked');
        var Drivers = $('#Drivers').prop('checked');
        var Department = $('#Department').prop('checked');
        var CostCenter = $('#CostCenter').prop('checked');
        var Perfiles = $('#Profiles').prop('checked');
        var Brand = $('#Brand').prop('checked');
        var Model = $('#Model').prop('checked');
        var Configuration = $('#Configuration').prop('checked');
        var Status = $('#Status option:selected').val();


        $('#error').hide();
        swal.fire({
                title: "Are you sure?",
                text: "THIS ROLE WILL BE UPDATED!",
                icon: "warning",
                buttons: true,

            })


            .then((willDelete) => {
                if (willDelete) {
                    var para = {
                        "ID": ID,
                        "Rol": Rol,
                        "Users": Users,
                        "Customers": Customers,
                        "Vehicles": Vehicles,
                        "Drivers": Drivers,
                        "Department": Department,
                        "CostCenter": CostCenter,
                        "Perfiles": Perfiles,
                        "Brand": Brand,
                        "Model": Model,
                        "Configuration": Configuration,
                        "Status": Status,
                    };


                    var sURL = IPWS + "WsUpdateRol";
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
                                swal.fire("OK!", "ROLE UPDATED SUCCESSFULLY", "success");
                                UpdateContenedor('Roles');
                            } else {
                                swal.fire("Error", "UPDATE ERROR", "error");
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


    } catch (error) {

    }

}



function reset() {
    $('#ID').val(objUsers[pos].ID);
    $('#Rol').val(objUsers[pos].Rol);
    $('#Users').prop('checked', false);
    $('#Customers').prop('checked', false);
    $('#Drivers').prop('checked', false);
    $('#Vehicle').prop('checked', false);
    $('#Configuration').prop('checked', false);
    $('#Status option:first').prop('selected', true);

}


var ocultarelementos = 0;
$('#seeAll').click(function() {
    if (ocultarelementos == 0) {
        ocultarelementos = 1;
        $("#icono").removeClass("glyphicon glyphicon-eye-open");
        $("#icono").addClass("glyphicon glyphicon-eye-close");
        llenarObjRoles("7");
    } else {
        ocultarelementos = 0;
        $("#icono").removeClass("glyphicon glyphicon-eye-close");
        $("#icono").addClass("glyphicon glyphicon-eye-open");
        llenarObjRoles("");
    }
});


function statusVehicles(pos, id) {
    console.log("dis");

    if (objRoles[pos].Status == "1") {

        UpdateDisabled(pos, objRoles[pos].ID, "ROL", "ID", "Local");

    } else {

        UpdateEnabled(pos, objRoles[pos].ID, "ROL", "ID", "Local");
    }
}

function UpdateDisabled(pos, id, table, nameid, BDD) {
    swal.fire({
            title: "SURE YOU WANT DISABLED THIS ROLE?",
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
                            swal.fire("GOOD JOB!", "ROLE DISABLED SUCCESSFULLY!", "success");

                            llenarObjRoles("");
                            UpdateContenedor('Roles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal.fire("Error,TRY AGAIN!", "error");

                            llenarObjRoles("");
                            UpdateContenedor('Roles');
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
    swal.fire({
            title: "SURE YOU WANT ENABLED THIS ROLE?",
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
                    nameStatus: "Status"
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
                            swal.fire("GOOD JOB!", "ROLE ENABLED SUCCESSFULLY!", "success")

                            llenarObjRoles("");
                            UpdateContenedor('Roles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal.fire("Error,TRY AGAIN!", "error");

                            llenarObjRoles("");
                            UpdateContenedor('Roles');
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
pdfMake.createPdf(documentDefinition).download('ROLES_REPORT_"'+moment(new Date()).subtract(5, 'hours').format('MMMM,DD, YYYY')+'".pdf');
}

var datos = [];
var detalle = [];
function getDatosBMW() {
var dentro;

var id = document.getElementById("ID").checked;
var role = document.getElementById("ROLE").checked;
var user = document.getElementById("USER").checked;
var company = document.getElementById("COMPANY").checked;
var vehicle = document.getElementById("VEHICLE").checked;
var driver = document.getElementById("DRIVER").checked;
var department = document.getElementById("DEPARTMENT").checked;
var cost = document.getElementById("COST").checked;
var profile = document.getElementById("PROFILE").checked;
var brand = document.getElementById("BRAND").checked;
var model = document.getElementById("MODEL").checked;
var configuration = document.getElementById("CONFIGURATION").checked;
var status = document.getElementById("STATUS").checked;

var arrayN = ['ID', 'ROLE', 'USER', 'COMPANY', 'VEHICLE', 'DRIVER', 'DEPARTMENT', 'COST', 'PROFILE', 'BRAND', 'MODEL', 'CONFIGURATION', 'STATUS'];
var detail = [
    [
        {
            text: 'ID',
            style: 'tableSubtitulo'
        },
        {
            text: 'ROLE',
            style: 'tableSubtitulo'
        },
        {
            text: 'USER',
            style: 'tableSubtitulo'
        },
        {
            text: 'COMPANY',
            style: 'tableSubtitulo'
        },
        {
            text: 'VEHICLE',
            style: 'tableSubtitulo'
        },
        {
            text: 'DRIVER',
            style: 'tableSubtitulo'
        },
        {
            text: 'DEPARTMENT',
            style: 'tableSubtitulo'
        },
        {
            text: 'COST',
            style: 'tableSubtitulo'
        },
        {
            text: 'PROFILE',
            style: 'tableSubtitulo'
        },
        {
            text: 'BRAND',
            style: 'tableSubtitulo'
        },
        {
            text: 'MODEL',
            style: 'tableSubtitulo'
        },
        {
            text: 'CONFIGURATION',
            style: 'tableSubtitulo'
        },
        {
            text: 'STATUS',
            style: 'tableSubtitulo'
        }
    ]
];
for (let index = 0; index < objRoles.length; index++) {
    if (id) {
        datos.push({
            text: objRoles[index].ID,
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
            text: quitarCaracteres(objRoles[index].Rol),
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
            text: objRoles[index].Users,
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
            text: objRoles[index].Customers,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (vehicle) {
        datos.push({
            text: objRoles[index].Vehicles,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (driver) {
        datos.push({
            text: objRoles[index].Drivers,
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
            text: objRoles[index].Department,
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
            text: objRoles[index].CostCenter,
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
            text: objRoles[index].Perfiles,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (brand) {
        datos.push({
            text: objRoles[index].Brand,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (model) {
        datos.push({
            text: objRoles[index].Model,
            style: 'tableText'
        });
    }else{
        datos.push({
            text: '',
            style: 'tableText'
        }); 
    }
    if (configuration) {
        datos.push({
            text: objRoles[index].Configuration,
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
        if (objRoles[index].Status == 1) {
            estatus = "ENABLED";

            htmlBotonStatus = 'boton_danger';
            title = "DISABLED";
        } else if (objRoles[index].Status != 1) {
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
        widths: [20, 95, 40, 40, 40, 40, 40, 40, 40, 40,40, 40 ,80],
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
        text: 'ROLES REPORT',
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
var role = document.getElementById("ROLE").checked;
var user = document.getElementById("USER").checked;
var company = document.getElementById("COMPANY").checked;
var vehicle = document.getElementById("VEHICLE").checked;
var driver = document.getElementById("DRIVER").checked;
var department = document.getElementById("DEPARTMENT").checked;
var cost = document.getElementById("COST").checked;
var profile = document.getElementById("PROFILE").checked;
var brand = document.getElementById("BRAND").checked;
var model = document.getElementById("MODEL").checked;
var configuration = document.getElementById("CONFIGURATION").checked;
var status = document.getElementById("STATUS").checked;

llenarTablaExcel();

if (id) {
    $(".id").show();
} else {
    $(".id").hide();
}
if (role) {
    $(".role").show();
} else {
    $(".role").hide();
}
if (user) {
    $(".user").show();
} else {
    $(".user").hide();
}
if (company) {
    $(".company").show();
} else {
    $(".company").hide();
}
if (vehicle) {
    $(".vehicle").show();
} else {
    $(".vehicle").hide();
}

if (driver) {
    $(".driver").show();
} else {
    $(".driver").hide();
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
if (profile) {
    $(".profile").show();
} else {
    $(".profile").hide();
}

if (brand) {
    $(".brand").show();
} else {
    $(".brand").hide();
}
if (model) {
    $(".model").show();
} else {
    $(".model").hide();
}
if (configuration) {
    $(".configuration").show();
} else {
    $(".configuration").hide();
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
$("#ROLE").prop("checked", false);
$("#USER").prop("checked", false);
$("#COMPANY").prop("checked", false);
$("#VEHICLE").prop("checked", false);
$("#DRIVER").prop("checked", false);
$("#DEPARTMENT").prop("checked", false);
$("#COST").prop("checked", false);
$("#PROFILE").prop("checked", false);
$("#BRAND").prop("checked", false);
$("#MODEL").prop("checked", false);
$("#CONFIGURATION").prop("checked", false);
$("#STATUS").prop("checked", false);
$("#ALL").prop("checked", false);
}
$('#ALL').change(function() {

if ($(this).is(":checked")) {

$("#ID").prop("checked", true);
$("#ROLE").prop("checked", true);
$("#USER").prop("checked", true);
$("#COMPANY").prop("checked", true);
$("#VEHICLE").prop("checked", true);
$("#DRIVER").prop("checked", true);
$("#DEPARTMENT").prop("checked", true);
$("#COST").prop("checked", true);
$("#PROFILE").prop("checked", true);
$("#BRAND").prop("checked", true);
$("#MODEL").prop("checked", true);
$("#CONFIGURATION").prop("checked", true);
$("#STATUS").prop("checked", true);

} else {
$("#ID").prop("checked", false);
$("#ROLE").prop("checked", false);
$("#USER").prop("checked", false);
$("#COMPANY").prop("checked", false);
$("#VEHICLE").prop("checked", false);
$("#DRIVER").prop("checked", false);
$("#DEPARTMENT").prop("checked", false);
$("#COST").prop("checked", false);
$("#PROFILE").prop("checked", false);
$("#BRAND").prop("checked", false);
$("#MODEL").prop("checked", false);
$("#CONFIGURATION").prop("checked", false);
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
    link.download = "ROLES_REPORT_"+fecha+".xls";
    link.href = uri + base64(format(template, ctx))
    link.click();
}
function llenarTablaExcel() {
    document.getElementById('fechaReporteTT').innerHTML = "DATE: " + moment(new Date()).subtract(5, 'hours').format(
        'MMMM,DD, YYYY');

        document.getElementById('horareporteTT').innerHTML = "HOUR: " + moment(new Date()).subtract(5, 'hours').format(
        'HH:mm');
var id = document.getElementById("ID").checked;
var role = document.getElementById("ROLE").checked;
var user = document.getElementById("USER").checked;
var company = document.getElementById("COMPANY").checked;
var vehicle = document.getElementById("VEHICLE").checked;
var driver = document.getElementById("DRIVER").checked;
var department = document.getElementById("DEPARTMENT").checked;
var cost = document.getElementById("COST").checked;
var profile = document.getElementById("PROFILE").checked;
var brand = document.getElementById("BRAND").checked;
var model = document.getElementById("MODEL").checked;
var configuration = document.getElementById("CONFIGURATION").checked;
var status = document.getElementById("STATUS").checked;


    $("#emp_body1").empty();
    var tr;
    for (var i = 0; i < objRoles.length; i++) {
        tr = $('<tr/>');
        if(id){
            tr.append(
            "<td class='id' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +
            objRoles[i].ID + "</td> ");
        }else{
            tr.append(
            "<td class='id' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(role){
            tr.append(
            "<td class='role' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            quitarCaracteres(objRoles[i].Rol) + "</td>");
        }else{
            tr.append(
            "<td class='role' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(user){
            tr.append(
            "<td class='user' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Users + "</td>");
        }else{
            tr.append(
            "<td class='user' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(company){
            tr.append(
            "<td class='company' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Customers + "</td>");
        }else{
            tr.append(
            "<td class='company' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(vehicle){
            tr.append(
            "<td class='vehicle' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Vehicles + "</td>");
        }else{
            tr.append(
            "<td class='vehicle' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(driver){
            tr.append(
            "<td class='driver' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Drivers + "</td>");
        }else{
            tr.append(
            "<td class='driver' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }

        if(department){
            tr.append(
            "<td class='department' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Department + "</td>");
        }else{
            tr.append(
            "<td class='department' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(cost){
            tr.append(
            "<td class='cost' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].CostCenter + "</td>");
        }else{
            tr.append(
            "<td class='cost' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(profile){
            tr.append(
            "<td class='profile' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Perfiles + "</td>");
        }else{
            tr.append(
            "<td class='profile' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(brand){
            tr.append(
            "<td class='brand' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Brand + "</td>");
        }else{
            tr.append(
            "<td class='brand' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(model){
            tr.append(
            "<td class='model' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Model + "</td>");
        }else{
            tr.append(
            "<td class='model' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(configuration){
            tr.append(
            "<td class='configuration' style='text-align: center;background: #dddede;border: 1px solid black;font-family:BMWTypeCondensedRegular;'>" +
            objRoles[i].Configuration + "</td>");
        }else{
            tr.append(
            "<td class='configuration' style='text-align: center;background: #fff;border: 1px solid black;font-family:BMWTypeCondensedRegular;'> " +"" + "</td> ");
        }
        if(status){
            if(objRoles[i].Status==1){
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
