<?php
include  "../shared/auth_guard_customer.php";
include "menu.htm";

$orderid=$_GET['orderid'];

include_once "../shared/connection.php";
$status = mysqli_query($conn,"DELETE FROM orders where orderid = '$orderid';");
if($status){
    //echo "<h2>Order Cancelled Successfully.<h2>";
    header("location:viewproduct.php");
}
else{
    echo "Failed to cancel the order";
    echo mysqli_error($conn);
}
?>