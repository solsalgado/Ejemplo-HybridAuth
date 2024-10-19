<?php

require_once './vendor/autoload.php';
include_once './app/control/authController.php';

$controller = $_GET['route'] ?? 'auth/login';

// Manejar las rutas
if ($controller == 'auth/login') {
    $authController = new AuthController();
    $authController->loginWithGoogle();
} elseif ($controller == 'auth/callback') {
    $authController = new AuthController();
    $authController->callback();
} else {
    // Manejo de ruta no encontrada o redirección a la página de inicio de sesión
    header("Location: login.php");
    exit();
}