<?php

/**
 * Objetivo:
 * Identificar los cajones que se tiene disponibles para ser asigandos a un vehiculo.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class Cajon {
    private $area;
    private $estatus;
    private $tipoCajon;
    
    private $accesoCajon;
            
    function __construct() {
        
    }
    
    function getArea() {
        return $this->area;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function getTipoCajon() {
        return $this->tipoCajon;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function setTipoCajon($tipoCajon) {
        $this->tipoCajon = $tipoCajon;
    }

    function getAccesoCajon() {
        return $this->accesoCajon;
    }

    function setAccesoCajon(AccesoCajon $accesoCajon) {
        $this->accesoCajon = $accesoCajon;
    }

}
