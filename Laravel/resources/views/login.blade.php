<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{url('/')}}/css/master.css">

</head>

<body>
    <style>
        body { display:none; }
        body {
            background-color:black;
        }
            .login-box {
              width: 500px;
              height: 420px;
              background: black;
              color: white;
              top: 50%;
              left: 50%;
              position: absolute;
              transform: translate(-50%, -50%);
              box-sizing: border-box;
              padding: 70px 30px;
            }
            .login-box .avatar {
              /*width: 100px;
              height: 100px;
              border-radius: 50%;
              position: absolute;
              top: -73px;
              left: calc(50% - 50px);*/
              width: 200px;
                height: 200px;
                border-radius: 50%;
                position: absolute;
                top: -147px;
                left: calc(50% - 95px);
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
    </style>
    <div class="login-box">
        <img src="{{url('/')}}/images/BMW_White-Colour_RGB.svg" class="avatar" alt="Avatar Image">
        <h1>Login</h1>

        <!-- USERNAME INPUT -->
        <label for="Email">User</label>
        <strong>
            <input type="text" placeholder="User" id="Email">
        </strong>
        <!-- PASSWORD INPUT -->
        <label for="password">Password</label>
        <input type="password" id="Password" placeholder="Password">
        <input type="submit" value="Login" onclick="IniciarSesion();">
        <input type="submit" value="Cancel" onclick="Cancelar();">

    </div>
</body>

<!--jQUERY-->
<script src="{{url('/')}}/dashboard/dist/js/jquery-3.1.1.js"></script>
<script src="{{url('/')}}/dist/vendors/bower_components/jquery/dist/jquery.min.js"></script>


<script src="{{url('/')}}/dist/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{url('/')}}/dashboard/dist/js/sweetalert.min.js"></script>

<script type="text/javascript">
 /*codigo utilizado para eviar clickjacking*/
 if (self == top) {
   document.getElementsByTagName("body")[0].style.display = 'block';
} else {
   top.location = self.location;
}

if (top.location != location) top.location = self.location;
//**********************************************************


    //var IPWS="http://localhost:52203";
    var pass = "";
    var email = "";
    var user = "";
    let msj;
    var usuario;
    function IniciarSesion() {
      //var IPSERVIDOR="{{url('/')}}".replace(":85/", "");
     // var IPSERVIDOR="{{url('/')}}";//.replace("/WSTankFarm", "");

       username = document.getElementById("Email").value;
    pass = document.getElementById("Password").value;
    var IPWS = "{{url('/')}}";//.replace(":85", "");
    ///ValidarLogin?Usuario={Usuario}&password={password}
    var para = {
        UserName: username,
        password: pass
    };

    var sURL = IPWS +"ValidarLogin";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        headers: {Authorization: 'Bearer '+objUsuario.Token },
        crossDomain: true,

        xhrFields: {
            cors: false
        },
        cache: false,
        data: para,


            //dataFilter: function (data) { return data; },
            success: function (data) {



                usuario=data.lstUsuarios[0];
                msj=data.Status;
                /*var datos = true;
                if (datos==true){
                      swal("Bien!", "El usuario es correcto! ", "success");

                    }else{

                       swal("Error!", "El usuario es incorrecto! ", "warning");
                    }*/


            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {

                swal("Error", "No se pudo: " + errorThrown, "error");
            }
        });

        if (msj == "FOUND" || msj===null) {
           swal("Error", "Usuario Incorrecto" , "warning");

        }else{
            var para =  {
            "COMPANY": usuario.Compania,
            "EMAIL": usuario.Correo,
            "ID":usuario.ID,
            "LANGUAGE": usuario.IdIdioma,
            "NAME":usuario.Nombre,
            "PASSWORD": "---",
            "PHONE": usuario.Telefono,
            "ROL":usuario.IdRol,
            //"SUPERVISOR": rol.SUPERVISOR,
            "USERNAME":usuario.UserName,
            //"VIEWS": rol.VIEWS
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

                xhrFields: { cors: false },
                cache: false,
                data: para,


                //dataFilter: function (data) { return data; },
                success: function (data) {
                    location.href = "{{url('/')}}";


                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {

                    swal("Error", "No se pudo realizar conexion con el servidor" , "error");
                }
            });
        }






    }

    function Cancelar() {
        location.href = "{{url('/')}}";
    }
</script>



<!-- Page specific js -->

</html>
