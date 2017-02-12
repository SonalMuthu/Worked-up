<?php
session_start();
include ("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Customer Registration";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
echo "<h3> Register and create a WorkedUP account</h3> ";

echo"<table>";
echo"<form action=getregister.php method=post>";

echo"<tr>
		<td>FistName</td>
		<td><input type=text name=firstName></td>
		</tr>";
echo"<tr>
		<td>LastName</td>
		<td><input type=text name=lastName></td>
		</tr>";
echo"<tr>
		<td>Address</td>
		<td><input type=text name=address></td>
		</tr>";
echo"<tr>
		<td>Post Code</td>
		<td><input type=text name=postCode></td>
		</tr>";
echo"<tr>
		<td>Tel No</td>
		<td><input type=text name=telNo></td>
		</tr>";
echo"<tr>
		<td>Email Address</td>
		<td><input type=text name=emailAddress></td>
		</tr>";
echo"<tr>
		<td>Password</td>
		<td><input type=password name=password></td>
		</tr>";
echo"<tr>
		<td>Conform Password</td>
		<td><input type=password name=confPassword></td>
		</tr>";
echo"<tr>
		<td><input type=submit name=register value=Register></td>
		<td><input type=reset name=clear value='clear Form'></td>
		</tr>";
		echo"</form>";
		echo"</table>";
//include head layout
include("footfile.html");
?>
