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
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="fonts/roboto/roboto.css" />
  <link rel="stylesheet" href="styles.css">
  <title>Animal Shelter</title>
</head>

<body>
  <!-- МЕНЮ -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
    <div class="logo">
      <a href="index.php " class="navbar-brand">
        <img src="img/logo1.png" width="70" height="45" alt="logo">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item">
          <a href="news.php" class="nav-link menu fa-instagram">Новости</a>
        </li>
        <li class="nav-item">
          <a href="comment.php" class="nav-link menu">Что мы делаем</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link menu">Как помочь</a>
        </li>
        <li class="nav-item">
          <a href="pets.php" class="nav-link menu">Питомцы</a>
        </li>
       <!--   <li class="nav-item">
          <a href="pages/regpage.php" class="nav-link  menu">Регистрация</a>
        </li> -->
          <!-- <a href="pages/authpage.php" class="nav-link  menu">Вход</a> -->
         <?php
        include ("modules/auth_result.php");
        ?>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input type="text" class="form-control mr-sm-2 search" placeholder="поиск..." aria-label="Search">
        <!-- <button class="btn btn-outline-success my-2 my-sm-0">search</button> -->
      </form>
      <button class=" btn mybtn">Пожертвовать</button>
    </div>
  </nav>


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