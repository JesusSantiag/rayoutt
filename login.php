<?php include ("db.php"); ?>
<?php include ("includes/header.php"); ?>


<div class="container p-4">
<div class="col-md-4 mx-auto">
<body>
   <div class="login-box">
    <img src="img/ray.jpg" width="60" height="60"  alt="logo de fazt">
      <h1>LOGIN</h1>
        <form action="citas.php">
           <!-- usuario -->
          <label for="usuario"><h4>usuario</h4></label>
          <input type="text" name="nombre de usuario"  class="form-control"  ><br>
         <!-- usuario -->
          <label for="contraseña"><h4>contraseña</h4></label>
          <input type="pasword" name="contraseña"  class="form-control" >
          <input type="submit" name="ingresar" class="btn btn-success btn-block" value="ingresar" >
          <a href="#" >Olvidaste tu contraseña<i class="fas fa-angle-double-right"></i></a><br>
          <a href="#" >Crear una cuenta <i class="fas fa-angle-double-right"></i></a>
        </form>
    </div>

</body>






<?php include("includes/footer.php");?>