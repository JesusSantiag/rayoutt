<?php
include ("includes/header_app.php");
include("db.php");
$name = '';
$email= '';
$phone= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM contact WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $email = $row['email'];
    $phone= $row['phone'];
  }
}
?>

<div class="container p-4">
  <div class="card card-body">
    <form action="update-contact.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $id; ?>" >
      <div class="form-group">
        <label style="color:#000">Nombre</label>
        <input name="name" type="text" class="form-control" value="<?php echo $name; ?>" pattern="[a-zA-ZÑñÁáÉéÍíÓóÚú ]{5,40}" required>
      </div>
      <div class="form-group">
      <label style="color:#000">Correo</label>
        <input name="email" type="email" class="form-control" value="<?php echo $email; ?>" >
      </div>
      <div class="form-group">
      <label style="color:#000">Telefono</label>
        <input name="phone" type="text" class="form-control" value="<?php echo $phone; ?>" pattern="[0-9+-. ]{7,30}" required>
      </div>      
      <button type="submit" class="btn btn-success">Actualizar</button>
      <a href="citas.php" class="btn btn-danger">Cancelar</a>
    </form>
  </div>
</div>
<?php include("includes/footer.php");?>