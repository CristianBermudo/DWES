<?php
namespace Formula1;

class F2 extends Monoplaza {
    private $superLicencia;

     ////////CONSTRUCTOR////////
    public function __construct(string $nombrePiloto, string $nacionalidad, int $numeroPlaza, string $escuderia, int $cantidadPuntos, bool $superLicencia) {
        parent::__construct($nombrePiloto, $nacionalidad, $numeroPlaza, $escuderia, $cantidadPuntos);
        $this->superLicencia = $superLicencia;
    }

     // GETTERS Y SETTERS ////
    public function isSuperLicencia(){
        return $this->superLicencia;
    }

    public function setSuperLicencia($valor){
    $this->superLicencia = $valor;
    }

     // METODOS ///
    public function posicionValida($posicion){
        if ($posicion < 1) {
        return false;
    }
    if ($posicion > 24) {
        return false;
    }
    return true;
    }

    public function otorgarPuntos($posicion,$vueltaRapida){
        if ($posicion < 1 || $posicion > 24) {
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

    public function subirCategoria($nombrePatrocinador){
        if ($this->superLicencia) {
            return new F1($this->nombrePiloto, $this->nacionalidad, $this->numeroPlaza, $this->escuderia, $this->cantidadPuntos, $nombrePatrocinador);
        } else {
            echo "No puede subir a F1 sin superlicencia.\n";
            return null;
        }
    }

    ///TOSTRING///
    public function __toString(): string {
    return parent::__toString() . "Superlicencia:" . ($this->superLicencia ? "Sí" : "No");
}
}