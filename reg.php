<?php
session_start();
?>
<?php
	include "connect.php";
		$query = mysqli_query($con, "INSERT INTO users (email, password, name, second)
							VALUES ('{$_POST['email']}','{$_POST['password']}'),'{$_POST['name']}','{$_POST['second']}'");
		echo $_POST['name'];
		
?>
<meta charset="utf-8">