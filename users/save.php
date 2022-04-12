<?php 

include '../init.php';

$username = $_POST['username'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2']; 

if($pw != $pw2){
    header('location: register.php?msg=Senhas nao conferem');
    exit();
}

$stmt = $pdo->prepare('insert into users (username, pw) values (?, ?)');
$stmt->execute([$username, $pw]);

header('location: /?msg=Usuario registrado');

?>