<?php
// 1. Iniciar sesión e incluir modelos
session_start();
require_once "../modelo/user.php"; // (Ajusta la ruta si es necesario)

// 2. Verificar que el usuario esté logueado y que los datos lleguen por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['usuario']['id'])) {
    
    // 3. Recuperar y Sanitizar los datos del formulario
    // (Usando filter_input como en el login es más seguro)
    $name    = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $petuser = filter_input(INPUT_POST, 'petuser', FILTER_SANITIZE_STRING);
    $phone   = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $email   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $dni     = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_STRING);

    // Recuperar el ID del usuario de la sesión
    $id_usuario = $_SESSION['usuario']['id'];

    // 4. Validación simple (puedes agregar más)
    if (empty($name) || empty($email)) {
        // Manejar error de validación (ej. redirigir con un mensaje)
        echo "Error: El nombre y el email no pueden estar vacíos.";
        exit;
    }

    // 5. Llamar al modelo para actualizar
    require_once "../modelo/user.php"; // Ensure the class file is loaded
    $userModel = new User(); // Instantiate the User class

    $exito = $userModel->actualizarUsuario($id_usuario, $name, $petuser, $phone, $email, $dni);

    // 6. Redireccionar según el resultado
    if ($exito) {
        // Opcional: Actualizar los datos de la sesión si el nombre o email cambiaron
        $_SESSION['usuario']['nombre'] = $name;
        $_SESSION['usuario']['email'] = $email;

        // Redireccionar a la página de inicio o perfil
        header('Location: ../sitio/newinicio.php');
        exit();
    } else {
        // Hubo un error en la base de datos
        echo "Error al actualizar los datos. Intente nuevamente.";
    }

} else {
    // Si no es POST o no hay sesión, es un acceso no autorizado
    echo "Acceso no autorizado.";
    exit();
}
?>