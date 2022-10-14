<?php @session_start();   ?>
<html>    
    <head>
        <title>Mega Cart </title>
        <link href="./style/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div id=main>
            <div id=header>
                <div id="leftlogo"><a href=".\index.php"><img src=".\images\logo5.jpeg"></a></div>
                <div id="centertxt"><a href=".\index.php"><h1>Mega - Cart</h1></a>
                                                          <h3>  |  The Place Where You Find Quality  |  </h3>
                <?php 
                if(isset($_SESSION["uname"]))
                {
                echo("<div id='welcomeUser'>");
                $usr=$_SESSION["uname"];
                  echo("Welcome ".$usr."...!!! , ");
                  echo(" <a href='logout.php'>Logout</a>");

                  if(isset($_SESSION["utype"]))
                  {
                    if($_SESSION["utype"]=="user")
                    {
                    echo("&nbsp;<a href='displayCartinfo.php'><img src='.\images\logo2.jpg' width='20' height='20' align='top'>");
                    include("dbconnect.php");
                    $rsCart=mysqli_query($con,"select count(*) from cart_info where user_name='$usr'");
                    $row=mysqli_fetch_array($rsCart);
                    $cnt=$row[0];
                    echo("($cnt)");
                    echo("</a>");
                    }
                  }
                echo("</div>");
                }
                 ?>
                </div>
                <div id="rightlogo"><img src=".\images\logo3.webp"></div>
            </div> <!--end of header-->   