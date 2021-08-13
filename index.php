<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/aec49ed3b2.js" crossorigin="anonymous"></script>
    <title>Proyecto#1</title>
     <link rel="stylesheet" href="estilo.css">	

</head>
<body>
<div class="caja1">

<form method="post" action="crud.php">
<div class="formtlo">Proyecto No. 1</div>
<?php
include("ip.php");
?>
<div class="ub1"> 
<p ><?php echo 'IP address client: ' . get_client_ip() . '<br>';?></p>
<p ><?php echo 'IP address server: ' . get_public_ip().PHP_EOL;'<br>';?></p>


<?php
include("conexion.php");
?>
</div>
<div class="ub1">Nombre</div>
<i class="bi bi-person-square"></i>
<input type="text" name="txtNombre" placeholder="Ingrese su nombre...">

<div class="ub1"> Apellido</div>
<input type="text" name="txtApellido" placeholder="Ingrese su apellido...">

<div class="ub1">Dirección</div>
<input type="text" name="txtDireccion" placeholder="Ingrese su Direcci&oacute;n...">

<div align="center">
<input type="submit" name="submit" value="Ingresar">

<input type="reset" value="Cancelar">
</div>
</form>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>