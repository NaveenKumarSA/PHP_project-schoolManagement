<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname ='ibemployee';
$conn = mysqli_connect($host, $user, $pass);

//======================================EXECUTING CONNECTION 
if(! $conn ){
die(' SORRY ! , could not connect: '.mysqli_error());
}
echo ' Connected Successfully<br>';
if($conn)
	echo "<br> Connection still exists";
mysqli_close($conn);

if(! $conn ){
die(' SORRY ! , could not connect: '.mysqli_error());
}
echo ' Connected Successfully<br>';
?>