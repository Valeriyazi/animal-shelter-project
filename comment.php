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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="fonts/roboto/roboto.css" />
  <link rel="stylesheet" href="styles.css">
  <title>Animal Shelter</title>
  <script type="text/javascript" src="changevalue.js"></script>
  <script type="text/javascript" src="comments.js"></script>
  <style>

  </style>

</head>

<body>
<h4>Оставить комментарий</h4>

<form action="" method="POST" id="form">
  <p><input type="text" id="nickname" size="50"></p>
  <p><input class="comment" id="comment" ></input></p>
  <input type="submit" class="commentbutton" value="Оставить комментарий">
</form>

<ul id="commentslist">
 <?php
  $host = "127.0.0.1"; // адрес сервера
  $database = "register-bd"; // имя базы данных
  $user = "root"; // имя пользователя
  $password1 = ""; // пароль

  $link = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));

 $sql = "SELECT nickname, comment FROM comments ORDER BY id DESC";
 $resultOfexNameSelect = mysqli_query($link, $sql) or die("Ошибка! ".mysqli_error($link));

 $countexNamerows = mysqli_num_rows($resultOfexNameSelect);//кол-во строк запроса

 for($i = 0; $i < $countexNamerows; ++$i)
    {
      $countexNamerow = mysqli_fetch_row($resultOfexNameSelect);
      echo "<li>".$countexNamerow[0]."<p>".$countexNamerow[1]."</p></li><hr>";
    }
 ?>
</ul>

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