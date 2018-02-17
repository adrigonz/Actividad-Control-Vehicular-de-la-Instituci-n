<?php

/**
 * Objetivo:
 * Definir una clase para que cumpla con los metodos que realizaran 
 * las funciones que tiene a su cargo un administradr en el estacionamiento.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class Administrador extends Usuario{
    
    /**
     * Método constructor de la clase que extiende de Usuario.
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Metodo para consultar el historial del Estacionamiento.
     * @param Autommovilista $oAutomoviilista
     */
    public function consultarHistorialAutomovil(Autommovilista $oAutomoviilista)
    {

    }
    
    /**
     * Método para atender a las incidencias presentadas en el estacionamiento.
     * @param AccesoCajon $oAcceso
     * @param Automovilista $oAutomovilista
     */
    public function atenderInciddencia(AccesoCajon $oAcceso, Automovilista $oAutomovilista)
    {

    }
    
    /**
     * Método para asignar la tarjeta de acceso al Automovilista.
     * @param Automovilista $oAitomoviista
     */
    public function asiganarTarjeta(Automovilista $oAitomoviista)
    {
        
    }
}
