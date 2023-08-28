<?php
include  "../shared/auth_guard_vendor.php";
include "menu.htm";

$pid=$_GET['pid'];

include_once "../shared/connection.php";
$status = mysqli_query($conn,"DELETE FROM product where pid = '$pid';");
if($status){
    //echo "<h2>Product Removed Successfully.<h2>";
    header("location:home.php");
}
else{
    echo "Failed to remove the product";
    echo mysqli_error($conn);
}
?>