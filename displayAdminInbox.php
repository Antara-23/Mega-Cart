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
      
<div id="rightAdmin"><br>
<table border="1" width="80%" align="center">
<tr>
    <th width='70'>Sl No.</th>
    <th>Message Heading</th>
    <th>Sender Name </th>
    <th>Received Date</th>
</tr>
<?php
include("dbconnect.php");
$rsMsg=mysqli_query($con,"select msg_id,msg_heading,sent_date,sender_name from message_info where receiver_name='admin' order by sent_date desc");
$cnt=0;
while($row=mysqli_fetch_array($rsMsg))
{
$cnt++;
$id=$row["msg_id"];
$hd=$row["msg_heading"];
$sn=$row["sender_name"];
$dt=$row["sent_date"];
echo("<tr>");
    echo("<td align='center'>");
    echo($cnt);
    echo("</td>");
    echo("<td>");
    echo("<a href='displayMessageDetail.php?nid=$id'>");
    echo($hd);
    echo("</a>");
    echo("</td>");
    echo("<td>");
    echo($sn);
    echo("</td>");
    echo("<td>");
    echo($dt);
    echo("</td>");

echo("</tr>");
}
?>
</table>

</div><!--end of rightAdmin-->

</div><!--end of adminarea-->

</div><!--end of content--> 
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