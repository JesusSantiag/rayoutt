<?php include ("db.php"); ?>
<?php include ("includes/header_app.php"); ?>

<main class="container p-4">
    <!-- ADD TASK FORM -->
    <div class="card card-body">
        <form action="save-new-meet.php" method="POST" id="formulario">
            <label><h5 style=color:black>Registrar nueva cita</h5></label>
            <div class="form-group">
                <label style="color:black; font-size:15px;">Nombre</label>
                <input type="text" id="tel" name="name" class="form-control" pattern="[a-zA-ZÑñÁáÉéÍíÓóÚú ]{5,40}" required> 
            </div>
            <div class="form-group">
                <label style="color:black; font-size:15px;">Correo</label>
                <input type="email" id="tel" name="email" class="form-control"> 
            </div>
            <div class="form-group">
                <label style="color:black; font-size:15px;">Telefono</label>
                <input type="text" id="tel" name="phone" class="form-control" pattern="[0-9+-. ]{7,30}" required> 
            </div>
            <div class="form-group">
                <label style="color:black; font-size:15px;">Fecha y hora</label>
                <input type="datetime-local" id="tel" name="datetime" class="form-control" required> 
            </div>
            <div>
                <label style="color:black; font-size:15px;">Descripción</label>
                <textarea name="description" class="form-control" placeholder="Máximo 200 caracteres"> </textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-success btn-block" value="Registrar">
            </div>
        </form>
    </div>
</main>

<?php include("includes/footer.php");?>