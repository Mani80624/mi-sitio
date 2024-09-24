<?php
use mysqli;

// Iniciar la sesión
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['user_id'])) {
    die(json_encode(['error' => 'No estás autenticado']));
}

// Conectar a la base de datos
$mysqli = new mysqli('localhost', 'root', '', 'octopus');

// Verificar conexión
if ($mysqli->connect_error) {
    die('Error de conexión: ' . $mysqli->connect_error);
}

// Establecer el juego de caracteres a utf8mb4 para soportar mejor los caracteres
$mysqli->set_charset('utf8mb4');
?>
