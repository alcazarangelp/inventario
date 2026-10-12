<?php

/**
 * Valida que el nombre del producto tenga al menos 3 caracteres.
 *
 * @param string $nombre Nombre del producto
 * @return bool True si es válido, false en caso contrario
 */
function validarNombre(string $nombre): bool
{
    $nombreLimpio = trim($nombre);
    return strlen($nombreLimpio) >= 3;
}

/**
 * Valida que la cantidad sea un número entero mayor a 0.
 *
 * @param mixed $cantidad Cantidad a validar
 * @return bool True si es válida, false en caso contrario
 */
function validarCantidad($cantidad): bool
{
    if (!is_numeric($cantidad)) {
        return false;
    }

    $cantidadEntera = (int) $cantidad;

    return $cantidadEntera > 0;
}
