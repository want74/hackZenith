<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body {
			background: #C7BDBD;
		}
	</style>
</head>
<body>
	<div class="col-4 mx-auto">
		<div class="row" style="margin-top:25vh;height:50vh;border-radius: 25px;background: #98AEB3;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">
			<div class="col-10 mx-auto">
				<div class="row">
					<p class="welcome mx-auto mt-5">
						ДОБРО ПОЖАЛОВАТЬ!
					</p>
				</div>
				<div class="row">
					<p class="paragraph mx-auto">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
				<div class="row">
					<form action="check.php" method="POST" class="w-100">						
  						<input type="text" class="form-control e-mail mx-auto" placeholder="Email" name="email">
  						<input type="text" class="form-control e-mail mx-auto mt-4" placeholder="Password" name="password">
  						<p class="forgotPass mt-1">Забыли пароль?</p>
  						<div class="row">
  							<button class="btn btn-signIn mx-auto">
	  							Войти
	  						</button>	
  						</div>  						
					</form>
				</div>
			</div>
		</div>
	</div>
	<img src="img/ellipse1.png" class="ellipse1">
	<img src="img/ellipse2.png" class="ellipse2">
</body>
</html>

