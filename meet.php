<?php 
include ("db.php");
include ("includes/header_app.php");
if(!isset($_SESSION['islogin'])){
   header('Location: login.php');
}
?>
<h1>Citas agendadas</h1>
<a href="new-meet.php" class="btn btn-success">Nueva cita</a>
   <?php if (isset($_SESSION['message']) && $_SESSION['message'] != "") { ?>
      <div class="alert alert- warnig <?= $_SESSION['message_type'];?>alert-dismissible fade show"role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   <?php  $_SESSION["message"] = "";} ?>
<table class="table table-bordered text-center" style="color:white; width:100%">
   <thead>
         <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Fecha</th>
            <th>Descripción</th>
            <th></th>
         <tr>    
   </thead>
   <tbody>
      <?php
      $query ="SELECT * FROM meet ORDER BY id DESC";
      $result_tasks =mysqli_query($conn, $query);
      
      while ($row = mysqli_fetch_array($result_tasks)) { ?>
         <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td style="word-break:break-all;"><?php echo $row['description']; ?></td>
            <td>
            <a href="edit-meet.php?id=<?php echo $row['id']?>" class="btn btn-black">
               <i class="fas fa-marker"></i>
            </a>
            <a href="delete-meet.php?id=<?php echo $row['id']?>" class="btn btn-black">
               <i class="far fa-trash-alt"></i>
            </a>
            </td>
      </tr>
      <?php }  ?>
   </tbody>

</table>
<?php include("includes/footer.php");?>