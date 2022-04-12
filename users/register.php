<?PHP include '../init.php' ?>

<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" contents="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/style.css">
        <title><?= APP_NAME ?> - Registrar usuario</title>
 </head>
<body>    
    <h1><u>Registrar usuario</u></hi>
<form action="save.php" method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="pw" placeholder="senha">
    <input type="password" name="pw2" placeholder="confirmar a senha">
    <input type="submit" >
</form>  
      <a href="/" class="btn">Home</a>
      <a href="/auth/login.php" class="btn">Autenticar</a>        
</body>
</html>