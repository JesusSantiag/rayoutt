<?php include ("db.php"); ?>
<?php include ("includes/header.php"); ?>

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
        <form action="save_task.php" method="POST" id="formulario">
            <label><h5 style=color:black>Dejanos tus datos nos contactaremos lo mas pronto posible!!</h5></label>
            <div class="form-group">
                <input type="text" id="texnombre" name="nombre" class="form-control" placeholder="Nombre" autofocus required pattern="[a-zA-ZÑñÁáÉéÍíÓóÚú ]{5,40}">
            </div>
            <div class="form-group">
                <input type="email" name="correo" class="form-control" placeholder="Correo Electronico">
            </div>
            <div class="form-group">
                <input type="text" id="tel" name="telefono" class="form-control" placeholder="Telefono" pattern="[0-9+-. ]{7,30}" required> 
            </div>
            <div>
                <label><h5 style=color:black>Dejanos un mensaje</h5></label>
                <textarea name="mensaje" class="form-control" placeholder="Máximo 200 caracteres"> </textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-success btn-block" value="enviar">
            </div>
        </form>
    </div>
</main>

<?php include("includes/footer.php");?>
