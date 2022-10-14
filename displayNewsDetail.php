<?php
include("header.php");
?>
<br>
<div class="content">
<table border="1" width="80%" align="center">
    <tr>
        <th width='70'>Sl No.</th>
        <th>News Details</th>
    </tr>
<?php
$x=$_REQUEST["nid"];
include("dbconnect.php");
$rsNews=mysqli_query($con,"select news_detail from news_info where news_id=$x");
$cnt=0;
while($row=mysqli_fetch_array($rsNews))
{
    $cnt++;
    $hd=$row["news_detail"];
    echo("<tr>");
        echo("<td align='center'>");
        echo($cnt);
        echo("</td>");
        echo("<td>");
        echo($hd);
        echo("</td>");
    echo("</tr>");
}
?>
</table>

</div> <!--end of content-->

<?php
include("footer.php");
?>
