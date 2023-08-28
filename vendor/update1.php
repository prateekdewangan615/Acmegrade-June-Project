<?php
include "../shared/auth_guard_vendor.php";
include "menu.htm";
$pid = $_POST['pid'];
$userid = $_SESSION['userid'];
include_once "../shared/connection.php";
$imgpath = "../shared/images/".$_FILES['pdt_img']['name'];
move_uploaded_file($_FILES['pdt_img']['tmp_name'],$imgpath);
$status = mysqli_query($conn,"UPDATE product SET pname='$_POST[name]',price='$_POST[price]',details='$_POST[details]',code='$_POST[code]',category='$_POST[category]',imgpath='$imgpath',uploaded_by='$userid',active='$_POST[active]' WHERE pid = '$pid'");
if($status){
    echo "<h1>Product Updated Successfully.</h1>";
}
else{
    echo "Update failed";
    echo mysqli_error($conn);
}
?>