<style>
.centrado {

    background-color: #fafafa;
    margin: 1rem;
    padding: 1rem;
    border: 2px solid #ccc;
    /* IMPORTANTE */
    text-align: left;

}

.padre {
    /* IMPORTANTE */
    text-align: center;
}

.hijo {
    background-color: #fafafa;
    padding: 10px;
    margin: 10px;
    border: 2px solid #ccc;
    /* IMPORTANTE */
    display: inline-block;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #f8f9fa;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
    .sidenav {
        padding-top: 15px;
    }

    .sidenav a {
        font-size: 18px;
    }
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
</style>

<div class="row">

    <!--
    <div class="col-md-12" style="display:none;">
        <div class="x_panel">
            <div class="x_title">
                <h2>Fuel Dispenser Reports </h2>

                <div class="filter">
                    <div id="reportrange" class="pull-right"
                        style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <button type="button" onclick="Refresh(0)" class="boton_info"> Send</button>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="col-sm-12 padre ">

                    <h2>Please select the fields to make the report</h2>
                    <div class="col-md-2 hijo" style="   ">
                        <label clas="" for="">Select type Report *</label>
                        <div class="input-group" id="divComboConsumos">
                            <select name="comboHorario" id="comboHorario" class="form-control validarCombo"
                                data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Select the type of schedule ">
                                <option value="Select Option" selected disabled>Select Option
                                </option>
                                <option value="1">Last consumptions </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 hijo" style="    ">
                        <label clas="" for="">Company *</label>
                        <div class="input-group autocomplete" id="divCompany">
                            <input type="text" class="form-control validar" id="company" name="company"
                                autocomplete="off" placeholder="Name Company"
                               >
                        </div>
                    </div>
                    <div class="col-md-2 hijo" style="    ">
                        <label clas="" for="">Driver Tag *</label>
                        <div class="input-group" id="divTagDriver">
                            <input type="text" class="form-control validar" id="DriverTag" name="DriverTag"
                                autocomplete="off" placeholder="######"
                                >
                        </div>
                    </div>
                    <div class="col-md-2 hijo" style="    ">
                        <label clas="" for="">Vehicle Tag *</label>
                        <div class="input-group" id="divTagVehicle">
                            <input type="text" class="form-control validar" id="VehicleTag" name="VehicleTag"
                                autocomplete="off" placeholder="######"
                               >
                        </div>
                    </div>
                    <div class="col-md-3 hijo" style="    ">
                        <label clas="" for="">Start Date - End Date *</label>
                        <div class="input-group" id="divFechas">
                            <input type="text" class="form-control has-feedback-left" id="Start1"
                                placeholder="Start Time" aria-describedby="inputSuccess2Status">
                            <input type="text" class="form-control has-feedback-left" id="End1"
                                placeholder="End Time" aria-describedby="inputSuccess2Status">
                        </div>
                    </div>





                </div>


            </div>
        </div>
    </div>


-->
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <div class="text-left">
                    <button id="seeAll" class="btn btn-danger" type="button" onclick="showChart(1)"> <span id="icono"
                            class="fa fa-tachometer" aria-hidden="true"></span> GRAPH
                        |</button>
                    <!--You can add col-lg-12 if you want -->
                    <button type="button" class="btn btn-primary " onclick="showChart(0)"> <span class=""
                            id="icon_enabled" style="color:white;"></span><i class="glyphicon glyphicon-plus"></i>
                        DATASHEET</button>
                    <button type="button" class="btn btn-primary " onclick="openNav()"> <span class="" id="icon_enabled"
                            style="color:white;"> &#9776; SEARCH FILTERS</button>


                </div>
            </div>
            <div class="x_content">

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="col-md-5 hijo" style="   ">
                        <label clas="" for="">Select type Report *</label>
                        <div class="input-group" id="divcomboTipoReporte">
                            <select name="comboTipoReporte" id="comboTipoReporte" class="form-control"
                                data-toggle="tooltip" data-placement="right" title=""
                                data-original-title="Select the type of schedule ">
                                <option value="0" selected>Select Option</option>
                                <option value="15">Last 15 days</option>
                                <option value="30">Last Month</option>
                                <option value="90">Last trimester</option>
                                <option value="180">Last semester</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 hijo" style="    ">
                        <label clas="" for="">Company *</label>
                        <div class="input-group autocomplete" id="divCompany1">
                            <input type="text" class="form-control validar" id="company1" name="" autocomplete="off"
                                placeholder="Name Company">
                        </div>
                    </div>
                    <div class="col-md-5 hijo" style="    ">
                        <label clas="" for="">Driver Tag *</label>
                        <div class="input-group autocomplete" id="divDriverTag1">
                            <input type="text" class="form-control validar" id="DriverTag1" name="DriverTag1"
                                autocomplete="off" placeholder="Tag">
                        </div>
                    </div>
                    <div class="col-md-5 hijo" style="    ">
                        <label clas="" for="">Vehicle Tag *</label>
                        <div class="input-group autocomplete" id="divVehicleTag1">
                            <input type="text" class="form-control validar" id="VehicleTag1" name="VehicleTag1"
                                autocomplete="off" placeholder="Tag">
                        </div>
                    </div>
                    <div class="col-md-10 hijo" style="    ">
                        <label clas="" for="">Start Date - End Date</label>

                        <div class="input-group" id="divFechas1">
                            <div class="input-group col-md-6" id="hraini">
                                <input type='text' class="form-control validar" id="hraini1" data-toggle="tooltip"
                                    data-placement="right" title=""
                                    data-original-title="Enter the start time for the schedule" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>

                            </div>

                            <div class="input-group col-md-6" id="hrafin">

                                <input type='text' class="form-control validar" id="hrafin1" data-toggle="tooltip"
                                    data-placement="right" title=""
                                    data-original-title="Enter the start time for the schedule" />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>

                            </div>


                        </div>

                    </div>
                    <div class="hijo" style="margin-left: 37%;">
                        <button id="ApplyFilter" type="button" class="btn btn-primary " onclick="FiltrosDespachos();">
                            <span class="" id="icon_enabled" style="color:white;"> &#9776; Apply filter</button>
                    </div>

                </div>


                <div class="col-xl-10" id="PanelGraphs">

                    <!-- Title -->


                    <!-- Description -->

                    <!-- Section: Live preview -->
                    <section class="mx-2 pb-3">

                        <ul class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab"
                                    aria-controls="home-md" aria-selected="true">Gasoline</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab"
                                    aria-controls="profile-md" aria-selected="false">Diesel</a>
                            </li>

                        </ul>
                        <div class="tab-content card pt-5" id="myTabContentMD">
                            <div class="tab-pane fade show active" id="home-md" role="tabpanel"
                                aria-labelledby="home-tab-md">
                                <div id="chart" style="width: 1100px; height: 600px;">
                                    <!-- preparing a DOM with width and height for ECharts -->
                                    <div id="main" style="width: 1280px; height: 600px">

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
                                <div id="chart2" style="width: 1100px; height: 600px;">
                                    <!-- preparing a DOM with width and height for ECharts -->
                                    <div id="mainDiesel" style="width: 1280px; height: 600px;">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </section>
                    <!-- Section: Live preview -->

                </div>
                <!-- Grid column -->

            </div>

        </div>

        <div id="DataGrid" style="display:none;">
            <div class="col-sm-6">
                <div class="text-center">
                    <h5>Gasoline</h5>
                </div>
                <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">



                    <table id="datatable-buttons1"
                        class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;"
                        role="grid" aria-describedby="datatable-buttons_info">

                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                    colspan="1" style="width: 257px;" aria-sort="ascending"
                                    aria-label="ID: activate to sort column descending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                    colspan="1" style="width: 380px;"
                                    aria-label="Name: activate to sort column ascending">DATE</th>



                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                    colspan="1" style="width: 155px;"
                                    aria-label="Mail: activate to sort column ascending">GASOLINE</th>




                            </tr>

                        </thead>


                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-center">
                    <h5>Diesel</h5>
                </div>
                <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">



                    <table id="datatable-buttons2"
                        class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;"
                        role="grid" aria-describedby="datatable-buttons_info">

                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                    colspan="1" style="width: 257px;" aria-sort="ascending"
                                    aria-label="ID: activate to sort column descending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                    colspan="1" style="width: 380px;"
                                    aria-label="Name: activate to sort column ascending">DATE</th>





                                <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                    colspan="1" style="width: 155px;"
                                    aria-label="Mail: activate to sort column ascending">DIESEL</th>





                            </tr>

                        </thead>


                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
</div>
</div>



<script type="text/javascript">
// based on prepared DOM, initialize echarts instance
var myChart = echarts.init(document.getElementById('main'));
var myChartDiesel = echarts.init(document.getElementById('mainDiesel'));

var option2;
Tabla_GasolinaTGF = "";
Tabla_DieselTGF = ""
var arrCustomers1 = [];
var arrTagChof = [];
var arrTagVehi = [];


var ArrayFechasGasTGF = [];
var ArrayFechasDieselTGF = [];
var ArrayGasolinaTGF = [];
var ArrayDieselTGF = [];
var ArrayTrnTGF = [];
var ArrayFechasGeneral = [];


$(document).ready(function() {
    init_DataTables();
    FillCustomer();
    FillDriverTag();
    FillVehicleTag();
    FiltrosDespachos("365", "", "", "", "", "", "")

    //FillGraph();
});



function showChart(show) {
    if (show == 1) {
        $('#chart').show();
        $('#PanelGraphs').show();
        $('#DataGrid').hide();
        //show=0;
    }
    if (show == 0) {
        $('#chart').hide();
        $('#PanelGraphs').hide();
        $('#DataGrid').show();
        //show=1;
    }
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
    var NameProd = "";
    var colorboton = "";
    var statusVehicle = "";
    Tabla_GasolinaTGF.clear().draw();

    var htmlBotonStatus = "";


    for (var i = 0; i < ArrayFechasGasTGF.length; i++) {



        if (pos == 0) {
            Tabla_GasolinaTGF.row.add([
                String(ArrayTrnTGF[i]),
                String(ArrayFechasGasTGF[i]),
                String(ArrayGasolinaTGF[i])

            ]);
        }



    }

    Tabla_GasolinaTGF.column('1:visible').order('desc').draw()



}

function llenarTabla2() {

    var textIdioma2 = "Edit";
    valorEstatus = "true";
    var class1 = "success";
    var pos = 0;
    var colorIcon = "";
    var title;
    var colorBoton = "";
    var StatusCutomer = "";
    var NameProd = "";
    var colorboton = "";
    var statusVehicle = "";
    Tabla_DieselTGF.clear().draw();

    var htmlBotonStatus = "";


    for (var i = 0; i < ArrayFechasDieselTGF.length; i++) {



        if (pos == 0) {
            Tabla_DieselTGF.row.add([
                String(ArrayTrnTGF[i]),
                String(ArrayFechasDieselTGF[i]),
                String(ArrayDieselTGF[i])

            ]);
        }



    }

    Tabla_DieselTGF.column('1:visible').order('desc').draw()



}



var despachos;



function FiltrosDespachos(LastConsum, Estacion, Company, DriverTag, VehicleTag, StartDate, EndDate) {
    console.log("filtros");
    if (LastConsum != "" && LastConsum != "0" && LastConsum != undefined) {

    } else {
        LastConsum = $("#comboTipoReporte").val();
    }

    Company = $("#company1").val();
    DriverTag = $("#DriverTag1").val();
    VehicleTag = $("#VehicleTag1").val();
    StartDate = $("#hraini1").val();
    EndDate = $("#hrafin1").val();
    ArrayFechasGasTGF = [];
    ArrayFechasDieselTGF = [];
    ArrayGasolinaTGF = [];
    ArrayDieselTGF = [];
    ArrayTrnTGF = [];







    if (LastConsum == "0" && Company == "" && VehicleTag == "" && DriverTag == "" && StartDate == "" && EndDate == "") {
        swal("Error", "No filter selected", "error");
    } else {

        var para = {
            "LastConsum": LastConsum,
            "Estacion": Estacion,
            "Company": Company,
            "DriverTag": DriverTag,
            "VehicleTag": VehicleTag,
            "StartDate": StartDate,
            "EndDate": EndDate,
            "EST": "TF",


        };
        try {
            var sURL = "http://10.70.42.56:85/Home/" + "GetDespachosFiltros";
            $.ajax({
                url: sURL,
                dataType: "json",
                type: "GET",
                data: para,
                async: false,

                success: function(data) {
                    despachos = data.lstDespachos;
                    if (despachos.length > 0) {
                        ArrayFechasDieselTGF = despachos[0].ArrayFechasDieselTGF;
                        ArrayFechasGasTGF = despachos[0].ArrayFechasGasTGF;
                        ArrayGasolinaTGF = despachos[0].ArrayGasolinaTGF;
                        ArrayDieselTGF = despachos[0].ArrayDieselTGF;
                        ArrayTrnTGF = despachos[0].ArrayTrnTGF;
                        ArrayFechasGeneral = despachos[0].ArrayFechasGeneral;


                    } else {
                        ArrayFechasDieselTGF = "";
                        ArrayFechasGasTGF = "";
                        ArrayGasolinaTGF = "";
                        ArrayDieselTGF = "";
                        ArrayTrnTGF = "";


                        ArrayFechasGeneral = "";
                        myChart.clear();
                        myChartDiesel.clear();

                    }

                    llenarTabla();
                    llenarTabla2();

                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {

                }

            });



            fillGraphGas();
            fillGraph2();

        } catch (error) {

        }

    }

}
try {

    myChart.setOption(option);
    myChartDiesel.setOption(option2);
    //myChartDiesel.setOption(optionDiesel);
} catch (error) {

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

            arrCustomers1.push(customer[i].den);
        }
    } catch (error) {

    }

}
var choferes;

function FillDriverTag() {

    try {
        var sURL = IPWS + "GetChoferes";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                choferes = data.lstChoferes;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });
        for (var i = 0; i < choferes.length; i++) {

            arrTagChof.push(choferes[i].tag);
        }
    } catch (error) {

    }

}

var vehicles;

function FillVehicleTag() {

    try {
        var sURL = IPWS + "GetVehiculos";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                vehicles = data.lstVehicles;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                //
                //VaciarDatos();
                //swal("Error", "No hay conexion con el servidor", "error");
            }
        });
        for (var i = 0; i < vehicles.length; i++) {

            arrTagVehi.push(vehicles[i].tag);
        }
    } catch (error) {

    }

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
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
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

function openNav() {
    document.getElementById("mySidenav").style.width = "600px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
$(function() {
    $('#hraini').datetimepicker({
        defaultDate: new Date(),
        format: 'YYYY-MM-DD'

    });
    $('#hrafin').datetimepicker({
        defaultDate: new Date(),
        format: 'YYYY-MM-DD'
    });
    $("#hraini1").val("");
    $("#hrafin1").val("");
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

        if ($("#datatable-buttons1").length) {
            Tabla_GasolinaTGF = $("#datatable-buttons1").DataTable({
                dom: "Blfrtip",

                buttons: [{
                        //Botón para Excel
                        extend: 'excelHtml5',
                        footer: true,
                        title: 'Dispatches Gas TGF_' + today,
                        filename: 'Dispatches Gas TGF_' + today,
                        exportOptions: {
                            columns: [0, 1, 2, 3],
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







                            var col = $('col', sheet);
                            col.each(function() {
                                $(this).attr('width', 10);
                            });
                            $(col[0]).attr('width', 20);
                            $(col[1]).attr('width', 20);
                            $(col[2]).attr('width', 20);
                            $(col[3]).attr('width', 20);

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
                        title: 'Dispatches Gas TGF_' + today,
                        filename: 'Dispatches Gas TGF_' + today,

                        exportOptions: {
                            columns: [0, 1, 2, 3],
                        },


                        tableHeader: {
                            alignment: 'center'
                        },
                        text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',
                        customize: function(doc) {
                            doc.content[1].margin = [120, 0, 120, 0] //left, top, right, bottom
                        }


                    }


                ],
                responsive: true,

            });
        }
        if ($("#datatable-buttons2").length) {
            Tabla_DieselTGF = $("#datatable-buttons2").DataTable({
                dom: "Blfrtip",

                buttons: [{
                        //Botón para Excel
                        extend: 'excelHtml5',
                        footer: true,
                        title: 'Dispatches Diesel TGF_' + today,
                        filename: 'Dispatches Disel TGF_' + today,
                        exportOptions: {
                            columns: [0, 1, 2],
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

                            //First row
                            $('row:first c', sheet).attr('s', '47');



                            $('row* c[r]', sheet).each(function() {
                                if ($('is t', this).text().match(
                                        /(?:^|\b)(cover)(?=\b|$)/gmi)) {
                                    $(this).attr('s', '20');
                                }

                            });











                            var col = $('col', sheet);
                            col.each(function() {
                                $(this).attr('width', 10);
                            });
                            $(col[0]).attr('width', 20);
                            $(col[1]).attr('width', 20);
                            $(col[2]).attr('width', 20);


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
                        title: 'Dispatches Diesel TGF_' + today,
                        filename: 'Dispatches Diesel TGF_' + today,

                        exportOptions: {
                            columns: [0, 1, 2],
                        },



                        tableHeader: {
                            alignment: 'center'
                        },
                        text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',

                        customize: function(doc) {
                            doc.content[1].margin = [120, 0, 120, 0] //left, top, right, bottom
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

function fillGraphGas() {


    option = {

        title: {
            text: 'DISPATCHES GASOLINE TGF'
        },
        legend: {
            data: ['Gasoline']
        },
        toolbox: {
            // y: 'bottom',
            feature: {
                mark: {
                    show: true
                },
                magicType: {
                    show: true,
                    type: ["line", "bar"],
                    title: {
                        line: "Line",
                        bar: "Bar"

                    }
                },
                dataView: {
                    title: 'DataView',
                    lang: ['DataView', 'Close', 'Refresh']
                },
                saveAsImage: {
                    title: 'Save as image',
                    name: 'Dispatch',
                    pixelRatio: 2
                }
            }
        },
        tooltip: {},
        xAxis: {
            data: ArrayFechasGasTGF,
            splitLine: {
                show: false
            }

        },

        yAxis: {},
        dataZoom: [{
                show: true,
                type: 'slider',
                start: 0,
                end: 100,
                filterMode: 'filter'
            },
            {
                type: 'inside',
                start: 0,
                end: 100
            },
            {
                show: false,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series: [{

            name: 'Gasoline',
            type: 'bar',
            data: ArrayGasolinaTGF,
            animationDelay: function(idx) {
                return idx * 10;
            }
        },
        ],
        animationEasing: 'elasticOut',
        animationDelayUpdate: function(idx) {
            return idx * 5;
        }
    };
    myChart.setOption(option);
}



function fillGraph2() {

    option2 = {
        color: ['#2d4453'],
        title: {
            text: 'DISPATCHES DIESEL TGF'
        },
        legend: {
            data: ['Diesel']
        },
        toolbox: {
            // y: 'bottom',
            feature: {
                mark: {
                    show: true
                },
                magicType: {
                    show: true,
                    type: ["line", "bar"],
                    title: {
                        line: "Line",
                        bar: "Bar"

                    }
                },
                dataView: {
                    title: 'DataView',
                    lang: ['DataView', 'Close', 'Refresh']
                },
                saveAsImage: {
                    title: 'Save as image',
                    name: 'Dispatch',
                    pixelRatio: 2
                }
            }
        },
        tooltip: {},
        xAxis: {
            data: ArrayFechasDieselTGF,
            splitLine: {
                show: false
            }
        },

        yAxis: {},
        dataZoom: [{
                show: true,
                type: 'slider',
                start: 0,
                end: 100,
                filterMode: 'filter'
            },
            {
                type: 'inside',
                start: 0,
                end: 100
            },
            {
                show: false,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series: [{

            name: 'Diesel',
            type: 'bar',
            data: ArrayDieselTGF,
            animationDelay: function(idx) {
                return idx * 10 + 100;
            }
        },

        ],
        animationEasing: 'elasticOut',
        animationDelayUpdate: function(idx) {
            return idx * 5;
        }
    };
    myChartDiesel.setOption(option2);
}




autocomplete(document.getElementById("company1"), arrCustomers1);
autocomplete(document.getElementById("DriverTag1"), arrTagChof);
autocomplete(document.getElementById("VehicleTag1"), arrTagVehi);
</script>
