<?php
include  "../shared/auth_guard_customer.php";
include "menu.htm";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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
    <h2 style="text-align:center; margin:20px">Customer Home Welcomes You</h2>
</body>
</html>

<?php
    include_once "../shared/connection.php";
    $sql_obj = mysqli_query($conn,"SELECT *from product");
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
                <a href='addcart.php?pid=$row[pid]'>
                <button class='btn btn-warning'>Add to Cart</button>
                </a>
            </div>
        </div>";
    }
?>