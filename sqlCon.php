<?php
$server="localhost";
$user="root";
$pw="";
$database="pr";
// kapcsolódás
$conn=mysqli_connect($server,$user,$pw,$database);
if (!$conn)
{
	die("Sikertelen kapcsolódás");
}
// lekérdezés
mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
?>