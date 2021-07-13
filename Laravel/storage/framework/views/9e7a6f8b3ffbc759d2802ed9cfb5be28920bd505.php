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



* {
    box-sizing: border-box;
}

body {
    font: 16px Arial;
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

div.ridge {
    border-style: ridge;
}

/* Style the label to display next to the inputs */


/* Style the submit button */


/* Style the container */




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





.tamano {
    display: inline-block;
    margin-right: -10%;

}

.tamano1 {
    display: inline-block;
    margin-right: 1%;

}

.centrado {

    background-color: #fafafa;
    margin: 1rem;
    padding: 1rem;
    border: 2px solid #ccc;
    /* IMPORTANTE */
    text-align: center;

}
</style>

<style>
    .dropbtn {
        background-color: #1abb9c;
        border: none;
        color: white;
        padding: 4px 8px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
        font-weight: 900;
        font-size: 125%;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {}
    select option[disabled] {
        color:#000;
        font-weight: bold;
    }
</style>

<div class="row" id="divEditarVehicle">

    <div class="x_panel">
        <div class="">
            <span class="step_descr">New Vehicle </span>
        </div>

        <div class="col-sm-8">
            <div class="x_content">


                <div id="wizard_verticle" class="form_wizard wizard_horizontal">
                    <ul class="list-unstyled wizard_steps">
                        <li>
                            <a href="#step-1" class="selected" isdone="1" rel="1">
                                <span class="step_no">1</span>
                                <span class="step_descr">
                                    Company
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-2" class="disabled" isdone="0" rel="2">
                                <span class="step_no">2</span>
                                <span class="step_descr">
                                    Vehicle

                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-3" class="disabled" isdone="0" rel="3">
                                <span class="step_no">3</span>
                                <span class="step_descr">
                                    Barcode
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-4" class="disabled" isdone="0" rel="4">
                                <span class="step_no">4</span>
                                <span class="step_descr">
                                    Responsable
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#step-5" class="disabled" isdone="0" rel="5">
                                <span class="step_no">5</span>
                                <span class="step_descr">
                                    Profile
                                </span>
                            </a>
                        </li>
                    </ul>

                    <div class="">
                        <div id="step-1">
                            <br>
                            <br>
                            <br>
                            <h2 class="StepTitle">Step 1 Select Company</h2>
                            <form class="form-horizontal form-label-left">

                                <div class="col-md-6">
                                    <div class="input-group autocomplete" id="divCompany">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Company
                                            <span class="required">*</span>
                                        </label>
                                        <input type="text" class="form-control validar cambio" id="company" data-id=""
                                            name="company" autocomplete="off" placeholder="Name Company"
                                            data-placement="right"
                                            data-original-title="Company with which the vehicle will be registered"
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
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
                        </div>
                        <div id="step-2">
                            <h2 class="StepTitle">Step 2 Select Properties</h2>
                            <form class="form-horizontal form-label-left">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Brand
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 " id="divBrand">
                                        <select name="marca" id="marca" class="form-control validarCombo"
                                            data-toggle="tooltip" data-placement="right" title=""
                                            data-original-title="Brand with which the vehicle will be registered">
                                            <option value="Select Option" selected>Select Option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Model
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 " id="divModelo">
                                        <select name="modelo" id="modelo" class="form-control validarCombo"
                                            data-toggle="tooltip" data-placement="right" title=""
                                            data-original-title="Model with which the vehicle will be registered">
                                            <option value="Select Option" selected disabled>Select Option</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Plates
                                        <span class="required">*</span>
                                    </label>
                                    <div class="  col-md-6 col-sm-6 " id="divPlacas">
                                        <input type="text" id="placas" maxlength="10" required="required"
                                            autocomplete="off" class="form-control validar" data-toggle="tooltip"
                                            data-placement="right" title=""
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">VIN
                                        <span class="required">*</span>
                                    </label>
                                    <div class="  col-md-6 col-sm-6 " id="divVIN">
                                        <input type="text" id="VIN" maxlength="100" required="required"
                                            autocomplete="off" class="form-control validar" data-toggle="tooltip"
                                            data-placement="right" title=""
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-3">
                            <h2 class="StepTitle">Step 3 Enter The Barcode</h2>
                            <div class="row centrado">

                                <select name="combobarcode" id="combobarcode" class="form-control validarCombo"
                                    data-toggle="tooltip" data-placement="right" title=""
                                    data-original-title="Select option">
                                    <option value="Select Option" selected disabled>Select Option</option>
                                    <option value="1">Generate barcode</option>
                                    <option value="2">Define barcode </option>
                                </select>


                            </div>


                            <section id="divPanel" style="display: none;">
                                <div class="row centrado">

                                    <div class="col-sm-4" id="DivCodigoBarras">
                                        <a class="btn btn-app" href="javascript:generarBarCod();" data-toggle="tooltip"
                                            data-placement="right" title=""
                                            data-original-title="Please click to generate a barcode to the vehicle">
                                            <i class="fa fa-repeat"></i> Generate BarCode
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <iframe id="iframe" frameborder="0" width='600' height='400'></iframe>
                                        <canvas id="CodigoBarras" style=" margin: 0% 0% 0% 20%; display:none;"></canvas>
                                    </div>
                                </div>
                            </section>



                            <section id="divPanel2" style="display: none;">
                                <div class="row centrado">

                                    <div class="col-sm-8" id="DivInputCodigoBarras">
                                        <input type="text" id="inputCodigobarras" required="required" autocomplete="off"
                                            class="form-control validar" data-toggle="tooltip" data-placement="right"
                                            title="" data-original-title="Write Barcode" placeholder="Write barcode"
                                            onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                    </div>


                                    <div class="col-sm-4">
                                        <iframe id="iframe" frameborder="0" width='600' height='400'></iframe>
                                        <canvas id="CodigoBarras" style=" margin: 0% 0% 0% 20%; display:none;"></canvas>
                                    </div>
                                </div>
                            </section>






                        </div>
                        <div id="step-4">
                            <h2 class="StepTitle">Step 4 Assign Driver Responsable</h2>
                            <form class="form-horizontal form-label-left">
                                <div class="form-group row" autocomplete>


                                    <div class="col-md-6">
                                        <div class="input-group autocomplete" id="divRespondable">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="">
                                                Responsable
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control validar" id="Responsable"
                                                name="Responsable" autocomplete="off" placeholder="Name Responsable"
                                                data-original-title="The person who will be in charge of managing the vehicle" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                                        </div>
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

                        </div>

                        <div id="step-5" class="" style="text-align: -webkit-center;">


                            <h2 class="StepTitle text-left">Step 5 Assign Profile</h2>



                            <div class="col-md-6 centrado " style="    margin-left: 25%;">
                                <label clas="" for="">Select a Vehicle Profile *</label>
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
                                    <label class="form-check-label" for="Monday">Monday</label>
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
                                    <input class="form-check-input inputPerfiles" type="checkbox" id="All"
                                        value="option3">
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
                                                    <input type='text' class="form-control validar inputPerfiles"
                                                        id="hraini1" data-toggle="tooltip" data-placement="right"
                                                        title=""
                                                        data-original-title="Enter the start time for the schedule" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-time"></span>

                                                </div>
                                            </div>

                                            <div class="">
                                                <br>
                                                <label clas="" for="">End Time</label>

                                                <div class="input-group" id="hrafin">
                                                    <input type='text' class="form-control validar inputPerfiles"
                                                        id="hrafin1" data-toggle="tooltip" data-placement="right"
                                                        title=""
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
                <div id="divDepartamento" style="display:inline;">
                    <div class="col-md-6 centrado" style="margin-left: 25%;" >
                        <div class="col-md-12">
                        <div id="divCombo1" class="form-group">
                            <label class="control-label mb-10 text-left">Departments  </label>
                            
                        </div>
                        <div id="divDepartamentosButton" class="form-group">
                            <div id="DepartamentosButton"
                                style=' margin: 1rem;  padding: 1rem;  border: 2px solid #ccc; background-color: #fafafa;'>

                            </div>

                        </div>
                            


                            <input  type="text"  hidden class="" id="idDepas" name="destinatarios" >
                            <br>
                            <p id="cantDestinatarios"></p>
                            <label class="control-label mb-10 text-left">Ask for Odometer  </label>
                            <br>
                            <div class="form-check form-check-inline checkbox">
                                    <input class="form-check-input " disabled type="checkbox" id="Odometro"
                                        value="option1">
                                    <label class="form-check-label" for="Odometro">Odometer</label>
                                </div>
                        </div>



                    </div>
                </div>
                            <div class="form-group mb-0">
                                
                                <div class="col-sm-12">
                                    <div class="row" style="margin-left: 25%;">

                                        <div class="col-md-4">
                                            <label clas="" for="">Station</label>
                                            <div class="input-group" id="divstation">
                                                <select name="codgas" id="codgas"
                                                    class="form-control validarCombo inputPerfiles"
                                                    data-toggle="tooltip" data-placement="right" title=""
                                                    data-original-title="Select the station where you can dispatch fuel">
                                                    <option value="Select Option" selected disabled>Select Option
                                                    </option>
                                                    <option value="0">ALL</option>
                                                    <option value="1">TANK FARM [DIESEL]</option>




                                                </select>


                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label clas="" for="">Fuel</label>
                                            <div class="input-group" id="divComb">
                                                <select name="codprd" id="codprd"
                                                    class="form-control validarCombo inputPerfiles"
                                                    data-toggle="tooltip" data-placement="right" title=""
                                                    data-original-title="Select the type of fuel">
                                                    <option value="Select Option" selected disabled>Select Option
                                                    </option>
                                                    <option style="display:none;" value="1">GASOLINE</option>

                                                    <option value="3">DIESEL </option>


                                                </select>


                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 centrado " style="    margin-left: 25%;">
                                <label clas="" for="">Limits Fuel Options *</label>
                                <div class="input-group" id="divcomboLimites">
                                    <select name="comboLimites" id="comboLimites"
                                        class="form-control validarCombo inputPerfiles" data-toggle="tooltip"
                                        data-placement="right" title=""
                                        data-original-title="Select the type of schedule ">
                                        <option value="Select Option" selected disabled>Select Option
                                        </option>
                                        <option value="1">Unlimited Fuel</option>

                                        <option value="2">Define Limits </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-0 " id="divLimites" style="display:none;">

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
        <div class="col-sm-4">
            <h2>Summary</h2>
            <div id="borderResumen">
                <form>
                    <div class="form-group text-left sepborder">
                        <h5 class="card-title" style="margin-top: 10px;">Company</h5>

                        <p class="" id="SumaryCompany">------------------</p>
                        <h5 class="card-title">Brand/Model/Plates</h5>
                        <label class="" id="SumaryModel">---/---/----</label>
                        <h5 class="card-title">BarCode</h5>
                        <label id="SumaryBarCode">-----------</label>
                        <h5 class="card-title">Responsable</h5>
                        <label id="SumaryResponsible">---------</label>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>


<script>
$("#combobarcode").change(function() {
    $('#iframe').empty();
    $('#SumaryBarCode').empty();
    $('#SumaryBarCode').html("");
    $("#inputCodigobarras").val("");
    if ($("#combobarcode").val() == "1") {
        codigoBarras = "";
        $("#dol").css({
            'height': '400px'
        });
        $("#divPanel2").hide();
        $("#divPanel").show();




    } else if ($("#combobarcode").val() == "2") {
        $('#iframe').empty();
        $('#SumaryBarCode').empty();
        $('#SumaryBarCode').html("");
        $("#inputCodigobarras").val("");
        codigoBarras = "";
        $("#dol").css({
            'height': '400px'
        });
        $("#divPanel").hide();
        $("#divPanel2").show();


    }
});

$("#inputCodigobarras").keyup(function() {
    $('#iframe').empty();
    $('#SumaryBarCode').empty();
    $('#SumaryBarCode').html(codigoBarras);

    codigoBarras = "";
    if ($("#inputCodigobarras").val() != "") {
        codigoBarras = "";
        codigoBarras = $("#inputCodigobarras").val();
        $('#SumaryBarCode').html(codigoBarras);
    }

});

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
$("#comboLimites").change(function() {
    hacerComboLimites();
});
function hacerComboLimites(){
    var op = $("#comboLimites").val();
    if (op == 1) {
        $('#carmax').val("900");
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
}
$("#comboPerfiles").change(function() {

    llenarDatosHorario(3);

});

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

                        ListaDeDias.push("1");
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
            $("#codgas  option[value='" + Perfiles[pos].codgas + "']").attr("selected", true);
            $("#codprd  option[value='" + Perfiles[pos].codprd + "']").attr("selected", true);
            $("#comboLimites  option[value='" + Perfiles[pos].Unlimited + "']").attr("selected", true);

            $("#codgas").val(Perfiles[pos].codgas);
            $("#codprd").val(Perfiles[pos].codprd);
            $("#comboLimites").val(Perfiles[pos].Unlimited);

            hacerComboLimites();

            $("#carmax").val(Perfiles[pos].carmax);
            $("#candia").val(Perfiles[pos].candia);
            $("#cansem").val(Perfiles[pos].cansem);
            $("#canmes").val(Perfiles[pos].canmes);

            llenarDepartamentoVista(Perfiles[pos]);

        }


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
            $("#codgas  option[value='Select Option']").attr("selected", true);
            $("#codprd  option[value='Select Option']").attr("selected", true);

            $("#codgas").val("Select Option");
            $("#codprd").val("Select Option");
            $("#comboLimites").val("Select Option");

            $("#carmax").val("");
            $("#candia").val("");
            $("#cansem").val("");
            $("#canmes").val("");
}
function HacerResumen() {
    //SumaryCompany SumaryModel SumaryBarCode SumaryResponsible

    $('#SumaryCompany').html(($('#company').val() != "") ? $('#company').val() : "----");


    var marca = ($('select[name="marca"] option:selected').text() != "Select Option") ? $(
        'select[name="marca"] option:selected').text() : "----";
    var modelo = ($('select[name="modelo"] option:selected').text() != "Select Option") ? $(
        'select[name="modelo"] option:selected').text() : "----";
    var placas = ($('#placas').val() != "") ? $('#placas').val() : "----";

    $('#SumaryModel').html(marca + "/" + modelo + "/" + placas);
    $('#SumaryResponsible').html(($('#Responsable').val() != "") ? $('#Responsable').val() : "----");


}

var ListaDeDias = [];
var ArrayChoferes = [];
var ArrayChoferes1 = [];
var arrCustomers = [];
var arrCustomers1 = [];
var click = 0;
var codigoBarras = "";
$(document).ready(function() {
    //disabledInputs();
    FillCustomer();
    Fillmarcas();
    Fillmodelos();
    //Fillestados();
    //Fillmunicipios();
    $('#error').hide();
    fillresponsability();

    llenarComboPerfiles();
    $('.inputPerfiles').prop("disabled", true);
    habilitarCombos = false;


});

function llenarDepartamentoVista(objDepartamentos,bandera=0){
            
    if (true ) {
        
        if(objDepartamentos.ValidacionOdometro=="true"){
            $("#Odometro").attr("checked", true);
        }else{
            $("#Odometro").attr("checked", false);
        }

        
        var arreDest = objDepartamentos.NombreDepartamento.split(",");
        //objDepartamentos = objDepartamentos  + $('#Department option:selected').text()+ ',';
        //objIDDepa  = objIDDepa  + $('#Department ').val()+ ',';
       // objDepartamneto=objDepartamentos;
        //objID=objIDDepa;
        
        //$('#idDepas').val(objIDDepa);
        $('#DepartamentosButton').empty();
        
        arreDest.forEach(function(valor, indice, array) {
            if (valor != "") {

                if(bandera==0){
                    $('#DepartamentosButton').append(
                    '<div class="dropdown"> <button class="dropbtn">' + valor +
                    '</button> <div class="dropdown-content">  </div></div>'
                );
                }
                
            }

        });
        


        
            
                
            

        
    }   
}
var Perfiles;

function llenarComboPerfiles() {
    console.log('ols');
    try {
        //http://localhost:85/home/GetPerfiles?TipoPerfil=DRIVER
        var sURL = IPWS + "GetPerfiles?TipoPerfil=VEHICLE&all=undefined";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                Perfiles = data.lstPerfiles;
                if (Perfiles.length > 0) {
                    //Perfiles.sort();
                    var optionsCombo = "";
                    $('#comboPerfiles').empty();
                    optionsCombo +=
                        '<option value="Select Option" selected disabled>Select Option</option>';
                    optionsCombo += '<option value="-1" hidden disabled  >CUSTOM</option>';
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

function generarBarCod() {
    codigoBarras = "";
    codigoBarras = addControl();

    //$("#CodigoBarras").JsBarcode(codigo,{displayValue:true,fontSize:20});
    $('#iframe').empty();
    $('#SumaryBarCode').empty();
    $('#SumaryBarCode').html(codigoBarras);


    var url = "<?php echo e(url('/CodigoBarras?codigo=')); ?>" + codigoBarras;
    console.log(url);
    $('#iframe').attr({
        src: url
    });
}
var marca = '';
var modelos = '';

var Choferes;

function fillresponsability() {

    try {
        var sURL = IPWS + "GetChoferes";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                Choferes = data.lstChoferes;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });
        for (var i = 0; i < Choferes.length; i++) {
            ArrayChoferes.push([Choferes[i].Nombre  + " " + Choferes[i].LastName.trim() + " " + Choferes[i].SecondLastName.trim(), Choferes[i].nrocho]);
            ArrayChoferes1.push(Choferes[i].Nombre + " " + Choferes[i].LastName.trim() + " " + Choferes[i].SecondLastName.trim());
        }
    } catch (error) {

    }
}
var ArrayMarcas;

function Fillmarcas() {
    console.log("llm");
    var sURL = IPWS + "WsGetmarcas";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            ArrayMarcas = data.lstmarcas;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
    marca = ' <option value="Select Option" selected disabled>Select Option</option>';
    $(ArrayMarcas).each(function(i) {
        marca += '<option value="' + this.MarcID + '">' + this.MarcDesc + '</option>';
    });
    $('#marca').html(marca);
}

var ArrayModelos;

function Fillmodelos() {

    var sURL = IPWS + "WsGetmodelos";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            ArrayModelos = data.lstmodelo;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });

}
$('#marca').change(function() {
    $('#modelo').prop('disabled', false);
    var marca = $('#marca').val();
    var pmodelos = $.grep(ArrayModelos, function(n, i) {
        return (n.MarcID == marca);
    });
    var smodelos = '<option value="0" disabled>Models</option>';
    $(pmodelos).each(function(i) {
        smodelos += '<option value="' + this.ModelId + '">' + this.ModelDesc + '</option>';
    });
    $('#modelo').html(smodelos);
});

/*
var resultado;
$("#myInput").blur(function() {


    var result = $.inArray(customer, countries);
    if (result == -1) {
        swal("Error", "This customer does not exist ", "error");
        $("#myInput").val("");
        disabledInputs();
    }


});
*/
$("#myInput").keyup(function() {
    var customer = $("#myInput").val();
    if (customer.length = 0 || customer == "") {

        $('#est').prop('disabled', true);
        $('#tag').prop('disabled', true);
        $('#plc').prop('disabled', true);
        $('#den').prop('disabled', true);
        $('#ctapre').prop('disabled', true);
        $('#grp').prop('disabled', true);
        $('#rsp').prop('disabled', true);
        $('#rut').prop('disabled', true);

        $('#limtur').prop('disabled', true);
        $('#hraini1').prop('disabled', true);
        $('#hrafin1').prop('disabled', true);

        $('#codgas').prop('disabled', true);
        $('#codprd').prop('disabled', true);
        $('#carmax').prop('disabled', true);
        $('#candia').prop('disabled', true);
        $('#cansem').prop('disabled', true);
        $('#canmes').prop('disabled', true);

        $('#Monday').prop('disabled', true);
        $('#Tuesday').prop('disabled', true);
        $('#Wednesday').prop('disabled', true);
        $('#Thursday').prop('disabled', true);
        $('#Friday').prop('disabled', true);
        $('#Saturday').prop('disabled', true);
        $('#Sunday').prop('disabled', true);

    } else {
        $('#est').prop('disabled', false);
        $('#tag').prop('disabled', false);
        $('#plc').prop('disabled', false);
        $('#den').prop('disabled', false);
        $('#ctapre').prop('disabled', false);
        $('#grp').prop('disabled', false);
        $('#rsp').prop('disabled', false);
        $('#rut').prop('disabled', false);

        $('#limtur').prop('disabled', false);
        $('#hraini1').prop('disabled', false);
        $('#hrafin1').prop('disabled', false);

        $('#codgas').prop('disabled', false);
        $('#codprd').prop('disabled', false);
        $('#carmax').prop('disabled', false);
        $('#candia').prop('disabled', false);
        $('#cansem').prop('disabled', false);
        $('#canmes').prop('disabled', false);

        $('#Monday').prop('disabled', false);
        $('#Tuesday').prop('disabled', false);
        $('#Wednesday').prop('disabled', false);
        $('#Thursday').prop('disabled', false);
        $('#Friday').prop('disabled', false);
        $('#Saturday').prop('disabled', false);
        $('#Sunday').prop('disabled', false);
    }
});

function disabledInputs() {
    $('#est').prop('disabled', true);
    $('#tag').prop('disabled', true);
    $('#plc').prop('disabled', true);
    $('#den').prop('disabled', true);
    $('#ctapre').prop('disabled', true);
    $('#grp').prop('disabled', true);
    $('#rsp').prop('disabled', true);
    $('#rut').prop('disabled', true);

    $('#limtur').prop('disabled', true);
    $('#hraini1').prop('disabled', true);
    $('#hrafin1').prop('disabled', true);

    $('#codgas').prop('disabled', true);
    $('#codprd').prop('disabled', true);
    $('#carmax').prop('disabled', true);
    $('#candia').prop('disabled', true);
    $('#cansem').prop('disabled', true);
    $('#canmes').prop('disabled', true);

    $('#Monday').prop('disabled', true);
    $('#Tuesday').prop('disabled', true);
    $('#Wednesday').prop('disabled', true);
    $('#Thursday').prop('disabled', true);
    $('#Friday').prop('disabled', true);
    $('#Saturday').prop('disabled', true);
    $('#Sunday').prop('disabled', true);

}









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



function validarAutocomplete(array, value) {
    var result = $.inArray(value, array);
    if (result != -1) {
        return "true";
    } else {
        return "false";
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




function addZero(x, n) {
    while (x.toString().length < n) {
        x = "0" + x;
    }
    return x;
}

function addControl() {
    var res = "";
    var marca = $('select[name="marca"] option:selected').text();
    var modelo = $('select[name="modelo"] option:selected').text();
    marca = marca.substr(0, 2);
    modelo = modelo.substr(0, 2);
    var d = new Date();
    var x = document.getElementById("demo");
    var h = addZero(d.getHours(), 2);
    var m = addZero(d.getMinutes(), 2);
    var s = addZero(d.getSeconds(), 2);
    var ms = addZero(d.getMilliseconds(), 3);


    res = marca + modelo  + h + m + s + ms;
    return res;
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
        if (inputs[i].parentNode.id != "DivInputCodigoBarras") {
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

    var cmbo_horario = $("#comboPerfiles").val()
    if (cmbo_horario == '-1') {
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

        Save_Vehicle();


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





function validateStep1() {
    var textIdioma1 = "";
    var Idioma = "English";
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

        if (inputs[i].id == "company") {
            if (inputs[i].value == "") {
                $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                band.push(1);
            } else {

                var company = $("#company").val();
                var result = validarAutocomplete(arrCustomers1, company);
                if (result == "true") {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);
                } else {
                    $("#divCompany").removeClass("has-ok has-success");
                    $("#divCompany").addClass("has-error has-danger");
                    band.push(2);
                }


            }
        }


    }



    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1 || band[j] == 2) {
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

        if (inputs[i].id == "placas" || inputs[i].id=="VIN") {
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

        if (Combos[i].id == "marca" || Combos[i].id == "modelo") {
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





function validateStep3() {
    var textIdioma1 = "";
    var band = []
    var Idioma = "English";

    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
        textIdioma1 = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: please enter a barcode.';
    }
    $('#divMensajeError').hide();


    if (codigoBarras == "") {
        $("#DivCodigoBarras").removeClass("has-ok has-success");
        $("#DivCodigoBarras").addClass("has-error has-danger");
        $("#DivInputCodigoBarras").removeClass("has-ok has-success");
        $("#DivInputCodigoBarras").addClass("has-error has-danger");
        band.push(1);
    } else {
        $("#DivCodigoBarras").addClass("has-ok has-success");
        $("#DivCodigoBarras").removeClass("has-error has-danger");
        $("#DivInputCodigoBarras").addClass("has-ok has-success");
        $("#DivInputCodigoBarras").removeClass("has-error has-danger");

        band.push(0);
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



function validateStep4() {
    var textIdioma1 = "";
    var Idioma = "English";
    var alertInvalid = '<i class="fa fa-warning  pr-15 pull-left"></i> Error: The Responsable is invalid.';

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

        if (inputs[i].id == "Responsable") {
            if (inputs[i].value == "") {
                $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
                $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
                band.push(1);
            } else {

                var responsable = $("#Responsable").val();
                var result = validarAutocomplete(ArrayChoferes1, responsable);
                if (result == "true") {
                    $("#" + inputs[i].parentNode.id).addClass("has-ok has-success");
                    $("#" + inputs[i].parentNode.id).removeClass("has-error has-danger");
                    band.push(0);
                } else {
                    $("#divRespondable").removeClass("has-ok has-success");
                    $("#divRespondable").addClass("has-error has-danger");
                    band.push(2);
                }
            }
        }


    }



    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1 || band[j] == 2) {
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
        $('#mensajeError').html(alertInvalid);
        return false;
    }
}









function Save_Vehicle() {
    try {
        console.log("Vehicle");
        var codcli;
        var diacar = 0;
        var nroveh = $('#nroveh').val();
        var tar = $('#tar').val();
        var est = $('#est').val();
        var tag = codigoBarras;
        var plc = $('#placas').val();
        var den = $('#den').val();
        var ctapre = $('#ctapre').val();
        var grp = $('#grp').val();
        var rsp = $('#Responsable').val();
        //var regex = /(\d+)/g;
        //rsp = rsp.match(regex);
        var rut = $('#rut').val();
        var marca = $('#marca').val();
        var modelo = $('#modelo').val();
        var limtur = $('#limtur').val();
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
        var codgas = $('#codgas').val();
        var codprd = $('#codprd').val();
        var carmax = $('#carmax').val();
        var candia = $('#candia').val();
        var cansem = $('#cansem').val();
        var canmes = $('#canmes').val();

        var vin = $('#VIN').val();
        var perfil = $('#comboPerfiles').val();

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



        codcli = document.getElementById("company").dataset.id;

        swal({
                title: "Are you sure?",
                text: "THIS VEHICLE WILL BE SAVED!",
                icon: "warning",
                buttons: true,

            })
            .then((willDelete) => {
                if (willDelete) {

                    var para = {
                        "codcli": codcli,
                        //"nroveh": nroveh,
                        //"tar": tar,
                        "est": est,
                        "tag": tag,
                        "plc": plc,
                        "den": den,
                        "ctapre": ctapre,
                        "grp": grp,
                        "rsp": rsp,
                        "rut": rut,
                        "diacar": diacar,
                        "limtur": limtur,
                        "hraini": hraini,
                        "hrafin": hrafin,
                        "codgas": codgas,
                        "codprd": codprd,
                        "carmax": carmax,
                        "candia": candia,
                        "cansem": cansem,
                        "canmes": canmes,
                        "cnvemp": marca,
                        "cnvobs": modelo,
                        "tagex1": vin,
                        "tagex2": perfil,



                    };
                    console.log(para);
                    ///var sURL = IPWS +"WsInsertarVehiculoControlGas";
                    var sURL = IPWS + "WsInsertarVehiculoControlGas";

                    $.ajax({
                        url: sURL,
                        dataType: "json",
                        type: "POST",


                        async: false,

                        data: para,

                        //dataFilter: function (data) { return data; },
                        success: function(data) {
                            //objCombos = data.GetCatalogosResult;
                            console.log("WS Add vehicle");
                            console.log(data);
                            if (data.Status == "OK") {
                                swal("OK! VEHICLE SAVED SUCCESSFULLY!", {
                                    icon: "success",
                                });
                                UpdateContenedor('Vehicles');
                            } else {
                                swal("Error", "ERROR SAVING DATA", "error");
                            }

                            //llenarCombos();



                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {
                            //
                            //VaciarDatos();
                            //swal("Error", "No hay conexion con el servidor", "error");
                        }
                    });

                } else {
                    swal("without changes!");
                }
            });

    } catch (error) {

    }




}


function SmartWizard(target, options) {
    this.target = target;
    this.options = options;
    this.curStepIdx = options.selected;
    this.steps = $(target).children("ul").children("li").children("a"); // Get all anchors
    this.contentWidth = 0;
    this.msgBox = $('<div class="msgBox"><div class="content"></div><a href="#" class="close">X</a></div>');
    this.elmStepContainer = $('<div id="dol"></div>').addClass("stepContainer");
    this.loader = $('<div>Loading</div>').addClass("loader");
    this.buttons = {
        next: $('<a id="next" class="glyphicon glyphicon-chevron-right">' + options.labelNext + '</a>')
            .attr(
                "href",
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
            .append($this.buttons.previous)
            .append($this.buttons.next);
        $this.target.append(elmActionBar);
        this.contentWidth = $this.elmStepContainer.width();
        $('.actionBar').append(
            "<button id='SaveVehicle'class='btn btn-round' style='color:white;' >Save<span class='glyphicon glyphicon-chevron-right'></span></button>"
        );
        $("#SaveVehicle").css({
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
                if (valid == true) {
                    $this.goForward();
                    click = click + 1;
                    HacerResumen();
                    return false;
                }
            }


            if (click == 1) {
                var valid = validateStep2();
                if (valid == true) {
                    $this.goForward();
                    click = click + 1;
                    HacerResumen();
                    return false;
                }
            }


            if (click == 2) {
                var valid = validateStep3();
                if (valid == true) {
                    $this.goForward();
                    click = click + 1;
                    HacerResumen();
                    return false;
                }
            }


            if (click == 3) {
                var valid = validateStep4();
                if (valid == true) {
                    $this.goForward();
                    click = click + 1;
                    if (click == 4) {
                        $("#SaveVehicle").show();
                    } else {
                        $("#SaveVehicle").hide();
                    }
                    HacerResumen();
                    return false;
                }
            }






        });

        $("#SaveVehicle").click(function() {
            validaciones();
        });
        $($this.buttons.previous).click(function() {
            $('#divMensajeError').hide();
            $this.goBackward();
            click = click - 1;
            if (click < 4) {
                $("#SaveVehicle").hide();
            } else {
                $("#SaveVehicle").show();
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
    $("#SaveVehicle").hide();
};

$(function() {
    $('#hraini').datetimepicker({
        format: 'HH:mm'
    });
    $('#hrafin').datetimepicker({
        format: 'HH:mm'
    });
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
//autocomplete(document.getElementById("myInput"), countries);
//autocomplete(document.getElementById("rsp"), ArrayChoferes);

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
autocomplete(document.getElementById("company"), arrCustomers);
autocomplete(document.getElementById("Responsable"), ArrayChoferes);
</script>
<?php /**PATH C:\xampp\htdocs\Laravel\resources\views/AddVehicle.blade.php ENDPATH**/ ?>