<?php
namespace App\Controllers;

use App\Models\Usuario; // Importamos el modelo

class UsuarioController {
    public function mostrarPerfil() {
        // 1. Pedir datos al modelo
        $modelo = new Usuario();
        $data = $modelo->obtenerDatos();

        // 2. Cargar la vista (le pasamos la variable $data)
        require_once __DIR__ . '/../../views/perfil.php';
    }
}