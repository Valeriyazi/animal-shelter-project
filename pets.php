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
 /* background:#51748A;*/
 background: rgb(81, 116, 138, 0.8);
 /* opacity: 0.8;*/
  /*width: 18%;*/
  /*margin-right: 70%;*/
 /* margin:40% 0% 0% 50%;*/
 margin-top: 30%;
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

.myblock{
  padding-left: 17%;
  padding-right: 17%;
  padding-top: 3%;
  padding-bottom: 3%;
  text-decoration: none;
}

.myblock p{
  margin-bottom: 20%;
  font-family: Roboto;
  font-style: normal;
  font-weight: bold;
  font-size: 25px;
  color: #51748A;
  text-decoration: none;
}

.myblock p:hover{
  color: #644D7B;
 text-decoration: none;
}


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

</script>

</head>

<body>
<?php
include 'menu.php';
?>
<div class="jumbotron">
<div class="mask"><h1 class="display-4">ВЫБРАТЬ ПИТОМЦА</h1></div>
</div>

<!-- <section class="container-fluid p-0">
<div class="row text-center myblock ">
    <div class="col-12 col-sm-6 col-md-6 col-xl ml-2 "><img src="img/1/30.png"><p>Бакстер</p></div>
    <div class="col-12 col-sm-6 col-md-6 col-xl ml-2"><img src="img/1/40.png"><p>Бакстер</p></div>
    <div class="col-12 col-sm-6 col-md-6 col-xl ml-2"><img src="img/1/22.png"><p>Бакстер</p></div>
    
    <div class="col-12 col-sm-6 col-md-6 col-xl ml-2 "><img src="img/1/30.png"><p>Бакстер</p></div>
    <div class="col-12 col-sm-6 col-md-6 col-xl ml-2"><img src="img/1/40.png"> </div>
    <div class="col-12 col-sm-6 col-md-6 col-xl ml-2"><img src="img/1/22.png"> </div>
</div>
</section> -->


<?php

  $host = "127.0.0.1"; // адрес сервера
  $database = "register-bd"; // имя базы данных
  $user = "root"; // имя пользователя
  $password1 = ""; // пароль

  $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));

  $queryLog = "SELECT photo, name, id FROM pets";

  $resultOfexNameSelect = mysqli_query($link, $queryLog)
  or die("Ошибка! ".mysqli_error($link));

  $countexNamerows = mysqli_num_rows($resultOfexNameSelect); // кол-во строк запроса


echo "<section class='container-fluid p-0'>
      <div class='row text-center myblock'>";
      
    for($i = 0; $i < $countexNamerows; ++$i)
    {
      $countexNamerow = mysqli_fetch_row($resultOfexNameSelect);

      echo "<div class='col-12 col-sm-6 col-md-6 col-xl ml-2'>
              <div class='image'><a href='pet_profile.php?id=$countexNamerow[2]'><img src='img/1/$countexNamerow[0]'></a></div>
              <a href='pet_profile.php?id=$countexNamerow[2]'><p>$countexNamerow[1]</p></a>
           </div>";
    }

    echo "</div></section>";

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