<?php
include  "../shared/auth_guard_customer.php";
include "menu.htm";
$pid=$_GET['pid'];
$userid = $_SESSION['userid'];

// echo "Received Pid=$pid";
include_once "../shared/connection.php";
$status = mysqli_query($conn,"INSERT INTO cart(userid,pid) values('$userid','$pid')");
if($status){
    echo "<h2>Added to Cart Successfully.<h2>";
    //header("location:viewcart.php");
}
else{
    echo "Failed to add cart";
    echo mysqli_error($conn);
}
?>