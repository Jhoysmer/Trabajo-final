<?php
require_once __DIR__ . '/../models/conexion.php';
require_once __DIR__ . '/../models/user.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $_SESSION['error'] = 'Debes completar ambos campos.';
        header('Location: ../views/login.php');
        exit;
    }

    $userModel = new User();
    $usuario = $userModel->obtenerUsuarioPorEmail($email);

    if ($usuario && password_verify($password, $usuario['password'])) {
        // Guardamos datos en sesión
        $_SESSION['usuario'] = [
            'id' => $usuario['id'],
            'nombre' => $usuario['nombre'],
            'email' => $usuario['email']
        ];

        header('Location: ../views/inicio.php');
        exit;
    } else {
        $_SESSION['error'] = 'Correo o contraseña incorrectos.';
        header('Location: ../views/login.php');
        exit;
    }
}