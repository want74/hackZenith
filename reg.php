<?php
session_start();
?>
<?php
	include "connect.php";
		$query = mysqli_query($con, "INSERT INTO users (name, password)
							VALUES ('{$_POST['email']}', '{$_POST['password']}')");
		header('location: index.php');
		
?>