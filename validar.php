<?php

// Array asociativo con usuarios y contraseñas
$usuarios = [
    'pedro.rodriguez@udgvirtual.com' => '123',
    'jose.lopez@udgvirtual.com' => '000',
];

// Información del formulario
if (isset($_POST['enviar'])) {
    // Recoge los datos del formulario y almacénalos en las variables de PHP
    $correoIngresado = $_POST['correo'];
    $passwordIngresado = $_POST['password'];

    // Condicional para acceder al sistema
    if (array_key_exists($correoIngresado, $usuarios) && $usuarios[$correoIngresado] == $passwordIngresado) {
        echo 'Bienvenido, ' . $correoIngresado . '. Tienes acceso al sistema';
    } else {
        echo 'No estás registrado o la contraseña es incorrecta. No tienes acceso al sistema';
    }
}

?>
