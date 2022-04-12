<?php include 'init.php';

if (is_logged()) {
    header('location: home.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" contents="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title><?= APP_NAME ?></title>
 </head>
<body>    
    <h1><u>Welcome to Game Characters</u></h1>
    <a class="btn" href="users/register.php">Registrar</a>
    <a class="btn" href="auth/login.php">Autenticar</a>

</body>
</html>