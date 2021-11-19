<?php include ("db.php"); ?>
<?php include ("includes/header.php"); ?>
<h1>Registros de Clientes</h1>
<br><br>
<div class="col-md-8">
            <table class="table table-bordered" style="color:white" >
               <thead>
                   <tr>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Correo</th>
                       <th>Telefono</th>
                       <th></th>
                   <tr>    
               </thead>
               <tbody>
               <?php
               $query ="SELECT * FROM usuario";
               $result_tasks =mysqli_query($conn, $query);
               
               while ($row = mysqli_fetch_array($result_tasks)) { ?>
                <tr>
                   <td><?php echo $row['nombre']; ?></td>
                   <td><?php echo $row['apellido']; ?></td>
                   <td><?php echo $row['correo']; ?></td>
                   <td><?php echo $row['telefono']; ?></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-black">
                       <i class="fas fa-marker"></i>
                    </a>
                    <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-black">
                       <i class="far fa-trash-alt"></i>
                    </a>
                    </td>
               </tr>


               <?php }  ?>
               </tbody>

            </table>


        </div>
















<?php include("includes/footer.php");?>