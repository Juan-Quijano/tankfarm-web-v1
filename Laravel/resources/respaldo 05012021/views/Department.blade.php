<style>
.boton.alternativo {
    background-color: transparent;
    color: #00c69f !important;
    border: 2px solid #00c69f;
    border-radius: 7px;
}

.boton.alternativo:hover {
    background-color: #00c69f !important;
    color: white !important;
    text-decoration: none;
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
    background-color: #CF483D !important;
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

/* The container */
.cont {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.cont input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}



/* When the checkbox is checked, add a blue background */
.cont input:checked~.checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked~.checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.cont .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>






<div class="x_panel" id="divCatalogoDepartamento">

    <div class="x_content">
        <div class="x_title">
            <h2>Department </h2>

            <div class="clearfix"></div>
        </div>
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
                                        aria-label="Name: activate to sort column ascending">Department</th>



                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Mail: activate to sort column ascending">Status</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Mail: activate to sort column ascending">Edit</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Mail: activate to sort column ascending">Actions</th>

                                </tr>

                            </thead>


                            <tbody>


                                <div class="text-right">
                                    <!--You can add col-lg-12 if you want -->
                                    <button id="seeAll" class="btn btn-warning" type="button"> <span id="icono"
                                            class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> SEE ALL
                                        |</button>




                                        <button class="btn btn-primary" type="button"
                                            onclick="javascript:UpdateContenedor('AddDepartment');">
                                            <span class="glyphicon glyphicon-plus" id="icon_enabled"
                                                style="color:white;"></span> NEW DEPARTMENT
                                        </button>





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





<!--Editar  usuario-->
<div class="x_panel" id="divEditarDepartamento" style="display:none;">
    <div class="x_title">
        <h2>Department <small>Please complete all fields</small> </h2>

        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <br>

        <div class="col-md-6">
            <div id="divCombo1" class="form-group">
                <label class="control-label mb-10 text-left">Department Name * </label>
                <input type="text" class="form-control validar"
                    onkeyup="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                    name="Nombre2" id="Deparment" placeholder="Department">
                <input type="text" style="display:none;" class="form-control" name="ID" id="ID">
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
            <button type="button" class="btn btn-primary" onclick="UpdateContenedor('Department');">Cancel</button>

            <input type="button" value="Save" class="btn btn-success" id="SaveUserF" onclick="validaciones();">

        </div>
    </div>
</div>

<div id="error" class="alert alert-danger" role="alert" style="display:none;">

</div>
<script>
function validaciones() {
    var textIdioma1 = "";
    var Idioma = "English";

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
        $('#divMensajeError').hide();
        UpdateDepartment();
    } else {
        // error

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
    }

}
var ocultarelementos = 0;
$('#seeAll').click(function() {
    if (ocultarelementos == 0) {
        ocultarelementos = 1;
        $("#icono").removeClass("glyphicon glyphicon-eye-open");
        $("#icono").addClass("glyphicon glyphicon-eye-close");
        llenarObjDepartment("1");
    } else {
        ocultarelementos = 0;
        $("#icono").removeClass("glyphicon glyphicon-eye-close");
        $("#icono").addClass("glyphicon glyphicon-eye-open");
        llenarObjDepartment("");
    }
});







var ObjDepartment = "";
/* DATA TABLES */
var Tabla_Department;
$(document).ready(function() {

    init_DataTables();
    llenarObjDepartment("");
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
            Tabla_Department = $("#datatable-buttons").DataTable({
                dom: "Blfrtip",

                buttons: [{
                        extend: 'excelHtml5',
                        footer: true,
                        title: 'Department' + today,
                        filename: 'Department' + today,
                        exportOptions: {
                            columns: "0,1,2",
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
                        extend: 'pdf',
                        footer: true,
                        title: 'Department' + " " + today,
                        filename: 'Department' + " " + today,
                        exportOptions: {
                            columns: "0,1,2",
                        },

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




function llenarObjDepartment(all) {

    var para = {
        "All": all,


    };
    limpiarTabla();
    var sURL = IPWS +"GetDepartamentos";
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

            ObjDepartment = data.lstDep;


            llenarTabla();



        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

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
    limpiarTabla();
    Tabla_Department.clear().draw();

    var htmlBotonStatus = "";


    for (var i = 0; i < ObjDepartment.length; i++) {

        if (ObjDepartment[i].Status == "1") {
            htmlBotonStatus = 'boton_danger';
            title = "DISABLE";
            colorStatus = "<label class='label label-success'> ENABLED </label>";


        } else {
            colorStatus = "<label class='label label-danger'> DISABLED </label>";
            htmlBotonStatus = 'boton_success';
            title = "ENABLE";

        }
        if (pos == 0) {
            Tabla_Department.row.add([
                String(ObjDepartment[i].ID),
                String(ObjDepartment[i].Departamento),

                String(colorStatus),
                String('<button type="button" onclick="MostrarDivEditar(' + i + ',' + ObjDepartment[i].ID +
                    ')" class="boton_info"> EDIT</button>'),
                String('<button type="button" onclick="statusDepartment(' + i + ',' + ObjDepartment[i].ID +
                    ')" class="' + htmlBotonStatus + '"> ' + title + '</button>'),

            ]);
        }


    }


    Tabla_Department.column('1:visible').order('desc').draw()



}

function MostrarDivEditar(pos, id) {
    console.log("cod");
    $('#divEditarDepartamento').show();

    $('#divCatalogoDepartamento').hide();
    $("#Deparment").val(ObjDepartment[pos].Departamento);
    $("#ID").val(ObjDepartment[pos].ID);



}


function UpdateDepartment() {
    try {
        var ID = $('#ID').val();
        var Departamento = $('#Deparment').val();
        var ID = $('#ID').val();



        $('#error').hide();
        var para = {
            "ID": ID,
            "Departamento": Departamento,

        };
        swal({
                title: "Are you sure?",
                text: "THIS DEPARTMENT WILL BE UPDATED!",
                icon: "warning",
                buttons: true,

            })


            .then((willDelete) => {
                if (willDelete) {
                    var sURL = IPWS +"WsUpdateDepartamentos";
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
                                swal("OK!", "DEPARTMENT UPDATED SUCCESSFULLY", "success");
                                UpdateContenedor('Department');
                            } else {
                                swal("Error", "UPDATE ERROR", "error");
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


    } catch (error) {

    }

}

function UpdateDisabled(pos, id) {
    swal({
            title: "SURE YOU WANT DISABLED THIS DEPARTMENT?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    Id: id,
                    Status: 0,
                    table: "Departamento",
                    nameid: "ID",
                    BDD: "Local",
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
                            swal("GOOD JOB!", "DEPARTMENT DISABLED SUCCESSFULLY!", "success")

                            llenarObjDepartment("");
                            UpdateContenedor('Department');

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");
                            llenarObjDepartment("");
                            UpdateContenedor('Department');
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

function statusDepartment(pos, id) {
    console.log("dis");
    if (ObjDepartment[pos].Status == "1") {
        UpdateDisabled(pos, id);

    } else {
        UpdateEnabled(pos, id);
    }
}

function UpdateEnabled(pos, id) {
    swal({
            title: "SURE YOU WANT ENABLED THIS DEPARTMENT?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                var para = {
                    Id: id,
                    Status: 1,
                    table: "Departamento",
                    nameid: "ID",
                    BDD: "Local",
                    nameStatus: "Status",
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
                            swal("GOOD JOB!", "DEPARTMENT ENABLED SUCCESSFULLY!", "success")

                            llenarObjDepartment("");
                            UpdateContenedor('Department');

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");
                            llenarObjDepartment("");
                            UpdateContenedor('Department');
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
