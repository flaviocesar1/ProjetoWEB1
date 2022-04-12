<?php

include '../init.php';

if(!is_logged()){
    header('location: /');
    exit();
}

$nome = $_POST['nome'];
$game_id = $_POST['game_id'];

$stmt = $pdo->prepare('insert into perso (nome, game_id, user_id) values (?, ?, ?)');
$stmt->execute([$nome, $game_id, $_SESSION['user_id']]);


header('location: /home.php');

?>
