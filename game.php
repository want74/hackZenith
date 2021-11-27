<?php
session_start();
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
	$stroka=$query->fetch_assoc();


?>
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	.task{
		display: none;
	}
</style>
<body>

	<div class="col">
		<!--header-->
		<div class="row bg-dark" style="height: 7vh;">
			<div class="col">
				
			</div>
		</div>
		<!--content-->
		<div class="row">
			<div class="col-8 bg-secondary mx-auto" style="height: 600px;margin-top: 10vh;">
				<div class="row">
					<div class="col-8 mx-auto">
						<div class="row" style="margin-top:20vh;">
							<div class="col border pt-5 pb-5 box boxclick" ></div>
							<div class="col border pt-5 pb-5 box boxclick"></div>
							<div class="col border pt-5 pb-5 box boxclick"></div>
							<div class="col border pt-5 pb-5 box boxclick"></div>
							<div class="col border pt-5 pb-5 box boxclick"></div>
						</div>
					</div>
				</div>
				<!--задания-->
				<div class="task">
					<div class="col-10 mx-auto bg-primary ">
						<h1 class="text-center">Задания</h1>
						<p class="text-center task-text"></p>
						<button class="btnstart"> начать</button>
						<h1 class="text-center">Время:<span class="time"></span></h1>
					</div>
				</div>
			</div>
		</div>


	</div>	
</body>
</html>
<script type="text/javascript">
	// хостинг: логин botgy пароль vanyaGAY если будут ЛЮБЫЕ траблы то РАЗБУДИ МЕНЯ
	//переменные для шага
	let box = document.querySelectorAll('.box');
	let task = document.querySelector('.task');
	let boxclick = document.querySelectorAll('.boxclick');
	let tasktext = document.querySelector('.task-text');
	let btnstart = document.querySelector('.btnstart');
	let text=["Жим гантелей лежа на наклонной скамье (головой вверх): 3 подхода по 6-10 повторений.", "Жим штанги/гантелей лежа (на горизонтальной скамье): 3 подхода по 6-10 повторений.", "Отжимание на брусьях (или перекладине): 3 подхода по 8-12 повторений.", "Отжимание от пола (со жгутом): 3 подхода по 6-12 повторений или до отказа.", "Сведение рук на блоках (сверху вниз): 3 подхода, число повторов от 10 до максимума.", ];
	let s=<?php echo $stroka['grudak_lvl']?>;
	let n=s-1;
	//функции шага
	box[s].style.background="green"
	boxclick[s].onclick=function(){
		task.style.display="block"
		tasktext.innerHTML=text[s]

	}
	btnstart.onclick=function(){
		task.style.display="none"
		s++
		window.location.href = "update-level.php"
	}


</script>
