<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guardia
 *
 * @author Adriana Gonzalez
 * @author Carlos Uriel Arriaga Corona
 */
class Guardia extends Usuario {
    
    /*
     * Método constructor de la clase Guardia que extiende de Usuario
     */
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * Método para registrar el acceso del automivilista al estacionamiento 
     */
    public function registarAcceso($automovilista, $codigoTarjeta, $hora, $fechaAcceso, $tipo){
        
    }
    
    /*
     * Métodos getters
     */
    public function getApellidoM() {
        parent::getApellidoM();
    }
    
    public function getApellidoP() {
        parent::getApellidoP();
    }
    
    public function getArea() {
        parent::getArea();
    }
    
    public function getCadena() {
        parent::getCadena();
    }
    
    public function getCodigoTarjeta() {
        parent::getCodigoTarjeta();
    }
    
    public function getEmail() {
        parent::getEmail();
    }
    
    public function getEstatus() {
        parent::getEstatus();
    }
    
    public function getNoClave() {
        parent::getNoClave();
    }
    
    public function getNombre() {
        parent::getNombre();
    }
    
    public function getTelefono() {
        parent::getTelefono();
    }
    
    /*
     * Métodos setters
     */
    public function setApellidoM($apellidoM) {
        parent::setApellidoM($apellidoM);
    }
    
    public function setApellidoP($apellidoP) {
        parent::setApellidoP($apellidoP);
    }
    public function setArea($area) {
        parent::setArea($area);
    }
    
    public function setCadena($cadena) {
        parent::setCadena($cadena);
    }
    public function setCodigoTarjeta($codigoTarjeta) {
        parent::setCodigoTarjeta($codigoTarjeta);
    }
    
    public function setEmail($email) {
        parent::setEmail($email);
    }
    
    public function setEstatus($estatus) {
        parent::setEstatus($estatus);
    }
    
    public function setNoClave($noClave) {
        parent::setNoClave($noClave);
    }
}

