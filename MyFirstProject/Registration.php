<!DOCTYPE html>
<html>
<head>
	<title>Registration Page </title>
	 <style>
	 		body{
	 			text-align: "center";
	 		}
            .container{
               background-color:#808080

            }
            .form{
                margin:10px;
                padding:2%; 
              /*  line-height:30px;*/
            }
          
        </style>
</head>
<body >
	    <?php
    //declaring the empty variables.
    $fullname ='';
    $dob  ='';
    $gender1 ='';
    $contactOption ='';
    $contactDetail ='';
    $languages =[];
    $comments ='';
    $tnc ='';



    if(isset($_POST['submit'])){
     /*   echo " Your name is <h1>".$_POST['fullname']."</h1>";  
        echo "<br> Date of Birth ".$_POST['dob'];  
        echo "<br> You are a  ".$_POST['gender1'];  
        echo "<br> Your contact Option is ".$_POST['contactOption'];
        echo "<br> Your contact Detail is ".$_POST['contactDetail'];
        echo "<br> Your contact Detail is ".$_POST['languages'];
        echo "<br> Your accepted the TnC ".$_POST['tnc2'];
    */
        //validating and assingning the html chars to the empty variables 
        if(isset($_POST['fullname'])){
            $fullname=$_POST['fullname'];
        if(isset($_POST['dob']))
            $dob=$_POST['dob'];
        if(isset($_POST['gender']))
            $gender1=$_POST['gender'];
        if(isset($_POST['contactOption']))
            $contactOption=$_POST['contactOption'];
        if(isset($_POST['contactDetail']))
            $contactDetail=$_POST['contactDetail'];
        if(isset($_POST['comments']))
            $comments=$_POST['comments'];
        if(isset($_POST['languages']))
            $languages=$_POST['languages'];
        if(isset($_POST['tnc']))
            $tnc=$_POST['tnc'];
        
        printf(
        'User name : %s
        <br> Date Of Birth : %s
        <br>Gender: %s
        <br>Contact option: %s
        <br>Contact Details: %s
        <br>Languages Known: %s
        <br>Comments: %s
        <br>t&amp;C: %s',
        htmlspecialchars($fullname, ENT_QUOTES),
        htmlspecialchars($dob, ENT_QUOTES),    
        htmlspecialchars($gender1, ENT_QUOTES),    
        htmlspecialchars($contactOption, ENT_QUOTES),
        htmlspecialchars($contactDetail, ENT_QUOTES),
        htmlspecialchars(implode('', $languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tnc, ENT_QUOTES)
        );
    }
    ?>
      <h1>Naveen's Registeration Page</h1>

    <div class="container">
    <form class="form" method="post">

    <table class="registrationTable">
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
            Tell us something about you  : 
        </td>
        <td>
            <textarea name="comments" placeholder=""> Optional, 300 words max
                
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
                <option value="en">English</option>
                <option value="ta">Tamil</option>
                <option value="te">Telugu</option>
                <option value="ma">Malayalam</option>
                <option value="ma">Hindi</option>
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
</body>
</html>