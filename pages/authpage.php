<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
if($_POST['submit'] == "Войти"){
	include "../modules/auth_in.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Форма авторизации</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/authStyle.css">
<style>
form{
	width: 500px !important;
	/*padding-top: 200px;*/
}

.tit-1 {
	margin-top : 0;
	color      : #51748A;
	font-size  : 53px;
	font-weight: bold;
	/*padding-top: 300px;*/
}

input{
border-color:#51748A;
border:4px solid #51748A !important;
border-radius: 10px !important;
}

.mybtn-2 {
	background   : #644D7B;
	color        : white;
	border-radius: 10px !important;
	border-color : #644D7B !important;
	width        : 60% !important;
	height       : 63px !important;
	font-weight  : bold !important;
	font-size    : 20px !important;
	border  	 : none !important;
	align-self: center;
}

.mybtn-2:hover {
	color           : white;
	background-color: #51748A;
}

.form{
border-radius: 10px !important;
}

#button{
	border:none !important;
}

body {
	/*font-family:Roboto;*/
	/*font-family  : Roboto;*/
	/*overflow-x:hidden; */  
	background: url(/img/24.jpeg) center center no-repeat fixed !important;
	background-size: cover !important; 
}

.mybtn-3 {
	background   : #644D7B;
	color        : white;
	border-radius: 10px !important;
	width        : 30% !important;
	height       : 63px !important;
	font-weight  : bold !important;
	font-size    : 20px !important;
	border  	 : none !important;

}

.mybtn-3:hover {
	color           : white;
	background-color: #51748A;
	border:none;
}

button a{
		color:white;
	}

	button a:hover{
		color:white;
		text-decoration: none;

	}

	.bn{
		display: flex;
		flex-direction: column;
		width: 100%;
		justify-content: center;

	}

	.myform{
		background-color: rgb(255,255,255, 0.8) ;
		padding: 3% 3% 3% 3%;
		border-radius: 10px;
		margin-top: 25%;
	}

	.reg-text{
		font-size: 120%;
		text-align: center;

	}

	.reg-link{
		font-weight: bold;
		color: #644D7B;
	}

	.reg-link:hover{
		text-decoration:none;
		font-weight: bold;
		color:#51748A;
	}
</style>
</head>
<body>
	<div class="container mx-auto">
		<form method="post" class="myform"> 
		<h1 class="tit-1">Форма авторизации</h1><br>

			<input type="text" class="form-control" name="login" value="<?=@$_SESSION['temp_login'];?>" placeholder="Введите логин"><br>

			<input type="password" class="form-control" name="password"  placeholder="Введите пароль"><br>

			<div class="bn">
			<input class="btn mybtn-2" type="submit" name="submit" value="Войти"></input>
			<div class="pt-3"><p class="reg-text">У вас ещё нет аккаунта?<a href='regpage.php' class="reg-link"> Зарегистрироваться</a></p></div>
			</div>
	</div>
	

</body>
</html>