<?php include '../init.php' ?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?= APP_NAME ?> - Autenticar</title>
</head>
<body>
    <h1><u>Autenticar</u></h1>
    <form action="auth.php" method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="pw" placeholder="senha">
    <input type="submit" >
</form>  
      <a href="/" class="btn">Home</a>
      <a href="/users/register.php" class="btn">Registrar</a>
</body>
</hmtl>