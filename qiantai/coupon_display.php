
<link href="css/coupon_display.css" rel="stylesheet" />



<?php
 $cont=$_GET['cont'];
 echo "<div id='coupon_d' align='center'>";
 echo "<div id='coupon_kongbai' align='center'>"."&nbsp;";
 if($cont=="coupon1"){
echo  "<div>没有符合条件的优惠券</div>";
}
else if($cont=="coupon2"){
echo  "<div>没有符合条件的优惠券</div>";}


else if($cont=="coupon3"){
echo "<div>没有符合条件的优惠券</div>";}


else if($cont=="coupon4"){
echo  "<div>没有符合条件的优惠券</div>";}
 echo "</div>";
echo  "</div>";
?>
