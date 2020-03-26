<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>

<style type="text/css">
.hello{
    color: #644D7B !important;
}
</style>

<? 
if (!empty($_SESSION['login'])) {
    $log = $_SESSION['login'];

    // include 'connect/bd.php';


    $host = "127.0.0.1"; // адрес сервера
	$database = "register-bd"; // имя базы данных
	$user = "root"; // имя пользователя
	$password1 = ""; // пароль

	$link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));



    $query="SELECT * FROM users WHERE login='$log'";
    $rez = mysqli_query($link, $query);//выполнение запроса
    $row = mysqli_fetch_assoc($rez);//извлекает данные в виде массива

    if($_SESSION['is_admin'] == 1){
     echo "<li class='nav-item'><a href=\"/admin.php\" class='nav-link menu'>Администрирование</a></li>"; 
     echo "<li class='nav-item'><a href=\"modules/auth_out.php\" class='nav-link menu'>Выйти</a></li>"; 
    }
    else if($_SESSION['is_admin'] == 0){
    echo "<li class='nav-item'><a href=\"modules/auth_out.php\" class='nav-link menu'>Выйти</a></li>";
    echo "<li class='nav-item'><a href=# class='nav-link menu hello'>Привет, ".$row['name']."!</a><li/>";
        }


}
else {
    echo "<li class='nav-item'><a href=\"pages/authpage.php\" class='nav-link menu'>Войти</a></li>";
    echo "<li class='nav-item'><a href=# class='nav-link hello'>Привет, Гость!</a></li>";

}
?>