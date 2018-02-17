<?php

/**
 * Objetivo:
 * Permitir obtener los reportes que se requieren sobre las estaditicas de acceso al estacionamiento.
 *
 * @author Adriana de Jesús González Guerrero.
 * @author Carlos Uriel Arriaga Corona.
 * @version 1.0
 */
class HistorialAutomovil {
    private $cantidadAccesoCajonDia; //Catidad de acceso cajon día
    private $cantidadAccesoCajonSemana; //Catidad de acceso cajon semana
    private $cantidadAccesoCajonMes; //Catidad de acceso cajon mes
    private $cantidadIncidenciasDia; //Catidad incidencias día
    private $cantidadIncidenciasSemana; //Catidad incidencias semana
    private $cantidadIncidenciasMes; //Catidad incidencias mes
    private $hotarioMayorInfluenciaVehicular; //Horario Mayor influencia vehicular
    private $descripcionVehiculo; //Descripción de vehículo
    private $cantidadMotosDia; //Cantidad motos al día
    private $cantidadMotosSemana; //Cantidad motos al semana
    private $cantidadMotosMes; //Cantidad motos al mes
    private $cantidadAutosDia; //Cantidad autos día
    private $cantidadAutosSemana; //Cantidad autos semana
    private $cantidadAutosMes; //Cantidad autos mes
    private $cantidadBicicletaDia; //Cantidad bicicletas día
    private $cantidadBicicletaSemana; //Cantidad bicicletas semana
    private $cantidadBicicletaMes;  //Cantidad bicicletas mes
    private $cantidadTotalVehiculosDia; //Cantidad total vehículos día
    private $cantidadTotalVehiculosSemana; //Cantidad total vehículos semana
    private $cantidadTotalVehiculosMes; //Cantidad total vehículos mes 
    private $noClaveUsuario; //Número de clave de usuario
    
    
    /*
     * Método constructor de la clase HistorialAutomovil
     */
    function __construct() {
        
    }
    
    /*
     * Método para calcular cantidad acceso día
     */
    public function calcularCantidadACDia() {
        
    }
    
    /*
     * Método para calcular cantidad acceso semana
     */
    public function calcularCantidadACSemana() {
        
    }
    
    /*
     * Método para calcular cantidad acceso mes
     */
    public function calcularCantidadACMes() {
        
    }
    
    /*
     * Método para calcular cantidad incidencia al día
     */
    public function calcularCantidadIncidenciasDia() {
        
    }
    
    /*
     * Método para calcular cantidad incidencia al semana
     */
    public function calcularCantidadIncidenciasSemana() {
        
    }
    
    /*
     * Método para calcular cantidad incidencia al mes
     */
    public function calcularCantidadIncidenciasMes() {
        
    }
    
    /*
     * Método para calcular horario mayor influencia vehícular
     */
    public function calcularHorarioMayorInfluenciaVehicular() {
        
    }
    
    /*
     * Método para calcular cantidad motos día
     */
    public function calcularCantidadMotosDia() {
        
    }
    
    /*
     * Método para calcular cantidad motos semana
     */
    public function calcularCantidadMotosSemana() {
        
    }
    
    /*
     * Método para calcular cantidad motos mes
     */
    public function calcularCantidadMotosMes() {
        
    }
    
    /*
     * Método para calcular cantidad autos día
     */
    public function calcularCantidadAutosDia() {
        
    }
    
    /*
     * Método para calcular cantidad autos semana
     */
    public function calcularCantidadAutosSemana() {
        
    }
    
    /*
     * Método para calcular cantidad autos mes
     */
    public function calcularCantidadAutosMes() {
        
    }
    
    /*
     * Método para calcular cantidad bicicletas día
     */
    public function calcularCantidadBicisDia() {
        
    }
    
    /*
     * Método para calcular cantidad bicicletas semana
     */
    public function calcularCantidadBicisSemana() {
        
    }
    
    /*
     * Método para calcular cantidad bicicletas mes
     */
    public function calcularCantidadBicisMes() {
        
    }
    
    /*
     * Método para calcular cantidad vehículos día
     */
    public function calcularCantidadVehiculosDia() {
        
    }
    
    /*
     * Método para calcular cantidad vehículos semana
     */
    public function calcularCantidadVehiculosSemana() {
        
    }
    
    /*
     * Método para calcular cantidad vehículos mes
     */
    public function calcularCantidadVehiculosMes() {
        
    }
    
    /*
     * Métodos getters
     */
    function getCantidadAccesoCajonDia() {
        return $this->cantidadAccesoCajonDia;
    }

    function getCantidadAccesoCajonSemana() {
        return $this->cantidadAccesoCajonSemana;
    }

    function getCantidadAccesoCajonMes() {
        return $this->cantidadAccesoCajonMes;
    }

    function getCantidadIncidenciasDia() {
        return $this->cantidadIncidenciasDia;
    }

    function getCantidadIncidenciasSemana() {
        return $this->cantidadIncidenciasSemana;
    }

    function getCantidadIncidenciasMes() {
        return $this->cantidadIncidenciasMes;
    }

    function getHotarioMayorInfluenciaVehicular() {
        return $this->hotarioMayorInfluenciaVehicular;
    }

    function getDescripcionVehiculo() {
        return $this->descripcionVehiculo;
    }

    function getCantidadMotosDia() {
        return $this->cantidadMotosDia;
    }

    function getCantidadMotosSemana() {
        return $this->cantidadMotosSemana;
    }

    function getCantidadMotosMes() {
        return $this->cantidadMotosMes;
    }

    function getCantidadAutosDia() {
        return $this->cantidadAutosDia;
    }

    function getCantidadAutosSemana() {
        return $this->cantidadAutosSemana;
    }

    function getCantidadAutosMes() {
        return $this->cantidadAutosMes;
    }

    function getCantidadBicicletaDia() {
        return $this->cantidadBicicletaDia;
    }

    function getCantidadBicicletaSemana() {
        return $this->cantidadBicicletaSemana;
    }

    function getCantidadBicicletaMes() {
        return $this->cantidadBicicletaMes;
    }

    function getCantidadTotalVehiculosDia() {
        return $this->cantidadTotalVehiculosDia;
    }

    function getCantidadTotalVehiculosSemana() {
        return $this->cantidadTotalVehiculosSemana;
    }

    function getCantidadTotalVehiculosMes() {
        return $this->cantidadTotalVehiculosMes;
    }

    function getNoClaveUsuario() {
        return $this->noClaveUsuario;
    }

    /*
     * Métodos setters
     */
    function setCantidadAccesoCajonDia($cantidadAccesoCajonDia) {
        $this->cantidadAccesoCajonDia = $cantidadAccesoCajonDia;
    }

    function setCantidadAccesoCajonSemana($cantidadAccesoCajonSemana) {
        $this->cantidadAccesoCajonSemana = $cantidadAccesoCajonSemana;
    }

    function setCantidadAccesoCajonMes($cantidadAccesoCajonMes) {
        $this->cantidadAccesoCajonMes = $cantidadAccesoCajonMes;
    }

    function setCantidadIncidenciasDia($cantidadIncidenciasDia) {
        $this->cantidadIncidenciasDia = $cantidadIncidenciasDia;
    }

    function setCantidadIncidenciasSemana($cantidadIncidenciasSemana) {
        $this->cantidadIncidenciasSemana = $cantidadIncidenciasSemana;
    }

    function setCantidadIncidenciasMes($cantidadIncidenciasMes) {
        $this->cantidadIncidenciasMes = $cantidadIncidenciasMes;
    }

    function setHotarioMayorInfluenciaVehicular($hotarioMayorInfluenciaVehicular) {
        $this->hotarioMayorInfluenciaVehicular = $hotarioMayorInfluenciaVehicular;
    }

    function setDescripcionVehiculo($descripcionVehiculo) {
        $this->descripcionVehiculo = $descripcionVehiculo;
    }

    function setCantidadMotosDia($cantidadMotosDia) {
        $this->cantidadMotosDia = $cantidadMotosDia;
    }

    function setCantidadMotosSemana($cantidadMotosSemana) {
        $this->cantidadMotosSemana = $cantidadMotosSemana;
    }

    function setCantidadMotosMes($cantidadMotosMes) {
        $this->cantidadMotosMes = $cantidadMotosMes;
    }

    function setCantidadAutosDia($cantidadAutosDia) {
        $this->cantidadAutosDia = $cantidadAutosDia;
    }

    function setCantidadAutosSemana($cantidadAutosSemana) {
        $this->cantidadAutosSemana = $cantidadAutosSemana;
    }

    function setCantidadAutosMes($cantidadAutosMes) {
        $this->cantidadAutosMes = $cantidadAutosMes;
    }

    function setCantidadBicicletaDia($cantidadBicicletaDia) {
        $this->cantidadBicicletaDia = $cantidadBicicletaDia;
    }

    function setCantidadBicicletaSemana($cantidadBicicletaSemana) {
        $this->cantidadBicicletaSemana = $cantidadBicicletaSemana;
    }

    function setCantidadBicicletaMes($cantidadBicicletaMes) {
        $this->cantidadBicicletaMes = $cantidadBicicletaMes;
    }

    function setCantidadTotalVehiculosDia($cantidadTotalVehiculosDia) {
        $this->cantidadTotalVehiculosDia = $cantidadTotalVehiculosDia;
    }

    function setCantidadTotalVehiculosSemana($cantidadTotalVehiculosSemana) {
        $this->cantidadTotalVehiculosSemana = $cantidadTotalVehiculosSemana;
    }

    function setCantidadTotalVehiculosMes($cantidadTotalVehiculosMes) {
        $this->cantidadTotalVehiculosMes = $cantidadTotalVehiculosMes;
    }

    function setNoClaveUsuario($noClaveUsuario) {
        $this->noClaveUsuario = $noClaveUsuario;
    }
   
}
