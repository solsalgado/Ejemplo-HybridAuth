<?php

use Hybridauth\Hybridauth;

require 'vendor/autoload.php';

class AuthController
{
    
    public function loginWithGoogle()
    {

        try {
            // Inicializa HybridAuth con el archivo de configuración
            $hybridauth = new Hybridauth(__DIR__ . '/../../configuracion/hybridauth.php');

            // Autenticarse con Google
            $adapter = $hybridauth->authenticate('Google');
            
            // Obtener el perfil del usuario autenticado
            $userProfile = $adapter->getUserProfile();
            
            // Desconecta al usuario (opcional)
            $adapter->disconnect();
        } catch (\Exception $e) {
            $texto = "";
            $texto = 'Error al autenticar con Google: ' . $e->getMessage();
        }
    }

    public function callback()
    {
        // Esta función puede manejar cualquier lógica adicional después de la autenticación
        require_once __DIR__ . '/../Vista/success.php';
    }
}

