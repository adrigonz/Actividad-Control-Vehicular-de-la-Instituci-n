<?php

/**
 * Objetivo:
 * Permitir que un usuario pueda reaizar una aclaracion sobre alguna
 * incidencia ocurrida durante su acceso al estacionamiento.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class Aclaracion {
    private $automovilista;
    private $fechaIncidencia;
    private $tipoIncidencia;
    private $descripcionIncidencia;
    private $noInicdencia;
    private $fechaVencimiento;
    
    function __construct() {
        
    }

    function getAutomovilista() {
        return $this->automovilista;
    }

    function getFechaIncidencia() {
        return $this->fechaIncidencia;
    }

    function getTipoIncidencia() {
        return $this->tipoIncidencia;
    }

    function getDescripcionIncidencia() {
        return $this->descripcionIncidencia;
    }

    function getNoInicdencia() {
        return $this->noInicdencia;
    }

    function getFechaVencimiento() {
        return $this->fechaVencimiento;
    }

    function setAutomovilista($automovilista) {
        $this->automovilista = $automovilista;
    }

    function setFechaIncidencia($fechaIncidencia) {
        $this->fechaIncidencia = $fechaIncidencia;
    }

    function setTipoIncidencia($tipoIncidencia) {
        $this->tipoIncidencia = $tipoIncidencia;
    }

    function setDescripcionIncidencia($descripcionIncidencia) {
        $this->descripcionIncidencia = $descripcionIncidencia;
    }

    function setNoInicdencia($noInicdencia) {
        $this->noInicdencia = $noInicdencia;
    }

    function setFechaVencimiento($fechaVencimiento) {
        $this->fechaVencimiento = $fechaVencimiento;
    }


}
