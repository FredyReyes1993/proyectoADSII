<?php

//$conn = mysqli_connect('172.31.0.5','ADSII','123','ADSII');
$conn = mysqli_connect('172.31.0.5','ADSII','123','ADSII');
if ($conn->connect_errno) {
    echo "Fallo al conectar";
}

$conn = mysqli_connect('172.31.0.209','ADSII','123','ADSII');
if ($conn->connect_errno) {
    echo "Fallo al conectar";
}

?>

