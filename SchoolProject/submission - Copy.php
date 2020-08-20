<!DOCTYPE html>
<html>
<head>
	<title>Form Submission</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .jumbotron {
 background-image: url('https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80');
 background-attachment: fixed;
 background-position: center;
 background-repeat: no-repeat;
 background-size: cover;
 opacity: 0.85
}
  </style>
</head>
<body class="jumbotron text-white">

<h1> SignUp page is under Devlopment </h1>
<div class="spinner-border text-white"> </div>
<br>
<br>
<?php 

$userName='';
$userPassword1='';
$userPassword2='';
global $ok; 


  if(isset($_POST['submit'])){
    $ok = true;

    if(isset($_POST['loginName'] )){
    $userName = $_POST['loginName'];
    }else{
      $ok = flase; 
    }
    if(isset($_POST['loginPassword1'] )){
    $userPassword1 = $_POST['loginPassword1'];
    }else{
      $ok = flase; 
    }
    if(isset($_POST['loginPassword2'] )){
    $userPassword2 = $_POST['loginPassword2'];
    }else{
      $ok = flase; 
    }


  }
  else {
    echo "<h1> Kindly fill up the credentials to move furter</h1>";
  }

  if($ok){

    printf(
      'User Name : %s
      <br>
      User Password1 : %s
      <br>
      User Password2 : %s',
      htmlspecialchars($userName, ENT_QUOTES),
      htmlspecialchars($userPassword1, ENT_QUOTES),
      htmlspecialchars($userPassword2, ENT_QUOTES)
    );
  }
/*  --  Using the old school db DB name is school_users 

    -- created a table in the DB admin itself bcoz its quite easy than coding oterwise we have to write code for executing connection and creating table. 
*/   
// =========================================Executing connection with DB 
if($userPassword1 === $userPassword2){
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
  $sql = "INSERT INTO `school_users_credentials`( `user_name`, `user_password`) VALUES ('$userName','$userPassword2')"; 
   $entryStatus='';  
  if(mysqli_query($conn, $sql)){   
   echo //===========================this will create a card with head and body and h1 tag 
     "<div class='d-flex justify-content-center'>
       <div class='card border border-info text-white border-3px' style='width:350px '>
       <img class='card-img-top' src='https://images.vexels.com/media/users/3/129616/isolated/preview/fb517f8913bd99cd48ef00facb4a67c0-businessman-avatar-silhouette-by-vexels.png' alt='Card image'>
         <div class='card-body bg-info'>
           <h4 class='card-title'> User Id : $userName <br></h4>
          <p class='card-text'> Password  : $userPassword1 <br> <h2> User Added Successfully</h2></p>
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
?>
</body>
</html>