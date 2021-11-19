<?php

include("db.php");

if (isset($_POST['nombre'])) {
  $Nombre = $_POST['nombre'];
  $Apellido = $_POST['apellido'];
  $Correo = $_POST['correo'];
  $Telefono = $_POST['telefono'];
  $query = "INSERT INTO usuario(Nombre, Apellido, Correo, Telefono)
   VALUES ('$Nombre', '$Apellido','$Correo', '$Telefono' )";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
    
  }

  
 
  $_SESSION['message'] = 'se envio correctamente';
  $_SESSION['message_type'] = 'red';
  header('Location: index.php');

}

?>