<style>
 body { display:none; }   
.btn.btn-app {
    position: relative;
    padding: 15px 5px;
    margin: 0 0 10px 10px;
    min-width: 150px;
    height: 94px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
    text-align: center;
    color: #666;
    border: 1px solid #ddd;
    background-color: #fafafa;
    font-size: 12px;
}

.btn.btn-app>.fa,
.btn.btn-app>.glyphicon,
.btn.btn-app>.ion {
    font-size: 38px;
    display: block;
}

.textMEnu {
    font-size: x-large;
    FONT-FAMILY: BMWTypeCondensedRegular;
}


.centrado {

    background-color: #fafafa;
    margin: 1rem;
    padding: 1rem;
    border: 2px solid #ccc;
    /* IMPORTANTE */
    text-align: center;

}

.letraGrande {
    font-size: 20px;
    FONT-FAMILY: BMWTypeCondensedRegular;
}

* {
    margin: 0px;
    padding: 0px;
    
}

/*titulo*/

div#titulo {
    width: 100%;
    margin-top: 100px;
    FONT-SIZE: 50PX;
    FONT-FAMILY: BMWTypeCondensedRegular;
}

p#header {
    text-align: center;
    font-size: 2.5em;
    color: #9a9a9a;
}

p#subheader {
    text-align: center;
    color: #cecece;
    margin-top: 20px;
    font-size: 1.3em;
}

header {
    margin: 100px auto;
    width: 1200px;
    height: 230px;

}

div.contenedor {
    width: 200px;
    height: 230px;
    float: left;
    -webkit-transition: height .4s;
}

div#uno {
    background-color: rgb(208, 101, 3);
}

div#dos {
    background-color: rgb(233, 147, 26);
}

div#tres {
    background-color: rgb(22, 145, 190);
}

div#cuatro {
    background-color: rgb(22, 107, 162);
}

div#cinco {
    background-color: rgb(27, 54, 71);
}

div#seis {
    background-color: rgb(21, 40, 54);
}

img.icon {
    display: block;
    margin: 50px auto;
    background-color: rgba(255, 255, 255, .15);
    width: 40px;
    padding: 20px;
    -webkit-border-radius: 50%;
    -webkit-box-shadow: 0px 0px 0px 30px rgba(255, 255, 255, 0);
    -webkit-transition: box-shadow .4s;
}

p.texto {
    font-size: 1.2em;
    FONT-FAMILY: BMWTypeCondensedRegular;
    color: white;
    text-align: center;
    padding-top: 10px;
    opacity: .6;
    -webkit-transition: padding-top .4s;
}

div.contenedor:hover {
    height: 250px;
}

div.contenedor:hover p.texto {
    padding-top: 30px;
    opacity: 1;
}

div.contenedor:hover img.icon {
    -webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, .6);
}
</style>
<div id="titulo">
    <p id="header">WELCOME</p>
    
</div>



<style>
* {
    box-sizing: border-box;
}

body {
   
}

/* Float four columns side by side */
.column {
    float: left;
    width: 25%;
    padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {
    margin: 0 -5px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
        display: block;
        margin-bottom: 20px;
    }
}

/* Style the counter cards */
.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
}
</style>

<div class="row">
    <div class="column">
        <div class="card">
            <a href="{{url('/cerrarSesion')}}">
                <p><img src="{{url('/images/login.png')}}" alt="Avatar" style="width:100px;height:100px;"></p>
                <h3>LOG OUT</h3>
            </a>

        </div>
    </div>

    <div class="column">
        <div class="card">
            <a href="javascript:UpdateContenedor('FuelTankLevel');">
                <p> <img src="{{url('/images/level.png')}}" alt="Avatar" style="width:100px;height:100px;"></p>
                <h3 style="FONT-FAMILY: BMWTypeCondensedRegular;">TANKS LEVELS</h3>
            </a>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <a href="javascript:UpdateContenedor('Reporte1');">
                <p> <img src="{{url('/images/graficas.png')}}" alt="Avatar" style="width:100px;height:100px;"></p>
                <h3 style="FONT-FAMILY: BMWTypeCondensedRegular;"> TANK FARM REPORT</h3>
            </a>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <a href="javascript:UpdateContenedor('ReportFuel2');">
                <p> <img src="{{url('/images/graficas.png')}}" alt="Avatar" style="width:100px;height:100px;"></p>
                <h3 style="FONT-FAMILY: BMWTypeCondensedRegular;"> TGF REPORT</h3>
            </a>
        </div>
    </div>


</div>
<script>
 /*codigo utilizado para eviar clickjacking*/
 if (self == top) {
   document.getElementsByTagName("body")[0].style.display = 'block';
} else {
   top.location = self.location;
}

if (top.location != location) top.location = self.location;
//**********************************************************


</script>