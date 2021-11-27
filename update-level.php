<?php 
session_start();
include "connect.php";
$query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
$stroka=$query->fetch_assoc();
$n=$stroka['grudak']+1;
$update=mysqli_query($con, "UPDATE musculi SET grudak =$n  WHERE userid='{$_SESSION['id']}'");
header('location: game2.php');

?>