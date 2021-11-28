<?php 
session_start();
include "connect.php";
$query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
$stroka=$query->fetch_assoc();
$n=$stroka['grudak_lvl']+1;
$update=mysqli_query($con, "UPDATE users SET grudak_lvl =$n  WHERE id='{$_SESSION['id']}'");
header('location: cours.php');
?>