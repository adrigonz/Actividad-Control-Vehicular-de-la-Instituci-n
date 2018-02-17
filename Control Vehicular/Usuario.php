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
    protected $nombre;
    protected $apellidoP;
    protected $apellidoM;
    protected $email;
    protected $telefono;
    protected $estatus;
    protected $area;
    protected $cadena;
    protected $noClave;
    protected $codigoTarjeta;
    
    protected $accesoCajon = array(AccesoCajon);
    protected $vehiculo;
            
    function __construct() {
        
    }

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
    
    function getAccesoCajon() {
        return $this->accesoCajon;
    }

    function getVehiculo() {
        return $this->vehiculo;
    }

    function setAccesoCajon(AccesoCajon $accesoCajon) {
        array_push($this->accesoCajon = $accesoCajon);
    }

    function setVehiculo(Vehiculo $vehiculo) {
        $this->vehiculo = $vehiculo;
    }
}
