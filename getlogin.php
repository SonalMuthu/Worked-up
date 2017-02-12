<?php
session_start();
include ("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Login Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";


$logemail=$_POST['loginemail'];
$logPassword=$_POST['loginpassword'];

if(empty(@$logemail||@$logPassword)){
	echo"All fields are compulsory";
	echo"<p>go back to </p><a href='login.php'>Login</a>";
	
}else{
	$sql="select userId,UsersFName,UsersLName,UsersAddress,UsersPostCode,UsersTelNo,UsersEmail,UsersPassword from users where UsersEmail='$logemail'";
	
	@$result=mysqli_query($conn,$sql);
	
	$row=mysqli_fetch_array($result);
	
	if($row['UsersEmail']==$logemail){
		if($row['UsersPassword']==$logPassword){
			
			$_SESSION['login']['c_userid']=$row['userId'];
			$_SESSION['login']['c_userFname']=$row['UsersFName'];
			$_SESSION['login']['c_userLname']=$row['UsersLName'];
			
			echo"<b>hello,".$_SESSION['login']['c_userFname']." ".$_SESSION['login']['c_userLname']."</b></br>";
			echo"You have successfuly log on to the system</br>";
			echo "the email you enterd is".$logemail."</br>";
			echo "the password you enterd is secret</br></br>";
			echo"<p>to continue shopping</p>";
			echo"<a href='index.php'>Product Index</a></p></br>";
			echo"<p>To view your Shopping basket</p>";
			echo"<a href='basket.php'>My basket</a></p>";
		}else{
			echo"invalid password";
		}
		
	}else{
		echo"invalid username";
	}
	
}

include ("footfile.html");

