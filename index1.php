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
<form method="post" action="login.php">
<div class="formtlo">Proyecto No. 1</div>

<?php

function get_client_ip() {
  $ipaddress = '';
  if (getenv('HTTP_CLIENT_IP'))
      $ipaddress = getenv('HTTP_CLIENT_IP');

  else if(getenv('HTTP_X_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_X_FORWARDED_FOR');

  else if(getenv('HTTP_X_FORWARDED'))
      $ipaddress = getenv('HTTP_X_FORWARDED');

  else if(getenv('HTTP_FORWARDED_FOR'))
      $ipaddress = getenv('HTTP_FORWARDED_FOR');

  else if(getenv('HTTP_FORWARDED'))
     $ipaddress = getenv('HTTP_FORWARDED');

  else if(getenv('REMOTE_ADDR'))
      $ipaddress = getenv('REMOTE_ADDR');
  else
      $ipaddress = 'UNKNOWN';
  if (strpos($ipaddress, ",") !== false) :
    $ipaddress = strtok($ipaddress, ",");
  endif;
  return $ipaddress;
}

function get_public_ip(){
  $externalContent = file_get_contents('http://checkip.dyndns.com/');
  preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
  $externalIp = $m[1];
  return $externalIp;
}

?>

<p><?php echo 'IP address es ' . get_client_ip() . '<br>';?></p>
<p><?php echo 'IP address es ' . get_public_ip().PHP_EOL;'<br>';?></p>

<div class="ub1">Nombre</div>
<i class="bi bi-person-square"></i>
<input type="text" name="txtusuario" placeholder="Ingrese su nombre...">

<div class="ub1"> Apellido</div>
<input type="text" name="txtusuario" placeholder="Ingrese su apellido...">

<div class="ub1">Dirección</div>
<input type="text" name="txtusuario" placeholder="Ingrese su apellido...">

<div align="center">
<input type="submit" value="Ingresar">

<input type="reset" value="Cancelar">
</div>
</form>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>