<?php
    include ("conexion_ima.php");
    $id= $_REQUEST['id'];

    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "UPDATE imagen SET nombre='$nombre, imagen='$imagen WHERE id='$id'";
    $resultado = $conexion->query($query);

    if($resultado){
       header ("Location: mostrar.php");
    }
        else{
            echo "No se modifico";
        }
?>