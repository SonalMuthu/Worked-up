<?php
session_start();
include ("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";


$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$address=$_POST['address'];
$postcode=$_POST['postCode'];
$tel=$_POST['telNo'];
$email=$_POST['emailAddress'];
$pass=$_POST['password'];
$confpass=$_POST['confPassword'];



if(empty(@$fName||@$lName||$address||$postcode||$tel||$email||$pass||$confpass))
{
	echo"All Field are Compusory you must fill all fields";
   echo"<p>Go Back to</p><a href='register.php'>Register</a>";

}else{
	
	$reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/" ;
	if(!(preg_match($reg,$email))){
		
	echo"<p>Email is not valid</p>";
		echo"<p>go back top<a href='register.php'>Register</a></p>";
		
		
	}else{
		
		if($pass==$confpass)
	
	{
$sqlInfo="INSERT INTO users(UsersFName,UsersLName,UsersAddress,UsersPostCode,UsersTelNo,UsersEmail,UsersPassword)
VALUES('".$fname."','".$lname."','".$address."','".$postcode."','".$tel."','".$email."','".$pass."')";

@$run-mysqli_Query($conn,$sqlInfo);
	if(mysqli_errno($conn)==0){
		
		echo"new record created successfully";
		echo"<p>go to<a href='login.php'>Login</a></p>";
		
		
	}else{
		if(mysqli_errno($conn)==1062)
		{
			echo"<br>there is an error with your registry the email you enterd is already taken.";
			echo"<p>go back<a href='register.php'>Register</a></p>";
		}
	}
	


		
	}else{
		echo"<p>the password you enterd do not match each other";
		echo"<p>Plaese make sure you enterd it correctly";
		echo"<p>go back<a href='register.php'>Register</a></p>";
	}
	}
}



//include head layout
include("footfile.html");
?>
