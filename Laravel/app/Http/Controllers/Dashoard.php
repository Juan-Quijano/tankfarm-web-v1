<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



//Controladores para la base de datos

use Illuminate\Support\Facades\DB;
class Dashoard extends Controller
{



    public function mostrarContenedor(){

        return view('contenedor');
    }
    public function mostrarInicio (){
        return view('inicio');
    }





    //**************MENUS GENERALES */

    public function showIdioma()
    {
        return view('idioma');
    }
    public function AlarmsRealTime(){
        return view('AlarmsRealTime');
    }
    public function showAlarmasHistorial() {
        return view('RecordsAlarms');
    }

    public function users()
    {
        return view('users');
    }
    public function AddUsuario()
    {
        return view('AddUsuario');
    }
    public function AddRol()
    {
        return view('AddRol');
    }
    public function Vehicles()
    {
        return view('Vehicles');
    }
    public function AddVehicle()
    {
        return view('AddVehicle');
    }
    public function AddCustomer()
    {
        return view('AddCustomer');
    }
    public function Customers()
    {
        return view('Customers');
    }
    public function Drivers()
    {
        return view('Drivers');
    }
    public function AddDriver()
    {
        return view('AddDriver');
    }
    public function Department()
    {
        return view('Department');
    }
    public function AddDepartment()
    {
        return view('AddDepartment');
    }
    public function Marca()
    {
        return view('Marca');
    }
    public function AddMarca()
    {
        return view('AddMarca');
    }
    public function Model()
    {
        return view('Model');
    }
    public function AddModel()
    {
        return view('AddModel');
    }
    public function Roles()
    {
        return view('Roles');
    }
    public function documentacion()
    {
        return view('documentacion');
    }
    public function alarmas()
    {
        return view('alarmas');
    }
    public function login(Request $request){

        return view('login');
    }


    public function Login2(Request $request){
        $resultado=$request->session()->get('user');
        if(empty($resultado)){
            return view('Login2');
        }else{
            
        if(count($resultado)>0){

            return view('contenedor');
        }

        }

       
    }
/////////////////////////////////////
    public function copiaAddDrivers(){
        return view('copiaAddDrivers');
    }

    public function copiaDrivers(){
        return view('copiaDrivers');
    }


    public function copiaAddPerfiles(){
        return view('copiaAddPerfiles');
    }

    public function copiaPerfiles(){
        return view('copiaPerfiles');
    }

/////////////////////////////////


    public function showMailServer(){

        return view('ConfigCorreo');
    }
    public function FuelTankLevel(){
        return view('FuelTankLevel');
    }
    public function AddCostCenter(){
        return view('AddCostCenter');
    }

    public function FuelGeneralReport(){

        return view('FuelGeneralReport');
    }
    Public Function Configuracion(Request $request){
        return view('Configuracion');
    }
    public function CostCenter(){
        return view('CostCenter');
    }
    public function AddPerfiles(){
        return view('AddPerfiles');
    }
    public function Perfiles(){
        return view('Perfiles');
    }
    // REPORTES
    Public Function Reporte1(Request $request){
        return view('Reporte1');
    }
    Public Function Reporte2(Request $request){
        return view('Reporte2');
    }
    Public Function ReportFuel2(Request $request){
        return view('ReportFuel2');
    }
    public function setLogin(Request $request){
        $respuesta = (object) $request->all();
        //return $request->all();

        //$rutas=['/horas-trabajo','/mantenimiento','/alarmas','/produccion','/usuarios','/documentacion','/idioma'];
        $request->session()->pull('user');
        $tempo = [
           
            "Nombre"=> $respuesta->Nombre,
            "Correo"=> $respuesta->Correo,
            "Telefono"=> $respuesta->Telefono,
            "vistas"=> $respuesta->Roles,
            "IdRol" => $respuesta->IdRol,
            "idioma"=>"ENGLISH",
            "Status" => $respuesta->Status,
            "Mensaje" => $respuesta->Mensaje,
            "Username"=>$respuesta->UserName,
            "Token"=> $respuesta->Token,
            "TimeOut"=> $respuesta->TimeOut,
        ];

        $request->session()->push('user', $tempo);
        return '{"user":"Administrator"}';




    }
    public function checkUserSesion(){
       ///fGetIDUsuario?email={email}
       $resultados->session()->get('user');

       return $resultados;
    }
    public function getUserSesion(Request $request){
        $resultado = $request->session()->get('user');

        return $resultado;

    }
    public function cerrar_sesion(Request $request)
    {
        $request->session()->pull('user');
        return redirect()->to('/');
    }


    public function showCodigoBarras(Request $request){
        return view('CodigoBarras')->with("codigo",$request->codigo)->with("op",$request->op);
    }
    public function showTickets(Request $request){
        //return $request->op;
        return view('formatoTicket')->with("op",$request->op);
    }
    public function setTicket(Request $request){
        $respuesta = (object) $request->all();
        $request->session()->pull('Ticket');


        $request->session()->push('Ticket', $respuesta);
        //return '{"vistas":"'.$respuesta->VIEWS.'"}';




    }
    public function borrarTicket(Request $request){
        try {
            $request->session()->pull('Ticket');
            return  '{"Mensaje":"Se limpio el numero de ticket"}';
        } catch (\Throwable $th) {
            return  '{"Mensaje":"Ocurrio un error al limpiar el numero de ticket","Status:"'.$th.'"}';
        }








    }
    public function getNumTicket(Request $request){
        $resultado = $request->session()->get('Ticket');
        if($resultado== null){
            return $resultado;
        }else{
            //return $resultado;
        }


    }
    public function setConfiguracion(Request $request){
        $respuesta = (object) $request->all();
        $request->session()->pull('Configuracion');


        $request->session()->push('Configuracion', $respuesta);
        //return '{"vistas":"'.$respuesta->VIEWS.'"}';




    }
    public function getConfiguracion(Request $request){
        $resultado = $request->session()->get('Configuracion');

        return $resultado;

    }




}
