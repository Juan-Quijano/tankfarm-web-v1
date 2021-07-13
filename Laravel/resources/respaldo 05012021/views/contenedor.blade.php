@include('header')



<div id="loader"></div>

<div id="contenedor">

</div>

@include('footer')

<script>
$(document).ready(function() {
    console.log("jolasss");
    console.log(objUsuario.Nombre);
    if (objUsuario.Nombre != "" && objUsuario.Nombre != undefined) {
        UpdateContenedor("Inicio");
    } else {
        UpdateContenedor("Inicio");
        swal("Error", "PLEASE LOGIN TO SEE THE MENUS", "error");
    }



});
</script>


