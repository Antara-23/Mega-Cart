<?php 
 include("header.php");
?>
<div class="content">

<div> &nbsp; </div>
<div id="myForm">
<form method="get" action="insertCart.php">
<?php 
    if(isset($_REQUEST["resmsg"]))
    {
      echo("<div id='resmsg'>");
      if($_REQUEST["resmsg"]==1)
      {
        echo("Wrong User Name");
      }
      else if($_REQUEST["resmsg"]==2)
      {
        echo("Wrong password");
      }

      echo("</div>");
    }

   ?>

    <label> Enter Product Quantity </label>
    <input type="text" name="txtQty">
    <div id="formBtnGroup">
      <input type="submit" value="Ok">
      <input type="reset" value="Cancel">
    </div>
 


</form>
</div><!--end of myForm-->
<div> &nbsp; </div>
</div><!--end of content--> 
<?php 
 include("footer.php");
?>