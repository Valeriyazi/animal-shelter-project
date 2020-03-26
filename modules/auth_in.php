<?php
if (session_status() != PHP_SESSION_ACTIVE) session_start();

if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}

if (empty($login) or empty($password)) {
    print "<script language='Javascript' type='text/javascript'>
 alert ('Вы заполнили не все поля!');
 function reload(){location = '../pages/authpage.php'};
 setTimeout('reload()', 0);
 </script>";
    exit();
}


$login = stripslashes($login);//экранирование символов
$login = htmlspecialchars($login);//перевод спецсимволов в безопасную форму
$password = stripslashes($password);
$password = htmlspecialchars($password);
$login = trim($login);//удаление пробелов из начала и конца строки
$password = trim($password);

$_SESSION['temp_login'] = $login;


$host = "127.0.0.1"; // адрес сервера
$database = "register-bd"; // имя базы данных
$user = "root"; // имя пользователя
$password1 = ""; // пароль

$link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));



$query = "SELECT * FROM users WHERE login='$login'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$row = mysqli_fetch_assoc($result);


if (empty($row['login'])) {
    mysqli_close($link);
    print "<script language='Javascript' type='text/javascript'>
 alert ('Такого логина не существует!');
 function reload(){location = 'authpage.php'};
 setTimeout('reload()', 0)
 </script>";
} else {
    if ($row['pass'] === md5($password)) {
        $_SESSION['login'] = $row['login'];
        $_SESSION['name'] = $row['name'];
        $is_admin = $row['admin'];

        if($is_admin == 0){
            $_SESSION['is_admin'] = 0;
        }
        else {
            $_SESSION['is_admin'] = 1;
        }

        print "<script language='Javascript' type='text/javascript'>
        alert('Вы успешно авторизовались!');
 function reload(){top.location = '../../index.php'};
 setTimeout('reload()', 0)
 </script>";
    } else {
        echo $password . " " . $row['pass'];
        print "<script language='Javascript' type='text/javascript'>
 alert ('Вы ввели неправильный пароль!');
 
 function reload(){location = 'authpage.php'};
 setTimeout('reload()', 0)
 </script>";
    }
    mysqli_close($link);
}

?>