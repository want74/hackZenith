<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
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
							<div class="col border pt-5 pb-5 box" style="background: green;"></div>
							<div class="col border pt-5 pb-5 box"></div>
							<div class="col border pt-5 pb-5 box"></div>
							<div class="col border pt-5 pb-5 box"></div>
							<div class="col border pt-5 pb-5 box"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>	
</body>
</html>
<script type="text/javascript">
	//переменные для шага
	let box = document.querySelectorAll('.box');
	let s=0;
	//функции шага
	box[s].onclick=function(){
		box[s].style.background="white"
		s++
		box[s].style.background="green"
	}

</script>
