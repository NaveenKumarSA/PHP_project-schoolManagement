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
//=======================================INSERTING INTO TABLE
/*$insertrow="INSERT INTO freshers (name, email, mobile, current_city)
VALUES("naveenkumar","naveen.kumar@ibridgellc.com","9995908901", "kanchipuram")"; 

if(mysqli_query($conn, $insertrow))
echo "Row added successfully!!";
else 
echo "OOOOHhhhhhhh... NOOOOOOOOO!!!!";
*/
if($conn)
	echo "<br> Connection still exists";
mysqli_close($conn);

if(! $conn ){
die(' SORRY ! , could not connect: '.mysqli_error());
}
echo ' Connected Successfully<br>';
?>