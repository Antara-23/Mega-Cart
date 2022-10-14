<?php    @session_start();

$a=$_REQUEST["txtUsername"];
$b=$_REQUEST["txtPass"];

include("dbconnect.php");
$rsuser=mysqli_query($con,"select * from customer_info where user_name='$a'");
if(mysqli_num_rows($rsuser)==0)
{
    header("location:loginform.php?resmsg=1");
}
else
{
 $row=mysqli_fetch_array($rsuser);
 if($row["user_pass"]==$b)
 {                                                                                                                                                  
    $_SESSION["uname"]=$a;
    
    if($row["user_type"]==admin)
    {
    
        header("location:adminchoice.php");
    }
    else
    {
        header("location:userchoice.php");
    }
 }
 else
 {
    header("location:loginform.php?resmsg=2");
 }

}

?>
