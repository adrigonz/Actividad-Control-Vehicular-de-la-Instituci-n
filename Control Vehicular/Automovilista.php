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
    private $licenciaConducir; // Licencia de conducir del automovilista.
    
    /**
     * Método constructor de la clase Automovilista que extiende de Usuario.
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Método para registar la informacicon del Automovlista que hara uso del estacionamiento.
     * @param type $nombre
     * @param type $email
     * @param type $noClave
     * @param type $telefono
     */
    public function registrarDatos($nombre, $email, $noClave, $telefono){
        
    }
    
    /**
     * Metodo para registrar la informacion del Automovil que pertenece al automovilista.
     * @param Automovilista $oAutomovilista
     * @param type $placas
     * @param type $marca
     * @param type $color
     * @param type $modelo
     * @param type $licenciaConducir
     * @param type $tarjetaCirculacion
     */
    public function registrarAutomovil(Automovilista $oAutomovilista,
            $placas, $marca, $color, $modelo, $licenciaConducir, $tarjetaCirculacion){
        
    }
    
    /**
     * Método para relaizar el registro de una aclaracion en caso de que sea necesesario.
     * @param type $nombrePersona
     * @param type $dtlFecha
     * @param type $descriocionIncidencia
     */
    public function levantarAclaracion($nombrePersona, $dtlFecha, $descriocionIncidencia){
            
    }
    
    /**
     * Métodos getters.
     */
    function getLicenciaConducir() {
        return $this->licenciaConducir;
    }

    /**
     * Métodos setters.
     */
    function setLicenciaConducir($licenciaConducir) {
        $this->licenciaConducir = $licenciaConducir;
    }

}

