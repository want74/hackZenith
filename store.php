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
	<!--moserat-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
	<title></title>
</head>

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

	.btn-garbage {
		width: 70%;
		margin: auto;
		background: none;
		border: 3px solid #181743;
		box-sizing: border-box;
		border-radius: 28px;
		color: #181743;
	}

	.cardSplash {
		border: 2px solid #DDE6EA;
		box-sizing: border-box;
		border-radius: 24px;
		background: white;
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
</style>
<body class="" style="background: #EBEBEB;">
	<!--header-->
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
	<!--cards-->
	<div class="row mt-5">
		<div class="col-10 mx-auto">
			<!--строчка карточек-->
			<div class="row my-3">
			<?php
            	for($i=0;$i<3;$i++){
            	$stroka = $query->fetch_assoc();
            	if ($i==0 or $i==3) {
            		echo '<div class="col">'; 
            		echo '<div class="row">';
            	}
            	
        	?>
				
					<div class="col-3 cardSplash mx-auto ">
						<div class="row"><img src="<?php echo $stroka['img']?>" class="card-img-top mx-auto mt-3" style="width:90%;"></div>
						<div class="row"><p class="headingCard"><?php echo $stroka['title']?></p></div>
						<div class="row"><p class="paragraphCard"><?php echo $stroka['text']?> </p></div>
						<div class="row"><button class="btn btnCard">Click here!</button></div>
					</div>

				

			<?php };
			if ($i==1 or $i==3) {
            		echo '</div>'; echo "</div>";
            	} ?>
			</div>

			<div class="row">
			<?php
            	for($i=3;$i<6;$i++){
            	$stroka = $query->fetch_assoc();
            	if ($i==0 or $i==3) {
            		echo '<div class="col">'; 
            		echo '<div class="row">';
            	}
            	
        	?>
				
					<div class="col-3 cardSplash mx-auto ">
						<div class="row"><img src="<?php echo $stroka['img']?>" class="card-img-top mx-auto mt-3" style="width:90%;"></div>
						<div class="row"><p class="headingCard"><?php echo $stroka['title']?></p></div>
						<div class="row"><p class="paragraphCard"><?php echo $stroka['text']?> </p></div>
						<div class="row"><button class="btn btnCard">В корзину</button></div>
					</div>

				

			<?php };
			if ($i==1 or $i==3) {
            		echo '</div>'; echo "</div>";
            	} ?>
			</div>	
		</div>
	</div>
	</div>
	

	
</body>
</html>