<?php 
include 'conexion.php';
if(isset($_POST['submit'])){

$nombre = $_POST ['txtNombre'];
$apellido = $_POST['txtApellido'];
$direccion = $_POST['txtDireccion'];

    $sql = "INSERT INTO proyecto ( nombre,apellido,direccion) 
		VALUES ('$nombre','$apellido','$direccion')";
        $resultado = mysqli_query($conn, $sql);    
        
        if($resultado){
            header('location: index.php');
        }
        else{
            echo "No se inserto";
        }

}
?>