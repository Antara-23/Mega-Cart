<?php
include("header.php");
?>
<div class="content">
    <div>&nbsp</div>
    <div id="myform">
    <form method="get" action="insertCustomer.php">

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

    <label>Enter your name</label>
    <input type="text" name="txtName">

    <label>Enter your email id</label>
    <input type="text" name="txtEmail">

    <label>Enter your mobile no</label>
    <input type="text" name="txtMobile">

    <label>Enter your address</label>
    <textarea name="txtAddress" rows="3"></textarea>

    <label>Enter username</label>
    <input type="text" name="txtUsername">

    <label>Enter password</label>
    <input type="password" name="txtPass">
    
    <br><br>

    <div id="formBtnGroup">
    <input type="submit" value="OK">
    <input type="reset" value="Cancel">
    </div>

    </form>
    </div><!--end of myform-->
    <div>&nbsp</div>
</div><!--end of content-->

<?php
include("footer.php");
?>