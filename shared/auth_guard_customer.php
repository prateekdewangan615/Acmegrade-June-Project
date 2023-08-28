<?php
session_start();
include "authguard_style.htm";

if(!isset($_SESSION['login_status'])){
    echo "You skipped login";
    echo "<a href='..shared/login.htm'>Login Here</a>";
    die;
}
if($_SESSION['login_status']==false){
    echo "Login is failed";
    echo "<a href='..shared/login.htm'>Login Here</a>";
    die;
}
if($_SESSION['usertype']!='Customer'){
    echo "Unauthorised Access for this customer.";
    die;
}

$userid=$_SESSION['userid'];
$username = $_SESSION['username'];
$usertype=$_SESSION['usertype'];
echo "<div class='userbanner'>
        <div class='userid'>#$userid</div>  
        <div class='username'>$username</div>  
        <div class='usertype'>$usertype</div>  
        <div><a href='../shared/logout.php'><button class='btn btn-danger' style='font-size:19px'>Logout</button></a></div>
    </div>";
?>