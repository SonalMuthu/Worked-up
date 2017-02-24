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


					<td>".$thearrayprod['prodName']."</td>
					<td>".$thearrayprod['prodPrice']."</td>
					<td>".$value."</td>
					<td>".$value *$thearrayprod['prodPrice'].".00 </td>
					</tr>";
			$total+=$value*$thearrayprod['prodPrice'];
		}
	}
}
		echo"<tr>
			<td colspan='3'>Total</td>
			<td>$total.00</td>
			</tr>
			</table>";
			
echo "<p><a href='clearbasket.php'>Clear the basket</a></p>";
echo"<p>New workedUp customers<a href='register.php'>Register</a></p>";
echo"<p>Registerd workedUp customers<a href='login.php'>Ogin</a></p>";


//include head layout
include("footfile.html");
?>
