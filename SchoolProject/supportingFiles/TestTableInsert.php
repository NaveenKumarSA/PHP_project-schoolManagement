<?php 
	$host = 'localhost:3306';
	$user = 'root';
	$pass = '';
	$dbname= 'school_users';
	//====Executing connection 
	$conn = mysqli_connect($host, $user, $pass, $dbname);
	if(! $conn ){
		die('could not connect: '.mysqli_error());
	}else{
		echo ' Connected Successfully';
	}
	//=====Inserting into a table

	$fullname ='test user';
	$dob  ='2020-20-20';
	$gender1 ='male';
	$contactOption ='Phone';
	$contactDetail ='11111111111111234';
	$langs ='tamil english ';
	$address =' some random address';
	$tnc ='';


	$sql = 'INSERT INTO school_users_profile
	(user_name,date_of_birth,gender,contact_option,contact_details,languages_known,address)
	 VALUES (\'$fullname\',\'$dob\',\'$gender1\',\'$contactOption\',\'$contactDetail\',\'$langs\',\'$address\')';   
	if(mysqli_query($conn, $sql)){   
	 echo "Record inserted successfully";   
	}else{   
	echo "Could not insert record: ". mysqli_error($conn);   
	}  
	//=====closing the connection 
	mysqli_close($conn);
 ?>