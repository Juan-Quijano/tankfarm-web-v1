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

#divHorario {
    background-color: #CCC;
    width: 100%;
    height: 100px;
    display: flex;
    justify-content: space-around;
}

.combosDias {
    float: left;
    margin: 10px;
}
</style>







<div class="clearfix"></div>

<div class="row" id="divEditarVehicle">
    <script></script>
    <div class="x_panel">
        <div class="">
            <h2>New Profile </h2>

            <div class="clearfix"></div>
        </div>

        <div class="col-sm-12">
            <div class="x_content">


                <div class="col-md-6 centrado " style="margin-left: 25%;">
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
                    </div>
                </div>
                <div id="divcomboTipoVehi" class="col-md-6 centrado " style="margin-left: 25%; display:none;">
                    <label clas="" for="">Select a Type Vehicle *</label>
                    <div class="input-group" id="divcomboTipoVehiculo">
                        <select style="display:inline;" name="comboTipoVehiculo" id="comboTipoVehiculo"
                            class="form-control validarCombo" data-toggle="tooltip" data-placement="right" title=""
                            data-original-title="Select the type of Vehicle ">
                            <option value="Select Option" selected disabled>Select Option
                            </option>
                            <option value="GENERAL">GENERAL
                            </option>
                            <option value="PRODUCTION">PRODUCTION
                            </option>



                        </select>



                    </div>
                </div>
                <div class="col-md-6 centrado" style="margin-left: 25%;">
                    <div class="col-md-6">
                        <label clas="" for="">Company</label>
                        <div class="input-group autocomplete" id="divCompany">

                            <input type="text" class="form-control validar" id="Company" data-id="" name="company"
                                autocomplete="off" placeholder="Name Company" data-placement="right"
                                data-original-title="Company with which the vehicle will be registered"
                                onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <label clas="" for="">Name Profile</label>
                        <div class="input-group" id="divNameProfile">
                            <input name="NameProfile" id="NameProfile" type="text" required class="form-control validar"
                                placeholder="Profile Name" data-toggle="tooltip" data-placement="right" title="">


                        </div>
                    </div>
                </div>
                <div class="col-md-6 centrado" style="margin-left: 25%;">
                    <div id="divHorario" style="display:inline;">

                        <div >
                            <div class="form-check form-check-inline checkbox combosDias">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Monday"
                                    value="option1">
                                <label class="form-check-label" for="Monday">Monday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox combosDias">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Tuesday"
                                    value="option2">
                                <label class="form-check-label" for="Tuesday">Tuesday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox combosDias">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Wednesday"
                                    value="option3">
                                <label class="form-check-label" for="Wednesday">Wednesday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox combosDias">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Thursday"
                                    value="option3">
                                <label class="form-check-label" for="Thursday">Thursday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox combosDias">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Friday"
                                    value="option3">
                                <label class="form-check-label" for="Friday">Friday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox combosDias">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Saturday"
                                    value="option3">
                                <label class="form-check-label" for="Saturday">Saturday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox combosDias">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="Sunday"
                                    value="option3">
                                <label class="form-check-label" for="Sunday">Sunday</label>
                            </div>
                            <div class="form-check form-check-inline checkbox combosDias">
                                <input class="form-check-input inputPerfiles" type="checkbox" id="All" value="option3">
                                <label class="form-check-label" for="All">All</label>
                            </div>
                        </div>

                        <br>
                        <br>
                        <div class="form-group mb-0 ridge">
                            <div class="col-sm-12">
                                <div class="row " style="    margin-left: 13%;">
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
                </div>
                <div id="step-5" class="" style="text-align: -webkit-center;">


                    <div class="form-group mb-0 " id="divLimitesMaster" style="display:none;">
                        <div class="form-group mb-0">
                            
                            <div class="col-sm-12">
                            <h2 class="StepTitle">Limits</h2>
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
            <button type="button" class="btn btn-success" onclick="validaciones();">Save</button>
        </div>

    </div>
</div>


</div>





<script>
var arrCustomers = [];
var arrCustomers1 = [];
$(document).ready(function() {

    FillCustomer();
    $('.inputPerfiles').prop("disabled", true);




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
var habilitarCombos;
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
$("#comboPerfiles").change(function() {
    if ($("#comboPerfiles").val() == "DRIVER") {
        $("#divLimitesMaster").hide();
        $("#divcomboTipoVehi").hide();
        $('.inputPerfiles').prop("disabled", false);
    }
    if ($("#comboPerfiles").val() == "VEHICLE") {
        $("#divLimitesMaster").show();
        $("#divcomboTipoVehi").show();
        
        $('.inputPerfiles').prop("disabled", false);
    }
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

            } else {
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



function SaveProfile() {
    console.log("perfil");
    var tipoPerfil = "";
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
    var typeProfile = $("#comboPerfiles").val();
    if (typeProfile == "1" || typeProfile == "VEHICLE") {

        var codgas = $('#codgas').val();
        var codprd = $('#codprd').val();
        var carmax = $('#carmax').val();
        var candia = $('#candia').val();
        var cansem = $('#cansem').val();
        var canmes = $('#canmes').val();
        var typeVehicle = $("#comboTipoVehiculo").val();
        if (typeVehicle =="PRODUCTION") {
            tipoPerfil = "VEHICLE-PRODUCTION";
        }else{
            tipoPerfil = "VEHICLE";
        }
        

        var comboLimites = $("#comboLimites").val();




    } else {
        tipoPerfil = "DRIVER";
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
            text: "THIS PROFILE WILL BE SAVED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {


                    "codcli": codcli,
                    "Unlimited": comboLimites,
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
                    "tipoPerfil": tipoPerfil,





                };
                var sURL = IPWS + "WsInsertarPerfil";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    data: para,
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("OK! PROFILE SAVED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('Perfiles');
                        } else {
                            swal("Error", "ERROR SAVED DATA", "error");
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
        var typeProfile = $("#comboPerfiles").val();
        if (typeProfile == "DRIVER" || typeProfile == 0) {
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

        SaveProfile();


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





var ListaDeDias = [];
var ListaHoras = [];
var nroveh;

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




$(function() {
    $('#hraini').datetimepicker({
        format: 'HH:mm'
    });
    $('#hrafin').datetimepicker({
        format: 'HH:mm'
    });
});


autocomplete(document.getElementById("Company"), arrCustomers);
</script>