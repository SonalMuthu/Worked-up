<?php
//include head layout 
include ("headfile.html");
include ("detectlogin.php");
echo "<P></p>";
//display name of the page and some random text
echo"<h2>".$pagename."</h2>";

if(isset($_POST['stock'])){
	@$newproid=$_POST['h_prodid'];
	@$reququantity=$_POST['stock'];
	@$_SESSION['basket'][$newprodid]=$reququantity;
echo"<p>Your Basket has been updated";
print_r($_SESSION);

}

$total=0;
if(isset($_SESSION['basket'])){
	foreach($_SESSION['basket']as $key=>$value){
		if(!$key==0){
			$sql="select*from product where prodid='".$key."';";
			$exeSQL=mysqli_query($conn,$sql)or die (mysqli_error($conn));
			$thearrayprod=mysqli_fetch_array($exeSQL);
			
			echo"<tr>
			if(isset($_SESSION['basket'])){
	foreach($_SESSION['basket']as $key=>$value){
		if(!$key==0){
			$sql="select*from product where prodid='".$key."';";
			$exeSQL=mysqli_query($conn,$sql)or die (mysqli_error($conn));
			$thearrayprod=mysqli_fetch_array($exeSQL);
			
			echo"<tr>
			if(isset($_SESSION['basket'])){
	foreach($_SESSION['basket']as $key=>$value){
		if(!$kedPrice'].".00 </td>
					</tr>";
			$total+=$value*$thearrayprod['prodPrice'];
		}
	}
}
			
?>
