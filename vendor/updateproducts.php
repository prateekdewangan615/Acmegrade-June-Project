<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Update Products</title>
    <style>
        .pdt-img{
            height:150px;
        }
    </style>
</head>
<body>
</body>
</html>
<?php
include  "../shared/auth_guard_vendor.php";
include "menu.htm";
include_once "../shared/connection.php";
$pid = $_GET['pid'];
echo "<div class='d-flex justify-content-center align-items-center'>";
$status = mysqli_query($conn,"SELECT * from product where pid= '$pid'");
$row=mysqli_fetch_assoc($status);
        $pname = $row['pname']; 
        $price = $row['price'];
        $details = $row['details'];
        $category = $row['category'];
        $code = $row['code'];
        $active = $row['active'];
        $imgpath = $row['imgpath'];
echo "<form action='update1.php' method='post' enctype='multipart/form-data' class='w-50 bg-warning p-4 mt-3'>
    <h3 class='text-center'>Update Product</h3>
    <label><h5 class='mt-3'>Product Id : $pid</h5></label>
    <input type='text' name='pid' class='form-control mt-2' readonly value='$pid'>
    <label><h5 class='mt-3'>Product Name : $pname</h5></label>
    <input type='text' name='name' class='form-control mt-2' placeholder='Product Name'>
    <label><h5 class='mt-3'>Product Price : $price</h5></label>
    <input type='text' name='price'  class='form-control mt-2' placeholder='Product Price'>
    <label><h5 class='mt-3'>Product Details : $details</h5></label>
    <textarea name='details' class='form-control mt-2' id='' cols='20' rows='5' placeholder='Product Details'></textarea>
    <label><h5 class='mt-3'>Product Code : $code</h5></label>
    <input type='text' name='code' class='form-control mt-2' placeholder='Product Code'>
    <label><h5 class='mt-3'>Product Category : $category</h5></label><br>
    <label for='category' class='text-success ms-2 mt-2'>Category</label>
    <select name='category' id='category' class='form-control mt-2'>
        <option>Electronics</option>
        <option>Home Appliances</option>
        <option>Fashion</option>
        <option>Sports</option>
    </select>
    <label><h5 class='mt-3'>Active : $active</h5></label><br>
    <label class='text-success ms-2 mt-2'>Active</label>
    <select name='active' id='active' class='form-control mt-2'>
        <option>Yes</option>
        <option>No</option>
    </select>
    <label><h5 class='mt-3'>Chosen File : </h5></label>
    <img class='pdt-img mt-3' src='$imgpath'>
    <input type='file' class='form-control mt-4' accept='.jpg,.png' name='pdt_img'>
    <div class='text-center mt-3'>
        <button class='btn btn-success'>Update</button>
    </div>
</form>
</div>
";
?>