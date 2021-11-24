<?php

include("db.php");

if (isset($_POST['nombre'])) {
  $Nombre = $_POST['nombre'];
  $Correo = $_POST['correo'];
  $Telefono = $_POST['telefono'];
  $Mensaje = $_POST['mensaje'];
  $query = "INSERT INTO contact(name, email, phone, message)
   VALUES ('$Nombre','$Correo', '$Telefono','$Mensaje')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  $_SESSION['message'] = 'Se envió correctamente, por favor espera la respuesta';
  $_SESSION['message_type'] = 'white';
  header('Location: contact.php');
}

?>