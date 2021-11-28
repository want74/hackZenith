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
		
		.circle
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
					<div class="col-11 mx-auto bg-dark mb-4" style="border-radius: 25px;height: 150vh;">
						<div class="row">
							<div id="container"></div>
						</div>						
					</div>
				</div>
			</div>
		</div>
		
	</div>	
	<script>
      var width = window.innerWidth;
      var height = window.innerHeight;

      var stage = new Konva.Stage({
        container: 'container',
        width: width,
        height: height,
      });

      var layer = new Konva.Layer();

      var f = new Konva.Line({
        points: [80, 100,80, 300],
        stroke: 'red',
        strokeWidth: 5,
      });

      /*
       * since each line has the same point array, we can
       * adjust the position of each one using the
       * move() method
       */
      f.move({
        x: 100,
        y: 0,
      });
      

      layer.add(f);

      var s = new Konva.Line({
        points: [80, 300,450, 300],
        stroke: 'red',
        strokeWidth: 5,
      });

      /*
       * since each line has the same point array, we can
       * adjust the position of each one using the
       * move() method
       */
      s.move({
        x: 100,
        y: 0,
      });
      

      layer.add(s);

      var t = new Konva.Line({
        points: [450, 300,450, 600],
        stroke: 'red',
        strokeWidth: 5,
      });

      /*
       * since each line has the same point array, we can
       * adjust the position of each one using the
       * move() method
       */
      t.move({
        x: 100,
        y: 0,
      });
      

      layer.add(t);

      // add the layer to the stage
      stage.add(layer);
    </script>
</body>
</html>

