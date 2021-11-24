<?php

include("db.php");

if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $datetime = $_POST['datetime'];
  $description = $_POST['description'];
  $Mensaje = $_POST['mensaje'];
  $query = "INSERT INTO meet(name, email, phone, date,description)
   VALUES ('$name','$email', '$phone','$datetime', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }
  header('Location: meet.php');
}

?>