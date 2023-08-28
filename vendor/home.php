<?php
include  "../shared/auth_guard_vendor.php";
include "menu.htm";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:rgb(255, 255, 242);
        }
        .pdt-card{
            font-weight:600;
            width:300px;
            display:inline-block;
            text-align:center;
            margin:20px;
            font-size:125%;
            padding:10px;
            background-color:white;
            box-shadow:1px 1px 8px grey;
        }
        .pdt-card:hover{
            box-shadow:1px 1px 10px grey;
            cursor:pointer;
            background-color: rgb(255, 254, 227);
        }
        .pdt-img{
            height:200px;
        }
        .price{
            font-size:24px;
        }
        .price::before{
            content:"Rs. ";
        }
        .name{
            font-size:22px;
            font-weight:bold;
            color:violet;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center; margin:20px">Vendor Home</h2>
</body>
</html>

<?php
    include_once "../shared/connection.php";
    $sql_obj = mysqli_query($conn,"select *from product where uploaded_by= $_SESSION[userid]");
    while($row = mysqli_fetch_assoc($sql_obj)){
        echo "<div class='pdt-card'>
            <div class='name'>$row[pname]</div>
            <div class='price'>$row[price]</div>
            <div class='code'>$row[code]</div>
            <img class='pdt-img' src='$row[imgpath]'>   
            <div class='category'>$row[category]</div>
            <div class='details'>$row[details]</div>
            <hr>
            <div class='text-center'>
            <a href='updateproducts.php?pid=$row[pid]'>
                <button class='btn btn-warning mt-2'>Update Product</button>
            </a>
            <br>
            <a href='deleteproduct.php?pid=$row[pid]'>
                <button class='btn btn-danger mt-2'>Delete Product</button>
            </a>
            
        </div>
        </div>";
    }
?>