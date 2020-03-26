<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fonts/roboto/roboto.css" />
    <link rel="stylesheet" href="styles.css">
    <title>Pet--name Profile</title>
    <style type="text/css">
.image{
  overflow:hidden;
}

.image img {
 -moz-transition: all 1s ease-out;
 -o-transition: all 1s ease-out;
 -webkit-transition: all 1s ease-out;
 }
 
.image img:hover{
 -webkit-transform: scale(1.1);
 -moz-transform: scale(1.1);
 -o-transform: scale(1.1);
 }
    </style>
</head>

<body>
<?php
include 'menu.php';
?>

<!-- образец для кнопки назад -->
<!-- <div style="width: 100px; height: 100px; background-color: red; border-radius: 50px; position: fixed; margin-left: 100px; margin-top: 20%;"></div> -->

<?php
  $pet_profile_id = $_GET['id'];
  $host = "127.0.0.1"; // адрес сервера
  $database = "register-bd"; // имя базы данных
  $user = "root"; // имя пользователя
  $password1 = ""; // пароль

  $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));

  $queryLog = "SELECT photo, age, gender, pet_character, description, pet_like, name, id FROM pets where id='$pet_profile_id'";

  $resultOfexNameSelect = mysqli_query($link, $queryLog)
  or die("Ошибка! ".mysqli_error($link));

  $countexNamerows = mysqli_num_rows($resultOfexNameSelect); // кол-во строк запроса


  $countexNamerow = mysqli_fetch_row($resultOfexNameSelect);

      echo "
       <section class='main--info'>
        <div class='left--main--info'>
            <div class='help--pic'><img src='img/1/$countexNamerow[0]' alt=''>
                <div class='bottom--pic--description'>
                    <span>$countexNamerow[5]</span>
                </div>
            </div>
        </div>
        <div class='right--main--info'>
            <h2 class='pet--name'>$countexNamerow[6]</h2>

            <ul>
                <li class='criterion'>
                    <h4>Возраст</h4>
                    <span>$countexNamerow[1] года (лет)</span>
                </li>
                <li class='criterion'>
                    <h4>Пол</h4>
                    <span>$countexNamerow[2]</span>
                </li>
                <li class='criterion'>
                    <h4>Характер</h4>
                    <span>$countexNamerow[3]</span>
                </li>
            </ul>
        </div>

        <div class='pet--description'>
            <h4>Описание</h4>
            <span class='pet--annotation'>$countexNamerow[4]</span>
        </div>";

    $queryLog1 = "SELECT photo, name, id FROM pets where id!='$pet_profile_id'";

    $resultOfexNameSelect1 = mysqli_query($link, $queryLog1) or die("Ошибка! ".mysqli_error($link));

    $countexNamerows1 = mysqli_num_rows($resultOfexNameSelect1); // кол-во строк запроса

    echo "<div class='myblock--wrap'><h4>Посмотрите также</h4>
    <div class='row myblock'>";
    for($i = 0; $i < 3; ++$i)
    {
      $countexNamerow1 = mysqli_fetch_row($resultOfexNameSelect1);

      echo "<div class='col-12 col-sm-6 col-md-6 col-xl ml-2'>
              <div class='image'><a href='pet_profile.php?id=$countexNamerow1[2]'><img src='img/1/$countexNamerow1[0]'></a></div>
              <a href='pet_profile.php?id=$countexNamerow1[2]'><p id='pet--profile--name'>$countexNamerow1[1]</p></a>
          </div>";
    }  

    echo " </div></div></section>";
     ?> 
</body>

</html>