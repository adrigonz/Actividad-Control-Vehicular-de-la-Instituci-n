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
    
    public function __construct() {
        parent::__construct();
    }
    
    public function consultarHistorialAutomovil(Autommovilista $oAutomoviilista)
    {

    }
            
    public function atenderInciddencia(AccesoCajon $oAcceso, Automovilista $oAutomovilista)
    {

    }

    public function asiganarTarjeta(Automovilista $oAitomoviista)
    {
        
    }
}
