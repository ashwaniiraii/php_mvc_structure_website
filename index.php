<?php 
require 'functions.php';
// require 'router.php';

//connect to our MySql database setup pdo
$dsn = 'mysql:host=localhost;dbname=myapp;charset=utf8';
$username = 'root';
$password = '';
$pdo = new PDO($dsn, $username, $password);
$statement = $pdo->prepare('select * from posts where id=1');
$statement->execute();
$posts  = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach($posts as $post){
    echo '<li>'.$post['title'].'</li>';
}

