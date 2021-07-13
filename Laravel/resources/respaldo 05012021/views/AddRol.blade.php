
<style>
input.error {
    color: red;
}

form label {
    width: 100%;
    float: left;
    display: inline-block;
    font-weight: bold;
    margin-bottom: 5px;
}

form label.error {
    float: left;
    color: red;
    font-weight: normal;
    padding-left: .5em;
    vertical-align: top;
}

/* The switch - the box around the slider */
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
</style>



    <div class="clearfix"></div>


    <div class="row">

        <div class="col-md-6 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>New Role <small>Select the views for this role</small></h2>

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
                                    placeholder="Name Role" onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
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
                            <label style=" font-weight: bold;"
                                class="control-label col-md-3 col-sm-3 ">Cost Center</label>
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
                            <label style=" font-weight: bold;"
                                class="control-label col-md-3 col-sm-3 ">Profiles</label>
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


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9  offset-md-3">
                                <button type="button" class="btn btn-secondary"
                                    onclick="UpdateContenedor('Roles');">Cancel</button>

                                <button type="button" id="save-rol" class="btn btn-success ">
                                    Save </button>
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



@include('librerias')
<script>
$("#save-rol").click(function() {
    SaveRol();
});
//importamos configuraciones de toastr




function reset() {
    $('#ID').val(objUsers[pos].ID);
    $('#Rol').val(objUsers[pos].Rol);
    $('#Users').prop('checked', false);
    $('#Customers').prop('checked', false);
    $('#Drivers').prop('checked', false);
    $('#Vehicle').prop('checked', false);
    $('#Configuration').prop('checked', false);

}


function SaveRol() {


    console.log("roles");
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

    if (Rol === null || Rol === "") {
        swal("Error", "ROLE FIELD IS EMPTY", "error");
    } else {
        swal({
                title: "ARE YOU SURE?",
                text: "THIS ROLE WILL BE SAVED!",
                icon: "warning",
                buttons: true,

            })
            .then((willDelete) => {
                if (willDelete) {

                    var para = {
                        "Rol": Rol,
                        "Status": "1",
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
                    };

                    var sURL = IPWS +"WsInsertarRol";

                    $.ajax({
                        url: sURL,
                        dataType: "json",
                        type: "POST",
                        async: false,
                        data: para,
                        success: function(data) {
                            if (data.Status == "OK") {
                                swal("OK! THE ROLE SAVED SUCCESSFULLY!", {
                                    icon: "success",
                                });
                                UpdateContenedor('Roles');
                            } else {
                                swal("Error", "ERROR SAVING DATA", "error");
                            }

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


    }




}

function validaCampos() {

    var Rol = $('#Rol').val();

    //validamos campos
    if ($.trim(Rol) == "") {
        toastr.error("Role empty", "Aviso!");
        return false;
    }


}
</script>


