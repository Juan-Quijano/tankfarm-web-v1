<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div id="loader"></div>

<div id="contenedor">

</div>

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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


<?php /**PATH C:\xampp\htdocs\TANKFARM\Laravel\resources\views/contenedor.blade.php ENDPATH**/ ?>