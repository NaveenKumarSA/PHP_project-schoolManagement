<html>
<body style=" text-align:center" >

 
<form action="" method="post">
Enter Name <input name="name" type="text"><hr>
Enter Password <input name="password" type="password">
<hr>
<input type="submit" name="submit" >
</form>
<?php
if (isset($_POST['submit']))
{
 displayName(); 
}
function displayName(){
  echo "you have entered your name as ".$_POST["name"]; 
  echo "<br>you have entered your password as ".$_POST["password"]; 
}

?>

</body>
</html>
