<?php 
include ("db.php");
include ("includes/header_app.php");
if(!isset($_SESSION['islogin'])){
   header('Location: login.php');
}
?>
<h1>Contactos</h1>
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
            <th>Mensaje</th>
            <th>Fecha</th>
            <th></th>
         <tr>    
   </thead>
   <tbody>
      <?php
      $query ="SELECT * FROM contact ORDER BY date DESC";
      $result_tasks =mysqli_query($conn, $query);
      
      while ($row = mysqli_fetch_array($result_tasks)) { ?>
         <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td> 
            <td><?php echo $row['phone']; ?></td>
            <td style="word-break:break-all; max-width:150px;"><?php echo $row['message']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
            <a href="edit-contact.php?id=<?php echo $row['id']?>" class="btn btn-black">
               <i class="fas fa-marker"></i>
            </a>
            <a href="delete_contact.php?id=<?php echo $row['id']?>" class="btn btn-black">
               <i class="far fa-trash-alt"></i>
            </a>
            </td>
      </tr>
      <?php }  ?>
   </tbody>

</table>
<?php include("includes/footer.php");?>