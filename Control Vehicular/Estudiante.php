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
    private $noControl; //Número de control para identificar al automovilista tipo estudiante.
    
    /*
     * Método contructor de la clase Estudiante que extiende de Automovilista.
     */
    public function __construct() {
        parent::__construct();
    }
    
    /*
     * Métodos getters
     */
    function getNoControl() {
        return $this->noControl;
    }

    /*
     * Métodos setters
     */
    function setNoControl($noControl) {
        $this->noControl = $noControl;
    }
}
