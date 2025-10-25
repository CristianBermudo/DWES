<?php
require_once "FAcademy.php";
require_once "F4.php";
require_once "F3.php";
require_once "F2.php";
require_once "F1.php";

use Formula1\F2;
use Formula1\F1;

// ====== EJEMPLO 1: F2 sin superlicencia ======
echo "=== F2 sin superlicencia ===" . PHP_EOL;
$pilotoF2_1 = new F2("Carlos Sainz Jr", "Española", 55, "Prema Racing", 0, false);
$pilotoF2_1->otorgarPuntos(1, true); // Gana la carrera y hace vuelta rápida
echo "Puntos actuales: " . $pilotoF2_1->getCantidadPuntos() . PHP_EOL;
$pilotoF2_1->subirCategoria("Shell"); // No tiene superlicencia, retorna null si no puede

// ====== EJEMPLO 2: F2 con superlicencia ======
echo PHP_EOL . "=== F2 con superlicencia ===" . PHP_EOL;
$pilotoF2_2 = new F2("Oscar Piastri", "Australiana", 81, "Virtuosi", 0, true);
$pilotoF2_2->otorgarPuntos(2, false);
echo "Puntos actuales: " . $pilotoF2_2->getCantidadPuntos() . PHP_EOL;

// Sube de categoría a F1
$f1 = $pilotoF2_2->subirCategoria("McLaren");
if ($f1 !== null) {
    echo "¡Ha subido a F1 con patrocinador: " . $f1->getNombrePatrocinador() . "!" . PHP_EOL;
}

// ====== EJEMPLO 3: F1 y vuelta rápida ======
echo PHP_EOL . "=== F1 con vuelta rápida ===" . PHP_EOL;
$pilotoF1 = new F1("Max Verstappen", "Neerlandesa", 1, "Red Bull Racing", 0, "Oracle");
$pilotoF1->otorgarPuntos(1, true);
echo "Puntos tras carrera (1º + vuelta rápida): " . $pilotoF1->getCantidadPuntos() . PHP_EOL;

// ====== EJEMPLO 4: F1 fuera del top 10 ======
echo PHP_EOL . "=== F1 fuera del top 10 ===" . PHP_EOL;
$pilotoF1_2 = new F1("Valtteri Bottas", "Finlandesa", 77, "Kick Sauber", 0, "Stake");
$pilotoF1_2->otorgarPuntos(13, true); // No debería sumar puntos
echo "Puntos tras carrera (13º + vuelta rápida): " . $pilotoF1_2->getCantidadPuntos() . PHP_EOL;