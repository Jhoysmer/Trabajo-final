<?php
require_once __DIR__ . '/../models/conexion.php';
require_once __DIR__ . '/../models/user.php';

session_start();

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validaciones simples
    if (empty($nombre) || empty($email) || empty($password)) {
        $_SESSION['error'] = 'Todos los campos son obligatorios.';
        header('Location: ../views/registro.php');
        exit;
    }

    $userModel = new User();

    // Verificar si ya existe
    if ($userModel->existeUsuario($email)) {
        $_SESSION['error'] = 'El correo ya está registrado.';
        header('Location: ../views/registro.php');
        exit;
    }

    // Registrar usuario
    $userModel->registrarUsuario($nombre, $email, $password);

    $_SESSION['mensaje'] = 'Registro exitoso. Ahora puedes iniciar sesión.';
    header('Location: ../views/inicio.php');
    exit;
}