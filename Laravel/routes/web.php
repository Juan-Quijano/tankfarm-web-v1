<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//rutas para el mostrado general de la pagina
Route::group(array('prefix' => '/'), function () {

    Route::get('/Login', 'Dashoard@Login2');
    //Route::get('/login', 'Dashoard@login');
    Route::get('/AddCustomer', 'Dashoard@AddCustomer');
    Route::get('/Customers', 'Dashoard@Customers');
    Route::get('/Drivers', 'Dashoard@Drivers');
    Route::get('/AddDriver', 'Dashoard@AddDriver');
    Route::get('/Vehicles', 'Dashoard@Vehicles');
    Route::get('/AddVehicle', 'Dashoard@AddVehicle');
    Route::get('/AddRol', 'Dashoard@AddRol');
    Route::get('/Roles', 'Dashoard@Roles');
    Route::post('/setLogin', 'Dashoard@setLogin');
    Route::get('/getUserSesion', 'Dashoard@getUserSesion');
    Route::get('/checkUserSesion', 'Dashoard@checkUserSesion');
    Route::get('/cerrarSesion', 'Dashoard@cerrar_sesion');

    Route::get('/Department', 'Dashoard@Department');
    Route::get('/AddDepartment', 'Dashoard@AddDepartment');
    Route::get('/Marca', 'Dashoard@Marca');
    Route::get('/AddMarca', 'Dashoard@AddMarca');
    Route::get('/Model', 'Dashoard@Model');
    Route::get('/AddModel', 'Dashoard@AddModel');

    /*******  MENUS GENERAL */

    Route::get('/copiaDrivers', 'Dashoard@copiaDrivers');
    Route::get('/copiaAddDrivers', 'Dashoard@copiaAddDrivers');


    Route::get('/copiaPerfiles', 'Dashoard@copiaPerfiles');
    Route::get('/copiaAddPerfiles', 'Dashoard@copiaAddPerfiles');





    Route::get('/', 'Dashoard@login2');
    Route::get('/cerrarSesion', 'Dashoard@cerrar_Sesion');
    ///Route::get('/Main', 'Dashoard@mostrarContenedor');
    Route::get('/Inicio', 'Dashoard@mostrarInicio');


    Route::get('/Configuracion', 'Dashoard@Configuracion');
    Route::get('Idioma', 'Dashoard@showIdioma');
    Route::get('MailServer', 'Dashoard@showMailServer');
    
     //REPORTES
     Route::get('/Reporte1', 'Dashoard@Reporte1');
    Route::get('/Reporte2', 'Dashoard@Reporte2');
    Route::get('/ReportFuel2', 'Dashoard@ReportFuel2');
    Route::get('/FuelGeneralReport', 'Dashoard@FuelGeneralReport');

    //configuraciones

    Route::get('/AddCostCenter', 'Dashoard@AddCostCenter');
    Route::get('/CostCenter', 'Dashoard@CostCenter');

    Route::get('/AddPerfiles', 'Dashoard@AddPerfiles');
    Route::get('/Perfiles', 'Dashoard@Perfiles');

    Route::get('FuelTankLevel', 'Dashoard@FuelTankLevel');

    Route::get('users', 'Dashoard@users');
    Route::get('AddUsuario', 'Dashoard@AddUsuario');



    //codigo de baras
    Route::get('/CodigoBarras', 'Dashoard@showCodigoBarras');
    Route::get('/showTickets', 'Dashoard@showTickets');
    Route::get('/setTicket', 'Dashoard@setTicket');
    Route::get('/getNumTicket', 'Dashoard@getNumTicket');
    Route::get('/borrarTicket', 'Dashoard@borrarTicket');  








});

/*
Route::get('/', function () {
    return view('contenedor');
});*/

