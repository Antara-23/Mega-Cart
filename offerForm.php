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
<form method="post" enctype="multipart/form-data" action="insertOffer.php">
  <?php 
    if(isset($_REQUEST["resmsg"]))
    {
      echo("<div id='resmsg'>");
      if($_REQUEST["resmsg"]==1)
      {
        echo("Offer has been saved");
      }

      echo("</div>");
    }

   ?>
    <label>Enter Offer Name</label>
    <input type="text" name="txtOfferName">
    
    <label>Choose Offer Start Date</label>
    <input type="date" name="dtStart">
    
    <label>Choose Offer End Date</label>
    <input type="date" name="dtEnd">
    
    <label>Choose Category</label>
    <select name="cmbCategory">
     <option value="0">Choose Category Name</option>
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

    <label> Enter Offer Discount in %</label>
    <input type="text" name="txtDis">

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