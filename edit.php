<?php
include ("includes/header.php");
include("db.php");
$Nombre = '';
$Apellido= '';
$Correo= '';
$Telefono= '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuario WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nombre = $row['nombre'];
    $Apellido = $row['apellido'];
    $Correo= $row['correo'];
    $Telefono= $row['telefono'];

  }
}
?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
    <div class="card card-body">
      <form action="citas.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>" >
        <div class="form-group">
          <label style="color:#000">Nombre</label>
          <input name="nombre" type="text" class="form-control" value="<?php echo $Nombre; ?>" >
        </div>
        <div class="form-group">
        <label style="color:#000">Apellido</label>
          <input name="apellido" type="text" class="form-control" value="<?php echo $Apellido; ?>" >
        </div>
        <div class="form-group">
        <label style="color:#000">Correo</label>
          <input name="correo" type="email" class="form-control" value="<?php echo $Correo; ?>" >
        </div>
        <div class="form-group">
        <label style="color:#000">Telefono</label>
          <input name="telefono" type="text" class="form-control" value="<?php echo $Telefono; ?>" >
        </div>
        
        <button class=" btn-success " name="update">
          Actualizar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include("includes/footer.php");?>