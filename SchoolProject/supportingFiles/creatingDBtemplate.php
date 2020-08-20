<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
//=======================================Executing connection ============
$conn = mysqli_connect($host, $user, $pass);
if(! $conn ){
	die('could not connect: '.mysqli_error());
}else{
	echo ' Connected Successfully';
}
//========================================creating db=============
$sql = 'CREATE DATABASE SCHOOL_USERS';
if(mysqli_query($conn, $sql)){
echo 'Data base created successfully';
}
else{
echo 'Data base not created successfully';
}

//=======================================closing connection =============
mysqli_close($conn);
?>