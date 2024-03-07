<?php 
$host ='mysql-ingeniero.alwaysdata.net';
$user ='ingeniero';
$password ='Moises ingeniero0415';
$database ='ingeniero_biblioteca'; 


$mysqli = new mysqli($host,$user,$password,$database);

if($mysqli->connect_errno)
{
    echo "HORROR - No se pudo conectar a la base de datos: ".$mysqli-> connect_errno.'<br>';
}
?>