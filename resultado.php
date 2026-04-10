<?php
// Paso 1: Verificar que llegaron datos por GET
if (isset($_GET["datoBusqueda"]) && !empty($_GET["datoBusqueda"])) {
    $textoOriginal   = htmlspecialchars(trim($_GET["datoBusqueda"]));
    $tipoSeleccionado = htmlspecialchars(trim($_GET["tipoBusqueda"]));

    // Tres funciones nativas diferentes
    $textoInvertido  = strrev($textoOriginal);       // invertir el texto
    $textoMayus      = strtoupper($textoOriginal);   // convertir a mayúsculas
    $primerCaracter  = substr($textoOriginal, 0, 1); // obtener el primer carácter

    // Mostrar resultados con un estilo distinto
    echo "<h2>🔎 Análisis de la búsqueda</h2>";
    echo "<p><strong>Texto original:</strong> $textoOriginal</p>";
    echo "<p><strong>Texto invertido:</strong> $textoInvertido</p>";
    echo "<p><strong>En MAYÚSCULAS:</strong> $textoMayus</p>";
    echo "<p><strong>Primer carácter:</strong> $primerCaracter</p>";
    echo "<p><strong>Tipo elegido:</strong> $tipoSeleccionado</p>";
} else {
    echo "Debe ingresar un término válido. <a href='buscar.html'>Volver</a>";
}