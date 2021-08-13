<?php 
include 'conexion.php';
if(isset($_POST['submit'])){

$nombre = $_POST ['txtNombre'];
$apellido = $_POST['txtApellido'];
$direccion = $_POST['txtDireccion'];

    $sql = "INSERT INTO PROYECTO (NOMBRE,APELLIDO,DIRECCION) 
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