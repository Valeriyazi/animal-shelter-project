<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../fonts/roboto/roboto.css" />
  <link rel="stylesheet" href="../styles.css">
  <title>Animal Shelter</title>
  <style type="text/css">
    .myjumbotron{
  height: 100vh;
  background: url(img/46.jpeg);
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;


}

.mask{
  background: rgb(81, 116, 138, 0.8);
  /*width: 18%;*/
  /*margin-right: 70%;*/
 /* margin:40% 0% 0% 50%;*/
 margin-top: 35%;
 display: inline-block;
 padding: 0%;
}

.mask h1{
  font-weight: bold;
  color:white;
   text-align: center;
   font-size: 500%;

}

.mask p{
  font-weight: bold;
  color:white;
  text-decoration: none;
}

 .tit-1 a {
  margin-top : 0;
  color      : #51748A !important;
  font-size  : 53px;
  font-weight: bold;
}

.myjum{
  background: white !important; 

}
  </style>
</head>
<body>
<?php
include 'menu.php';
?>

<div class="jumbotron myjumbotron">
<div class="mask"><h1 class="display-4">СОБЫТИЯ И НОВОСТИ</h1></div>
</div>

<!-- <div class="jumbotron container col-9">
  <h1 class="display-4">Название</h1>
  <p class="lead">Короткое описание gf mkmfdkm kaemvkm</p>
  <hr class="my-4">
  <p>20 июня 2020</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Читать дальше</a>
  </p>
</div> -->

<?php
  $host = "127.0.0.1"; // адрес сервера
  $database = "register-bd"; // имя базы данных
  $user = "root"; // имя пользователя
  $password1 = ""; // пароль

  $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));

  $queryLog = "SELECT title, short_description, date, id FROM news";

  $resultOfexNameSelect = mysqli_query($link, $queryLog)
  or die("Ошибка! ".mysqli_error($link));

  $countexNamerows = mysqli_num_rows($resultOfexNameSelect); // кол-во строк запроса
      
    for($i = 0; $i < $countexNamerows; ++$i)
    {
      $countexNamerow = mysqli_fetch_row($resultOfexNameSelect);
      echo "<div class='jumbotron container col-9 myjum'>
  <h1 class='display-4 tit-1'><a href='pet_news.php?id=$countexNamerow[3]'>$countexNamerow[0]</a></h1>
  <p class='lead text-1'>$countexNamerow[1]</p>
  <hr class='my-4'>
  <p>$countexNamerow[2]</p>
  <p class='lead'>
    <a class='btn btn-primary btn-lg mybtn-2' href='pet_news.php?id=$countexNamerow[3]' role='button'>Читать дальше</a>
  </p>
</div>";
    }
      ?>
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>