<?php

/**
 * Objetivo:
 * Permitir que un usuario pueda llevar un regtstro de los moviemientos que son necesariosn
 * durante su acceso al estacionamiento.
 * 
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class RegistroSituacion {
    private $nombre;
    private $descripcion;
    private $codigoTarjeta;
    
    /*
     * Método constructor de la clase RegistroSituación
     */
    function __construct() {
        
    }
        
    /*
     * Métodos getters
     */
    function getNombre() {
        return $this->nombre;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCodigoTarjeta() {
        return $this->codigoTarjeta;
    }

    /*
     * Métodos setters
     */
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setCodigoTarjeta($codigoTarjeta) {
        $this->codigoTarjeta = $codigoTarjeta;
    }

}
