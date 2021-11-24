<?php 
include ("db.php");
include ("includes/header.php"); 
if(isset($_SESSION['islogin'])){
  header('Location: citas.php');
}
?>


<div class="container p-4">
<div class="col-md-4 mx-auto">

    <?php if (isset($_SESSION['message']) && $_SESSION['message'] != "") { ?>
      <div class="alert alert- warnig <?= $_SESSION['message_type'];?>alert-dismissible fade show"role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php  $_SESSION["message"] = "";} ?>

  <div class="login-box">
    <div class="login-icon">
      <img  src="img/ray.jpg" width="60" height="60"  alt="logo de fazt">
    </div>
      <h1 class="text-center mt-2">LOGIN</h1>
        <form action="val_login.php" method="POST">
           <!-- usuario -->
          <label><h4>usuario</h4></label>
          <input type="text" name="nameuser" class="form-control"  ><br>
         <!-- usuario -->
          <label><h4>contraseña</h4></label>
          <input type="password" name="password"  class="form-control" >
          <input type="submit" class="btn btn-success btn-block" value="ingresar" >
        </form>
  </div>

<?php include("includes/footer.php");?>