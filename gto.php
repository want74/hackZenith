<?php
session_start();
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM store");
	
	


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Poppins:wght@600&display=swap" rel="stylesheet">
	<style type="text/css">
		.header-botgy{
			background:#082A30 ;
		}
		.header-text{
		color: #E0E2DB;
		font-family: 'Montserrat', sans-serif;
		font-style: normal;
		font-weight: 800;
		font-size: 36px;
		line-height: 125%;
		}
		.text-tren{
			font-family: Montserrat;
			font-style: normal;
			font-weight: 800;
			font-size: 24px;
			line-height: 125%;
			/* or 30px */

			letter-spacing: -0.02em;
			text-transform: uppercase;

			color: #E0E2DB;

			

		}
		.btn-garbage {
		width: 70%;
		margin: auto;
		background: none;
		border: 3px solid #E0E2DB;
		box-sizing: border-box;
		border-radius: 28px;
		color: #E0E2DB;
		}
		.con1-color{
			background: #FFFFFF;
		}
		.color-gray{
			background: #ABB8BF;
		}
		.btn-end{
			background: #DFE1DA;
			border-radius: 28px;
			font-family: 'Montserrat', sans-serif;
			font-family: 'Poppins', sans-serif;

		}
		.cardSplash {
		border: 2px solid #DDE6EA;
		box-sizing: border-box;
		border-radius: 24px;
		background: #DDE6EA;
		}

		.headingCard {
			font-style: normal;
			font-weight: 600;
			font-size: 24px;
			line-height: 32px;
			margin-left: 20px;
			margin-top: 20px;
		}

		.paragraphCard {
			font-style: normal;
			font-weight: normal;
			font-size: 16px;
			line-height: 24px;
			width: 80%;
			margin-left: 20px;
			/* or 150% */
		}

		.btnCard {
			border: 4px solid #ABB8BF;
			border-radius: 28px;
			padding: 8px 16px;
			background: none;
			color: #ABB8BF;
			margin-left: 20px;
			margin-bottom: 20px;
		}

		.btn-more {
			border: 1px solid #000000;
			box-sizing: border-box;
			border-radius: 10px;
			background: none;
		}

		.btn-more:hover {
			border: 1px solid #000000;
			box-sizing: border-box;
			border-radius: 10px;
			background: #000000;
			color: white;
		}

		.gto {
			font-style: normal;
			font-weight: 800;
			font-size: 24px;
			line-height: 125%;
			color: #082A30;
		}
				
	</style>
</head>
<body>
	<div class="col">
		<div class="row" style="height: 12vh;">
			<div class="col">
				<div class="row header-botgy">				
					<div class="col-4 offset-4"><h1 class="text-center header-text mx-auto py-2">BOTGY</h1>	</div>
					<div class="col-4 my-auto">
						<div class="row">
							<div class="col-9 mx-auto">
								<div class="row">
									<div class="col"><button class="btn btn-garbage w-100">Мой аккаунт</button></div>
									<div class="col"><button class="btn btn-garbage w-100">Магазин</button></div>				
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--content-->
		<div class="row" style="height: 80vh;">
			<div class="col d-flex">
				<div class="row my-auto">
					<div class="col-8 mx-auto">						
						<div class="row my-3"><h1>ПОДГОТОВКА К ГТО ЗА 3 МЕСЯЦА</h1></div>
						<div class="row"><p>Всероссийский физкультурно-спортивный комплекс «Готов к труду и обороне» (ГТО) — полноценная программная и нормативная основа физического воспитания населения страны, нацеленная на развитие массового спорта и оздоровление нации. <br><br> Комплекс ГТО предусматривает подготовку к выполнению и непосредственное выполнение населением различных возрастных групп (от 6 до 70 лет и старше) установленных нормативных требований по трем уровням трудности, соответствующим золотому, серебряному и бронзовому знакам отличия «Готов к труду и обороне» (ГТО).</p></div>
						<div class="row">
							<button class="btn btn-more my-4" onClick='location.href="reginsert.php"'>
								ПОДРОБНЕЕ
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="row"><h1 class="gto mx-auto">НОРМАТИВЫ ГТО ДЛЯ ВЫПУСКНИКОВ:</h1></div>
					<div class="row"><div class="col-7 mx-auto">
						<img src="img/gto.png" class="img-fluid" alt="Нормативы">
					</div>
					</div>
			</div>
		</div>
	</div>
	<!--header-->
	



</body>
</html>