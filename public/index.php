<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;

$controlador = new UsuarioController();
echo $controlador->saludar();