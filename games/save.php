<?php

include '../init.php';

if(!is_logged()){
    header('location: /');
    exit();
}

$games = $_POST['games'];

$stmt = $pdo->prepare('insert into games (game) values (?)');
$stmt->execute([$games]);


header('location: /home.php');

?>