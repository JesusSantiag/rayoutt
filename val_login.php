<?php
include("db.php");
if(isset($_POST['nameuser'])){
    $NameUser = $_POST['nameuser'];
    $Password = $_POST['password'];

    if($NameUser != "" && $Password != ""){
        $query = "SELECT * FROM user WHERE nameuser = '$NameUser' AND password = '$Password'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['islogin'] = true;
            header('Location: citas.php');
        } else {
            $_SESSION['message'] = 'Usuario o clave incorrecto';
            $_SESSION['message_type'] = 'red';
            header('Location: login.php');
        }
    } else {
        $_SESSION['message'] = 'Ingrese usuario y contraseña';
        $_SESSION['message_type'] = 'red';
        header('Location: login.php');
    }
}