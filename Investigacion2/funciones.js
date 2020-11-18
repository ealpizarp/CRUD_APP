
function getDatosForm(){
    var nombre = document.getElementById('nombreIngre').value;
    var apellido = document.getElementById('apellidoIngre').value;
    var fecha = document.getElementById('fechaIngre').value;
    var id_Departamento = document.getElementById('depaIngre').value;
    var salida = "nombre="+nombre+"&"+"apellido="+apellido+"&"+"fecha="+fecha+"&"+"id_departamento="+id_Departamento;
    cargarDatos(salida);


}


function cargarDatos(datos){
    $.ajax({
        type:"POST",
        url:"insertar_info.php",
        data:datos,
        success:function(r){
            location.reload();
        }
    })

}

function getDatosDepa(){
    var nombre = document.getElementById('insertar_nombreDepa').value;
    var salida = "&"+"nombre="+nombre+"&";
    cargarDatosDepa(salida);

}

function cargarDatosDepa(datos){
    $.ajax({
        type:"POST",
        url:"insertar_depa.php",
        data:datos,
        success:function(res){
            location.reload();
         

        }
    });

   

}


function actualizar(){
    var id = document.getElementById('update_id').value;
    var nombre = document.getElementById('update_nombre').value;
    var apellido = document.getElementById('update_apellido').value;
    var fecha = document.getElementById('update_fecha').value;
    var id_Departamento = document.getElementById('update_depa').value;
    var salida = "id="+id+"&"+"nombre="+nombre+"&"+"apellido="+apellido+"&"+"fecha="+fecha+"&"+"id_departamento="+id_Departamento;
    updateEmpleado(salida);
}

function updateEmpleado(datos){
    $.ajax({
        type:"POST",
        url:"updateEmpleado.php",
        data:datos,
        success:function(res){
            location.reload();
         

        }
    })

}



