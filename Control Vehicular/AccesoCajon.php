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
    private $codigoTarjeta;
    private $hora;
    private $fechaAcceso;
    private $tipo;
    
    private $guardias = array(Guardia);
    private $usuario;
    private $cajon;
    
    function __construct() {
        
    }
    
    public function obtenerRegistrosSituacion(){
        
    }
    
    public function obtenerAclaracion(){
        
    }
    
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
    
    function getGuardias() {
        return $this->guardias;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getCajon() {
        return $this->cajon;
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
