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
<script src="<?php echo e(url('/')); ?>/build/js/custom.js"></script>
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
    var urlAdd = "<?php echo e(url('/getUserSesion')); ?>";
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
                $('#logout').html('<a href="' + "<?php echo e(url('/cerrarSesion')); ?>" +
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
                    $("#livehicle1").show();
                    $("#livehicle2").show();
                }else{
                    $("#menu_Vehicles").hide();
                }
                if (objUsuario.vistas.Department == "true") {
                    $("#lidepartment").show();
                    $("#lidepartment1").show();
                    $("#lidepartment2").show();
                }else{
                    $("#lidepartment").hide();
                }
                if (objUsuario.vistas.CostCenter == "true") {
                    $("#liCentroCostos").show();
                    $("#liCentroCostos1").show();
                    $("#liCentroCostos2").show();
                }else{
                    $("#liCentroCostos").hide();
                }
                if (objUsuario.vistas.Brand == "true") {
                    $("#librand").show();
                    $("#librand1").show();
                    $("#librand2").show();
                }else{
                    $("#librand").hide();
                }
                if (objUsuario.vistas.Model == "true") {
                    $("#limodal").show();
                    $("#limodal1").show();
                    $("#limodal2").show();
                }else{
                    $("#limodal").hide();
                }
                if (objUsuario.vistas.Perfiles == "true") {
                    $("#liProfile").show();
                    $("#liProfile1").show();
                    $("#liProfile2").show();
                }else{
                    $("#liProfile").hide();
                }
                if (objUsuario.vistas.Drivers == "true") {
                    $("#lidriver").show();
                    $("#lidriver1").show();
                    $("#lidriver2").show();
                }else{
                    $("#lidriver").hide();
                }
                if (objUsuario.vistas.Configuration == "true") {
                    $("#menuConfiguracion").show();
                }
            } else {
                $('#ingresar').html('<a href="' + "<?php echo e(url('/login')); ?>" +
                    ' "><i class="zmdi zmdi-power"></i><span>INGRESAR AL SISTEMA</span></a>');
            }

            //$('#configuraciones').html('<a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr1"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Configuraciones</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a><ul id="dashboard_dr1" class="collapse collapse-level-1"><li><a href="'+"<?php echo e(url('/idioma')); ?>"+'">Idioma</a></li><li><a href="'+"<?php echo e(url('/usuarios')); ?>"+'">Usuarios</a></li></li></ul>');




        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("" + errorThrown);
            //$('#Error').append(" <strong>ERROR EN EL SERVIDOR </strong> " + errorThrown);
        }
    });

}

function UpdateContenedor(menu) {
    interfaz = menu;
    var urlAdd = "<?php echo e(url('/')); ?>/" + menu;
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

</html><?php /**PATH C:\xampp\htdocs\Laravel\resources\views/footer.blade.php ENDPATH**/ ?>