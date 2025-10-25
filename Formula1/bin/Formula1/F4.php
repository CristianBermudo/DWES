<?php
namespace Formula1;

class F4 extends Monoplaza {
    private $paisCategoria;

     ////////CONSTRUCTOR////////
    public function __construct(string $nombrePiloto, string $nacionalidad, int $numeroPlaza, string $escuderia, int $cantidadPuntos, string $paisCategoria) {
        parent::__construct($nombrePiloto, $nacionalidad, $numeroPlaza, $escuderia, $cantidadPuntos);
        $this->paisCategoria = $paisCategoria;
    }

     // GETTERS Y SETTERS ////
    public function getPaisCategoria(){
    return $this->paisCategoria;
    }
    public function setPaisCategoria($paisCategoria){
    $this->paisCategoria = $paisCategoria;
    }

     // METODOS ///
    public function posicionValida($posicion){
        if ($posicion < 1) {
        return false;
    }
    if ($posicion > 30) {
        return false;
    }
    return true;
    }

    public function otorgarPuntos($posicion,$vueltaRapida){
        if ($posicion < 1 || $posicion > 30) {
        return false;
        }
        switch ($posicion) {
        case 1:
            $this->cantidadPuntos += 25;
            break;
        case 2:
            $this->cantidadPuntos += 18;
            break;
        case 3:
            $this->cantidadPuntos += 15;
            break;
        case 4:
            $this->cantidadPuntos += 12;
            break;
        case 5:
            $this->cantidadPuntos += 10;
            break;
        case 6:
            $this->cantidadPuntos += 8;
            break;
        case 7:
            $this->cantidadPuntos += 6;
            break;
        case 8:
            $this->cantidadPuntos += 4;
            break;
        case 9:
            $this->cantidadPuntos += 2;
            break;
        case 10:
            $this->cantidadPuntos += 1;
        default:
            break;
        }
    }

    public function subirCategoria(string $nombreAcademia){
        return new F3($this->nombrePiloto, $this->nacionalidad, $this->numeroPlaza, $this->escuderia, $this->cantidadPuntos, $nombreAcademia);
    }

    ///TOSTRING///
    public function __toString(){
    return parent::__toString() . "País Categoría:" . $this->paisCategoria;
    }
}