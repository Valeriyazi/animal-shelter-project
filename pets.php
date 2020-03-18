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
  .title{
    background: url(/img/26.jpeg) center center no-repeat  !important;
    background-size: cover !important;
    position: absolute;
    height: 100vh;
    width: 100vw;
    top:0;
    left:0;
  }

.jumbotron{
  height: 100vh;
  background: url(img/26.jpeg);
  background-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;

}

.mask{
  background: red;
  /*width: 18%;*/
  /*margin-right: 70%;*/
 /* margin:40% 0% 0% 50%;*/
 /* margin-top: 40%;*/
 display: inline-block;
 
}
</style>


</head>

<body>
<?php
include 'menu.php';
?>
<div class="jumbotron">

<div class="mask"><h1 class="display-4">Hello, world!</h1></div>
 <!--  <p class="lead">Это простой пример блока с компонентом в стиле jumbotron для привлечения дополнительного внимания к содержанию или информации.</p>
  <hr class="my-4">
  <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
  <!-- </p>  -->
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