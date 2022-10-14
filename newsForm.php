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

<div> &nbsp; </div>
<div id="myForm">
<form method="post" enctype="multipart/form-data" action="insertNews.php">

<?php 
    if(isset($_REQUEST["resmsg"]))
    {
      echo("<div id='resmsg'>");
      if($_REQUEST["resmsg"]==1)
      {
        echo("News has been saved");
      }

      echo("</div>");
    }

   ?>
  
    <label>Enter News Heading</label>
    <input type="text" name="txtHeading">
    
    <label>Enter News Details</label>
    <textarea name="txtDetail" rows="10"></textarea>

    <div id="formBtnGroup">
      <input type="submit" value="OK">
      <input type="reset" value="Cancel">
    </div>
 


</form>
</div><!--end of myForm-->
<div> &nbsp; </div>


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
