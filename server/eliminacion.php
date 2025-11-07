<?php
    // 1. Incluir la conexión y/o la lógica de la base de datos
    include "../modelo/user.php";

    // 2. Recuperar el identificador del registro a eliminar
    // Se asume que el ID se pasa por GET, por ejemplo: eliminacion.php?id=5
    // DEBES SANITIZAR Y VALIDAR esta entrada, por seguridad.
    if (isset($_GET['id'])) {
        $id_a_eliminar = $_GET['id'];
        
        // 3. Llamar a la función de eliminación
        // La función debe retornar true en éxito, false en error.
        if ($userModel->eliminarUsuario($id_a_eliminar)) {
           // Éxito: Redireccionar al inicio o a la lista de usuarios
            header('Location: ../sitio/newinicio.php');
            exit();
        } else {
            // Error: Mostrar un mensaje
            echo "Error al intentar eliminar el registro.";
        }
    } else {
        // Error: No se recibió el ID
        echo "Error: No se ha especificado el ID del registro a eliminar.";
    }

?>