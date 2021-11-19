<?php
include("db.php");
if (isset($_POST['nombre'])) {
    $id = $_POST['id'];
    $Nombre= $_POST['nombre'];
    $Apellido = $_POST['apellido'];
    $Correo= $_POST['correo'];
    $Telefono= $_POST['telefono'];
  
    $query = "UPDATE usuario set nombre = '$Nombre', apellido = '$Apellido', 
    correo = '$Correo', telefono = '$Telefono' WHERE id=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'se actualizo correctamente';
    $_SESSION['message_type'] = 'white';
    header('Location: index.php');
  }