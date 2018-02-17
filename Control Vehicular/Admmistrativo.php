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
    private $noEmpleado; // Numero que identifca al usuario como empleado de la universidad.

    /**
     * Método constructor que extiende de la clase Automovilista.
     */
    public function __construct() {
        parent::__construct();
    }    
    
    /**
     * Metodos getters.
     */
    function getNoEmpleado() {
        return $this->noEmpleado;
    }

    /**
     * Métodos setters.
     */
    function setNoEmpleado($noEmpleado) {
        $this->noEmpleado = $noEmpleado;
    }
}
