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
    <title>Empleados</title>
</head>
<body  background = "c.jpg">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand">RUNAWAY</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="ingresarEmp.php" class="nav-item nav-link ">Registro</a>
            <a href="#" class="nav-item nav-link">Lista Empleados</a>
            <a href="depa.php" class="nav-item nav-link">Departamentos</a>
        </div>
    </div>
</nav>

<br>
<br>
    <?php 
        include 'conexion.php';
        $c =  consultaEmpleados();
        $j =  consultaDepartamentos();
    
    ?>
    <div>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Empleado</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Fecha Ingreso</th>
                    <th scope="col"> ID Departamento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>

                  <?php 
                        foreach ($c as $var) {
                    ?>            

            <tbody> 
            
                    <td scope="row"> <?php echo $var['_id'] ?> </td>
                    <td scope="row"> <?php echo $var['nombre']  ?> </td>
                    <td scope="row"> <?php echo $var['apellido']  ?> </td>
                    <td scope="row"> <?php echo $var['fechaIngreso']  ?> </td>
                    <td scope="row"> <?php echo $var['id_depa']  ?> </td>
                    <td>
                         <button type="button" class="btn btn-warning editbtn" data-toggle="modal" data-target="#actualizar">Editar</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
            </tbody> 
                <?php
                        }
                ?>
        </table>
    </div>


    <!-- Modal -->
<div class="modal fade" id="actualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Actualizar Empleado</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <form action="" method="">
        <input type="hidden" name="_id_update" id="update_id" >
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="update_nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Apellido</label>
            <input type="text" name="apellido" id="update_apellido" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Fecha Ingreso</label>
            <input type="text" name="fecha" id="update_fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="">ID Departamento</label>
            <select name="depa"id="update_depa" class="browser-default custom-select">
            <option selected>Departamentos</option>
                 <?php 
                     foreach ($j as $var) {
                ?>   
            <option value="<?php echo $var['_id'] ?>"> <?php echo $var['nombreDepartamento'] ?> </option>
                <?php
                  }
                ?>
             </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="actualizar()">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $('.editbtn').on('click',function() {
        $tr=$(this).closest('tr');
        var datos=$tr.children('td').map(function(){
            return $(this).text();
        });
        $('#update_id').val(datos[0]);
        $('#update_nombre').val(datos[1]);
        $('#update_apellido').val(datos[2]);
        $('#update_fecha').val(datos[3]);
    });

    $(document).on( 'click','.btn-danger',function(e){
        $tr=$(this).closest('tr');
        var datos=$tr.children('td').map(function(){
            return $(this).text();
        });

        var id =  "&"+"id="+datos[0]+"&";

        $.ajax({
        type:"POST",
        url:"eliminarEmp.php",
        data: id ,
        success:function(res){
            location.reload();

        }
         });
    });

</script>

</body>
</html>