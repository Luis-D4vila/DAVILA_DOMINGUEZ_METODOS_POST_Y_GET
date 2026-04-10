<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    $valorNombre   = htmlspecialchars(trim($_POST["datoNombre"]));
    $valorApellido = htmlspecialchars(trim($_POST["datoApellido"]));
    $valorEdad     = intval($_POST["datoEdad"]);

   
    if (empty($valorNombre) || empty($valorApellido) || $valorEdad <= 0) {
        echo "<p Error: todos los campos son obligatorios y la edad debe ser mayor a 0.</p>";
        exit;
    }

    // funciones nativas
    $cantidadLetrasNombre   = strlen($valorNombre);        
    $cantidadLetrasApellido = strlen($valorApellido);      
    $nombreEnMayusculas     = strtoupper($valorNombre);    
    $edadInvertida          = strrev(strval($valorEdad));  

    echo "<h2>Resultados del Registro</h2>";
    echo "<p>Nombre: $valorNombre tiene $cantidadLetrasNombre letras</p>";
    echo "<p>Apellido: $valorApellido tiene $cantidadLetrasApellido letras</p>";
    echo "<p>Edad: $valorEdad - al revés: $edadInvertida</p>";
    echo "<p>Nombre en MAYÚSCULAS: $nombreEnMayusculas</p>";

} else {
    echo "Acceso no permitido. Debes enviar el formulario";
}