<div class="x_panel" id="divEditarUsuario">
    <div class="x_title">
        <h2> New Cost Center <small>Please complete all fields</small> </h2>

        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <br>

        <div class="col-md-6">
            <div id="divCombo1" class="form-group">
                <label class="control-label mb-10 text-left">Department * </label>
                <select id="Department" class="form-control validarCombo">
                    <option value="Select Option" required="required" selected="selected">Select Option
                    </option>


                </select>
            </div>
            <div id="divCombo2" class="form-group">
                <label class="control-label mb-10 text-left">Name Cost Center * </label>
                <input type="text" class="form-control validar"
                    onkeyup="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                    name="CostCenter" id="CostCenter" placeholder="Name Cost Center">

            </div>
        </div>




        <div class="col-md-12" id="divMensajeError" style="display:none">
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                <h6 class="pull-left" id="mensajeError">Error:.</h6>
                <div class="clearfix"></div>
            </div>
        </div>





    </div>
    <div class="form-group row form-group row pull-left">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" onclick="UpdateContenedor('CostCenter');">Cancel</button>

            <input type="button" value="Save" class="btn btn-success" id="SaveUserF" onclick="validaciones();">

        </div>
    </div>
</div>

<div id="error" class="alert alert-danger" role="alert" style="display:none;">

</div>
<script>

$(document).ready(function() {

    FillDepartment();


});
var ArrayDep;  

function FillDepartment() {
    console.log("llm");
    var sURL = IPWS +"GetDepartamentos";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            ArrayDep = data.lstDep;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
    $('#Department').empty();
    Depa = ' <option value="Select Option" selected disabled>Select Option</option>';
    $(ArrayDep).each(function(i) {
        Depa += '<option value="' + this.ID + '">' + this.Departamento + '</option>';
    });
    $('#Department').html(Depa);
}
function validaciones() {
    var textIdioma1 = "";
    var Idioma = "English";

    if (Idioma == "Espanol") {
        textIdioma1 = "Error: favor de llenar correctamente todos los campos";
    }
    if (Idioma == "English") {
        textIdioma1 =
            '<i class="fa fa-warning  pr-15 pull-left"></i> Error: please fill in all fields correctly.';
    }

    $('#divMensajeError').hide();
    var band = []
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



    var Combos = $(".validarCombo");
    for (let i = 0; i < Combos.length; i++) {
        if (Combos[i].value == "Select Option") {
            $("#" + Combos[i].parentNode.id).removeClass("has-ok has-success");
            $("#" + Combos[i].parentNode.id).addClass("has-error has-danger");
            band.push(1);
        } else {
            $("#" + Combos[i].parentNode.id).addClass("has-ok has-success");
            $("#" + Combos[i].parentNode.id).removeClass("has-error has-danger");
            band.push(0);
        }

    }
    var band2 = 0;
    for (let j = 0; j < band.length; j++) {
        if (band[j] == 1) {
            band2 = 1;
            break;
        } else {

        }

    }
    if (band2 == 0) {
        //ok
        $('#divMensajeError').hide();

        SaveCostCenter();
    } else {
        // error

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
    }

}


function SaveCostCenter() {

    var idDepartamento = $('#Department').val();
    var CentroCostos = $('#CostCenter ').val();


    swal({
            title: "Are you sure?",
            text: "THIS COST CENTER WILL BE SAVED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {
                    "nameCentro": CentroCostos,
                    "idDepartamento": idDepartamento,
                };

                var sURL = IPWS +"WsInsertarCentroCostos";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    data: para,


                    success: function(data) {

                        if (data.Status == "OK") {
                            swal("OK! THE COST CENTER SAVED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('CostCenter');
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

</script>
<?php /**PATH C:\xampp\htdocs\Laravel\resources\views/AddCostCenter.blade.php ENDPATH**/ ?>