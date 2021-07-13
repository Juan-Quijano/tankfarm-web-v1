<style>

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

    .btn.btn-app>.fa, .btn.btn-app>.glyphicon, .btn.btn-app>.ion {
    font-size: 38px;
    display: block;
    }
    .textMEnu {
        font-size: x-large;
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
}

* {
    margin: 0px;
    padding: 0px;
    font-family: Helvetica Neue;
}

/*titulo*/

div#titulo {
    width: 100%;
    margin-top: 100px;
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
    <p id="subheader">Shortcuts</p>
</div>

<header>
    <a class="btn btn-app btn-lg" href="{{url('/Login')}}">
         <i class="fa fa-user"></i> <span class="textMEnu">Login</span>
    </a>
    <a class="btn btn-app btn-lg " href="javascript:UpdateContenedor('FuelTankLevel');">
         <i class="fa fa-tachometer"></i>  <span  class="textMEnu">Tanks Levels</span>
    </a>
    <a class="btn btn-app btn-lg" href="javascript:UpdateContenedor('Reporte1');">
         <i class="fa fa-tachometer"></i>  <span  class="textMEnu">Tank Farm Reports</span>
    </a>


</header>



