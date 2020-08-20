<!DOCTYPE html>
<html>
<head>
	<title> Registration Page </title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-info fixed-top ">
  <ul class="navbar-nav nav-tabs">
    <li class="nav-item ">
      <a class="navbar-brand nav-link text-white " href="index.php"><h4>Home</h4></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link text-white" href="dashboardpage.php">Dashboard</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link text-white  " href="coursespage.php">Courses</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link text-white  " href="departments.php">Departments</a>
    </li>
    <li class="nav-item  ">
      <a class=" nav-link text-white " href="loginpage.php">Sign In</a>
    </li>
    <li class="nav-item  ">
      <a class="nav-link text-white" href="RegistrationPageWithNavbar.php">Register</a>
    </li>
  </ul>
</nav>
<div class="jumbotron bg-light,info  text-info text-right mt-0"><h1>Registration Page</h1></div>
<div class="container-fluid bg-light mt-0">
<form  action="#" class=" text-info" method="post">
<table class="registrationTable text-info table-hover">
<tr>
    <td>
        User Name :
    </td>  
    <td>
        <input type="text" name="fullname" placeholder="Full Name"><br>
    </td>
</tr>
<tr>
    <td>
        Date of Birth :
    </td>
    <td>
        <input type="date" name="dob" id=""><br>
    </td>
</tr>
<tr>
    <td>
        Gender : 
    </td>
    <td>
        <input type="radio" name="gender" value="male">Male 
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="others">Other <br>
    </td>
</tr>
<tr>
    <td>
        Contact Option : 
    </td>
    <td>
        <select name='contactOption'>
            <option value="">Please select</option>
            <option value="phone">Phone </option>
            <option value="mail">Mail </option>
            <option value="watsapp">Watsapp </option>
        </select>
    </td>
</tr>
<tr>
    <td>
        Enter Mail id/ Phone/ Watsapp : 
    </td>
    <td>
        <input type="text" name="contactDetail">
    </td>
</tr>
<tr>
    <td>
        Address : 
    </td>
    <td>
        <textarea name="address" placeholder="" width=90px> 
            
        </textarea>
    </td>
</tr>
<br>
<tr>
    <td>
        Languages Known : 
    </td>
    <td>
        <select name="languages[]" multiple size = "4" >
            <option value="english, ">English</option>
            <option value="tamil, ">Tamil</option>
            <option value="telugu, ">Telugu</option>
            <option value="malayalam, ">Malayalam</option>
            <option value="hindi ">Hindi</option>
        </select>
    </td>
</tr>
<br>
<tr>
    <td>
         <input type="checkbox" name="tnc" value="ok"> Yes, I accept the terms and conditions
    </td>
    <td>
        
    </td>
</tr>
<br>
<tr>
    <td>
            
    </td>
    <td>
        <input type="submit" name="submit" value="Register">
    </td>
</tr>
</table> 
</form>
</div>
<?php
//declaring the empty variables.
$fullname ='';
$dob  ='';
$gender1 ='';
$contactOption ='';
$contactDetail ='';
$languages =[];
$address ='';
$tnc ='';



if(isset($_POST['submit'])){
    $ok=true; 
 /*   echo " Your name is <h1>".$_POST['fullname']."</h1>";  
    echo "<br> Date of Birth ".$_POST['dob'];  
    echo "<br> You are a  ".$_POST['gender1'];  
    echo "<br> Your contact Option is ".$_POST['contactOption'];
    echo "<br> Your contact Detail is ".$_POST['contactDetail'];
    echo "<br> Your contact Detail is ".$_POST['languages'];
    echo "<br> Your accepted the TnC ".$_POST['tnc2'];
*/
    //validating and assingning the html chars to the empty variables 
    if(!isset($_POST['fullname']) || $_POST['fullname'] === ''){
        $ok=false;
    }else{
            $fullname=$_POST['fullname'];
    };
    if(!isset($_POST['dob'])|| $_POST['dob'] === '' ){
        $ok=false;
    }else{
        $dob=$_POST['dob'];
    };
    if(!isset($_POST['gender'])|| $_POST['gender'] === '' ){
        $ok=false;
    }else{
        $gender1=$_POST['gender'];
    };
    if(!isset($_POST['contactOption'])|| $_POST['contactOption'] === '' ){
        $ok=false;
    }else{
        $contactOption=$_POST['contactOption'];
    };
    if(!isset($_POST['contactDetail'])|| $_POST['contactDetail'] === '' ){
        $ok=false;
    }else{
        $contactDetail=$_POST['contactDetail'];
    };
    if(!isset($_POST['address'])|| $_POST['address'] === '' ){
        $ok=false;
    }else{
        $address=$_POST['address'];
    };
    if(!isset($_POST['languages'])|| !is_array($_POST['languages']) === '' ||count($_POST['languages'])===0 ){
        $ok=false;
    }else{
        $languages=$_POST['languages'];
    };
    if(!isset($_POST['tnc'])|| $_POST['tnc'] === '' ){
        $ok=false;
    }else{
        $tnc=$_POST['tnc'];
    };
    

    if($ok){
    	$langs=implode('', $languages);
    	//echo '$langs = '.$langs.'<br>';
                            //Grabbing variables from html chars and printing in a format . 
    /*echo $langs; 
        printf(
    'User name : %s
    <br> Date Of Birth : %s
    <br>Gender: %s
    <br>Contact option: %s
    <br>Contact Details: %s
    <br>Languages Known: %s
    <br>Address: %s
    <br>t&amp;C: %s',
    htmlspecialchars($fullname, ENT_QUOTES),
    htmlspecialchars($dob, ENT_QUOTES),    
    htmlspecialchars($gender1, ENT_QUOTES),    
    htmlspecialchars($contactOption, ENT_QUOTES),
    htmlspecialchars($contactDetail, ENT_QUOTES),
    htmlspecialchars(implode('', $languages), ENT_QUOTES),
    htmlspecialchars($address, ENT_QUOTES),
    htmlspecialchars($tnc, ENT_QUOTES)
    );*/
    
    
    //=======================DB setup starts from here 

	$host = 'localhost:3306';
	$user = 'root';
	$pass = '';
	$dbname= 'school_users';
	//====Executing connection 
	$conn = mysqli_connect($host, $user, $pass, $dbname);
	if(! $conn ){
		die('could not connect: '.mysqli_error());
	}else{
		echo '<br>Connected Successfully';
	}
	//=====Inserting into a table
	$sql = "INSERT INTO school_users_profile
	(user_name,date_of_birth,gender,contact_option,contact_details,languages_known,address)
	  VALUES ('$fullname','$dob','$gender1','$contactOption','$contactDetail','$langs','$address')"; 
	 $entryStatus='';  
	if(mysqli_query($conn, $sql)){   
	 echo 
     "<div class='d-flex justify-content-center'>
     <div class='card border border-info border-3px' style='width:350px '>
     <img class='card-img-top' src='https://images.vexels.com/media/users/3/129616/isolated/preview/fb517f8913bd99cd48ef00facb4a67c0-businessman-avatar-silhouette-by-vexels.png' alt='Card image'>
     <div class='card-body'>
       <h4 class='card-title'>$fullname <br></h4>
       <h5 class='card -title'> Gender :   $gender1 </h5>
      <p class='card-text'> $contactOption : $contactDetail <br> Address :  $address <br> Languages : $langs</p>
      <a href='#' class='btn btn-primary'>See Profile</a>
     </div>
    </div>
     </div>"; 
	}else{   
	echo "$entryStatus=\"row can not be added \"; : ". mysqli_error($conn); 
	echo $entryStatus;   
	}  
	//=====closing the connection 
	mysqli_close($conn);

    //=======================DB code ends in here 
}
else
{
	print '<div class="jumbotron bg-light,info  text-info text-right mt-0"><h4>Kindly enter the values for all the fields</h4></div>';
}
}
?>

</body>
</html>