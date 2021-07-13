<div class="page-title">
    <div class="title_left">
        <h3>Fuel Tanks Levels</h3>
    </div>
</div>
<div class="clearfix"></div>

<!-- HTML -->
<div id="chartdiv"></div>

<div class="row">
    <div class="col-sm-12">
        <div class="x_content">
            <div class=" col-sm-11  ">
                <div class="x_panel">
                    <div class="x_title">
                    
                    <button type="button" class="btn btn-primary "  onclick="javascript:UpdateContenedor('FuelTankLevel');"> <span class=""
                                            id="icon_enabled" style="color:white;"></span>
                                            <i class="fa fa-refresh"></i> UPDATE</button>
                    <button type="button" class="btn btn-success "  hidden onclick="javascript:UpdateContenedor('FuelTankLevel');"> <span class=""
                                            id="icon_enabled" style="color:white;"></span>
                                            <i class="fa fa-table"></i> EXPORT LEVELS ACTUAL CSV (beta)</button>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-sm-2">
                             <div id="chart-container"></div>
                        </div>
                        <div class="col-sm-2">
                            <div id="chart-container2"></div>
                        </div>
                        <div class="col-sm-2">
                             <div id="chart-container3"></div>
                        </div>
                        <div class="col-sm-2">
                             <div id="chart-container4"></div>
                        </div>
                       
                       

                    </div>
                </div>
            </div>
            <div class=" col-sm-11 ">
                <div class="x_panel">
                    <div class="x_title">
                        

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content"  >
                        
                    <div class="col-sm-2">
                             <div id="chart-container5"></div>
                    </div>
                    <div class="col-sm-2">
                            <div id="chart-container6"></div>
                    </div>
                    <div class="col-sm-2">
                            <div id="chart-container7"></div>
                    </div>
                    <div class="col-sm-2">
                            <div id="chart-container8"></div>
                    </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Include fusion theme file -->
<script type="text/javascript" src="js/fusioncharts.theme.fusion.js"></script>
<script type="text/javascript" src="js/fusioncharts2.js"></script>
<script type="text/javascript" src="js/fusioncharts.widgets2.js"></script>
<!-- Include fusioncharts jquery plugin -->


<script type="text/javascript">
var levelTank1 = 0;
var levelTank2 = 0;
var levelTank3 = 0;
var levelTank4 = 0;
var levelTank5 = 0;
var levelTank6 = 0;
var levelTank7 = 0;
var levelTank8 = 0;

var PorcentajeTank1 = 0;
var PorcentajeTank2 = 0;
var PorcentajeTank3 = 0;
var PorcentajeTank4 = 0;
var PorcentajeTank5 = 0;
var PorcentajeTank6 = 0;
var PorcentajeTank7 = 0;
var PorcentajeTank8 = 0;

var colorOK="#28a745";
var colorWarning="#ffc107";
var colorDanger="#ff0505";

var color1;
var color2;
var color3;
var color4;
var color5;
var color6;
var color7;
var color8;
function GetLevels(){
    try {
        
        
        var sURL = IPSERVIDOR+":1880/GetLevels";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",
            async: false,
            success: function(data) {
                levelTank1 = data.NivelFuel95;
                levelTank2 = data.NivelEtanol;
                levelTank3 = data.NivelDiesel;
                levelTank4 = data.NivelGas134A;
                levelTank5 = data.NivelRefrigerante;
                levelTank6 = data.NivelLiquidoFrenos;
                levelTank7 = data.NivelSolucionUrea;
                levelTank8 = data.NivelGas1234YF;

                PorcentajeTank1 = data.PorcentajeFuel95;
                PorcentajeTank2 = data.PorcentajeEtanol;
                PorcentajeTank3 = data.PorcentajeDiesel;
                PorcentajeTank4 = data.PorcentajeGas134A;
                PorcentajeTank5 = data.PorcentajeRefrigerante;
                PorcentajeTank6 = data.PorcentajeLiquidoFrenos;
                PorcentajeTank7 = data.PorcentajeSolucionUrea;
                PorcentajeTank8 = data.PorcentajeGas1234YF;
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                swal("Error", "There is no connection to the server", "error");
            }
        });


    } catch (error) {

    }
}
// Create a chart container
$('document').ready(function() {

    GetLevels();
    //$('#porcentaje1').html(levelTank1+"%");
    //$('#porcentaje2').html(levelTank2+"%");
   // $('#porcentaje3').html(levelTank3+"%");
    if(PorcentajeTank1 > 40){
        color1=colorOK;
    }else{
        if(PorcentajeTank1 < 40 && PorcentajeTank1 > 20){
            color1=colorWarning;
        }else{
            if(PorcentajeTank1 < 20){
                color1=colorDanger;
            }
        }
    }
    if(PorcentajeTank2 > 40){
        color2=colorOK;
    }else{
        if(PorcentajeTank2 < 40 && PorcentajeTank2 > 20){
            color2=colorWarning;
        }else{
            if(PorcentajeTank2 < 20){
                color2=colorDanger;
            }
        }
    }
    if(PorcentajeTank3 > 40){
        color3=colorOK;
    }else{
        if(PorcentajeTank3 < 40 && PorcentajeTank3 > 20){
            color3=colorWarning;
        }else{
            if(PorcentajeTank3 < 20){
                color3=colorDanger;
            }
        }
    }
    if(PorcentajeTank4 > 40){
        color4=colorOK;
    }else{
        if(PorcentajeTank4 < 40 && PorcentajeTank4 > 20){
            color4=colorWarning;
        }else{
            if(PorcentajeTank4 < 20){
                color4=colorDanger;
            }
        }
    }
    if(PorcentajeTank5 > 40){
        color5=colorOK;
    }else{
        if(PorcentajeTank5 < 40 && PorcentajeTank5 > 20){
            color5=colorWarning;
        }else{
            if(PorcentajeTank5 < 20){
                color5=colorDanger;
            }
        }
    }
    if(PorcentajeTank6 > 40){
        color6=colorOK;
    }else{
        if(PorcentajeTank6 < 40 && PorcentajeTank6 > 20){
            color6=colorWarning;
        }else{
            if(PorcentajeTank6 < 20){
                color6=colorDanger;
            }
        }
    }
    if(PorcentajeTank7 > 40){
        color7=colorOK;
    }else{
        if(PorcentajeTank7 < 40 && PorcentajeTank7 > 20){
            color7=colorWarning;
        }else{
            if(PorcentajeTank7 < 20){
                color7=colorDanger;
            }
        }
    }
    if(PorcentajeTank8 > 40){
        color8=colorOK;
    }else{
        if(PorcentajeTank8 < 40 && PorcentajeTank8 > 20){
            color8=colorWarning;
        }else{
            if(PorcentajeTank8 < 20){
                color8=colorDanger;
            }
        }
    }
    //tanque1
    FusionCharts.ready(function() {
        var fuelVolume = 100,
            fuelWidget = new FusionCharts({
                type: 'cylinder',
                dataFormat: 'json',
                id: 'fuel',
                renderAt: 'chart-container',
                width: '200',
                height: '350',
                dataSource: {
                    "chart": {
                        "theme": "fusion",
                        "caption": "Fuel 95 Level ",
                        "subcaption": PorcentajeTank1+"%",
                        "lowerLimit": "0",
                        "upperLimit": "40000",
                        "lowerLimitDisplay": "Empty",
                        "upperLimitDisplay": "Full",
                        "numberSuffix": " ltrs",
                        "showValue": "1",
                        "chartBottomMargin": "45",
                        "showValue": "0",
                        "cylFillColor": color1
                    },
                    "value": levelTank1 + "",
                    "annotations": {
                        "origw": "400",
                        "origh": "190",
                        "autoscale": "1",
                        "groups": [{
                            "id": "range",
                            "items": [{
                                    "id": "rangeBg",
                                    "type": "rectangle",
                                    "x": "$canvasCenterX-45",
                                    "y": "$chartEndY-30",
                                    "tox": "$canvasCenterX +45",
                                    "toy": "$chartEndY-75",
                                    "fillcolor": "#6caa03"
                                },
                                {
                                    "id": "rangeText",
                                    "type": "Text",
                                    "fontSize": "11",
                                    "fillcolor": "#333333",
                                    "text": levelTank1 + "  Ltrs",
                                    "x": "$chartCenterX-45",
                                    "y": "$chartEndY-50"
                                }
                            ]
                        }]
                    }

                },

            }).render();

    });
    //tanque2
    FusionCharts.ready(function() {
        var fuelVolume = 100,
            fuelWidget = new FusionCharts({
                type: 'cylinder',
                dataFormat: 'json',
                id: 'fuel2',
                renderAt: 'chart-container2',
                width: '200',
                height: '350',
                dataSource: {
                    "chart": {
                        "theme": "fusion",
                        "caption": "Etanol Level ",
                        "subcaption": PorcentajeTank2+"%",
                        "lowerLimit": "0",
                        "upperLimit": "40000",
                        "lowerLimitDisplay": "Empty",
                        "upperLimitDisplay": "Full",
                        "numberSuffix": " ltrs",
                        "showValue": "1",
                        "chartBottomMargin": "45",
                        "showValue": "0",
                        "cylFillColor": color2
                    },
                    "value": levelTank2 + "",
                    "annotations": {
                        "origw": "400",
                        "origh": "190",
                        "autoscale": "1",
                        "groups": [{
                            "id": "range",
                            "items": [{
                                    "id": "rangeBg",
                                    "type": "rectangle",
                                    "x": "$canvasCenterX-45",
                                    "y": "$chartEndY-30",
                                    "tox": "$canvasCenterX +45",
                                    "toy": "$chartEndY-75",
                                    "fillcolor": "#6caa03"
                                },
                                {
                                    "id": "rangeText",
                                    "type": "Text",
                                    "fontSize": "11",
                                    "fillcolor": "#333333",
                                    "text": levelTank2 + " ltrs",
                                    "x": "$chartCenterX-45",
                                    "y": "$chartEndY-50"
                                }
                            ]
                        }]
                    }

                },

            }).render();

    });
    //tanque3
    FusionCharts.ready(function() {
        var fuelVolume = 100,
            fuelWidget = new FusionCharts({
                type: 'cylinder',
                dataFormat: 'json',
                id: 'fuel3',
                renderAt: 'chart-container3',
                width: '200',
                height: '350',
                dataSource: {
                    "chart": {
                        "theme": "fusion",
                        "caption": "Diesel Level ",
                        "subcaption": PorcentajeTank3+"%",
                        "lowerLimit": "0",
                        "upperLimit": "40000",
                        "lowerLimitDisplay": "Empty",
                        "upperLimitDisplay": "Full",
                        "numberSuffix": " ltrs",
                        "showValue": "1",
                        "chartBottomMargin": "45",
                        "showValue": "0",
                        "cylFillColor": color3
                    },
                    "value": levelTank3 + "",
                    "annotations": {
                        "origw": "400",
                        "origh": "190",
                        "autoscale": "1",
                        "groups": [{
                            "id": "range",
                            "items": [{
                                    "id": "rangeBg",
                                    "type": "rectangle",
                                    "x": "$canvasCenterX-45",
                                    "y": "$chartEndY-30",
                                    "tox": "$canvasCenterX +45",
                                    "toy": "$chartEndY-75",
                                    "fillcolor": "#6caa03"
                                },
                                {
                                    "id": "rangeText",
                                    "type": "Text",
                                    "fontSize": "11",
                                    "fillcolor": "#333333",
                                    "text": levelTank3 + " ltrs",
                                    "x": "$chartCenterX-45",
                                    "y": "$chartEndY-50"
                                }
                            ]
                        }]
                    }

                },

            }).render();

    });
    //tanque4
    FusionCharts.ready(function() {
        var fuelVolume = 100,
            fuelWidget = new FusionCharts({
                type: 'cylinder',
                dataFormat: 'json',
                id: 'fuel3',
                renderAt: 'chart-container4',
                width: '200',
                height: '350',
                dataSource: {
                    "chart": {
                        "theme": "fusion",
                        "caption": "Gas 134A Level ",
                        "subcaption": PorcentajeTank4+"%",
                        "lowerLimit": "0",
                        "upperLimit": "40000",
                        "lowerLimitDisplay": "Empty",
                        "upperLimitDisplay": "Full",
                        "numberSuffix": " ltrs",
                        "showValue": "1",
                        "chartBottomMargin": "45",
                        "showValue": "0",
                        "cylFillColor": color4
                    },
                    "value": levelTank4 + "",
                    "annotations": {
                        "origw": "400",
                        "origh": "190",
                        "autoscale": "1",
                        "groups": [{
                            "id": "range",
                            "items": [{
                                    "id": "rangeBg",
                                    "type": "rectangle",
                                    "x": "$canvasCenterX-45",
                                    "y": "$chartEndY-30",
                                    "tox": "$canvasCenterX +45",
                                    "toy": "$chartEndY-75",
                                    "fillcolor": "#6caa03"
                                },
                                {
                                    "id": "rangeText",
                                    "type": "Text",
                                    "fontSize": "11",
                                    "fillcolor": "#333333",
                                    "text": levelTank4 + " ltrs",
                                    "x": "$chartCenterX-45",
                                    "y": "$chartEndY-50"
                                }
                            ]
                        }]
                    }

                },

            }).render();

    });
    //tanque5
    FusionCharts.ready(function() {
        var fuelVolume = 100,
            fuelWidget = new FusionCharts({
                type: 'cylinder',
                dataFormat: 'json',
                id: 'fuel3',
                renderAt: 'chart-container5',
                width: '200',
                height: '350',
                dataSource: {
                    "chart": {
                        "theme": "fusion",
                        "caption": "Refrigerant Level ",
                        "subcaption": PorcentajeTank5+"%",
                        "lowerLimit": "0",
                        "upperLimit": "40000",
                        "lowerLimitDisplay": "Empty",
                        "upperLimitDisplay": "Full",
                        "numberSuffix": " ltrs",
                        "showValue": "1",
                        "chartBottomMargin": "45",
                        "showValue": "0",
                        "cylFillColor": color5
                    },
                    "value": levelTank5 + "",
                    "annotations": {
                        "origw": "400",
                        "origh": "190",
                        "autoscale": "1",
                        "groups": [{
                            "id": "range",
                            "items": [{
                                    "id": "rangeBg",
                                    "type": "rectangle",
                                    "x": "$canvasCenterX-45",
                                    "y": "$chartEndY-30",
                                    "tox": "$canvasCenterX +45",
                                    "toy": "$chartEndY-75",
                                    "fillcolor": "#6caa03"
                                },
                                {
                                    "id": "rangeText",
                                    "type": "Text",
                                    "fontSize": "11",
                                    "fillcolor": "#333333",
                                    "text": levelTank5 + " ltrs",
                                    "x": "$chartCenterX-45",
                                    "y": "$chartEndY-50"
                                }
                            ]
                        }]
                    }

                },

            }).render();

    });
    //tanque6
    FusionCharts.ready(function() {
        var fuelVolume = 100,
            fuelWidget = new FusionCharts({
                type: 'cylinder',
                dataFormat: 'json',
                id: 'fuel3',
                renderAt: 'chart-container6',
                width: '200',
                height: '350',
                dataSource: {
                    "chart": {
                        "theme": "fusion",
                        "caption": "Break Fluid Level ",
                        "subcaption": PorcentajeTank6+"%",
                        "lowerLimit": "0",
                        "upperLimit": "40000",
                        "lowerLimitDisplay": "Empty",
                        "upperLimitDisplay": "Full",
                        "numberSuffix": " ltrs",
                        "showValue": "1",
                        "chartBottomMargin": "45",
                        "showValue": "0",
                        "cylFillColor": color6
                    },
                    "value": levelTank6 + "",
                    "annotations": {
                        "origw": "400",
                        "origh": "190",
                        "autoscale": "1",
                        "groups": [{
                            "id": "range",
                            "items": [{
                                    "id": "rangeBg",
                                    "type": "rectangle",
                                    "x": "$canvasCenterX-45",
                                    "y": "$chartEndY-30",
                                    "tox": "$canvasCenterX +45",
                                    "toy": "$chartEndY-75",
                                    "fillcolor": "#6caa03"
                                },
                                {
                                    "id": "rangeText",
                                    "type": "Text",
                                    "fontSize": "11",
                                    "fillcolor": "#333333",
                                    "text": levelTank6 + " ltrs",
                                    "x": "$chartCenterX-45",
                                    "y": "$chartEndY-50"
                                }
                            ]
                        }]
                    }

                },

            }).render();

    });
    //tanque7
    FusionCharts.ready(function() {
        var fuelVolume = 100,
            fuelWidget = new FusionCharts({
                type: 'cylinder',
                dataFormat: 'json',
                id: 'fuel3',
                renderAt: 'chart-container7',
                width: '200',
                height: '350',
                dataSource: {
                    "chart": {
                        "theme": "fusion",
                        "caption": "Urea Solution Level ",
                        "subcaption": PorcentajeTank7+"%",
                        "lowerLimit": "0",
                        "upperLimit": "40000",
                        "lowerLimitDisplay": "Empty",
                        "upperLimitDisplay": "Full",
                        "numberSuffix": " ltrs",
                        "showValue": "1",
                        "chartBottomMargin": "45",
                        "showValue": "0",
                        "cylFillColor": color7
                    },
                    "value": levelTank7 + "",
                    "annotations": {
                        "origw": "400",
                        "origh": "190",
                        "autoscale": "1",
                        "groups": [{
                            "id": "range",
                            "items": [{
                                    "id": "rangeBg",
                                    "type": "rectangle",
                                    "x": "$canvasCenterX-45",
                                    "y": "$chartEndY-30",
                                    "tox": "$canvasCenterX +45",
                                    "toy": "$chartEndY-75",
                                    "fillcolor": "#6caa03"
                                },
                                {
                                    "id": "rangeText",
                                    "type": "Text",
                                    "fontSize": "11",
                                    "fillcolor": "#333333",
                                    "text": levelTank7 + " ltrs",
                                    "x": "$chartCenterX-45",
                                    "y": "$chartEndY-50"
                                }
                            ]
                        }]
                    }

                },

            }).render();

    });
    //tanque8
    FusionCharts.ready(function() {
        var fuelVolume = 100,
            fuelWidget = new FusionCharts({
                type: 'cylinder',
                dataFormat: 'json',
                id: 'fuel3',
                renderAt: 'chart-container8',
                width: '200',
                height: '350',
                dataSource: {
                    "chart": {
                        "theme": "fusion",
                        "caption": "Gas 1234YF Level ",
                        "subcaption": PorcentajeTank8+"%",
                        "lowerLimit": "0",
                        "upperLimit": "40000",
                        "lowerLimitDisplay": "Empty",
                        "upperLimitDisplay": "Full",
                        "numberSuffix": " ltrs",
                        "showValue": "1",
                        "chartBottomMargin": "45",
                        "showValue": "0",
                        "cylFillColor": color8
                    },
                    "value": levelTank8 + "",
                    "annotations": {
                        "origw": "400",
                        "origh": "190",
                        "autoscale": "1",
                        "groups": [{
                            "id": "range",
                            "items": [{
                                    "id": "rangeBg",
                                    "type": "rectangle",
                                    "x": "$canvasCenterX-45",
                                    "y": "$chartEndY-30",
                                    "tox": "$canvasCenterX +45",
                                    "toy": "$chartEndY-75",
                                    "fillcolor": "#6caa03"
                                },
                                {
                                    "id": "rangeText",
                                    "type": "Text",
                                    "fontSize": "11",
                                    "fillcolor": "#333333",
                                    "text": levelTank8 + " ltrs",
                                    "x": "$chartCenterX-45",
                                    "y": "$chartEndY-50"
                                }
                            ]
                        }]
                    }

                },

            }).render();

    });
    //setTimeout(function(){  $('text:contains("FusionCharts XT Trial")').hide(); }, 1000);
    intervalo = setInterval('contador()', 100);
    //$("#chart-container").insertFusionCharts(chartConfigs);
});
var intervalo;
var cont = 0;

function contador() {
    $('text:contains("FusionCharts XT Trial")').hide();
    cont++;
    if (cont > 200) {
        clearInterval(intervalo);
    }
}

function getRandomArbitrary(min, max) {
    var num = Math.random() * (max - min) + min;

    return parseInt(num); //Math.round(num * 100) / 100;
}
</script>
