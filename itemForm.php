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
<form method="post" enctype="multipart/form-data" action="insertItem.php">
  <?php 
    if(isset($_REQUEST["resmsg"]))
    {
      echo("<div id='resmsg'>");
      if($_REQUEST["resmsg"]==1)
      {
        echo("Your data has been saved");
      }

      echo("</div>");
    }

   ?>
    <label>Enter Item Name</label>
    <input type="text" name="txtName">
    
    <label>Enter Item Details</label>
    <input type="text" name="txtDname">
    
    <label>Choose Item Image</label>
    <input type="file" name="flImage">
    
    <label>Choose Parent Category</label>
    <select name="cmbParent">
     <option value="0">Choose Parent Here</option>
     <?php 
       include("dbconnect.php");
       $rsIt=mysqli_query($con,"select * from category_info order by cat_name");
       while($row=mysqli_fetch_array($rsIt))
       {
          $id=$row["cat_id"];
          echo("<option value='$id'>");
          echo($row["cat_name"]);
          echo("</option>");
       }
    ?>
    </select>

     <label> Enter Item Price</label>
    <input type="text" name="txtIprice">
    
    <label> Enter Discount in %</label>
    <input type="text" name="txtDprice">

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