<?php @session_start();
include("header.php");
?>
<div class="content">
    <div>&nbsp</div>
    <div id="myform">
    <form method="get" action="loginCheck.php">
    
    <?php 
    if(isset($_REQUEST["resmsg"]))
    {
      echo("<div id='resmsg'>");
      if($_REQUEST["resmsg"]==1)
      {
        echo("Invalid username");
      }
    else if($_REQUEST["resmsg"]==2)
    {
     echo("Wrong login password");
    }
    echo("</div>");
    }
   ?>

    <label>Enter username</label>
    <input type="text" name="txtUsername">

    <label>Enter password</label>
    <input type="password" name="txtPass">
    
    <br><br>

    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    <div id="formBtnGroup">
    <input type="submit" value="OK"> &nbsp; &nbsp; &nbsp;
    <input type="reset" value="Cancel">
    </div>

    </form>
    </div><!--end of myform-->
    <div>&nbsp</div>
</div><!--end of content-->

<?php
include("footer.php");
?>