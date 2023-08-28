<?php
include  "../shared/auth_guard_customer.php";
include "menu.htm";
$userid = $_SESSION['userid'];
$address = $_POST['address'];
include_once "../shared/connection.php";
$cmd= mysqli_query($conn,"SELECT * from cart where userid = '$userid'");
$total_rows=mysqli_num_rows($cmd);
for($i=0;$i<$total_rows;$i++){
    $row=mysqli_fetch_assoc($cmd);
    $pid=$row['pid'];
    $cart = $row['cartid'];
    $status = mysqli_query($conn,"INSERT INTO orders(userid,pid,addressk) values('$userid','$pid','$address')");
    $check  = mysqli_query($conn,"DELETE from cart where cartid= '$cart'");
}
if($status){
    echo "<h2>Placed Order Successfully.</h2>";

}
else{
    echo "No items present at Cart!";
    echo mysqli_error($conn);
}
?>
