<?php
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
$createTable = "CREATE TABLE school_users_profile(
sl_no INT AUTO_INCREMENT PRIMARY KEY,
user_name VARCHAR(30)NOT NULL, 
date_of_birth VARCHAR(20)NOT NULL,
gender VARCHAR(20)NOT NULL,
contact_option VARCHAR(20)NOT NULL,
contact_details VARCHAR(20)UNIQUE NOT NULL ,
languages_known VARCHAR(20)NOT NULL,
address VARCHAR(60)NOT NULL
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