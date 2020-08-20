<?php//===============================creating table for user credentials
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname='school_users';
//==================================Creating Connection
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(! $conn ){
die('could not connect: '.mysqli_error());
}else{
echo ' Connected Successfully';
//=====================================creating table 
$createTable = "CREATE TABLE school_users_credentials(
sl_no INT AUTO_INCREMENT PRIMARY KEY,
user_name VARCHAR(30)NOT NULL, 
password VARCHAR(60)NOT NULL
)";
if(mysqli_query($conn, $createTable)){// checking weather the table is been crated 
echo 'Table created succesfully';
}
else{
echo 'Oops table is not created succesfully';
}

}



//=====================================closing connection 
mysqli_close($conn);
if(! $conn ){
	echo "connection Closed Successfully";
}else{
	echo ' Connection still exists';
}
?>