<?php
function oneTable(){
static $x; 
    for($x; $x<10;){
        $x++;
        echo $x." * ".$x." = ".$x."<br>"; 

    }
}
echo "<br>";
echo "<div style='text-align:center' >";
function twoTable(){
    $i=0;
     echo "<br>";
    while($i<10){
        $i++;
        print $i." x 2 = ".$i*2;
        print "<br>";                
    } 

}
echo "</div>";
function threeTable(){
    $i=0;
    echo "<br>";
    do{

        echo $i." x 3 = ".$i*3 ; $i++; echo "<br>";
    }
    while($i<11);
}

function squarestill30(){
    $i=0; 
    echo"<br>";
    for($i=0; $i<31; $i++){
        if($i==11)
            break;  
        echo $i."^ 2 = ".$i*$i; 
        echo "<br>";
    }

}



oneTable();
twoTable();
threeTable();
squarestill30();

?>