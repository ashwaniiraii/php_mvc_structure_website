<?php 
require 'functions.php';
// require 'router.php';

//connect to our MySql database.
$dsn = 'mysql:host=localhost;dbname=myapp;charset=utf8';
$username = 'root';
$password = '';
$pdo = new PDO($dsn, $username, $password);
$statement = $pdo->prepare('select * from posts');
$statement->execute();
$posts  = $statement->fetchAll();
dd($posts);

