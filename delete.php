<?php
$dsn = 'mysql:host=localhost;dbname=to-do-list';
$pdo = new PDO($dsn, 'root', '');

require 'db.php';

$id = $_GET['id'];

  $sql = 'DELETE FROM `list` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  header('Location: index.php');