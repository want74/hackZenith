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
		
		body {
			font-family: Montserrat;
			font-style: normal;
			font-weight: 800;
			font-size: 36px;
			line-height: 125%;
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
								<div class="col"><button class="btn btn-garbage w-100" onClick='location.href="store.php"'>Магазин</button></div>				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--content-->
	<div class="row con1-color">
		<div class="col-8 mx-auto ">
			<div class="row col-10 mx-auto">
				<img src="img/number.png">
				<h1 class="text-center my-auto">Сведение рук в тренажере бабочка</h1>
			</div>
		</div>
	</div>
	
	<div class="row con1-color">
		<div class="col-8 mx-auto ">
			<div class="row col-10 mx-auto">
				<p class="text-center"><img class="w-100" src="img/tren2.png"></p>
			</div>
		</div>
	</div>
	<div class="row header-botgy py-5">
		<div class="col-8 mx-auto ">
			<div class="row col-10 mx-auto">

				<p class="text-tren"> 1.Рукоятки тренажера сводим к центру тела, за счет сокращения мышц груди;,</p>
				<p class="text-tren"> 2. Смещение хвата вверх переносит акцент к верхнему пучку пекторальных мышц, опускание – к низу груди, но акценты незначительны;
 </p>
				<p class="text-tren"> 3.Разведение производится мягко, руки отводятся в стороны плавно, без рывков;
</p>
				<p class="text-tren"> 4. Движение лучше сводить и разводить на два счета, не делая рывков;
 </p>
				<p class="text-tren"> 5. Первый актуален для прокачки малых пекторальных мышц, </p>
				<p class="text-tren"> 6.Все повторения выполняются без пауз, единым подходом, отдых между сетами 1-2 минуты</p>
			</div>
			<div class="col-10 mx-auto">
				<button class="btn-end py-2 px-5  " onClick='location.href="update-level.php"' >Закончил</button>	
			</div>
		</div>
	</div>
	<div class="row con1-color">
		<div class="col-10 mx-auto py-2">
			<div class="row">
				<div class="col-5 mx-auto">
					<div class="embed-responsive embed-responsive-4by3">
  						<iframe width="560" height="315" src="https://www.youtube.com/embed/XUeE5cTzsfo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-5 mx-auto ">
					<div class="embed-responsive embed-responsive-4by3">
  						<iframe width="560" height="315" src="https://www.youtube.com/embed/EjjFxnwVGSM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-5 mx-auto">
					<div class="embed-responsive embed-responsive-4by3">
  						<iframe width="560" height="315" src="https://www.youtube.com/embed/XUeE5cTzsfo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-5 mx-auto ">
					<div class="embed-responsive embed-responsive-4by3">
  						<iframe width="560" height="315" src="https://www.youtube.com/embed/EjjFxnwVGSM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row header-botgy">
		<div class="col-10 mx-auto py-5 


		">
			<h1  class="text-tren text-center">Рекомендуемые снаряды:</h1>
			<div class="row">
				<?php
            		for($i=0;$i<3;$i++){
            		$stroka = $query->fetch_assoc();
            		
            	
        		?>
				<div class="col-3 cardSplash mx-auto mt-5">
					<div class="row"><img src="<?php echo $stroka['img']?>" class="card-img-top mx-auto mt-3" style="width:90%;"></div>
					<div class="row"><p class="headingCard"><?php echo $stroka['title']?></p></div>
					<div class="row"><p class="paragraphCard"><?php echo $stroka['text']?> </p></div>
					<div class="row"><button onClick='location.href="store.php"' class="btn btnCard">Click here!</button></div>
				</div>
				<?php } ?>
			</div>	
		</div>
	</div>
	</div>
	<!--header-->
	



</body>
</html>