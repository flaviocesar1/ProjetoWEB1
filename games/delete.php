<?php

include '../init.php';

if(!is_logged()) {
    header('location: /');
    exit();
}

$id = $_GET['id'];

$stmt = $pdo->prepare('delete from games where id_games = ?');
$stmt->execute([$id]);

header('location: /home.php');

?>