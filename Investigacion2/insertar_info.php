<?php
include 'conexion.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha = $_POST['fecha'];
    $id_departamento = $_POST['id_departamento'];

    $client = conect();
    $empleados = $client ->base1 ->empleados ;
    $result = $empleados->insertOne( [ 'nombre' => $nombre, 'apellido' => $apellido, 'fechaIngreso' => $fecha,'id_depa' => $id_departamento ] ); // Esto equivale a { Name: "GTX 3070 SUPER", Price: "420,000"} en la base de datos

    echo 1



?>