<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

if($_POST['submit'] == "Зарегистрироваться"){
	include "../modules/check.php";
}

// if($_POST['submit11'] == "Назад"){
// 	include "../index.php";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/css/regStyle.css">
	<link rel="stylesheet" href="fonts/roboto/roboto.css"/>
	<title>Форма регистрации</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
	body {
	/*font-family:Roboto;*/
	/*font-family  : Roboto;*/
	/*overflow-x:hidden; */  
	background: url(/img/23.jpeg) center center no-repeat fixed !important;
	background-size: cover !important; 
}
	.bn{
		display: flex;
		width: 100%;
		justify-content: space-between;

	}

	.myform{
		background-color: rgb(255,255,255, 0.8) ;
		padding: 3% 3% 3% 3%;
		border-radius: 10px;
	}

	button a{
		color:white;
	}

	button a:hover{
		color:white;
		text-decoration: none;
	}

	

</style>
</head>
<body >
	
	<div class="container mx-auto my-auto ">
		
		
		<form  method="post" class="myform">  
			<h1 class="tit-1">Форма регистрации</h1><br>
			<input type="text" class="form-control form" name="name" value="<?= @$name; ?>" placeholder="Введите имя"><span class="error"><?=@$e5;?></span><br>

			<input type="text" class="form-control form" name="login"  value="<?= @$login; ?>" placeholder="Введите логин"><span class="error"><?=@$e1;?> </span><br>

			<input type="password" class="form-control form" name="password"  placeholder="Введите пароль"><span class="error"><?=@$e2;?></span><br>

			<input type="password" class="form-control form" name="password2"  placeholder="Подтвердите пароль"><span class="error"><?=@$e3;?></span><br> 

			<input type="text" class="form-control form" name="email" value="<?= @$email; ?>" placeholder="Введите email"><span class="error"><?= @$e4;?></span><br>

			<input type="text" class="form-control form" name="phone" value="<?= @$phone; ?>"  placeholder="Введите номер мобильного"><?= @$e6;?></span><br>
			<p><input type="hidden" name="go" value="5"></p>

			<div class="bn">
			<input class="btn mybtn-2" id="button" type="submit" name="submit" value="Зарегистрироваться"></input>
			<button class="btn mybtn-3" id="button" type="button" name="submit11" ><a href='../index.php'>Назад</a></button>
			</div>
		</form>
	</div>

</body>
</html>