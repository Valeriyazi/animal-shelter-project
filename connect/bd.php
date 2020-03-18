<?php
$host = "127.0.0.1"; // адрес сервера
$database = "register-bd"; // имя базы данных
$user = "root"; // имя пользователя
$password1 = ""; // пароль

    $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));
?>