<?php
function myError($error){
$fp = fopen("loh.txt", "a"); // Открываем файл в режиме записи

$date = date("m.d.Y");
$time = date("H:i:s");


$textError= $error." дата: ". $date." время: ".$time. "\r\n"; // Исходная строка
$test = fwrite($fp, $textError); // Запись в файл
fclose($fp); //Закрытие файла
}
?>