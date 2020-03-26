<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

  $host = "127.0.0.1"; // адрес сервера
  $database = "register-bd"; // имя базы данных
  $user = "root"; // имя пользователя
  $password1 = ""; // пароль

  $mysqli = mysqli_connect($host, $user, $password1, $database) or die("Ошибка " . mysqli_error($link));

  $id = 0;
  $update = false;
  $name = '';
  $age = '';
  $gender = '';
  $pet_character = '';
  $description = '';
  $photo = '';


if(isset($_POST['save'])){
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$pet_character = $_POST['pet_character'];
	$description = $_POST['description'];
	$photo = $_POST['photo'];


	$mysqli-> query("INSERT INTO pets (name, age, gender, pet_character, description, photo) VALUES ('$name', '$age', '$gender', '$pet_character', '$description', '$photo')") or die ($mysqli->error);


	$_SESSION['message'] = "Данные успешно сохранены!";
	$_SESSION['msg_type'] = "success";
	header("location: admin.php");
}

if(isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM pets WHERE id=$id") or die($mysqli->error());

	$_SESSION['message'] = "Данные успешно удалены!";
	$_SESSION['msg_type'] = "danger";
	header("location: admin.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM pets WHERE id=$id") or die($mysqli->error());
		if(count($result) == 1){
			$row = $result->fetch_array();
			$name = $row['name'];
			$age = $row['age'];
			$gender = $row['gender'];
			$pet_character = $row['pet_character'];
			$description = $row['description'];
			$photo = $row['photo'];
		}

}

if(isset($_POST['update'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$pet_character = $_POST['pet_character'];
	$description = $_POST['description'];
	$photo = $_POST['photo'];


	$mysqli->query("UPDATE pets SET name='$name', age='$age', gender='$gender', pet_character='$pet_character', description='$description', photo='$photo' WHERE id=$id") or die($mysqli->error);
	}

	$_SESSION['message'] = "Данные были обновлены!";
	$_SESSION['msg_type'] = "warning";

	header("location: admin.php");
  ?>
