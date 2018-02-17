<?php

/**
 * Objetivo:
 * Definir una clase de usuario de la que puedan heredar los usuarios 
 * que acceden al estacionamiento y comparttan los atributos principales.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
abstract class Usuario {
    protected $nombre; //nombre del usuario
    protected $apellidoP; //apellidoP del usuario
    protected $apellidoM; //apellidoM del usuario
    protected $email; //email del usuario
    protected $telefono; //teléfono del usuario
    protected $estatus; //estatus del usuario
    protected $area; //área del usuario
    protected $cadena; //cadena del usuario
    protected $noClave; //noClave del usuario
    protected $codigoTarjeta; //código de tarjeta del usuario
 
    protected $accesoCajon = array(AccesoCajon); //Relación de acceso cajón 
    protected $vehiculo; //Relación de vehículo
            
    /*
     * Método constructor de la clase usuario
     */
    function __construct() {
        
    }

    /*
     * Métodos getters
     */
    function getNombre() {
        return $this->nombre;
    }

    function getApellidoP() {
        return $this->apellidoP;
    }

    function getApellidoM() {
        return $this->apellidoM;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function getArea() {
        return $this->area;
    }

    function getCadena() {
        return $this->cadena;
    }

    function getNoClave() {
        return $this->noClave;
    }

    function getCodigoTarjeta() {
        return $this->codigoTarjeta;
    }
    
     function getAccesoCajon() {
        return $this->accesoCajon;
    }

    function getVehiculo() {
        return $this->vehiculo;
    }

    //Métodos setters
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidoP($apellidoP) {
        $this->apellidoP = $apellidoP;
    }

    function setApellidoM($apellidoM) {
        $this->apellidoM = $apellidoM;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setCadena($cadena) {
        $this->cadena = $cadena;
    }

    function setNoClave($noClave) {
        $this->noClave = $noClave;
    }

    function setCodigoTarjeta($codigoTarjeta) {
        $this->codigoTarjeta = $codigoTarjeta;
    }
    
    function setAccesoCajon(AccesoCajon $accesoCajon) {
        array_push($this->accesoCajon = $accesoCajon);
    }

    function setVehiculo(Vehiculo $vehiculo) {
        $this->vehiculo = $vehiculo;
    }
}
