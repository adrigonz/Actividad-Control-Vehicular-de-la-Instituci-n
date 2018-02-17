<?php

/**
 * Objetivo:
 * Identificar un automovilista del tipo Administrativo, 
 * para que realice sus respectivas funciones.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class Admmistrativo extends Automovilista{
    private $noEmpleado;

    public function __construct() {
        parent::__construct();
    }    
    
    function getNoEmpleado() {
        return $this->noEmpleado;
    }

    function setNoEmpleado($noEmpleado) {
        $this->noEmpleado = $noEmpleado;
    }
}
