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
 background-image: url('https://images.unsplash.com/photo-1583002225080-ad2e2642027a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=800');
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
$loginUserName='';
$loginUserPassword=''; 
global $ok; 
global $login_status;
 
      
    //==================================Signup inputs validation 
  if(isset($_POST['submit']) && isset($_POST['loginPassword2'] )){
    $ok = true;

    if(isset($_POST['loginName'] )){
    $userName = $_POST['loginName'];
    }else{
      $ok = false; 
    }
    if(isset($_POST['loginPassword1'] )){
    $userPassword1 = $_POST['loginPassword1'];
    }else{
      $ok = false; 
    }
    if(isset($_POST['loginPassword2'] )){
    $userPassword2 = $_POST['loginPassword2'];
    }else{
      $ok = false; 
    }
  }
  elseif(isset($_POST['login_Password']) && isset($_POST['login_Name'])){ // login page inputs check 
      $login_status = true;

        if((!isset($_POST['login_Name'])) || $_POST['login_Name'] === ''){//login page user name check 
          $login_status = false; 

        }else{
          $loginUserName = $_POST['login_Name'];
        //echo $_POST['login_Name']."<br>";
        //echo $loginUserName."<br>"; 
        $login_status = true; 
        }
        if((!isset($_POST['login_Password'])) || $_POST['login_Password'] === ''){//login page password check 
          $login_status = false; 
          //echo $login_status;
        }else{
       
        $loginUserPassword = $_POST['login_Password'];
        //echo $_POST['login_Password']."<br>";
        //echo $loginUserPassword."<br>"; 
        $login_status = true; 
        }
     // echo $login_status;  
    }
  else {
    echo "<div class=' jumbotron bg-white d-flex justify-content-cente text-black '><h1> Kindly fill up the credentials to move furter</h1></div>";
  }

  if($ok){//============================Sign up Input checks

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
    //=====================================Login inputs check 
  if($login_status && isset($_POST['login_Password']) && isset($_POST['login_Name'])){
    printf(
      '<h1> User Name : %s</h1> 
        <br>
         <h1>Password : %s </h1>
         <br> ',
       htmlspecialchars($loginUserName, ENT_QUOTES), 
       htmlspecialchars($loginUserPassword, ENT_QUOTES)
      );
  }/*else {
    echo "<div class=' jumbotron bg-secondary d-flex justify-content-cente '><h1> Kindly fill up the credentials to move furter</h1></div>";
  }*/


/*  --  Using the old school db DB name is school_users 

    -- created a table in the DB admin itself bcoz its quite easy than coding oterwise we have to write code for executing connection and creating table. 
*/   
// =========================================Executing connection with DB 
if(($userPassword1 === $userPassword2)/* && (!$userPassword2 === '')*/){// validations are done about to add the user name and password into the db . 
 $host = 'localhost:3306';
  $user = 'root';
  $pass = '';
  $dbname= 'school_users';
  //====Executing connection 
  $conn = mysqli_connect($host, $user, $pass, $dbname);
  if(! $conn ){
    die('could not connect: '.mysqli_error());
  }else{
    echo '<br><h1>Connected Successfully</h1>';
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
  echo "$entryStatus=\"row can not be added\"; : ". mysqli_error($conn); 
  echo $entryStatus;   
  }  
  //=====closing the connection 
  mysqli_close($conn);

    //=======================DB code ends in here 
}
elseif($ok)//============================== recieved credntials but couldnot add into db 
{
  print '<div class="jumbotron bg-light,info  text-white text-right mt-0"><h2>Kindly enter the values for all the fields correctly </h2><h4>POSSIBLE REASONS<br>*Password is not the same in both the fields<br>*Check all the fields are filled properly</h4></div>';
}

      //=============================================login pages db code , simply bringing all the details and printing it in one place to be precise in submission page 
if($login_status && isset($_POST['login_Password']) && isset($_POST['login_Name'])){
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "school_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "<h1> Connection Succesful</h1>";
$sql = "SELECT `sl_no`, `user_name`, `user_password` FROM `school_users_credentials`";
$result = $conn->query($sql);
$credentials_status=false;
if ($result->num_rows > 0) {
    // output data of each row
  echo " Login Status :".$login_status;
      while($row = $result->fetch_assoc()) {
        //echo "<h1>id: " . $row["sl_no"]. " - Name: " . $row["user_name"]. " - Password: " . $row["user_password"]. "</h1><br>";
      echo "db data : ".$row['sl_no'].'-'.$row['user_name'].'-'.$row['user_password'].'<br>';
       /*echo $row['sl_no'];
       echo $row['user_name'];
    */      
         if(isset($_POST['login_Password']) && isset($_POST['login_Name'])){
         
             if(($_POST['login_Password']===$row['user_password']) && ($_POST['login_Name']===$row['user_name'])){
              $credentials_status= true; 
              echo " credentials is true";
              break; 
             }
             else{
              $credentials_status=false; 
             }
        }
      }
      if($credentials_status){
              echo "<h1> The user credentials are matching with the db !! Awesome isn't it ?? </h1>";
      }
      else{
        echo "<h1> The user credentials are not matching with the db !! sorrowful,  isn't it ?? </h1>";
      }
  } else {
    echo "0 results";
  }
  $conn->close();
}
?>
<!-- <?php



?> -->
</body>
</html>