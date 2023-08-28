<?php
// header("location:shared/login.htm");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Welcome to Ecommerce Store</title>
    <style>
        body{
            background:url('bg.png');
            background-size:cover;
        }
        a{
            text-decoration:none;
            color:white;
        }
        .contain{
            width: 50%;
            height:40%;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:30px;
            margin:auto;
            gap:20px;
        }
        .contained{
            display:flex;
            align-items:center;
            flex-direction:column;
            justify-content:center;
            margin:200px auto;
        }
    </style>
</head>
<body>
    <div class="contained">
        <div class="contain">
        <h1>Welcome to Ecommerce Store</h1>
        </div>
        <div class="contain">
            <button class='btn bg-primary btn-lg'><a href="shared/login.htm">Login Here</a></button>
            <button class='btn bg-success btn-lg'><a href="shared/signup.htm">Sign Up</a></button>
        </div>
    </div>
    
    
</body>
</html>