<?php
namespace Formula1;

abstract class Monoplaza {
    protected  $nombrePiloto;
    protected  $nacionalidad;
    protected  $numeroPlaza;
    protected  $escuderia;
    protected  $cantidadPuntos;
    
    ////CONSTRUCTOR///
    public function __construct(string $pNombrePiloto, string $pNacionalidad, int $pNumeroPlaza, string $pEscuderia, int $pCantidadPuntos) {
        $this->nombrePiloto = $pNombrePiloto;
        $this->nacionalidad = $pNacionalidad;
        $this->numeroPlaza = $pNumeroPlaza;
        $this->escuderia = $pEscuderia;
        $this->cantidadPuntos = $pCantidadPuntos;
    }

    // GETTERS Y SETTERS ////
    public function getNombrePiloto(){ 
        return $this->nombrePiloto; 
    }
    public function setNombrePiloto($pNombrePiloto){ 
        $this->nombrePiloto = $pNombrePiloto; 
    }

    public function getNacionalidad(){ 
        return $this->nacionalidad; 
    }
    public function setNacionalidad($pNacionalidad){
        $this->nacionalidad = $pNacionalidad; 
    }

    public function getNumeroPlaza(){ 
        return $this->numeroPlaza; 
    }
    public function setNumeroPlaza($pNumeroPlaza){
        $this->numeroPlaza = $pNumeroPlaza; 
    }

    public function getEscuderia(){
        return $this->escuderia; 
    }
    public function setEscuderia($pEscuderia){
        $this->escuderia = $pEscuderia;
    }

    public function getCantidadPuntos(){ 
        return $this->cantidadPuntos; 
    }
    public function setCantidadPuntos($pCantidadPuntos){
        $this->cantidadPuntos = $pCantidadPuntos; 
    }

    // METODOS ///
    abstract public function otorgarPuntos($posicion,$vueltaRapida);
    abstract public function posicionValida($posicion);

    ///TOSTRING///
    public function __toString(){
    return "Piloto: {$this->nombrePiloto}" .
        ", Nacionalidad: {$this->nacionalidad}" .
        ", Nº: {$this->numeroPlaza}" .
        ", Escudería: {$this->escuderia}" .
        ", Puntos: {$this->cantidadPuntos}";
    }
}