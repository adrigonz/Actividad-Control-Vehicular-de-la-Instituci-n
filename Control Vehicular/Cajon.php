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
    private $area; // Area a la que pertenece el cajon.
    private $estatus; // Identificar si el cajon se encuentra disponible.
    private $tipoCajon; // Identificar si el cajon es publico o privado.
    
    private $accesoCajon; // Relación con accesoCajon.
            
    /**
     * Método constructor de la clase.
     */
    function __construct() {
        
    }
    
    /**
     * Métodos getters.
     */
    function getArea() {
        return $this->area;
    }

    function getEstatus() {
        return $this->estatus;
    }

    function getTipoCajon() {
        return $this->tipoCajon;
    }
    
    function getAccesoCajon() {
        return $this->accesoCajon;
    }
    
    /**
     * Métodos setters.
     */
    function setArea($area) {
        $this->area = $area;
    }

    function setEstatus($estatus) {
        $this->estatus = $estatus;
    }

    function setTipoCajon($tipoCajon) {
        $this->tipoCajon = $tipoCajon;
    }

    function setAccesoCajon(AccesoCajon $accesoCajon) {
        $this->accesoCajon = $accesoCajon;
    }
}
