<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
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
      <a class="navbar-brand nav-link text-white " href="index.php">Home</a>
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
<div class="jumbotron bg-light,info  text-info text-right mt-0"><div class="animated bounce infinite "><h1>SignUp Page</h1></div>
<div class=" container mh-100 row align-item-center justify-content-center rounded-lg " style=" background-image: url('https://images.unsplash.com/photo-1456735190827-d1262f71b8a3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1048&q=80'  );  background-repeat: no-repeat; background-size: cover; ">
  
    
     <div class=" container w-25 bg-info h-25 d-flex justify-content-center rounded-lg border border-white" style="padding: 105px; opacity: 0.8; margin: 80px " >

     	 <div  class="justify-content-center " style="margin-top: 20px" >
       	 <form action="submission.php" method="post">
           
          <input type="text" name="loginName" placeholder="Mail id / User name " class="rounded-lg border-white" style="padding: 9px; margin: 10px" >

          <input type="password" name="loginPassword1" placeholder=" Enter Password " class="rounded-lg border-white" style="padding: 9px; margin: 10px" >

          <input type="password" name="loginPassword2" placeholder="Re-enter Password " class="rounded-lg border-white" style="padding: 9px; margin: 10px" >

          <div class="d-flex justify-content-around">
             <input type="submit" name="submit" value="SignUp" class=" text-white bg-info rounded-sm border-white" style="padding-top:3px; padding-left:13px; padding-bottom:3px; padding-right:13px;"> 
          </div>
          <div class="buttons d-flex justify-content-center text-white"><a href="loginpage.php" class="text-white p-2">Login</a></div>

        </form>
      </div>
    </div>
</div>
</div>
</body>
</html>