<?php
  $host = "127.0.0.1"; // адрес сервера
  $database = "register-bd"; // имя базы данных
  $user = "root"; // имя пользователя
  $password1 = ""; // пароль

  $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));

  if(isset($_POST['nickname'], $_POST['comment'])){
  	$nickname = mysql_real_escape_string(trim($_POST['nickname']));
  	$comment = mysql_real_escape_string(trim($_POST['comment']));
  	$result = mysql_query("INSERT INTO comments (nickname, comment) VALUES ('$nickname', '$comment')");
  	if($result == true){
  	echo json_encode(array('nickname' => $nickname, 'comment' => $comment));	
  	}
  }
?>