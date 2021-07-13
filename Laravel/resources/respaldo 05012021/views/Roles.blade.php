<style>
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
                                        aria-label="Name: activate to sort column ascending">Role</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 199px;"
                                        aria-label="UserName: activate to sort column ascending">User</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 108px;"
                                        aria-label="Id rol: activate to sort column ascending">Company</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 191px;"
                                        aria-label="Id language: activate to sort column ascending">Vehicle</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Driver</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Department</th>

                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Cost Center</th>

                                        <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Profile</th>


                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Brand</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Telephone: activate to sort column ascending">Model</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1"
                                        colspan="1" style="width: 155px;"
                                        aria-label="Mail: activate to sort column ascending">Configuration</th>

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
                dom: "Blfrtip",

                buttons: [{
                        extend: 'excelHtml5',
                        footer: true,
                        title: 'Role' + today,
                        filename: 'Role' + today,
                        exportOptions: {
                            columns: "0,1,2,3,4,5,6,7,8,9,10",
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
                        extend: 'pdf',
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
                        text: '<button class="btn btn-danger"><i class="fa fa-file-pdf-o"></i></button>',

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
                String(objRoles[i].Rol),
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


    Tabla_Roles.column('1:visible').order('desc').draw()



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
    swal({
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

                        swal("Error", "No se pudo: " + errorThrown, "error");
                    }
                });
                //swal("OK!", "Registro guardado correctamente.", "success");





            } else {
                swal("Without changes!");
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
        swal({
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
                        crossDomain: true,
                        xhrFields: {
                            cors: false
                        },
                        //dataFilter: function (data) { return data; },
                        success: function(data) {

                            if (data.Status == "OK") {
                                swal("OK!", "ROLE UPDATED SUCCESSFULLY", "success");
                                UpdateContenedor('Roles');
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
    console.log("Haber");
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
    swal({
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
                    type: "GET",
                    async: false,
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("GOOD JOB!", "ROLE DISABLED SUCCESSFULLY!", "success")

                            llenarObjRoles("");
                            UpdateContenedor('Roles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");

                            llenarObjRoles("");
                            UpdateContenedor('Roles');
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
                    type: "GET",
                    async: false,
                    crossDomain: true,
                    xhrFields: {
                        cors: false
                    },
                    //dataFilter: function (data) { return data; },
                    success: function(data) {
                        if (data.Status == "OK") {
                            swal("GOOD JOB!", "ROLE ENABLED SUCCESSFULLY!", "success")

                            llenarObjRoles("");
                            UpdateContenedor('Roles');
                            return "OK";

                        }
                        if (data.Status == "ERROR") {
                            swal("Error,TRY AGAIN!", "error");

                            llenarObjRoles("");
                            UpdateContenedor('Roles');
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
