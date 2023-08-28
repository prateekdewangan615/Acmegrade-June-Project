<?php
include  "../shared/auth_guard_customer.php";
include "menu.htm";

$cartid=$_GET['cartid'];

include_once "../shared/connection.php";
$status = mysqli_query($conn,"DELETE FROM cart where cartid = '$cartid';");
if($status){
    //echo "<h2>Product Removed Successfully.<h2>";
    header("location:viewcart.php");
}
else{
    echo "Failed to remove from cart";
    echo mysqli_error($conn);
}
?>