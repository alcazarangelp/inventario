<?php

require_once __DIR__ . '/../src/validaciones.php';

$casosNombre = [
    ["Nombre válido: Teclado", "Teclado", true],
    ["Nombre vacío", "", false],
    ["Nombre con espacios", "   ", false],
    ["Nombre válido: Mouse", "Mouse", true]
];

$casosCantidad = [
    ["Cantidad válida: 5", 5, true],
    ["Cantidad inválida: 0", 0, false],
    ["Cantidad negativa: -5", -5, false],
    ["Cantidad no numérica: 'abc'", "abc", false]
];

$correctas = 0;
$fallidas = 0;

echo " *PRUEBAS DE NOMBRE* \n";
foreach ($casosNombre as [$descripcion, $entrada, $esperado]) {

    $obtenido = validarNombreProducto($entrada);

    if ($obtenido === $esperado) {
        echo " - $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo " Esperado: " . var_export($esperado, true) . "\n";
        echo " Obtenido: " . var_export($obtenido, true) . "\n";
        $fallidas++;
    }
}

echo "\n *PRUEBAS DE CANTIDA*D \n";
foreach ($casosCantidad as [$descripcion, $entrada, $esperado]) {

    $obtenido = validarCantidadProducto($entrada);

    if ($obtenido === $esperado) {
        echo " - $descripcion\n";
        $correctas++;
    } else {
        echo "FAIL - $descripcion\n";
        echo " Esperado: " . var_export($esperado, true) . "\n";
        echo " Obtenido: " . var_export($obtenido, true) . "\n";
        $fallidas++;
    }
}

echo "\n--- RESUMEN ---\n";
echo "Se probaron " . count($casosNombre) . " casos de nombre y " . count($casosCantidad) . " casos de cantidad. ";
echo "Total: " . (count($casosNombre) + count($casosCantidad)) . " | Correctas: $correctas | Fallidas: $fallidas\n";

exit($fallidas > 0 ? 1 : 0);
