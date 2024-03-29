<div class="x_panel" id="divEditarUsuario">
    <div class="x_title">
        <h2> New Model <small>Please complete all fields</small> </h2>

        <div class="clearfix"></div>
    </div>

    <div class="x_content">
        <br>

        <div class="col-md-6">
            <div id="divCombo1" class="form-group">
                <label class="control-label mb-10 text-left">Brand * </label>
                <select id="marca" class="form-control validarCombo">
                    <option value="Select Option" required="required" selected="selected">Select Option
                    </option>
                    <option value="1" required="required">BMW
                    </option>
                    <option value="2" required="required">TOYOTA
                    </option>

                </select>
            </div>
            <div id="divCombo2" class="form-group">
                <label class="control-label mb-10 text-left">Model Name * </label>
                <input type="text" class="form-control validar"
                    onkeyup="document.getElementById(this.id).value=document.getElementById(this.id).value.toUpperCase()"
                    name="Model" id="Model" placeholder="Model">

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
            <button type="button" class="btn btn-primary" onclick="UpdateContenedor('Model');">Cancel</button>

            <input type="button" value="Save" class="btn btn-success" id="SaveUserF" onclick="validaciones();">

        </div>
    </div>
</div>

<div id="error" class="alert alert-danger" role="alert" style="display:none;">

</div>
<script>

$(document).ready(function() {

    Fillmarcas();


});
var ArrayMarcas;

function Fillmarcas() {
    console.log("llm");
    var sURL = IPWS +"WsGetmarcas";
    $.ajax({
        url: sURL,
        dataType: "json",
        type: "GET",
        async: false,
        success: function(data) {
            ArrayMarcas = data.lstmarcas;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
    });
    $('#marca').empty();
    marca = ' <option value="Select Option" selected disabled>Select Option</option>';
    $(ArrayMarcas).each(function(i) {
        marca += '<option value="' + this.MarcID + '">' + this.MarcDesc + '</option>';
    });
    $('#marca').html(marca);
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

        SaveModel();
    } else {
        // error

        $('#divMensajeError').show();
        $('#mensajeError').html(textIdioma1);
    }

}


function SaveModel() {

    var MarcID = $('#marca').val();
    var ModelDesc = $('#Model').val();


    swal({
            title: "Are you sure?",
            text: "THIS MODEL WILL BE SAVED!",
            icon: "warning",
            buttons: true,

        })
        .then((willDelete) => {
            if (willDelete) {

                var para = {
                    "ModelDesc": ModelDesc,
                    "MarcID": MarcID,
                };

                var sURL = IPWS +"WsInsertModelo";

                $.ajax({
                    url: sURL,
                    dataType: "json",
                    type: "POST",
                    async: false,
                    data: para,


                    success: function(data) {

                        if (data.Status == "OK") {
                            swal("OK! THE MODEL SAVED SUCCESSFULLY!", {
                                icon: "success",
                            });
                            UpdateContenedor('Model');
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
<?php /**PATH C:\xampp\htdocs\TANKFARM\Laravel\resources\views/AddModel.blade.php ENDPATH**/ ?>