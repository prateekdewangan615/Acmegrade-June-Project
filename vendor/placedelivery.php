<?php
include  "../shared/auth_guard_vendor.php";
include "menu.htm";

$orderid=$_GET['orderid'];
$userid= $_SESSION['userid'];
include_once "../shared/connection.php";
$status = mysqli_query($conn,"DELETE FROM orders where orderid = '$orderid';");
if($status){
    //$status = mysqli_query($conn,"DELETE FROM orders w");
    echo "<h2>Delivered Successfully.<h2>";

}
else{
    echo "Failed to place the delivery of the order";
    echo mysqli_error($conn);
}
?>