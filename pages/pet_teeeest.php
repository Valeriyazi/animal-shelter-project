<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style type="text/css">
	.qw{
		height: 300px;
		width: 200px;
		border:2px solid red;
	}


</style>
<body>
	
<div><?php
		$host = "127.0.0.1"; // адрес сервера
		$database = "register-bd"; // имя базы данных
		$user = "root"; // имя пользователя
		$password1 = ""; // пароль
	
	    $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));
	
	
		$query ="SELECT name FROM pets";
	
		$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
		

	
			$rows = mysqli_num_rows($result);
	    		echo "<div>";
	
	    		while ($row = mysqli_fetch_row($result)) {
	        		echo "<li>$row[0]</li>";
	     		}

		echo "</div>";
	
	mysqli_close($link);
	
	?></div>

</body>
</html>