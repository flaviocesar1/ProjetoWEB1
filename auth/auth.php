<?php 

include '../init.php';

$username = $_POST['username'];
$pw = $_POST['pw'];

$stmt = $pdo->prepare('select * from users where username = ? and pw = ?');
$stmt->execute([$username, $pw]);

$data = $stmt->fetchAll();

if (sizeof($data) == 0){
    header('location: login.php?msg=Login ou senha incorreto');
    exit();
}

$user = $data[0];

$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];

header('location: /home.php');

?>