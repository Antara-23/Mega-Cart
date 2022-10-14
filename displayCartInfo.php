<?php @session_start();
 include("header.php");
?>
<div class="content">
<div id='cartInfo'>
<a href="index.php">Add More Item</a>

<?php 
  include("dbconnect.php");
  $usr=$_SESSION["uname"];
  $rsCart=mysqli_query($con,"select ct.cart_id,ct.item_id,it.It_name,ct.item_rate,item_qty,image_path  from cart_info as ct ,item_info as it  where it.It_id=ct.item_id and ct.user_name='$usr'");

  echo("<table border='1'>");
  echo("<tr><th>Sl. No. </th><th>Item Name </th><th>Image</th><th> Price </th><th> Quantity </th><th>Amount </th><th>Status</th></tr>");
  $cnt=0;
  $total=0;
  while($row=mysqli_fetch_array($rsCart))
  {
    $cnt++;
    echo("<tr>");
    echo("<td>".$cnt."</td>");
    echo("<td>".$row["It_name"]."</td>");
    $img=$row["image_path"];
    echo("<td><img src='.\\collection\\$img' width='50' height='50' border='1'></td>");
    echo("<td>".$row["item_rate"]."</td>");
    echo("<td>".$row["item_qty"]."</td>");
    $amnt=$row["item_rate"]*$row["item_qty"];
    $total=$total + $amnt;
    echo("<td>".$amnt."</td>");
    $id=$row["cart_id"];
    echo("<td> <a href='deleteCart.php?cid=$id'>Delete</a></td>");  
    echo("</tr>");
}
echo("<tr> <td align='right'colspan='5'>Total :  </td> <td> $total</td></tr>");
  echo("</table>");
  
?>
</div> <!--end of cartInfo-->

<div id="placeOrder">
<a href="insertOrder.php?amnt=<?=$total;?>">Place Order</a>
</div>

</div><!--end of content--> 
<?php 
 include("footer.php");
?>