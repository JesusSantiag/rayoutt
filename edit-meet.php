<?php include ("db.php"); ?>
<?php include ("includes/header_app.php");

if  (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT id,name,email,phone, DATE_FORMAT(date, '%Y-%m-%dT%H:%i') as 'date', description FROM meet WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $name = $row['name'];
      $email = $row['email'];
      $phone= $row['phone'];
      $datetime = $row['date'];
      $description = $row['description'];
    }
  }
?>

<main class="container p-4">

    <?php if (isset($_SESSION['message']) && $_SESSION['message'] != "") { ?>
      <div class="alert alert- warnig <?= $_SESSION['message_type'];?>alert-dismissible fade show"role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php  $_SESSION["message"] = "";} ?>
    <!-- ADD TASK FORM -->
    <div class="card card-body">
        <form action="update-meet.php" method="POST" id="formulario">
            <label><h5 style=color:black>Editar cita</h5></label>
            <input type="hidden" name="id" value="<?php echo $id; ?>" >
            <div class="form-group">
                <label style="color:black; font-size:15px;">Nombre</label>
                <input type="text" id="tel" name="name" class="form-control" pattern="[a-zA-ZÑñÁáÉéÍíÓóÚú ]{5,40}" required value="<?php echo $name;?>"> 
            </div>
            <div class="form-group">
                <label style="color:black; font-size:15px;">Correo</label>
                <input type="email" id="tel" name="email" class="form-control" value="<?php echo $email;?>"> 
            </div>
            <div class="form-group">
                <label style="color:black; font-size:15px;">Telefono</label>
                <input type="text" id="tel" name="phone" class="form-control" pattern="[0-9+-. ]{7,30}" required value="<?php echo $phone;?>"> 
            </div>
            <div class="form-group">
                <label style="color:black; font-size:15px;">Fecha y hora</label>
                <input type="datetime-local" id="tel" name="datetime" class="form-control" required value="<?php echo $datetime;?>"> 
            </div>
            <div>
                <label style="color:black; font-size:15px;">Descripción</label>
                <textarea name="description" class="form-control" placeholder="Máximo 200 caracteres"><?php echo $description;?></textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-success btn-block" value="Registrar">
            </div>
        </form>
    </div>
</main>

<?php include("includes/footer.php");?>