<?php
require_once __DIR__ . '/../models/conexion.php';
require_once __DIR__ . '/../models/contacto.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $mensaje = trim($_POST['mensaje']);

    if (empty($nombre) || empty($email) || empty($mensaje)) {
        $_SESSION['error'] = 'Por favor completa todos los campos.';
        header('Location: ../views/contacto.php');
        exit;
    }

    // Validación simple de correo
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'El correo electrónico no es válido.';
        header('Location: ../views/contacto.php');
        exit;
    }

    $contactoModel = new Contacto();
    $contactoModel->guardarMensaje($nombre, $email, $mensaje);

    $_SESSION['mensaje'] = 'Tu mensaje se envió correctamente. ¡Gracias por contactarnos!';
    header('Location: ../views/contacto.php');
    exit;
}