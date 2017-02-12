<?php
if(isset($_SESSION['login'])){
	
	echo"<font align='right'><p>Name:<b>".@$_SESSION['login']['c_userFname']."".@$_SESSION['login']['c_userLname']."
	</b>/customer No:".@$_SESSION['login']['c_userid']."</p></font>";
	echo"<hr>";
}
?>