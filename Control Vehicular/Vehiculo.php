<?php

/**
 * Objetivo:
 * Definir una clase de vehiculo para identificar a los vehiculos 
 * que acceden al estacionamiento.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
abstract class Vehiculo {
    protected $noPlaca; //Número de placa
    protected $marca; //Marca de vehículo
    protected $modelo; //Modelo de vehículo
    protected $color; //Color del vehículo
    protected $noTarjetacirculacion; //Targeta de circulación del vehículo
    
    protected $usuario; //Relación con ususario 
            
    /*
     * Método constructor de la clase Vehículo 
     */
    function __construct() {
        
    }
    
    /*
     * Métodos getters
     */
    function getNoPlaca() {
        return $this->noPlaca;
    }

    function getMarca() {
        return $this->marca;
    }

    function getModelo() {
        return $this->modelo;
    }

    function getColor() {
        return $this->color;
    }

    function getNoTarjetacirculacion() {
        return $this->noTarjetacirculacion;
    }
    
      function getUsuario() {
        return $this->usuario;
    }

    /*
     * Métodos setters
     */
    function setNoPlaca($noPlaca) {
        $this->noPlaca = $noPlaca;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setNoTarjetacirculacion($noTarjetacirculacion) {
        $this->noTarjetacirculacion = $noTarjetacirculacion;
    }
    
    function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }

}
