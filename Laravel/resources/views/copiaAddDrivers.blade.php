<style>
body { display:none; }    
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
</style>


<div class="clearfix"></div>

<div class="row">

    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>New Driver COPIAAAAA </h2>

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
                                    <input type="text" class="form-control validar" id="myInput" data-id=""
                                        name="myInput" autocomplete="off" placeholder="Name Company"
                                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                </div>
                                <div class="input-group autocomplete" id="divManager">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Manager
                                        <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control validar" id="manager" name="manager"
                                        placeholder="Name Manager"  onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
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
                                        class="form-control  validar" autocomplete="off" data-toggle="tooltip"
                                        data-placement="right" title=""
                                        data-original-title="Company with which the driver will be registered"
                                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                </div>




                                <div class="col-md-3">

                                    <div class="input-group" id="divtel">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="LastName">Last Name
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control validar" id="LastName" name="lastName"
                                        placeholder="" 
                                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                        



                                    </div>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="SecondLastName">S. Last
                                            Name
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-3" id="divLastName">
                                <input type="text" class="form-control validar" id="SecondLastName"
                                            name="SecondLastName" placeholder="" 
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    

                                </div>
                                <div class="col-md-3">

                                    <div class="input-group" id="divSecondLastName">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="telefono">Tel
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control validar" id="telefono" name="telefono"
                                            placeholder="(555) 555-5555" autocomplete="true">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email
                                    <span class="required">*</span>
                                </label>
                                <div class="col-md-3" id="divCorreo">
                                    <input type="email" id="correo" name="correo" required="required"
                                        class="form-control  validar"  data-validation="email" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
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
                                            name="description" placeholder="" autocomplete="true" maxlength="30" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
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

                                    <div class="input-group" id="divCostCenter">
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
                                        autocomplete="off">

                                </div>

                            </div>
                        </form>
                    </div>










                    <div id="step-33" class="" style="text-align: -webkit-center;">


                        <h2 class="StepTitle text-left">Step 3 Drivers Profile</h2>

                        <div class="col-md-6 centrado " style="    margin-left: 25%;">
                            <label clas="" for="">Select a Driver Profile *</label>
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
                                <label class="form-check-label inputPerfiles" for="Monday">Monday</label>
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
                                <input class="form-check-input inputPerfiles" type="checkbox" id="All" value="option3">
                                <label class="form-check-label" for="All">All</label>
                            </div>

                            <br>
                            <br>

                            <br>


                            <div class="form-group mb-0 ridge">
                                <div class="col-sm-12">
                                    <div class="row" style="justify-content: center;  align-items: center;">


                                        <div class="">
                                            <label clas="" for="">Start Time</label>

                                            <div class="input-group" id="hraini">
                                                <input type='text' class="form-control validar inputPerfiles"
                                                    id="hraini1" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>

                                            </div>
                                        </div>

                                        <div class="">
                                            <label clas="" for="">End Time</label>

                                            <div class="input-group" id="hrafin">
                                                <input type='text' class="form-control validar inputPerfiles"
                                                    id="hrafin1" />
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
function HacerResumen() {
    //SumaryCompany SumaryModel SumaryBarCode SumaryResponsible

    $('#SumaryCompany').html(($('#myInput').val() != "") ? $('#myInput').val() : "----");
    $('#SumaryUserNAme').html(($('#name').val() != "") ? $('#name').val() : "----");
    $('#SumaryManager').html(($('#manager').val() != "") ? $('#manager').val() : "----");



    $('#SumaryEmail').html(($('#correo').val() != "") ? $('#correo').val() : "----");
    $('#SumaryTelephone').html(($('#telefono').val() != "") ? $('#telefono').val() : "----");


}
var countries = [];
var arrCustomers1 = [];
var ArrChoferes = [];
var ArrChoferes1 = [];
var click = 0;
var regex = /(\d+)/g;
codcli = $("#myInput").val();
codcli = codcli.match(regex);

$(document).ready(function() {

    FillCustomer();
    FillChoferes();
    llenarComboPerfiles();
    llenarComboDepartamento();
    $('.inputPerfiles').prop("disabled", true);
    habilitarCombos = false;



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
            countries.push([customer[i].den, customer[i].cod]);
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

function validarAutocomplete(array, value) {
    var result = $.inArray(value, array);
    if (result != -1) {
        return "true";
    } else {
        return "false";
    }
}


function validaciones() {
    console.log("utlima");
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
            SaveDriver();
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




function validateStep1() {
    var textIdioma1 = "";
    var Idioma = "English";
    var alertCustomerInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The company is invalid.';
    var alertManagerInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The Manager is invalid.';
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

                var manager = $("#manager").val();
                //var resultmanager = validarAutocomplete(ArrChoferes1, manager);

                if (result == "true") {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);
                } else {
                    $("#grupo__BusinessName").removeClass("has-ok has-success");
                    $("#grupo__BusinessName").addClass("has-error has-danger");
                    band.push(2);



                }

                /*if (resultmanager == "true") {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);

                } else {
                    $("#divManager").removeClass("has-ok has-success");
                    $("#divManager").addClass("has-error has-danger");
                    band.push(3);
                }*/
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

        if (inputs[i].id == "name" || inputs[i].id == "LastName" || inputs[i].id == "SecondLastName" || inputs[i].id ==
            "correo" || inputs[i].id == "tag" || inputs[i].id == "telefono" ||  inputs[i].id == "description") {
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
                //    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                //    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                //    band.push(0);
                //} else {
                //    $("#divManager").removeClass("has-ok has-success");
                //    $("#divManager").addClass("has-error has-danger");
                //    band.push(2);
                //}
            }
        }


    }

    var Combos = $(".validarCombo");
    for (let i = 0; i < Combos.length; i++) {

        if (Combos[i].id == "comboDepartamento" || Combos[i].id == "comboCentroCostos") {
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







function SaveDriver() {
    console.log("Driver");
    var codcli;
    var diacar = 0;

    // var regex = /(\d+)/g;
    // codcli = $("#myInput").val();
    codcli = document.getElementById("myInput").dataset.id;


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
    var nombre = $('#name').val();
    var LastName = $('#LastName').val();
    var SecondLastName = $('#SecondLastName').val();

    var correo = $('#correo').val();
    var tag = $('#tag').val();
    var telefono = $('#telefono').val();
    var manager = $('#manager').val();
    var description = $('#description').val();
    var Perfil = parseInt($('#comboPerfiles option:selected').val());
    var Departamento = parseInt($('#comboDepartamento option:selected').val());
    var CentroCostos = parseInt($('#comboCentroCostos option:selected').val());


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
            text: "THIS DRIVER WILL BE SAVED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {
                    "codcli": codcli,
                    "den": description,
                    "diacar": diacar,
                    "hraini": hraini,
                    "hrafin": hrafin,
                    "tag": tag,
                    "Nombre": nombre,
                    "Telefono": telefono,
                    "Gerente": manager,
                    "Correo": correo,
                    "IdIdioma": "1",
                    "LastName": LastName,
                    "Perfil": Perfil,
                    "Departamento": Departamento,
                    "CentroCostos": CentroCostos,
                    "SecondLastName": SecondLastName,


                };
                var sURL = IPWS + "WsInsertarChofer";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    headers: {Authorization: 'Bearer '+objUsuario.Token },
                    data: para,
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("OK! DRIVER SAVED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('Drivers');
                        } else {
                            if(data.Status=="DUPLICATE"){
                                swal("Error", "DUPLICATE TAG", "error");
                            }else{
                                swal("Error", "ERROR UPDATING DATA", "error");
                            }
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
        next: $('<a id="next" class="glyphicon glyphicon-chevron-right">' + options.labelNext + '</a>')
            .attr("href",
                "#").addClass("buttonNext btn btn-round btn-info"),
        previous: $('<a id="Previous" class="glyphicon glyphicon-chevron-left">' + options.labelPrevious +
                '</a>')
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
            "<button type='input' onclick='validaciones();' id='Save_Driver'class='btn btn-round' style='color:white;' >Save<span class='glyphicon glyphicon-chevron-right'></span></button>"
        );
        $("#Save_Driver").css({
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
                    $("#Save_Driver").show();
                } else {
                    $("#Save_Driver").hide();
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
                    $("#Save_Driver").show();
                } else {
                    $("#Save_Driver").hide();
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
                $("#Save_Driver").hide();
            } else {
                $("#Save_Driver").show();
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
    $("#Save_Driver").hide();
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

autocomplete(document.getElementById("myInput"), countries);
autocomplete(document.getElementById("manager"), ArrChoferes);
$(function() {
    $('#hraini').datetimepicker({
        format: 'HH:mm'
    });
    $('#hrafin').datetimepicker({
        format: 'HH:mm'
    });


});

var Perfiles;

function llenarComboPerfiles() {
    console.log('perfiles');
    try {
        //http://localhost:85/home/GetPerfiles?TipoPerfil=DRIVER
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
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });



    } catch (error) {

    }
}
var CentroCostos;
$('#comboDepartamento').change(function() {
    //comboDepartamento
    try {
        var depa = parseInt($('#comboDepartamento option:selected').val());
        //http://localhost:85/home/GetPerfiles?TipoPerfil=DRIVER
        var sURL = IPWS + "GetCentroCostos?idDepartamento=" + depa;
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
                        optionsCombo += '<option data-pos="' + i + '" value="' +
                            CentroCostos[i]
                            .id +
                            '">' +
                            CentroCostos[i].nameCentro + '</option>';
                    });
                    $('#comboCentroCostos').html(optionsCombo);

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


});
</script>
