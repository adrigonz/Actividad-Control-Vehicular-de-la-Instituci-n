<?php

/**
 * Objetivo:
 * Definir una clase para identificar a los vehiculos de tipo Bicicleta.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */

class Bicicleta extends Vehiculo{
    private $caracteristicas; // Caracteristicas de la bicicleta
    
    /**
     * Método constructor de la clase Bicileta que extiende de la clase Vehiculo.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Métodos getters.
     */
    function getCaracteristicas() {
        return $this->caracteristicas;
    }

    /**
     * Métodos setters.
     */
    function setCaracteristicas($caracteristicas) {
        $this->caracteristicas = $caracteristicas;
    }
}
