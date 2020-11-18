<?php
require 'vendor/autoload.php';


$client = new MongoDB\Client("mongodb://localhost:27017");

function conect(){
    global $client;
    return $client;

}

function consultaEmpleados(){

    global $client;

    $empleados = $client ->base1 ->empleados ;
    $cursor = $empleados->find(); 
    return $cursor;
}

function consultaDepartamentos(){

    global $client;

    $departamentos = $client ->base1 ->departamentos ;
    $cursor = $departamentos->find(); 
    return $cursor;
}

function insertar_formu($nombre,$apellido,$fecha,$id_depa){
    
    global $client;
    $empleados = $client ->base1 ->empleados ;
    $result = $empleados->insertOne( [ 'nombre' => $nombre, 'apellido' => $apellido, 'fechaIngreso' => $fecha,'id_depa' => $id_depa ] ); // Esto equivale a { Name: "GTX 3070 SUPER", Price: "420,000"} en la base de datos
    echo "Inserted with Object ID '{$result->getInsertedId()}'";  

}

function insertar_depa($nombre){
    global $client;
    $departamentos = $client ->base1 ->departamentos ;
    $result = $departamentos->insertOne( [ 'nombreDepartamento' => $nombre]);
    echo "Inserted with Object ID '{$result->getInsertedId()}'";   
}

function actualizar_emp($id,$nombre,$apellido,$fecha,$id_depa){
    global $client;
    $empleados = $client ->base1 ->empleados ;
    $updateResult = $empleados->updateOne(
        [ "_id" => new \MongoDB\BSON\ObjectID(str_replace(' ', '', $id)) ],
        [ '$set' => [ 'nombre' => $nombre,'apellido' => $apellido, 'fechaIngreso' => $fecha, 'id_depa' => $id_depa ]]
    );
}

function eliminarEmpleado($id){
    global $client;
    $empleados = $client ->base1 ->empleados ;
    $empleados->deleteOne( [ "_id" => new \MongoDB\BSON\ObjectID(str_replace(' ', '', $id)) ]);

}

function eliminarDepartamento($id){
    global $client;
    $departamentos = $client ->base1 ->departamentos ;
    $departamentos->deleteOne( [ "_id" => new \MongoDB\BSON\ObjectID(str_replace(' ', '', $id)) ]);

}

?>