<!DOCTYPE html>
<html>
<head>
	<title>Courses Page</title>
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
<div class="jumbotron bg-light,info  text-info text-right mt-0"><h1>Courses Page</h1></div>
  <div class="container-fluid d-flex justify-content-around ">
    <button type="button" class=" btn btn-light border border-danger p-2 " data-container="body" data-toggle="popover" data-placement="top" data-content=" We are offering classes form 1-5" >
      Primary
    </button>
    <button type="button" class="btn btn-light border border-danger p-2" data-container="body" data-toggle="popover" data-placement="bottom" data-content=" We are offering classes from 6-10">
      Secondary
    </button>
    <button type="button" class="btn btn-light border border-danger" data-container="body" data-toggle="popover" data-placement="top" data-content="We are offering classes 11 and 12.">
    Higher secondary
    </button>
    <button type="button" class="btn btn-light border border-danger" data-container="body" data-toggle="popover" data-placement="bottom" data-content=' We also offer Football/Cricket/Hockey'>
    Sports
    </button>
    <button type="button" class="btn btn-light border border-danger" data-container="body" data-toggle="popover" data-placement="top" data-content=' We also offer Yoga/Silambam/classical Dance'>
    Cultural
    </button>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

  </div>
<br><br>

<div class=" bg-info  text-white justify-content-center" style="padding-bottom: 1rem ">
  <h1 class=" d-flex justify-content-center"> Course page is under Devlopment   </h1>
  <br>
  <div class="d-flex justify-content-center"><div class=" spinner-border text-white "></div></div>
</div>
</body>
</html>