<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/main.css">
    <!--===============================================================================================-->
</head>
<style>
.login100-form-title-1 {
    position: absolute;
    top: 75px;
    font-family: Poppins-Bold;
    font-size: 30px;
    color: #fff;
    text-transform: uppercase;
    line-height: 1.2;
    text-align: center;
}

.login-box .avatar {
    width: 47px;
    height: 62px;
    border-radius: 50%;
    position: absolute;
    top: 10px;
    left: calc(61% - 95px);
}

.login-box input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background: #ffffff;
    color: black;
    font-size: 18px;
    border-radius: 20px;
}

.login-box input[type="submit"]:hover {
    cursor: pointer;
    background: #3397c9;
    color: black;
}

.login100-form-title::before {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgb(0 0 0 / 70%);
}
</style>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/logb.webp);">
                    <span class="login100-form-title-1">
                        Sign In
                    </span>
                    <div class="login-box">
                        <img src="{{url('/')}}/images/BMW_White-Colour_RGB.svg" class="avatar" alt="Avatar Image">

                    </div>
                </div>

                <form class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" id="Email" placeholder="Enter username">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="pass" id="Password" placeholder="Enter password">
                        <span class="focus-input100"></span>
                    </div>
                    <!--
                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
-->
                    <div class="container-login100-form-btn">
                        <input value="Login" type="button" class="login100-form-btn" onclick="IniciarSesion();"
                            style="background-color: rgb(3, 118, 235);cursor:pointer;">

                        </input>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{url('/')}}/dist/js/jquery-3.5.1.js" crossorigin="anonymous"></script>
    <!--===============================================================================================-->



    <script src="{{url('/')}}/dist/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{url('/')}}/dashboard/dist/js/sweetalert.min.js"></script>
</body>
<script type="text/javascript">
//var IPWS="http://localhost:52203";
var pass = "";
var email = "";
var user = "";
let msj;
var usuario;
var IPWS = "{{url('/')}}".replace(":83", "")+":85/Home/";
var IPSERVIDOR = "{{url('/')}}".replace(":83/", "");
function IniciarSesion() {


    username = document.getElementById("Email").value;
    pass = document.getElementById("Password").value;
    //.replace(":85", "");
    ///ValidarLogin?Usuario={Usuario}&password={password}
    var para = {
        UserName: username,
        password: pass
    };
   
    var sURL = IPWS+"ValidarLogin";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",


        async: false,
        crossDomain: true,

        xhrFields: {
            cors: false
        },
        cache: false,
        data: para,


        //dataFilter: function (data) { return data; },
        success: function(data) {


            usuario = data.lstUsuarios[0];
            msj = data.Status;

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

            swal("Error", "No se pudo: " + errorThrown, "error");
        }
    });

    if (msj == "FOUND" || msj === null) {
        swal("Error", "INVALID USER", "warning");

    } else {
        var para = {
            "COMPANY": usuario.Compania,
            "EMAIL": usuario.Correo,
            "ID": usuario.ID,
            "LANGUAGE": usuario.IdIdioma,
            "NAME": usuario.Nombre,
            "PASSWORD": "---",
            "TELEFONO": usuario.Telefono,
            "ROL": usuario.IdRol,

            "NOMBRE": usuario.Nombre,
            "NOMBREROL": usuario.Roles.Rol,
            "CORREO": usuario.Correo,

            "USERNAME": usuario.UserName,
            "VIEWS": usuario.Roles
        };


        //var sURL = 'http://localhost:49934/Service1.svc/fValidarUser?email=dfgfsgf&contrase%C3%B1a=gg';
        //var sURL = "http://tdcon40.dyndns.org/WSScada/Service1.svc/fValidarUser";
        var sURL = "{{url('/')}}/setLogin";
        $.ajax({
            url: sURL,
            dataType: "json",
            type: "GET",


            async: false,
            crossDomain: true,

            xhrFields: {
                cors: false
            },
            cache: false,
            data: para,


            //dataFilter: function (data) { return data; },
            success: function(data) {
                location.href = "{{url('/')}}";


            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {

                swal("Error", "Conection error", "error");
            }
        });
    }






}

function Cancelar() {
    location.href = "{{url('/')}}";
}
$('#Password').keyup(function(e) {
    if (e.keyCode == 13) {
        IniciarSesion();
    }
});
</script>

</html>
