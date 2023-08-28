<?php

$uname =$_POST['uname'];
$upass1 =$_POST['upass1'];
$upass2 =$_POST['upass2'];
$user_type =$_POST['user_type'];
if($upass1!=$upass2){
    echo "Password Mismatch";
    die;
}
include_once "connection.php";

$cipher_text = md5($upass1);
$status = mysqli_query($conn,"INSERT INTO user(username,passwor,usertype) values('$uname','$cipher_text','$user_type')");
if($status){
    echo "Signup success";
    header("location:login.htm");
}
else{
    echo "Signup failed";
    echo mysqli_error($conn);
}
?>