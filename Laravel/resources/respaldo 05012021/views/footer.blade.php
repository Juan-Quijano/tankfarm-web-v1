</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class="pull-right">
        Tecnologia Desarrollo y Control 4.0 MX - 2021
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>
<script src="{{url('/')}}/build/js/custom.js"></script>
<script>
$(document).ready(function() {
    //init_SmartWizard();
    updateUserData();
});



var Idioma = "Espanol"
var objUsuario = "";
var objDatosConfiguracion = "";

function updateUserData() {
    var datos;
    $('#username').empty();
    console.log("footer");
    var urlAdd = "{{ url('/getUserSesion') }}";
    $.ajax({
        type: 'GET',
        url: urlAdd,
        async: false,

        data: datos,
        success: function(data) {
            // llenar el menu
            objUsuario = data;
            if (objUsuario.length > 0) {
                objUsuario = objUsuario[0];
                $('#navbarDropdown').html(
                    '<img src="images/user.png" alt=""><a href="#"><i class="zmdi zmdi-account"></i><span id="">' +
                    objUsuario
                    .user + '</span></a>');
                $('#userlbl').html(objUsuario.user);
                $('#namelbl').html(objUsuario.Nombre);
                $('#rolelbl').html(objUsuario.vistas.Rol);
                $('#emaillbl').html(objUsuario.Correo);
                $('#telephonelbl').html(objUsuario.Telefono);
                $('#logout').html('<a href="' + "{{url('/cerrarSesion')}}" +
                    ' "><i class="zmdi zmdi-power"></i><span>CERRAR SESION</span></a>');
                if (objUsuario.vistas.Customers == "true") {
                    $("#menu_company").show();
                }
                if (objUsuario.vistas.Users == "true") {
                    $("#menu_Users").show();
                    $("#liuser").show();
                    $("#lirole").show();
                }
                if (objUsuario.vistas.Vehicles == "true") {
                    $("#menu_Vehicles").show();
                    $("#livehicle").show();


                }
                if (objUsuario.vistas.Department == "true") {
                    $("#menu_Users").show();
                    $("#lidepartment").show();
                }

                if (objUsuario.vistas.CostCenter == "true") {
                    $("#menu_Users").show();
                    $("#liCentroCostos").show();
                }
                
                if (objUsuario.vistas.Brand == "true") {
                    $("#menu_Vehicles").show();
                    $("#librand").show();
                }
                if (objUsuario.vistas.Model == "true") {
                    $("#menu_Vehicles").show();
                    $("#limodal").show();
                }
                if (objUsuario.vistas.Perfiles == "true") {
                    $("#menu_Vehicles").show();
                    $("#liProfile").show();
                }
                if (objUsuario.vistas.Drivers == "true") {
                    $("#menu_Vehicles").show();
                    $("#lidriver").show();
                }
                if (objUsuario.vistas.Configuration == "true") {
                    $("#menuConfiguracion").show();
                }
            } else {
                $('#ingresar').html('<a href="' + "{{url('/login')}}" +
                    ' "><i class="zmdi zmdi-power"></i><span>INGRESAR AL SISTEMA</span></a>');
            }

            //$('#configuraciones').html('<a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr1"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Configuraciones</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a><ul id="dashboard_dr1" class="collapse collapse-level-1"><li><a href="'+"{{url('/idioma')}}"+'">Idioma</a></li><li><a href="'+"{{url('/usuarios')}}"+'">Usuarios</a></li></li></ul>');




        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("" + errorThrown);
            //$('#Error').append(" <strong>ERROR EN EL SERVIDOR </strong> " + errorThrown);
        }
    });

}

function UpdateContenedor(menu) {
    interfaz = menu;
    var urlAdd = "{{url('/')}}/" + menu;
    blockPage();
    $.ajax({
        type: 'GET',
        url: urlAdd,
        async: true,

        //data: datos,
        success: function(data) {
            $('#contenedor').html(data);

            showPage();
            init_SmartWizard();
            //jsRemoveWindowLoad();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            //alert("" + errorThrown);
            //$('#Error').append(" <strong>ERROR EN EL SERVIDOR </strong> " + errorThrown);
        }
    });
}




function jsRemoveWindowLoad() {
    // eliminamos el div que bloquea pantalla
    $("#WindowLoad").remove();

}

function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("contenedor").style.display = "block";
}

function blockPage() {
    document.getElementById("contenedor").style.display = "none";
    document.getElementById("loader").style.display = "block";
}
</script>
</body>

</html>