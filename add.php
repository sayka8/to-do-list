<?php 

	//Переменные
	$title = $_POST['title'];

	//Подключение к базе данных
$dsn = 'mysql:host=localhost;dbname=to-do-list';
$pdo = new PDO($dsn, 'root', '');

    $sql = 'INSERT INTO list(title) VALUES(:title)';

	$query = $pdo->prepare($sql);
  
	$query->execute(['title' => $title]);

	header('Location: index.php');

?>