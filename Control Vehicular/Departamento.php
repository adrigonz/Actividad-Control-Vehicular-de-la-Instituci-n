<?php

/**
 * Objetivo:
 * Identificar un departamento para definir a que departamento pertecen los Administrativos.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class Departamento {
    private $departamento; // Nombre del departamento.
    private $telefono; // Telefono del departamento.
            
    /**
     * Método constructor de la clase Departamento.
     */
    function __construct() {
     
    }
    
    /**
     * Métodos getters.
     */
    function getDepartamento() {
        return $this->departamento;
    }

    function getTelefono() {
        return $this->telefono;
    }
    
    /**
     * Métodos setters.
     */
    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
}
