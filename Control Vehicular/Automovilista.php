<?php

/**
 * Objetivo:
 * Definir una clase para que cumpla con los metodos que realizaran las funciones
 * que realiza un Automovilista para tener acceso al estacionamiento..
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class Automovilista extends Usuario{
    private $licenciaConducir;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function registrarDatos($nombre, $email, $noClave, $telefono){
        
    }
    
    public function registrarAutomovil(Automovilista $oAutomovilista,
            $placas, $marca, $color, $modelo, $licenciaConducir, $tarjetaCirculacion){
        
    }
    
    public function levantarAclaracion($nombrePersona, $dtlFecha, $descriocionIncidencia){
            
    }
    
    function getLicenciaConducir() {
        return $this->licenciaConducir;
    }

    function setLicenciaConducir($licenciaConducir) {
        $this->licenciaConducir = $licenciaConducir;
    }

}

