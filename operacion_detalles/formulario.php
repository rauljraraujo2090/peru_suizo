<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
<style>

  h1{
    text-align: center;
    margin: 20px  ;

  }
  .container{

  margin-top: 90px
  }
</style>
<div class="container">

  <h1>REGISTRO DE LOS DETALLES DEL CURSO</h1>
<form action="insertar.php" method="POST">




  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del curso </label>
    <input type="text" autocomplete="off" name="elnombre"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">descripcion</label>
    <textarea type="text"  autocomplete="off" name="ladescripcion" class="form-control" id="exampleInputPassword1">

    </textarea>
    
  </div>
    
  <button type="submit" class="btn btn-primary">registrar</button>


  </div>

<div class="container">
<h1>LISTA DE CURSOS</h1>
  <table class="table table-bordered">
  <thead class="table-primary">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción   </th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody >
    
    <?php
    include('../conexion.php');
$queryy=mysqli_query($conn,"SELECT * FROM detalles_curso");
while($row=mysqli_fetch_array($queryy)){


    
    ?>

    <tr>
       <td><?php echo $row['id'];?></td>
      <td><?php echo $row['nombre'];?></td>
      <td><?php echo $row['descripcion'];?></td>
    
      <td><a href="eliminar.php?id=<?php echo $row['id']; ?>" class='btn btn-danger'>Eliminar</a></td>
    </tr> 
  
    <?php 

   } ?>

  </tbody>
</table>
</div>  
</body>
</html>