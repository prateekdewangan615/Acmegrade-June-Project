<?php

session_start();
$_SESSION['login_status']=false;
$uname = $_POST['uname'];
$upass = $_POST['upass'];
$cipher_text = md5($upass);

include_once "connection.php";

$sql_obj = mysqli_query($conn,"SELECT * from user where username='$uname' and passwor='$cipher_text'");
$noofrecords = mysqli_num_rows($sql_obj);
if($noofrecords==0){
    echo 'Invalid Credentials';
    die;
}
echo "Login Success";
$row = mysqli_fetch_assoc($sql_obj);
print_r($row);

$_SESSION['login_status']=true;
$_SESSION['usertype']=$row['usertype'];
$_SESSION['username']=$row['username'];
$_SESSION['userid']=$row['userid'];
if($row['usertype']=='Vendor'){
    header("location:../vendor/home.php");
}
else if($row['usertype']=='Customer'){
    header("location:../customer/home.php");
}
?>