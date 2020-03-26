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
  <style type="text/css">
   
  </style>
  <title>Animal Shelter</title>
</head>
<body>

<div>

<?php
include 'menu.php';
?>
  <?php
  $news_id = $_GET['id'];

  $host = "127.0.0.1"; // адрес сервера
  $database = "register-bd"; // имя базы данных
  $user = "root"; // имя пользователя
  $password1 = ""; // пароль

  $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));

  $queryLog = "SELECT title, short_description, news FROM news where id='$news_id'";

  $resultOfexNameSelect = mysqli_query($link, $queryLog)
  or die("Ошибка! ".mysqli_error($link));

 
  $countexNamerow = mysqli_fetch_row($resultOfexNameSelect);
      

      echo "<div class='col-12 col-sm-6 col-md-6 col-xl ml-2'>
              <p>$countexNamerow[0]</p>
              <p>$countexNamerow[1]</p>
              <p>$countexNamerow[2]</p>
           </div>";
      ?>   
</div>




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