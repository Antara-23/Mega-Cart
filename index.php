<?php
include("header.php");
?>


<div id="mid">
  <div id="newlogin"><a href="displayNews.php">News</a>|<a href="registerationform.php">New User</a>|<a href="loginform.php">Login</a> 
  </div>
</div> <!--end of mid-->

<div class="content">
<div> &nbsp; </div>

<div id="categoryArea">
 <?php 
   if(isset($_REQUEST["cid"]))
   {
     $prid=$_REQUEST["cid"];
   }
   else 
   {
     $prid=0;
   }
   include("dbconnect.php");
   $rsCat=mysqli_query($con,"select * from category_info where cat_parent_id=$prid order by cat_dname");
   while($row=mysqli_fetch_array($rsCat))
   {
    echo("<div class='category'>");
      $id=$row["cat_id"];
      echo("<a href='index.php?cid=$id'>");
      echo($row["cat_dname"]);
      $img=$row["image_path"];
      echo("<img src='.//collection//$img'>");
      echo("</a>");
      echo("</div>");
   }
 ?>
</div><!--end of categoryArea-->
<hr>

<div id="itemArea"> 

<?php 
   if(isset($_REQUEST["cid"]))
   {
     $prid=$_REQUEST["cid"];
   }
   else 
   {
     $prid=0;
   }
   
   $rsItem=mysqli_query($con,"select * from item_info where It_parent_id=$prid order by It_name");
   while($row=mysqli_fetch_array($rsItem))
   {
    echo("<div class='item'>");
      $id=$row["It_id"];
      
      // echo("<a href='index.php?cid=$id'>");

      echo($row["It_name"]);
      $img=$row["image_path"];
      echo("<img src='.//collection//$img'>");
      echo("Detail:".$row["It_dname"]."<br>");

      echo("Rate: <s>".$row["It_price"]."</s><br>");

      $spdis=0;
      $rsOffer=mysqli_query($con,"select * from offer_info where now() >= offer_start_dt AND now() <= offer_end_dt");
      while($rowOffer=mysqli_fetch_array($rsOffer))
      {
        $cats=$rowOffer["cat_type"];
        $catarr=explode("-",$cats);
        if(in_array($prid,$catarr))
        {
          $spdis=$spdis + $rowOffer["offer_discount"];
        }
      }

      
      $dis=$row["It_price"] - $row["It_price"]*$row["It_dprice"]/100 ;
      $dis=$dis + $spdis;
      echo("Dis. Rate: ".$dis."<br>");

      echo("<div class='buyNow'>");
      echo("<a href='checkAlreadyLoginForCart.php?itm=$id&rt=$dis'>Buy Now</a>");
      echo("</a>");

      echo("</div>");
   }
 ?>

</div><!--end of itemArea-->
<div> &nbsp; </div>

</div><!--end of content--> 

<?php
include("footer.php");
?>
