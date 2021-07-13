@include('header')



<div id="loader"></div>

<div id="contenedor">

</div>

@include('footer')

<script>
$(document).ready(function() {
    if (objUsuario.Username != "" && objUsuario.Username != undefined) {
        UpdateContenedor("Inicio");
    } else {
        UpdateContenedor("Inicio");
        swal("Error", "PLEASE LOGIN TO SEE THE MENUS", "error");
    }



});
</script>


