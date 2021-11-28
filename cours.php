<?php
	session_start();
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['id']}'");
	$stroka=$query->fetch_assoc();
	echo $stroka['grudak_lvl'];
?>

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Poppins:wght@600&display=swap" rel="stylesheet">
	<script src="https://unpkg.com/konva@8.3.0/konva.min.js"></script>
	<title></title>
	<style>
		/*Ховер на все элементы SVG*/
		g:hover {
			opacity: 0.6;
			transition: 0.4s;
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

		.circle {
			border-radius: 100000px;
			width: 50px;
			height: 50px;
			background: #93B1B9;
		}
		#a1 {
			position: absolute;
			left: 100px;
			top: 100px;
		}

		#a2 {
			position: absolute;
			left: 550px;
			top: 100px;
		}

		#a3 {
			position: absolute;
			left: 550px;
			top: 400px;
		}

		#a4 {
			position: absolute;
			left: 900px;
			top: 400px;
		}

		#a5 {
			position: absolute;
			left: 900px;
			top: 700px;
		}

		#a6 {
			position: absolute;
			left: 100px;
			top: 700px;
		}

		#a7 {
			position: absolute;
			left: 100px;
			top: 1000px;
		}

		#a8 {
			position: absolute;
			left: 900px;
			top: 1000px;
		}

		#a9 {
			position: absolute;
			left: 900px;
			top: 1300px;
		}

		#a10 {
			position: absolute;
			left: 550px;
			top: 1300px;
		}
		
		.con{
			background-image: url(img/form.png);
			height:1339px;
			width: 100%;
		}

		.js:hover {
			width: 60px;
			height: 60px;
		}
		.krug-color{
			background:#93B1B9 ;
		}
	</style>
</head>
<body style="background:#EAEAEA;"> 
	<div class="col">
		<!--header-->
	<div class="row header-botgy" >
		<div class="col">
			<div class="row col-10 mx-auto">				
				<div class="col-6 mx-auto"><h1 style="" class=" header-text mx-auto py-2">BOTGY</h1>	</div>
				<div class="col-4 my-auto">
					<div class="row">
						<div class="col-9 mx-auto">
							<div class="row">
								<div class="col"><button class="btn btn-garbage w-100">Мой аккаунт</button></div>
								<div class="col"><button class="btn btn-garbage w-100">ГТО</button></div>				
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!--content-->
		<div class="row">

			<div class="col-8  mx-auto bg-white mt-5" style="border-radius: 25px;">
				<div class="row"><h1 class="text-center mx-auto">Дорожная карта:</h1></div>	
				<div class="row ">
					<div class="col-11 mx-auto bg-dark mb-4" style="border-radius: 25px;height: auto;">
						<div class="row">
							<div id="container" class="con">
								<a href="game2.php">
									<div class="rounded-circle krug-color  krug" style="position:absolute; left: 131px;top: 171px; width: 60px; height: 60px;" >
									 
									</div>
								</a>							
								<a href="game3.php" >
									<div class="rounded-circle krug-color  krug" style="position:absolute; left: 547px;top: 170px; width: 60px; height: 60px;" >
									 
									</div>
								</a>
								<a href="game4.php" >
									<div class="rounded-circle krug-color krug" style="position:absolute; left: 542px; top: 502px; width: 60px; height: 60px;" >
									 
									</div>
								</a>
								<a href="game5.php" >
									<div class="rounded-circle krug-color krug" style="position:absolute;left: 966px; top: 502px; width: 60px; height: 60px;" >
									 
									</div>
								</a>
								<a href="game6.php" >
									<div class="rounded-circle krug-color krug" style="position:absolute;left: 966px; top: 778px; width: 60px; height: 60px;" >
									 	
									</div>
								</a>
								<a href="game7.php" >
									<div class="rounded-circle krug-color krug" style="position:absolute;left: 202px; top: 784px; width: 60px; height: 60px;" >
									 	
									</div>
								</a>
								<a href="game8.php" >
									<div class="rounded-circle krug-color krug" style="position:absolute;left: 202px; top: 1024px; width: 60px; height: 60px;" >
									 	
									</div>
								</a>
								<a href="game9.php" >
									<div class="rounded-circle krug-color krug" style="position:absolute;left: 966px; top: 1024px; width: 60px; height: 60px;" >
									 	
									</div>
								</a>
								<a href="game10.php" >
									<div class="rounded-circle krug-color krug" style="position:absolute;left: 966px; top: 1215px; width: 60px; height: 60px;" >
									 	
									</div>
								</a>
								<a href="game11.php" >
									<div class="rounded-circle krug-color krug" style="position:absolute;left: 369px;top: 1215px; width: 60px; height: 60px;" >
									 	
									</div>
								</a>

							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		
	</div>	
	<script>
    let krug = document.querySelectorAll('.krug');
	let s=<?php echo $stroka['grudak_lvl']?>;
	//функции шага
	krug[s].style.background="green"	

    </script>
</body>
</html>

