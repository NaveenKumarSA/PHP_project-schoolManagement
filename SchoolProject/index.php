 <!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    <!-- make image fully responsive -->
    .carousel-inner img{
      width:100%;
      height:100%;
    }
  </style>
  
</head>
<body>
<nav class="navbar navbar-expand-sm bg-info fixed-top">
  <ul class="navbar-nav nav-tabs">
    <li class="nav-item ">
      <a class="navbar-brand nav-link text-white " href="index.php"><strong>Home</strong></a>
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
<div id="homes" class="carousel slide" data-ride="carousel">
<!-- INDICATORS BLOCK-->
  <ul class="carousel-indicators">
    <li data-target="#homes" data-slide-to="0" class="active"></li>
    <li data-target="#homes" data-Slide-to="1"></li>
    <li data-target="#homes" data-Slide-to="2"></li>
    <li data-target="#homes" data-Slide-to="3"></li>
    <li data-target="#homes" data-Slide-to="4"></li>
  </ul>
<!-- THE SLIDESHOW BLOCK  -->
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="https://images.unsplash.com/photo-1531861218190-f90c89febf69?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="img" width="1550" height="650"></div>
    <div class="carousel-item "><img src="https://images.unsplash.com/photo-1503676685182-2531a01b5b5c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1955&q=80" alt="img" width="1550" height="650"></div>
    <div class="carousel-item "><img src="https://images.unsplash.com/photo-1504275107627-0c2ba7a43dba?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" alt="img" width="1550" height="650"></div>
    <div class="carousel-item"><img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=752&q=80" alt="img" width="1550" height="650"></div>
    <div class="carousel-item"><img src="https://images.unsplash.com/photo-1510531704581-5b2870972060?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1052&q=80" alt="img" width="1550" height="650"></div>
    
   </div>
</div>
<!-- LEFT AND RIGHT CONTROLS  -->
<a class="carousel-control-prev" data-slide="prev" href="#homes"><span class="carousel-control-prev-icon"></span></a>
<a class="carousel-control-next" data-slide="next" href="#homes"><span class="carousel-control-next-icon"></span></a>
</div>
<br>
<br>
<div class="container-fluid text-center rounded">
  <div class="row d-flex justify-content-around">
    <div class="col-sm-3  bg-light rounded border border-info p-4 m-1">
      <br><h3 class="text-info">Infrastructure</h3>
      <br><p>A random paragraph can also be an excellent way for a writer to tackle writers' block. Writing block can often happen due to being stuck with a current project that the writer is trying to complete. By inserting a completely random paragraph from which to begin, it can take down some of the issues that may have been causing the writers' block in the first place.</p>
      <br><br><br><br>
    </div>
    <div class="col-sm-3  bg-light rounded border border-info p-4 m-1">
      <br><h3 class="text-info">Teaching</h3>
      <br><p>A random paragraph can also be an excellent way for a writer to tackle writers' block. Writing block can often happen due to being stuck with a current project that the writer is trying to complete. By inserting a completely random paragraph from which to begin, it can take down some of the issues that may have been causing the writers' block in the first place.</p>
      <br><br><br><br>
    </div>
    <div class="col-sm-3 bg-light rounded border border-info  p-4 m-1">
      <br><h3 class="text-info">Sports and activities</h3>
      <br><p>A random paragraph can also be an excellent way for a writer to tackle writers' block. Writing block can often happen due to being stuck with a current project that the writer is trying to complete. By inserting a completely random paragraph from which to begin, it can take down some of the issues that may have been causing the writers' block in the first place.</p>
      <br><br><br><br>
    </div>
  </div>
</div>
<br><br><hr>
<div class=" container-fluid mh-100 mw-100 align-item-center justify-content-center rounded-lg " style="line-height:2rem;  background-image: url('https://images.unsplash.com/photo-1518343265568-51eec52d40da?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1900&q=80'  );  background-repeat: no-repeat; background-size: cover;  ">
  <br><br>
  <div class="jumbotron mh-100 mw-100 bg-white align-item-center justify-content-center  text-info  " style=" opacity:0.6;padding:50px ">
    <h1></h1>
    <br>
    <h1>this is a anoter div, that holds nothing but the link to go to home :)</h1>
    <br>
    <h1></h1>
  </div>
  <br><br>
</div>

</body>
</html>