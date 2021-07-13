<!DOCTYPE html>
<html>

<head>
    <style>
    * {
        font-size: 12px;
        font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }

    #PesoNeto {
        font-size: 40px
    }

    td,
    th,
    tr,
    table {
        border-top: 1px solid black;
        border-collapse: collapse;
        /*margin-left: 73px;*/
        margin: 0% 0% 0% 5%;
        /*width: 100%;*/
        text-align: left;
    }

    td.textoDerecha {
        width: 73%;
        text-align: right;
    }

    td.producto,
    th.producto {
        width: 75px;
        max-width: 75px;
    }

    td.cantidad,
    th.cantidad {
        width: 40px;
        max-width: 40px;
        word-break: break-all;
    }

    td.precio,
    th.precio {
        width: 40px;
        max-width: 40px;
        word-break: break-all;
    }

    .centrado {
        text-align: center;
        align-content: center;
    }

    .ticket {
        width: 300px;
        max-width: 300px;
    }

    img {
        max-width: inherit;
        width: inherit;
    }

    tr:nth-child(even) {
        /*background-color: #dddddd;*/
    }

    .oculto-impresion,
    .oculto-impresion * {
        border-radius: 60px;
        background: #4aa23c;
        border: solid 1px #4aa23c;
        color: #fff;
        padding: 10px 25px;
        text-transform: capitalize;
        border-radius: 2px;
        outline: none;
        box-shadow: none;
        border: none;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-size: 155%;
        margin: 0% 0% 0% 5%;
    }

    @font-face {
        font-family: ds-digital;
        font-style: normal;
        font-weight: 400;
        src:local('DS-Digital'),
        local('DS-Digital-Normal'),
    }



    .textoDigitos {
        font-family: 'DS-Digital', arial;
        font-size: 68px;
        border: 7px solid green;
    }

    @media  print {

        .oculto-impresion,
        .oculto-impresion * {
            display: none !important;
        }
    }
    </style>
</head>

<body>
    <div class="ticket">

        <canvas id="CodigoBarras" style=" margin: 0% 0% 0% 20%;"></canvas>
        <i class="fa fa-print"></i>
        <button class="oculto-impresion centrado " id="boton" onclick="imprimir()">PRINT</button>
    </div>




</body>
<script src="<?php echo e(url('/')); ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo e(url('/')); ?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
//**************ip de servidor
//var IPWS = "http://localhost:49915";

var IPSERVIDOR = "<?php echo e(url('/')); ?>".replace(":83/TankFarmWeb2", "");
//var IPSERVIDOR = "<?php echo e(url('/')); ?>".replace("/ScadaBMW", "");

var IPWS = IPSERVIDOR + "/WSBascula";
var opcion = "";
var objPesaje = null;
var objAlmacen = null;
var datosConfig = null;
$(document).ready(function() {

    //GetTickets();
    //LLENAR CODIGO DE BARRAS
    var codigo = "<?php echo e($codigo); ?>";
    var op=  "<?php echo e($op); ?>";
    $("#CodigoBarras").JsBarcode(codigo, {
        displayValue: true,
        fontSize: 20
    });
    if(op == "reimprimir"){
        $('#boton').hide();
        imprimir();
    }
});

function imprimir() {
    window.print();

}




</script>
<!-- jQuery -->
<script src="<?php echo e(url('/')); ?>/js/codigoBarrasJS.js"></script>


</html>
<?php /**PATH C:\xampp\htdocs\Laravel\resources\views/CodigoBarras.blade.php ENDPATH**/ ?>