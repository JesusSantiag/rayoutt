<?php
include("db.php");
if (isset($_POST['name'])) {
    $id = $_POST['id'];
    $name= $_POST['name'];
    $email = $_POST['email'];
    $phone= $_POST['phone'];
    $datetime = $_POST['datetime'];
    $description = $_POST['description'];
    $query = "UPDATE meet set name = '$name', email = '$email', 
    phone = '$phone', date = '$datetime', description = '$description' WHERE id=$id";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Se actualizó correctamente';
    $_SESSION['message_type'] = 'white';
    header('Location: meet.php');
  }