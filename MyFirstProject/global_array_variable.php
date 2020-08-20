<html>
<body>

<?php
$x = 20;
$y = 10;

function myTest() {
  global $x,$y,$v;
  //$GLOBALS[$x,$v,$y];

  $v=90;
  //$y = $x + $y;
  $GLOBALS['arr']=$GLOBALS['x']+$GLOBALS['y'];
  $GLOBALS['cat']=$GLOBALS['arr']+$GLOBALS['y'];
  $GLOBALS['ben']=$GLOBALS['arr']*$GLOBALS['cat'];
    
   
} 

myTest();  // run function
echo "arr = x+y : ".$arr."<br>"; 
echo $cat."<br>"; 
echo $ben."<br>"; 
//echo $y; // output the new value for variable $y
?>

</body>
</html>
