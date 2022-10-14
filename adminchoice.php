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