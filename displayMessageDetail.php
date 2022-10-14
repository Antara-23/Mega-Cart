<?php  @session_start();
if(isset($_SESSION["uname"]))
{

?>

<?php 
 include("header.php");
?>
<div class="content">

<div id="adminArea">
<div id="leftAdmin">
  <?php 
     include("menuAdmin.php");
  ?>
</div><!--end of leftAdmin-->
      
<div id="rightAdmin">

<div style="width:90%; margin:5px 2px; padding:10px; border:2px solid black;">

<?php
$x=$_REQUEST["nid"];
include("dbconnect.php");
$rsMsg=mysqli_query($con,"select * from message_info where msg_id=$x");
$row=mysqli_fetch_array($rsMsg);
    $id=$row["msg_id"];
    $sn=$row["sender_name"];
    $dt=$row["sent_date"];
    $hd=$row["msg_heading"];
    $dtl=$row["msg_detail"];
    echo("Heading:".$hd);
    echo("<hr>");
    echo("Rec.Date:".$dt);
    echo("<hr>");
    echo("Sender Name:".$sn);
    echo("<hr>");
    echo("Detail:".$dtl);
    echo("<hr>"); 
?>
</div>

<div id="replyBtn">
    <a href='replyFormByAdmin.php?usr=<?=$sn?>'>Reply</a>
</div>
</div><!--end of rightAdmin-->

</div><!--end of adminarea-->
</div> <!--end of content-->


<?php
include("footer.php");
?>
<?php 
}
else 
{
  header("location:loginForm.php");
}
?>


