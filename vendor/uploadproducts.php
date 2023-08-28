<?php
include  "../shared/auth_guard_vendor.php";
include "menu.htm";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Upload Products</title>
    <style>
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center">
        <form action="upload.php" method="post" enctype="multipart/form-data" class="w-50 bg-warning p-4 mt-3">
            <h3 class="text-center">Upload Product</h3>
            <input type="text" name="name" class="form-control mt-2" placeholder="Product Name">
            <input type="text" name="price"  class="form-control mt-2" placeholder="Product Price">
            <textarea name="details" class="form-control mt-2" id="" cols="20" rows="5" placeholder="Product Details"></textarea>
            <input type="text" name="code" class="form-control mt-2" placeholder="Product Code">
            <label for="category" class="text-success ms-2 mt-2">Category</label>
            <select name="category" id="category" class="form-control">
                <option>Electronics</option>
                <option>Home Appliances</option>
                <option>Fashion</option>
                <option>Sports</option>
            </select>
            <label class="text-success ms-2 mt-2">Active</label>
            <select name="active" id="active" class="form-control mt-2">
                <option>Yes</option>
                <option>No</option>
            </select>
            <input type="file" class="form-control mt-2" accept=".jpg,.png" name="pdt_img">
            <div class="text-center mt-3">
                <button class="btn btn-success">Upload</button>
            </div>
        </form>
    </div>
</body>
</html>