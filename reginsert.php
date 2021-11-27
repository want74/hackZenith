<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Poppins:wght@600&display=swap" rel="stylesheet">
	<title></title>
</head>
<style type="text/css">
	.bg-left{
		background: #082A30;
	}
	.bg-right{
		background: #EAEAEA;
	}
	.text{
		color:#E0E2DB ;
	}
	.text-please{
		color: #181743;
	}
	.paragrapReg {
		font-style: normal;
		font-weight: 600;
		font-size: 54px;
		line-height: 66px;
	}

	.headerReg {
		width:65%;
		color: #082A30;
		font-style: normal;
		font-weight: 900;
		font-size: 32px;
		line-height: 48px;
		display: flex;
		align-items: center;
	}

	.inputWho {
		height: 50px;
		width: 90%;
		border: 1px solid #BEBDFF;
		border-radius: 8px;
		background: white;
	}
	.who {
		font-style: normal;
		font-weight: 500;
		font-size: 20px;
		line-height: 24px;
	}
	.btn-signIn {
	background: #22525A;
	padding: 15px 106px;
	border-radius: 30px;
	
	color: white;
	}

	.btn-signIn:hover {
	color: #9FB4C0;
	border: 3px solid #9FB4C0;
	padding: 18px 106px;
	background: none;
	transition: 0.7s;
	}
</style>
<body style="background: #EAEAEA;">
	<div class="col">
		<div class="row">
			<div class="col-5"  style="height: 100vh;background: #082A30;">
				<div class="row">
					<h1 class="mx-auto text-white logo mt-3">
						BOTGY
					</h1>
				</div>
				<div class="row" style="margin-top:40vh;">					
					<p class="text-white w-100 paragrapReg text-center">Первый раз у нас?</p>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<div class="col-8 mx-auto " style="margin-top:25vh;" >
						<div class="row">
							<p class="headerReg">Пожалуйста, пройдите регистрацию</p>
						</div>
						<form action="reg.php" method="POST">
							<div class="row mt-3">
								<div class="col">
									<div class="row">
										<p class="who">Имя:</p>
									</div>
									<div class="row">
										<input type="text" name="name" class="form-control inputWho mr-auto" placeholder="James" style="">									
									</div>
								</div>
								<div class="col-6 ml-auto">
									<div class="row">
										<p class="who">Фамилия:</p>
									</div>
									<div class="row">
										<input type="text" name="second" class="form-control inputWho w-100" placeholder="Bond">
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col">
									<div class="row">
										<p class="who">Электронная почта:</p>
									</div>
									<div class="row">
										<input type="text" name="email" class="form-control inputWho mr-auto w-100" placeholder="itsbond@jamesbond.com" style="">								
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col">
									<div class="row">
										<p class="who">Придумайте пароль:</p>
									</div>
									<div class="row">
										<input type="password" name="password" class="form-control inputWho mr-auto w-100" placeholder="123345678" style="">							
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col">
									<div class="row mx-auto">
										<input type="checkbox" class="form-check-input " name="country" value="<?= $country->id ?>" aria-label="checkbox">
										<p>Я принимаю условия BODGY и ознакомлен с политикой конфиденциальности</p>								
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col">
									<div class="row mx-auto">
										<button class="btn-signIn form-control"> Зарегестрироваться</button>							
									</div>
								</div>
							</div>								
							
						</form>						
					</div>
				</div>
			</div>     
		</div>
	</div>
</body>
</html  