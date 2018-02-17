<?php

/**
 * Objetivo:
 * Identificar un automovilista del tipo estudiante, 
 * para que realice sus respectivas funciones.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class Estudiante extends Automovilista{
    private $noControl;
    
    public function __construct() {
        parent::__construct();
    }
    
    function getNoControl() {
        return $this->noControl;
    }

    function setNoControl($noControl) {
        $this->noControl = $noControl;
    }
}
