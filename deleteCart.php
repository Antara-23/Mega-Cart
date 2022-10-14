<?php 
$a=$_REQUEST["cid"];
include("dbconnect.php");
mysqli_query($con,"delete from cart_info where cart_id='$a'");
header("location:displayCartInfo.php");
?>