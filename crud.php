<?php 
include 'conexion.php';
if(isset($_POST['submit'])){

$nombre = $_POST ['txtNombre'];
$apellido = $_POST['txtApellido'];
$direccion = $_POST['txtDireccion'];

    $sql = "INSERT INTO users ( name, email,password) 
		VALUES ('$nombre','$apellido','$direccion')";
        $resultado = mysqli_query($conn, $sql);    
        
        if($resultado){
            header('location: index1.php');
        }
        else{
            echo "No se inserto";
        }

}
?>