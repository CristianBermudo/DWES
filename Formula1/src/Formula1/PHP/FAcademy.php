<?php
namespace Formula1;

class FAcademy extends Monoplaza {
    private $potenciaMaxima;

    ////////CONSTRUCTOR////////
    public function __construct(string $nombrePiloto, string $nacionalidad, int $numeroPlaza, string $escuderia, int $cantidadPuntos, int $potenciaMaxima) {
        parent::__construct($nombrePiloto, $nacionalidad, $numeroPlaza, $escuderia, $cantidadPuntos);
        $this->potenciaMaxima = $potenciaMaxima;
    }

     // GETTERS Y SETTERS ////
    public function getPotenciaMaxima(){
    return $this->potenciaMaxima;
    }
    public function setPotenciaMaxima(int $potenciaMaxima){
    $this->potenciaMaxima = $potenciaMaxima;
    }

     // METODOS ///
    public function posicionValida($posicion){
        if ($posicion < 1) {
        return false;
    }
    if ($posicion > 18) {
        return false;
    }
    return true;
}

    public function otorgarPuntos($posicion,$vueltaRapida){
        if ($posicion < 1 || $posicion > 18) {
        return false;
        }
        switch ($posicion) {
        case 1:
            $this->cantidadPuntos += 18;
            break;
        case 2:
            $this->cantidadPuntos += 15;
            break;
        case 3:
            $this->cantidadPuntos += 12;
            break;
        case 4:
            $this->cantidadPuntos += 10;
            break;
        case 5:
            $this->cantidadPuntos += 8;
            break;
        case 6:
            $this->cantidadPuntos += 6;
            break;
        case 7:
            $this->cantidadPuntos += 4;
            break;
        case 8:
            $this->cantidadPuntos += 2;
            break;
        case 9:
            $this->cantidadPuntos += 1;
            break;
        default:
            break;
        }

        if ($vueltaRapida && $posicion <= 10) {
            $this->cantidadPuntos += 1;
        }
    }

    public function subirCategoria($paisCategoria){
        return new F4($this->nombrePiloto, $this->nacionalidad, $this->numeroPlaza, $this->escuderia, $this->cantidadPuntos, $paisCategoria);
    }

    ///TOSTRING///
    public function __toString(){
    return parent::__toString() . "Potencia Máxima:" . $this->potenciaMaxima;
}
}