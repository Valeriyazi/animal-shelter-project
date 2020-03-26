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
<!--   <link rel="stylesheet" href="css/main.css"> -->
  <link rel="stylesheet" href="fonts/roboto/roboto.css" />
  <link rel="stylesheet" href="styles.css">
  <title>Animal Shelter</title>
</head>

<body>
  <?php
require_once 'process2.php';
  ?>

<?php
include 'menu.php';
?>

<?php
if(isset($_SESSION['message'])):
?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

<?php
echo $_SESSION['message'];
unset($_SESSION['message']);
?>
</div>
<?php endif ?>




  <?php
  $mysqli = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));
  $result = $mysqli->query("SELECT * FROM pets") or die($mysqli->error);
  // pre_r($result);
  ?>

<div class="container">
<div class="row justify-content-center">
  <table class="table">
    <thead>
      <tr>
          <th>Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Pet_character</th>
          <th>Description</th>
          <th>pet_like</th>
          <th>Photo</th>
          <th colspan="8">Action</th>
      </tr>
    </thead>


<?php
while($row = $result->fetch_assoc()):
?>
    <tr>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td><?php echo $row['pet_character'] ?></td>
      <td><?php echo $row['description'] ?></td>
      <td><?php echo $row['photo'] ?></td>
      <td><?php echo $row['pet_like'] ?></td>
      <td>
        <a href="admin.php?edit=<?php echo $row['id']; ?>"
          class="btn btn-info">Edit</a>
        <a href="process.php?delete=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
      </td> 
    </tr>
  <?php endwhile; ?>
  </table>
</div>
  <?php
  // pre_r($result->fetch_assoc());
  function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }

  ?>


  <div class="row justify-content-center">
<form action="process2.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">


<div class="form-group">
<input type="text" name="name" class="form-control" 
value="<?php echo $name; ?>" placeholder="Введите имя">
</div>


<div class="form-group">
<input type="text" name="age" class="form-control" 
value="<?php echo $age; ?>" placeholder="Введите возраст">
</div>


<div class="form-group">
<input type="text" name="gender" class="form-control"
value="<?php echo $gender; ?>" placeholder="Введите пол">
</div>


<div class="form-group">
<input type="text" name="pet_character" class="form-control"
value="<?php echo $pet_character; ?>" placeholder="Введите характеристику">
</div>


<div class="form-group">
<input type="text" name="description" class="form-control"
value="<?php echo $description; ?>" placeholder="Введите описание">
</div>

<div class="form-group">
<input type="text" name="photo" class="form-control"
value="<?php echo $photo; ?>" placeholder="Введите название фото">
</div>

<div class="form-group">
<input type="text" name="pet_like" class="form-control"
value="<?php echo $pet_like; ?>" placeholder="Введите предпочтения">
</div>

<div class="form-group">
<?php
if($update == true):
?>
  <button type="submit" class="btn btn-info" name="update">Update</button> 
<?php
else:
?>
  <button type="submit" class="btn btn-primary" name="save">Save</button>
<?php
endif;
?>
</div>
</form>
</div>
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