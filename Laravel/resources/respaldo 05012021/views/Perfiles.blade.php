<style>
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



                        <table id="datatable-buttons"
                            class="table table-striped table-bordered dataTable no-footer dtr-inline"
                            style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info;"
                            style="display: none;">

                            <thead>

                                <tr role="row">

                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 257px;" aria-sort="ascending"
                                        aria-label="ID: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 380px;"
                                        aria-label="Name: activate to sort column ascending">Profile</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        aria-label="UserName: activate to sort column ascending">Type Profile</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        aria-label="UserName: activate to sort column ascending">Company</th>



                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Loading days</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Mail: activate to sort column ascending">Start Time</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Company: activate to sort column ascending">End Time</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Max Loader (Lts)</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Amount day (Lts)</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Amount week (Lts)</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Amount month (Lts)</th>


                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Station</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Product</th>


                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Edit: activate to sort column ascending">Edit</th>

                                    <th id="colU" class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                        rowspan="1" colspan="1" style="width: 155px;"
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



                        <table id="datatable-buttonsD"
                            class="table table-striped table-bordered dataTable no-footer dtr-inline"
                            style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info;"
                            style="display: none;">

                            <thead>

                                <tr role="row">

                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 257px;" aria-sort="ascending"
                                        aria-label="ID: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 380px;"
                                        aria-label="Name: activate to sort column ascending">Profile</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        aria-label="UserName: activate to sort column ascending">Type Profile</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        aria-label="UserName: activate to sort column ascending">Company</th>



                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Loading days</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Mail: activate to sort column ascending">Start Time</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Company: activate to sort column ascending">End Time</th>



                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Status: activate to sort column ascending">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Edit: activate to sort column ascending">Edit</th>

                                    <th id="colU" class="sorting" tabindex="0" aria-controls="datatable-buttons"
                                        rowspan="1" colspan="1" style="width: 155px;"
                                        aria-label=": activate to sort column ascending">Actions
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




                    <div class="form-group mb-0 " id="divLimitesMaster" style="display:none;">
                        <div class="form-group mb-0">
                            <h2 class="StepTitle">Limits</h2>
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
        $('.inputPerfiles').prop("disabled", false);
    } else {
        llenarObjProfiles("0", "undefined", "VEHICLE");
        llenarTablaPV();
        $("#divTypeAll").show();
        $("#divTypeVehicle").show();
        $("#divTypeDriver").hide();
        $("#divEditarPV").hide();
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

function FillCustomer() {
    try {
        var sURL = IPWS + "GetClientes";
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







});





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
    $("tbody").empty();
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
        } else if (objPV[i].status != 0) {
            htmlBotonStatus = 'boton_success';
            title = "ENABLED";
            statusProfile = "<label class='label label-danger' >DISABLED</label>";
        }
        limpiarTabla();
        if (pos == 0) {
            Tabla_Vehicles.row.add([
                String(objPV[i].ID),
                String(objPV[i].namePerfil),
                String(objPV[i].tipoPerfil),
                String(objPV[i].xNombreCliente),
                //String("<label class='label label-info2'> " + objPV[i].tag + " </label>"),
                //String(objPV[i].den),
                String(convertDays(objPV[i].diacar)), //
                //String("<label class='label label-info2'> Mo-Tu-We-Th-Fr-Sa-Su </label>"),
                String(convertHoras(objPV[i].hraini)),
                String(convertHoras(objPV[i].hrafin)),

                String(objPV[i].candia),
                String(objPV[i].cansem),
                String(objPV[i].canmes),
                String(objPV[i].carmax),

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

    Tabla_Vehicles.column('1:visible').order('desc').draw()



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
                String(objPV[i].xNombreCliente),
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

    Tabla_Drivers.column('1:visible').order('desc').draw()



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
        $('#carmax').val("9999");
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
        if ($('#carmax').val() == "9999" && $('#candia').val() == "9999" && $('#cansem').val() == "9999" && $('#canmes')
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



    swal({
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





                };
                var sURL = IPWS +"WsUpdatePerfil";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    data: para,
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("OK! PROFILE UPDATED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('Perfiles');
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

                buttons: [{
                        //Botón para Excel
                        extend: 'excelHtml5',
                        footer: true,
                        title: 'Vehicles_' + today,
                        filename: 'Vehicles_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                            orthogonal: 'export'
                        },
                        //Aquí es donde generas el botón personalizado
                        text: '<button class="btn btn-success"> <i class="fa fa-file-excel-o"></i></button>',
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
                            $(col[11]).attr('width', 25);
                            var tagName = sheet1.getElementsByTagName('sz');
                            for (i = 0; i < tagName.length; i++) {
                                tagName[i].setAttribute("val", "12")
                            }

                        }

                    },
                    //Botón para PDF
                    {
                        extend: 'pdf',
                        footer: true,
                        title: 'Vehicles_' + today,
                        filename: 'Vehicles_' + today,

                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                        },

                        orientation: 'landscape',
                        pageSize: 'LEGAL',

                        tableHeader: {
                            alignment: 'center'
                        },
                        text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                        customize: function(doc) {
                            console.log("PDFFFF");
                            age = Tabla_Vehicles.column(12).data().toArray();
                            for (var i = 0; i < age.length; i++) {
                                var text = age[i].substring(35, 43);
                                if (text != "DISABLED") {
                                    doc.content[1].table.body[i + 1][12].fillColor = '#72DB3A';
                                } else {
                                    doc.content[1].table.body[i + 1][12].fillColor = '72DB3A';
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

                buttons: [{
                        //Botón para Excel
                        extend: 'excelHtml5',
                        footer: true,
                        title: 'Drivers Profile_' + today,
                        filename: 'Drivers Profile_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                            orthogonal: 'export'
                        },
                        //Aquí es donde generas el botón personalizado
                        text: '<button class="btn btn-success"> <i class="fa fa-file-excel-o"></i></button>',
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
                            $(col[11]).attr('width', 25);
                            var tagName = sheet1.getElementsByTagName('sz');
                            for (i = 0; i < tagName.length; i++) {
                                tagName[i].setAttribute("val", "12")
                            }

                        }

                    },
                    //Botón para PDF
                    {
                        extend: 'pdf',
                        footer: true,
                        title: 'Drivers Profile_' + today,
                        filename: 'Drivers Profile_' + today,

                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
                        },

                        orientation: 'landscape',
                        pageSize: 'LEGAL',

                        tableHeader: {
                            alignment: 'center'
                        },
                        text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                        customize: function(doc) {
                            console.log("PDFFFF");
                            age = Tabla_Drivers.column(12).data().toArray();
                            for (var i = 0; i < age.length; i++) {
                                var text = age[i].substring(35, 43);
                                if (text != "DISABLED") {
                                    doc.content[1].table.body[i + 1][12].fillColor = '#72DB3A';
                                } else {
                                    doc.content[1].table.body[i + 1][12].fillColor = '72DB3A';
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
    swal({
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
                    type: "GET",
                    async: false,
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("GOOD JOB!", "PROFILE DISABLED SUCCESSFULLY!", "success")
                            llenarObjProfiles("0", "undefined", type);
                            UpdateContenedor('Perfiles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");

                            llenarObjProfiles("0", "undefined", type);
                            UpdateContenedor('Perfiles');
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
    var TipoPerfil = $("#TypeProfile").val();
    var type = "";
    if (TipoPerfil == 0) {
        type = "DRIVER";

    } else {
        var type = "VEHICLE";
    }
    swal({
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
                    type: "GET",
                    async: false,
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("GOOD JOB!", "PROFILE ENABLED SUCCESSFULLY!", "success")
                            llenarObjProfiles("0", "undefined", type);
                            UpdateContenedor('Perfiles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");

                            llenarObjProfiles("0", "undefined", type);
                            UpdateContenedor('Perfiles');
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
</script>
