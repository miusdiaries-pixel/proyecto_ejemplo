<?php
namespace App\Models;

class Usuario {
    public function obtenerDatos() {
        // Simulamos un registro de la base de datos
        return [
            'nombre' => 'Luisa Valderrama',
            'rol' => 'Desarrolladora PHP',
            'estado' => 'Activo'
        ];
    }
}