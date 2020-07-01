<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Каталог</title>
</head>
<body>
<?php 
	$database="BOOKS";
	$user="books";
	$password="1234";
	$host='localhost';
	$connection=mysqli_connect($host, $user, $password, $database);
	if ($connection == false){
	    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error()."<br/>");
	    die();
	}
	else {
	    print("Соединение установлено успешно <br/>");
	}
?>