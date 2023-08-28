<?php
include "../shared/auth_guard_vendor.php";
include "menu.htm";
$userid = $_SESSION['userid'];
include_once "../shared/connection.php";
$imgpath = "../shared/images/".$_FILES['pdt_img']['name'];
move_uploaded_file($_FILES['pdt_img']['tmp_name'],$imgpath);
$status = mysqli_query($conn,"INSERT INTO product(pname,price,details,code,category,imgpath,uploaded_by,active) values('$_POST[name]','$_POST[price]','$_POST[details]','$_POST[code]','$_POST[category]','$imgpath','$userid','$_POST[active]')");
if($status){
    echo "<h1>Product Uploaded Successfully.<h1>";
}
else{
    echo "Upload failed";
    echo mysqli_error($conn);
}
?>