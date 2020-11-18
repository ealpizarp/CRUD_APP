<?php 
        include 'conexion.php';
        $c =  consultaDepartamentos();
    
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <link rel="stylesheet"type="text/css" href="librerias/bootstrap/css/bootstrap.css">
         <link rel="stylesheet"type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet"type="text/css" href="librerias/alertifyjs/css/themes/default.css">
        <script src="jquery-3.4.1.min.js"></script>
        <script src="funciones.js"></script>
        <script src="librerias/bootstrap/js/bootstrap.js"></script>
        <script src="librerias/alertifyjs/alertify.js"></script>
    <title>Ingresar Empleados</title>
</head>
<body  background = "c.jpg">  
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand">RUNAWAY</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link ">Registro</a>
            <a href="empleados.php" class="nav-item nav-link">Lista Empleados</a>
            <a href="depa.php" class="nav-item nav-link">Departamentos</a>
        </div>
    </div>
</nav>

<br>
<br>
<br>
<br>


<div class="form1" style="width:40%">

<form>
  <div class="form-group">
    <label for="exampleInputPassword1">Nombre</label>
    <input type="text" class="form-control" id="nombreIngre" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellido</label>
    <input type="text" class="form-control" id="apellidoIngre" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha Ingreso</label>
    <input type="text" class="form-control" id="fechaIngre" >
  </div>
  <div class="form-group">
     <label for="exampleInputPassword1">ID Departamento</label>  
     <select id="depaIngre" class="browser-default custom-select">
        <option selected>Departamentos</option>
        <?php 
         foreach ($c as $var) {
        ?>   
        <option value="<?php echo $var['_id'] ?>"> <?php echo $var['nombreDepartamento'] ?> </option>
        <?php
         }
        ?>
        </select>
 </div>
  <button type="submit" class="btn btn-primary" onclick="getDatosForm()">Guardar</button>
</form>

</div>
    
</body>
</html>