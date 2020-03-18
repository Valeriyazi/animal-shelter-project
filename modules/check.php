<?php
if (session_status() != PHP_SESSION_ACTIVE) session_start();

if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if ($name == '') {
        unset($name);
    }
}


if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if ($password == '') {
        unset($password);
    }
}

if (isset($_POST['password2'])) {
    $password2 = $_POST['password2'];
    if ($password2 == '') {
        unset($password2);
    }
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email == '') {
        unset($email);
    }
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    if ($phone == '') {
        unset($phone);
    }
}


 session_start();


 	// include '../connect/bd.php'; //подключаемся к БД
 	$host = "127.0.0.1"; // адрес сервера
	$database = "register-bd"; // имя базы данных
	$user = "root"; // имя пользователя
	$password1 = ""; // пароль

    $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));


// if (isset($_POST["go"]) == strtoupper($code)) :

 	$e1 = null;
    $login = trim($_POST["login"]); //удаление пробелов
    $login = strip_tags($login); //уделяет теги html и php из строки
    $login = stripslashes($login);//eдаляет экранирование символов
    if (strlen($login) == "0") :
        $e1 .= "Заполните поле 'Ваш логин'<br>";
    endif;
    if (!empty($_POST['login'])) {
        if (preg_match('/([A-Za-zА-ЯЁа-яё\d])\1{4,}/', $login)) {
            $e1 .= "Введеный логин не соответствует требованиям<br>";
        }
    }



 	$query = "SELECT login FROM users WHERE login='$login'";
    $result = mysqli_query($link, $query) or die("Ошибка выполнения запроса" . mysqli_error($link));
    if ($result) {
        $row = mysqli_fetch_row($result);
        if (!empty($row[0])) $e1 .= "Данный логин занят"; // проверка на существование в БД такого же логина
    }


	//пароль должен состоять не менее чем из 6 символов, где не менее одной цифры
    $e2 = null;
    $password = trim($_POST["password"]);
    $password = strip_tags($password);
    $password = htmlspecialchars($password, ENT_QUOTES);
    $password = stripslashes($password);
    if (strlen($password) == "0") :
        $e2 .= "Заполните поле 'Пароль'<br>";
    endif;
    if (!empty($_POST['password'])) {
        if (!preg_match('/[A-Za-zА-ЯЁа-яё\d]{4,}/u', $password)) {
            $e2 .= "Введеный пароль не соответствует требованию<br>";
        }
    }


    $e3 = null;
    $password2 = trim($_POST["password2"]);
    $password2 = strip_tags($password2);
    $password2 = htmlspecialchars($password2, ENT_QUOTES);
    $password2 = stripslashes($password2);
    if (strlen($password2) == "0") {
        $e3 .= "Заполните поле 'Подтверждение пароля'<br>";
    }
    if ($password != $password2) :
        $e3 .= "Пароли не совпадают<br>";
    endif;


    $e4 = null;
    $email = trim($_POST["email"]);
    $email = strip_tags($email);
    $email = htmlspecialchars($email, ENT_QUOTES);
    $email = stripslashes($email);
    if (strlen($email) == "0") :
        $e4 .= "Заполните поле 'e-mail'<br>";
    endif;
    if (!empty($_POST['email'])) {
        if (!preg_match('/^\w{3,}@\w+\.\w{2,3}/u', $email)) {
            $e4 .= "Введённый email не соответствует требованию<br>";
        }
    }


     $e5 = null;
    $name = trim($_POST["name"]);
    $name = strip_tags($name);
    $name = htmlspecialchars($name, ENT_QUOTES);
    $name = stripslashes($name);
    if (strlen($name) == "0") :
        $e5 .= "Заполните поле 'имя'<br>";
    endif;
    if (!empty($_POST['name'])) {
        if (!preg_match('/[A-Za-zА-ЯЁа-яё\d]{2,}/u', $name)) {
            $e5 .= "Введённое имя не соответствует требованию<br>";
        }
    }


    $e6 = null;
    $phone = trim($_POST["phone"]);
    $phone = strip_tags($phone);
    $phone = htmlspecialchars($phone, ENT_QUOTES);
    $phone = stripslashes($phone);
    if (strlen($phone) == "0") :
        $e6 .= "Заполните поле 'номер мобильного'<br>";
    endif;
    if (!empty($_POST['phone'])) {
        if (!preg_match('/[A-Za-zА-ЯЁа-яё\d]{2,}/u', $phone)) {
            $e6 .= "Введённый номер не соответствует требованию<br>";
        }
    }



    $eEn = $e1 . $e2 . $e3 . $e4 . $e5 . $e6;
    if ($eEn == "") {
        // $salt = mt_rand(100, 999);
        
        $password = md5($password);

     	$query = "INSERT INTO users (login, pass, name, email, phone)  VALUES ('$login','$password','$name','$email','$phone')";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


        // if (mysqli_num_rows($result) == 1) //пишем данные в БД и авторизовываем пользователя
            // {
                $query = "SELECT * FROM users WHERE login='$login'";
                $rez = mysqli_query($link, $query);
                if (mysqli_num_rows($rez) == 1) {
                    // echo "заносим в сессию";
                    $row = mysqli_fetch_assoc($rez);
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login'] = $row['login'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['phone'] = $row['phone'];
                    // echo "Вы успешно зарегистрированы," . $_SESSION['login'];
                    mysqli_close($link);
                    
     print "<script language='Javascript' type='text/javascript'>
     alert ('Вы успешно зарегистрировались! Спасибо!');
     function reload(){top.location ='../../index.php'};
     setTimeout('reload()', 0);
    </script>";
                } else {
                    print "<script language='Javascript' type='text/javascript'>
     alert ('Ваши данные не были снесены в БД!');
    </script>";
                }
            // }
            // else echo "Error!!!!";
    }
    // else echo $eEn;
// endif;
// else
//  echo "erooorrrrrr";
?>