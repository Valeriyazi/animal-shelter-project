<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fonts/roboto/roboto.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Animal Shelter</title>
  </head>
  <body>

  <!-- МЕНЮ -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
<div  class="logo">
    <a href="# " class="navbar-brand">
      <img src="img/logo1.png" width="70" height="45" alt="logo" >
    </a>
</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto ">
          <div class="main_first">
        
    </div>
        <li class="nav-item">
          <a href="#" class="nav-link menu">Кто мы</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link menu">Что мы делаем</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link menu" >Как помочь</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link menu">Питомцы</a>
        </li>
        <li class="nav-item">
          <a href="pages/authpage.php" class="nav-link  menu">Вход</a>
        </li>
        <li class="nav-item">
          <a href="pages/regpage.php" class="nav-link  menu">Регистрация</a>
        </li>
      </ul>
      <form  class="form-inline my-2 my-lg-0">
        <input type="text" class="form-control mr-sm-2" placeholder="поиск..." aria-label="Search"> 
        <!-- <button class="btn btn-outline-success my-2 my-sm-0">search</button> -->
         <?php
        include ("modules/auth_result.php");
        ?>
      </form>

     <!--  <button class=" btn mybtn">Пожертвовать</button> -->
    </div> 
    </nav>

  <!-- СЛАЙДЕР -->
<div class="container-fluid p-0">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- <ol class="car ousel-indicators">
      <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol> -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/1-1.jpg" alt="" class="d-block w-100">
        <!-- <div class="carousel-caption">
          <h5>Программирование</h5>
        </div> -->
      </div>
       <div class="carousel-item">
        <img src="img/2-2.jpg" alt="" class="d-block w-100">
      </div>
       <div class="carousel-item">
        <img src="img/3-3.jpg" alt="" class="d-block w-100">
      </div>
    </div>
    <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next </span>
    </a>
  </div>
</div>

<!-- ПЕРВЫЙ БЛОК -->
  <div class="container">
    <div class="row">
      <div class="col-7">
        <h1 class="tit-1">Частный приют для домашних животных</h1>
        <p class="text-1">К нам попадают те, от кого отказались, кого предали, кто просто в один миг перестал быть нужным. Иногда для спасения достаточно совсем немного, стоит увидеть чьи-то обречённые глаза и сделать порой совсем чуть-чуть, чтобы вернуть им веру в людей.</p>
      </div>
      <div class="col"><img src="img/4.png" alt="" class="w-100"> </div>
    </div>
  </div>

<!-- ЧТО МЫ ДЕЛАЕМ -->
<div class="container-fluid cont2">
  <div class="row text-center mt-4">
    <div class="col">
      <h1 class="tit-1">Что мы делаем</h1>
    </div>

    <div class="w-100"></div>

    <div class="col"><img src="img/5.png" alt="" class="effect"></div>
    <div class="col"><img src="img/6.png" alt=""  class="effect"></div>
    <div class="col"><img src="img/7.png" alt="" class="effect"></div>
  </div>
</div>

<!-- ВЗЯТЬ ПИТОМЦА -->
<div class="container-fluid">
  <div class="row text-center">
  <div class="col-7 for-pets">
    <div class="row pet">
      <div class="col-6"><a href="#"><img src="img/8.png" alt="" class="w-60"></a></div>
      <div class="col-6"><a href="#"><img src="img/9.png" alt="" class="w-60"></a></div>
    </div>

    <div class="row">
      <div class="col-6"><img src="img/10.png" alt="" class="w-60 indent"></div>
      <div class="col-6"><img src="img/10.png" alt="" class="w-60 indent"></div>
    </div>
  </div>

  <div class="col-5 for-pets-content">
    <h1 class="pets">Взять питомца</h1>
    <div class=" pe">
    <p class=" pets1">Вы ищете себе компаньона? Посмотрите наших живоных. Каждый питомец готов стать вашим другом!</p>
     <button class="btn mybtn-1">Найти питомца</button>
    </div>
  </div>

  </div>
</div>

<!-- НОВОСТИ -->
<div class="container">
  <div class="row text-center indent-1">
    <div class="col-4"><h1 class="news">Все новости</h1></div>
    <div class="col-4"><img src="img/11.png" alt="" class="w-100"></div>
    <div class="col-4"><button class="btn mybtn-2">События и программы</button></div>
  </div>
</div>

<!-- КАК ПОМОЧЬ -->
<div class="container-fluid">
  <div class="row text-center">
    <div class="col-4"><img src="img/12.png" alt="" class="w-100"></div>
    <div class="col-4"><img src="img/13.png" alt="" class="w-100"></div>
    <div class="col-4"><img src="img/14.png" alt="" class="w-100"></div>
  </div>
</div>

<!-- ИНСТАГРАМ -->
<div class="container-fluid">
  <div class="row">
  <div class="col-2 inst-block"><img src="img/15.png" alt="" class="w-100"></div>
  <div class="col-2 inst-block"><img src="img/16.png" alt="" class="w-100"></div>
  <div class="col-2 inst-block"><img src="img/17.png" alt="" class="w-100"></div>

<div class="w-100"></div>

  <div class="col-2"><img src="img/18.png" alt="" class="w-100"></div>
  <div class="col-2"><img src="img/19.png" alt="" class="w-100"></div>
  <div class="col-2"><img src="img/20.png" alt="" class="w-100"></div>
  <div class="col-6"><img src="img/21.png" alt="" class="w-100"></div>
  </div>
</div>
   <!--  <h1>Hello world!</h1> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>