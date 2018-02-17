<?php

/**
 * Objetivo:
 * Identificar las entradas y salidas de los vehiculos a la instutición.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class AccesoCajon {
    private $codigoTarjeta; // Codigo de la tarjeta.
    private $hora; // Hora de entrada o salida.
    private $fechaAcceso; // Fecha de entrada o salida.
    private $tipo; // Identifica si es Entrada o Salida.
    
    private $guardias = array(Guardia); // Arreglo de relacion con los Guardias.
    private $usuario; // Relacion con Usuario.
    private $cajon; // Relacion con Cajon.
    
    /**
     * Método contructor de la clase.
     */
    function __construct() {
        
    }
    
    /**
     * Método pata obtener los registros de la situación.
     */
    public function obtenerRegistrosSituacion(){
        
    }
    
    /**
     * Método para obtener la aclaración.
     */
    public function obtenerAclaracion(){
        
    }
    
    /**
     * Métodos getters.
     */
    function getCodigoTarjeta() {
        return $this->codigoTarjeta;
    }

    function getHora() {
        return $this->hora;
    }

    function getFechaAcceso() {
        return $this->fechaAcceso;
    }

    function getTipo() {
        return $this->tipo;
    }
    
    function getGuardias() {
        return $this->guardias;
    }

    function getUsuario() {
        return $this->usuario;
    }
    
    function getCajon() {
        return $this->cajon;
    }


    /**
     * Métodos setters.
     */
    function setCodigoTarjeta($codigoTarjeta) {
        $this->codigoTarjeta = $codigoTarjeta;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setFechaAcceso($fechaAcceso) {
        $this->fechaAcceso = $fechaAcceso;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    function setGuardias(Guardia $guardias) {
        array_push($this->guardias = $guardias);
    }

    function setUsuario(Usuario $usuario) {
        $this->usuario = $usuario;
    }

    function setCajon(Cajon $cajon) {
        $this->cajon = $cajon;
    }
}
