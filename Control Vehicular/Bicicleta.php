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
    private $caracteristicas;
    
    public function __construct() {
        parent::__construct();
    }

    function getCaracteristicas() {
        return $this->caracteristicas;
    }

    function setCaracteristicas($caracteristicas) {
        $this->caracteristicas = $caracteristicas;
    }
}
