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
<?php
include 'menu.php';
?>

  <!-- СЛАЙДЕР -->
  <section class="container-fluid p-0">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <!-- <ol class="car ousel-indicators">
      <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol> -->
      <!-- Индикаторы -->
      <ol class="carousel-indicators mb-100px">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>

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
  </section>





  <!-- ПЕРВЫЙ БЛОК -->
  <!-- <section class="container description">
    <div class="row">
      <div class="col-7">
        <h1 class="tit-1">Частный приют для домашних животных</h1>
        <p class="text-1">К нам попадают те, от кого отказались, кого предали, кто просто в один миг перестал быть
          нужным. Иногда для спасения достаточно совсем немного, стоит увидеть чьи-то обречённые глаза и сделать порой
          совсем чуть-чуть, чтобы вернуть им веру в людей.</p>
      </div>
      <div class="col"><img src="Bootstrap/img/4.png" alt="" class="w-100"> </div>
    </div>
  </section> -->


  <section class="description">
    <div class="info">
      <div class="info--caption">
        <h1 class="tit-1">Частный приют для домашних животных</h1>
        <p class="text-1">К нам попадают те, от кого отказались, кого предали, кто просто в один миг перестал быть
          нужным. Иногда для спасения достаточно совсем немного, стоит увидеть чьи-то обречённые глаза и сделать порой
          совсем чуть-чуть, чтобы вернуть им веру в людей.</p>
      </div>
      <div class="info--image"><img src="img/4.png" alt="" class="w-100"> </div>
    </div>
  </section>




  <!-- ЧТО МЫ ДЕЛАЕМ -->
  <section class=" what--we--doing">
    <div class="col caption--isAbout">
      <h1 class="tit-1">Что мы делаем</h1>
    </div>
    <div class="pics--isAbout">
      <div class="col ">
        <img src="img/5.png" alt="" class="effect">

        <div class="explanation">
          <div class="explanationt--top">
            <span>Защищаем</span>
          </div>
          <div class="explanation--bottom">
            <span>
              <p>25,283</p>
              было защищено
            </span>
          </div>
        </div>

      </div>

      <div class="col">
        <img src="img/6.png" alt="" class="effect">
        <div class="explanation">
          <div class="explanationt--top">
            <span>Защищаем</span>
          </div>
          <div class="explanation--bottom">
            <span>
              <p>25,283</p>
              было защищено
            </span>
          </div>
        </div>
      </div>

      <div class="col">
        <img src="img/7.png" alt="" class="effect">
        <div class="explanation">
          <div class="explanationt--top">
            <span>Защищаем</span>
          </div>
          <div class="explanation--bottom">
            <span>
              <p>25,283</p>
              было защищено
            </span>
          </div>
        </div>
      </div>


    </div>
  </section>





  <!-- ВЗЯТЬ ПИТОМЦА -->
  <!-- <section class="container-fluid">
    <div class="row text-center">
      <div class="col-7 for-pets">
        <div class="row pet">
          <div class="col-6"><a href="#"><img src="Bootstrap/img/8.png" alt="" class="w-60"></a></div>
          <div class="col-6"><a href="#"><img src="Bootstrap/img/9.png" alt="" class="w-60"></a></div>
        </div>

        <div class="row">
          <div class="col-6"><img src="Bootstrap/img/10.png" alt="" class="w-60 indent"></div>
          <div class="col-6"><img src="Bootstrap/img/10.png" alt="" class="w-60 indent"></div>
        </div>
      </div>

      <div class="col-5 for-pets-content">
        <h1 class="pets">Взять питомца</h1>
        <div class=" pe">
          <p class=" pets1">Вы ищете себе компаньона? Посмотрите наших живоных. Каждый питомец готов стать вашим другом!
          </p>
          <button class="btn mybtn-1">Найти питомца</button>
        </div>
      </div>

    </div>
  </section> -->

  <!-- <section class="take--pet">
    <div class="left--take--pet">

      <div class="left--pet">
        <a href="#"><img src="Bootstrap/img/8.png" alt="" class="w-60"></a>

        <figure>
          <div id="triangle"></div>
          <div id="rectangle">
            <p>Меня зовут Говард
              и мне 10 лет</p>
          </div>
        </figure>
      </div>



      <div class="right--pet">
        <a href="#"><img src="Bootstrap/img/9.png" alt="" class="w-60"></a>
        <figure>
          <div id="triangle"></div>
          <div id="rectangle">
            <p>Меня зовут Говард
              и мне 10 лет</p>
          </div>
        </figure>
      </div>
    </div>
    <div class="right--take--pet">
      <div class="for-pets-content">
        <h1 class="pets">Взять питомца</h1>
        <div class=" pe">
          <p class=" pets1">Вы ищете себе компаньона? Посмотрите наших живоных. Каждый питомец готов стать вашим другом!
          </p>
          <button class="btn mybtn-1">Найти питомца</button>
        </div>
      </div>

    </div>
  </section> -->



  <section class="row take--pet">
    <div class="col-sm-7 left--side"">
      <div class=" left--take--pet">
      <div class="left--pet">
        <a href="#"><img src="img/8.png" alt="" class="w-60"></a>

        <figure>
          <div id="triangle"></div>
          <div id="rectangle">
            <p>Меня зовут Говард
              и мне 10 лет</p>
          </div>
        </figure>
      </div>

      <div class="right--pet">
        <a href="#"><img src="img/9.png" alt="" class="w-60"></a>
        <figure>
          <div id="triangle"></div>
          <div id="rectangle">
            <p>Меня зовут Говард
              и мне 10 лет</p>
          </div>
        </figure>
      </div>
    </div>
    </div>
    <div class="col-sm-5 right--side" style="background-color: blue;">

      <div class="right--take--pet">
        <div class="for-pets-content">
          <h1 class="pets">Взять питомца</h1>
          <div class=" pe">
            <p class=" pets1">Вы ищете себе компаньона? Посмотрите наших живоных. Каждый питомец готов стать вашим
              другом!
            </p>
            <button class="btn mybtn-1">Найти питомца</button>
          </div>
        </div>
      </div>


    </div>
  </section>



  <!-- НОВОСТИ -->
  <div class="container news">
    <div class="row text-center indent-1">
      <div class="col-4">
        <h1 class="news">Все новости</h1>
      </div>
      <div class="col-4"><img src="img/11.png" alt="" class="w-100"></div>
      <div class="col-4"><button class="btn mybtn-2">События и программы</button></div>
    </div>
  </div>



  <!-- КАК ПОМОЧЬ -->
  <div class="container-fluid how--to--help">
    <h3 class="news">Как помочь</h3>

    <div class="row text-center">

      <div class="col-4 help--pic"><img src="img/12.png" alt="">
        <div class="how--to--help--text">
          <span>Пожертвовать</span>
        </div>
      </div>



      <div class="col-4 help--pic"><img src="img/13.png" alt="">
        <div class="how--to--help--text">
          <span>Пожертвовать</span>
        </div>
      </div>



      <div class="col-4 help--pic"><img src="img/14.png" alt="">
        <div class="how--to--help--text">
          <span>Пожертвовать</span>
        </div>
      </div>



    </div>
  </div>







  <!-- ИНСТАГРАМ -->

  <section class="inst">
    <div class="col-sm-7 no-margin left--inst--wrap"">
    <div class=" left--inst">
      <img src="img/15.png" alt="" class="scale">
      <img src="img/16.png" alt="">
      <img src="img/17.png" alt="">
      <img src="img/18.png" alt="">
      <img src="img/19.png" alt="">
      <img src="img/20.png" alt="">
    </div>
    </div>

    <div class="col-sm-5 right--inst--wrap" style="background-color: blue;">
      <div class="right--inst">
        <img src="img/21.png" alt="" class="w-100">
      </div>
    </div>
  </section>

  <section class="feedback">
    <h1 class="pets">Будьте в курсе</h1>
    <div class="form--wrap">
      <input type="text" value="Введите email">
      <button class="subscribe">
        <span>Подписаться на рассылку</span>
      </button>

    </div>
  </section>

  <footer>
   <!--  <img src="img/logo1.png" width="120" height="80" alt="logo"> -->

      <span class="copyrite">
        ©2020 Animal shelter
      </span>
  </footer>


  <!--  <h1>Hello world!</h1> -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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