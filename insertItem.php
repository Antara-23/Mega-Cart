<?php 
$a=$_REQUEST["txtName"];
$b=$_REQUEST["txtDname"];
$c=$_FILES["flImage"];
$img=$c["name"];
$d=$_REQUEST["cmbParent"];
$e=$_REQUEST["txtIprice"];
$f=$_REQUEST["txtDprice"];

move_uploaded_file($c['tmp_name'],".\\collection\\$img");

include("dbconnect.php");
mysqli_query($con,"insert into item_info(It_name,It_dname,image_path,It_parent_id,reg_date,It_price,It_dprice) values('$a','$b','$img','$d',now(),$e,$f)") or die("Query Error");

header("location:itemForm.php?resmsg=1");
?>