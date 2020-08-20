<html>
<head>
<title>
 form 
</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron bg-light  text-danger text-right"> <h1> This is my simple form page </h1></div>
<div class="jumbotron bg-info text-white p-5 m-0">
    <h3> Enter your name for Greetings !</h3>
    <form method = "post">

        <table>
        	<tr>
        		<td>
        			Enter First Name :
        		</td>
        		<td>
        			<input type= "text" name = "first_name">
        		</td>
        	</tr>
        	<tr>
        		<td>
        			Enter Last Name :
        		</td>
        		<td>
        			 <input type = "text" name ="last_name">
        		</td>
        	</tr>
        	<tr>
        		<td>
        		</td>
        		<td>
        			<input type= "submit" name= "sub" value = "Surprise Yourself">
        		</td>
        	</tr>
        </table>
    </form>
</div>
    <?php 
    if(isset($_POST['first_name'])){
   	echo  "<div class='jumbotron bg-light text-info p-4 m-0'><h4> Hi, ".strtoupper($_POST['first_name'])." ".strtoupper($_POST['last_name'])."</h4></div> ";
   	
    	}
    if(array_key_exists('last_name', $_POST))
	{
		//echo "<b>".$_POST['last_name'].",</b> " ;
		echo greetings(); 
	}	
    
       // echo "<hr>Last update : ".$date;
	function greetings(){
        $time_now=mktime(date('h')+5,date('i')+30,date('s'));
        $date = date('D d-M-Y H:i', $time_now);
		$greets= Array("you look <b>Good</b> today ! ",
						"you look <b>Great</b> today !", 
						"you look <b>Awsome</b> today !", 
						"you look <b>Pretty</b> today !",
					 " you look <b>Beautful</b> today !" );
        echo "<div class='jumbotron bg-light  text-info text-center p-1'> <h2> ".$greets[rand(0,4)]."</h2> <br> <hr> <h3>Last Update :".$date."</h3></div>";
		//echo "<h2>".$greets[rand(0,4)]."</h2>";.

		//echo "<hr> Last update : ".date('d-m-y l ');
		//echo date("h:i:sa");
		//echo " ".date_default_timezone_set("India");
	}
	 ?>
   
</body>
</html>