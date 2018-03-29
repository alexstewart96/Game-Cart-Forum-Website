<?php
include('config.php');
session_start();

//$_SESSION["newsession"]=$value;

$user_check = $_SESSION["login_user"];

//$ses_sql = mysqli_query("select userID from users where userID = '$user_check'",$conn);

 

//$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

//$row = mysqli_fetch_array($mysqli_result,MYSQLI_ASSOC);


function displayUser($conn, $login_user) {
$sql = "SELECT userID, username, password, firstname, lastname, email FROM users
WHERE userID = '$login_user' ";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

return $row;
}


if(!isset($_SESSION["login_user"])){
header("location:login.php");
}
?>