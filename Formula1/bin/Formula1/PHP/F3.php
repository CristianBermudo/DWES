<?php
namespace Formula1;

class F3 extends Monoplaza {
    private $nombreAcademia;

     ////////CONSTRUCTOR////////
    public function __construct(string $nombrePiloto, string $nacionalidad, int $numeroPlaza, string $escuderia, int $cantidadPuntos, string $nombreAcademia) {
        parent::__construct($nombrePiloto, $nacionalidad, $numeroPlaza, $escuderia, $cantidadPuntos);
        $this->nombreAcademia = $nombreAcademia;
    }

     // GETTERS Y SETTERS ////
    public function getNombreAcademia(){
    return $this->nombreAcademia;
    }
    public function setNombreAcademia($nombreAcademia){
    $this->nombreAcademia = $nombreAcademia;
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
            $this->cantidadPuntos += 10;
            break;
        case 2:
            $this->cantidadPuntos += 8;
            break;
        case 3:
            $this->cantidadPuntos += 7;
            break;
        case 4:
            $this->cantidadPuntos += 6;
            break;
        case 5:
            $this->cantidadPuntos += 5;
            break;
        case 6:
            $this->cantidadPuntos += 4;
            break;
        case 7:
            $this->cantidadPuntos += 3;
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
    }

    public function subirCategoria($superLicencia){
        return new F2($this->nombrePiloto, $this->nacionalidad, $this->numeroPlaza, $this->escuderia, $this->cantidadPuntos, $superLicencia);
    }

    ///TOSTRING///
    public function __toString(){
    return parent::__toString() . "Academia:" . $this->nombreAcademia;
}
}