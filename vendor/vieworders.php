<style>
    .pdt-img{
            height:130px;
            margin:10px auto;
    }
    table{
        font-size:110%;
        font-weight:600;
    }
</style>
<?php
include  "../shared/auth_guard_vendor.php";
include "menu.htm";
$userid = $_SESSION['userid'];
include_once "../shared/connection.php";
$cmd= mysqli_query($conn,"SELECT * from orders inner join product on orders.pid=product.pid where uploaded_by ='$userid'");
$total_rows=mysqli_num_rows($cmd);
echo"<table class='table table-striped'>
    <thead>
    <tr>
        <th scope='col'>User Id</th>
        <th scope='col'>Product Id</th>
        <th scope='col'>Product Name</th>
        <th scope='col'>Price</th>
        <th scope='col'>Image</th>
        <th scope='col'>Category</th>
        <th scope='col'>Description</th>
        <th scope='col'>Address</th>
        <th scope='col'>Order Date & TIme</th>
        <th scope='col'>Delivery Status</th>
      </tr>
    </thead>";
    for($i=0;$i<$total_rows;$i++){
        $row=mysqli_fetch_assoc($cmd);
        $orderid = $row['orderid'];
        $uid = $row['userid'];
        $pid=$row['pid'];
        $pname = $row['pname'];
        $address = $row['addressk'];
        $price = $row['price'];
        $category = $row['category'];
        $details = $row['details'];
        $created_date = $row['created_date'];
        echo "<tr>
            <th scope='row'>$uid</th>
            <td>$pid</td>
            <td>$pname</td>
            <td>$price</td>
            <td><img class='pdt-img' src='$row[imgpath]'></td>
            <td>$category</td>
            <td>$details</td>
            <td>$address</td>
            <td>$created_date</td>
            <td><a href='placedelivery.php?orderid=$row[orderid]'><button class='btn bg-warning'>Place Delivery</button></a></td>
        </tr>";
    }
    echo "</table>";
?>
