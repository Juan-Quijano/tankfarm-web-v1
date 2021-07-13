<style>
.emailPill {
    background-color: #ddd;
    border: none;
    color: black;
    padding: 4px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 10px;


}
</style>

<div class="x_panel" id="divEditarUsuario">
    <div class="x_title">
        <h2>Edit Settings</h2>

        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <br>
        <div class="row">
            <div class="col-md-6">
                <div id="divIPServer" class="form-group">
                    <label class="control-label mb-10 text-left">IP Server * </label>
                    <input type="text" class="form-control validar ValidateIP" name="ipserver" id="ipserver"
                        placeholder="127.0.0.1" autocomplete="off"
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">


                </div>
            </div>
            <div class="col-md-6">
                <div id="divIPTank" class="form-group">
                    <label class="control-label mb-10 text-left">IP Server Tank Farm * </label>
                    <input type="text" class="form-control validar ValidateIP" name="ipserverTankFarm"
                        id="ipserverTankFarm" placeholder="127.0.0.1" autocomplete="off"
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">

                </div>
            </div>

            <div class="col-md-6">
                <div id="divIPTGF" class="form-group">
                    <label class="control-label mb-10 text-left">IP Server TGF * </label>
                    <input type="text" class="form-control validar ValidateIP" name="ipserverTGF" id="ipserverTGF"
                        placeholder="127.0.0.1" autocomplete="off"
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">

                </div>
            </div>



            <div class="col-md-6">
                <div id="divCombo5" class="form-group">
                    <label class="control-label mb-10 text-left">Consumption Reports Every * </label>
                    <select id="ReportesPor" class="form-control validarCombo">

                        <option value="7">Weekly</option>
                        <option value="15">Every 15 Days</option>
                        <option value="30">Every 30 Days</option>
                    </select>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div id="divEmail" class="form-group">
                    <label class="control-label mb-10 text-left">Email* </label>
                    <input type="text" class="form-control validar" name="email" id="email"
                        placeholder="EMAIL@EMAIL.COM" autocomplete="off"
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">


                </div>
            </div>
            <div class="col-md-6">
                <div id="divPass" class="form-group">
                    <label class="control-label mb-10 text-left">Password* </label>
                    <input type="Password" class="form-control validar" name="Password" id="Password"
                        placeholder="Password" autocomplete="off" onKeyUp="">

                </div>
            </div>
            <div class="col-md-6">
                <div id="divServerSMTP" class="form-group">
                    <label class="control-label mb-10 text-left">Server SMTP* </label>
                    <input type="text" class="form-control validar" name="SMTP" id="SMTP" placeholder="SERVER  SMTP"
                        autocomplete="off"
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">

                </div>
            </div>

            <div class="col-md-6">
                <div id="divPort" class="form-group">
                    <label class="control-label mb-10 text-left">Port* </label>
                    <input type="text" class="form-control validar" name="PORT" id="PORT" placeholder="PORT"
                        autocomplete="off"
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">

                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div id="divComboManager" class="form-group autocomplete">
                <label class="control-label mb-10 text-left">Data of System Manager </label>
                <p id="DataManager">
                    Manager: <span id="Manager">---</span> <br>
                    Tel: <span id="telManager">---</span><br>
                    Email: <span id="emailManager">---</span><br>
                    Date to Send Reports: <span id="FechaReportes">---</span>
                </p>


            </div>
        </div>
        <style>
        .dropbtn {
            background-color: #ddd;
            border: none;
            color: black;
            padding: 4px 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;


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
        </style>
        <div class="col-md-6">
            <div id="divDestinatarios" class="form-group autocomplete">
                <label class="control-label mb-10 text-left">Recipients for reports </label>
                <br>
                <div class="input-group" id="divDestinatarios2">
                    <input type="text" class="form-control" name="addMails" id="addMails" placeholder="EMAIL@EMAIL.COM"
                        autocomplete="off"
                        onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()">
                    <span class="input-group-btn">
                        <button class="btn btn-secondary" onclick='addContact();' type="button">Add</button>
                    </span>
                </div>

                <div id="DestinatariosButton"
                    style=' margin: 1rem;  padding: 1rem;  border: 2px solid #ccc; background-color: #fafafa;'>

                </div>


                <textarea id="destinatarios" name="destinatarios" rows="5" cols="5"></textarea>
                <br>
                <p id="cantDestinatarios"></p>

            </div>

        </div>



        <div class="col-md-12" id="divMensajeError" style="display:none">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                <h6 class="pull-left" id="mensajeError">Error: Some data is empty or does not correspond to the
                    requested field, Please fill in the fields correctly</h6>
                <div class="clearfix"></div>
            </div>
        </div>





    </div>
    <div class="form-group row form-group row pull-left">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" onclick="UpdateContenedor('Inicio');">Cancel</button>

            <input type="button" value="Update" class="btn btn-success" id="SaveUserF" onclick="UpdateConfig();">

        </div>
    </div>
</div>

<div id="error" class="alert alert-danger" role="alert" style="display:none;">

</div>



<script>
var objConfig = [];
$(document).ready(function() {

    FillConfig();

});

function addContact() {
    if ($('#addMails').val() != '') {
        $("#addMails").addClass("has-ok has-success");
        $("#addMails").removeClass("has-error has-danger");
        objConfig.DESTINATARIOS = objConfig.DESTINATARIOS + ';' + $('#addMails').val()+ ';';
        $('#destinatarios').html(objConfig.DESTINATARIOS);
        $('#DestinatariosButton').empty();
        var arreDest = objConfig.DESTINATARIOS.split(";");
        arreDest.forEach(function(valor, indice, array) {
            if (valor != "") {
                $('#DestinatariosButton').append(
                    '<div class="dropdown"> <button class="dropbtn">' + valor +
                    '</button> <div class="dropdown-content"> <a href="mailto:' + valor +
                    '"> <i class="fa fa-send"></i>&nbsp;&nbsp; Send Email</a> <a href="javascript:eliminarCorreo(' +
                    "'" + valor + "'" +
                    ');"><i class="fa fa-remove"></i>&nbsp;&nbsp;Delete</a> </div></div'
                );
            }

        });

        var arrDest = $('#destinatarios').val().toString().trim().split(";");
        if (arrDest.length > 0) {
            $('#cantDestinatarios').html("you have " + (arrDest.length-1) +
                " recipients.");
        }
        $('#addMails').val('');
    } else {
        $("#addMails").removeClass("has-ok has-success");
        $("#addMails").addClass("has-error has-danger");
        swal("Error", "Please add correct information", "error");
    }


}

function FillConfig() {
    $('#destinatarios').hide();
    console.log("fill Config");
    var sURL = IPWS + "GetConfiguracion";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            if (data.lstConfiguracion != null) {
                objConfig = data.lstConfiguracion[0];
                $('#ipserver').val(objConfig.IPSERVIDOR);
                $('#ipserverTankFarm').val(objConfig.IPCONTROLGAS1);
                $('#ipserverTGF').val(objConfig.IPCONTROLGAS2);
                $("#ReportesPor  option[value='" + objConfig.REPORTESPOR + "']").attr("selected", true);
                $('#Manager').html(objConfig.MANAGER);
                $('#telManager').html(objConfig.TELEFONO);
                $('#emailManager').html(objConfig.CORREO);
                $('#FechaReportes').html(objConfig.FECHA);

                $('#email').val(objConfig.EMAIL);
                $('#Password').val(objConfig.PASSWORD);
                $('#SMTP').val(objConfig.SMTP);
                $('#PORT').val(objConfig.PORT);


                $('#destinatarios').html(objConfig.DESTINATARIOS);
                $('#DestinatariosButton').empty();
                var arreDest = objConfig.DESTINATARIOS.split(";");
                arreDest.forEach(function(valor, indice, array) {
                    if (valor != "") {
                        $('#DestinatariosButton').append(
                            '<div class="dropdown"> <button class="dropbtn">' + valor +
                            '</button> <div class="dropdown-content"> <a href="mailto:' +
                            valor +
                            '"> <i class="fa fa-send"></i>&nbsp;&nbsp; Send Email</a> <a href="javascript:eliminarCorreo(' +
                            "'" + valor + "'" +
                            ');"><i class="fa fa-remove"></i>&nbsp;&nbsp;Delete</a> </div></div'
                        );
                    }

                });

                var arrDest = $('#destinatarios').val().toString().trim().split(";");
                if (arrDest.length > 0) {
                    $('#cantDestinatarios').html("you have " + (arrDest.length-1) +
                        " recipients.");
                }
            }

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
}

function eliminarCorreo(email) {

    swal({
            title: "Are you sure you want to delete this Email?  [" + email + "]",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $('#DestinatariosButton').empty();
                objConfig.DESTINATARIOS = objConfig.DESTINATARIOS.replace(email + ';', '')
                $('#destinatarios').html(objConfig.DESTINATARIOS);
                $('#DestinatariosButton').empty();
                var arreDest = objConfig.DESTINATARIOS.split(";");
                arreDest.forEach(function(valor, indice, array) {
                    if (valor != "") {
                        $('#DestinatariosButton').append(
                            '<div class="dropdown"> <button class="dropbtn">' + valor +
                            '</button> <div class="dropdown-content"> <a href="mailto:' + valor +
                            '"> <i class="fa fa-send"></i>&nbsp;&nbsp; Send Email</a> <a href="javascript:eliminarCorreo(' +
                            "'" + valor + "'" +
                            ');"><i class="fa fa-remove"></i>&nbsp;&nbsp;Delete</a> </div></div'
                        );
                    }

                });

                var arrDest = $('#destinatarios').val().toString().trim().split(";");
                if (arrDest.length > 0) {
                    $('#cantDestinatarios').html("you have " + (arrDest.length-1) +
                        " recipients.");
                }
            } else {
                //swal("Without changes!");
            }
        });


}

function CheckIPAddress(MyIPAddress) {
    var CheckIP = /^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/;
    if (CheckIP.test(MyIPAddress)) {
        return true;
    } else {
        return false;
    }
}

function UpdateConfig() {
    console.log('init');
    var IPSERVIDOR = $('#ipserver').val().toString();
    var IPCONTROLGAS1 = $('#ipserverTankFarm').val().toString();
    var IPCONTROLGAS2 = $('#ipserverTGF').val().toString();
    var REPORTESPOR = $('#ReportesPor').val().toString();
    var DESTINATARIOS = $('#destinatarios').val().toString().trim();
    $('#divMensajeError').hide();
    var bandCambios = "false";
    if (REPORTESPOR == objConfig.REPORTESPOR) {
        bandCambios = "false";
    } else {
        bandCambios = "true";
    }
    var band = []
    var inputs = $(".ValidateIP");
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value == "") {

            $("#" + inputs[i].parentNode.id).removeClass("has-ok has-success");
            $("#" + inputs[i].parentNode.id).addClass("has-error has-danger");
            band.push(1);
        } else {
            if (CheckIPAddress(inputs[i].value) == false) {
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
    var band2 = 0;
    var result = $.inArray(1, band);
    if (result != -1) {
        band2 = 1;

    }
    if (band2 == 0) {
        swal({
                title: "Are you sure you want to change the information?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    var dataConfig = {
                        "ID": "2",
                        "IPSERVIDOR": IPSERVIDOR,
                        "IPCONTROLGAS1": IPCONTROLGAS1,
                        "IPCONTROLGAS2": IPCONTROLGAS2,
                        "REPORTESPOR": REPORTESPOR,
                        "bandCambios": bandCambios,
                        "DESTINATARIOS": DESTINATARIOS,

                    };

                    //var sURL =  "http://localhost:52203/Home/WsUpdateConfiguracion";
                    var sURL = IPWS + "WsUpdateConfiguracion";

                    $.ajax({
                        url: sURL,
                        dataType: "json",
                        type: "POST",
                        data: dataConfig,
                        async: false,
                        success: function(data) {
                            if (data.Status == "OK") {
                                swal("Good Job!", "Successful updating configuration information!",
                                    "success");
                                UpdateContenedor('Configuracion');

                            }
                            if (data.Status == "ERROR") {
                                swal("Error, Try again!", "error");
                                UpdateContenedor('Configuracion');
                            }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) {

                        }
                    });
                } else {
                    //swal("Without changes!");
                }
            });
    } else {
        $('#divMensajeError').show();
    }




}

function ValidateIPaddress(Ipfield) {
    IpAddr = Ipfield.value;
    var ipformat =
        /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/;

    if (!IpAddr.match(ipformat))
        return true;
    else
        return false;

}
</script><?php /**PATH C:\xampp\htdocs\Laravel\resources\views/Configuracion.blade.php ENDPATH**/ ?>