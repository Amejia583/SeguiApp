<?php

include '../../../database/conexion.php';

session_start();
$id = $_SESSION['instructor'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$message = $_POST['message'];

if ($date != null || $hour != null || $message != null) {
    $sql2 = "UPDATE tbl_citacion SET fecha = '".$date."', hora = '".$hour."', mensaje = '".$message."'
    WHERE id_instructor = '".$id."'";

    mysqli_query($conexion, $sql2);
    if ($sql2) {
        echo '<script>
                    alert("Actualizado Correctamente.");
                    window.history.go(-1);
            </script>';
    } else {
        echo '<script>
                    alert("Error al actualizar, intente de nuevo.");
                    window.history.go(-1);
            </script>';
    }
}
