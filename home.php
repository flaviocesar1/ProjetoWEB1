<?php 
include 'init.php';

if(!is_logged()) {
    header('location: index.php');
    exit();
}


$stmt = $pdo->query('select * from games');
$games = $stmt->fetchAll();

$stmt = $pdo->prepare('select * from perso where user_id = ?');
$stmt->execute([$_SESSION['user_id']]);
$perso = $stmt->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title><?= APP_NAME ?></title>
</head>
<body>
    <h1>Bem vindo, <?= username() ?></h1>
    <a href="/auth/logout.php" class="btn">Sair</a>

    <h2>Games</h2>
   <ul>
     <?php foreach($games as $game): ?>
        <li><?= $game['game'] ?> - <a href="/games/delete.php?id=<?= $game['id_games'] ?>">remover </a></li>
      <?php endforeach ?> 
      <li>
     <form action="/games/save.php" method="POST">
            <input type="text" name="games" placeholder="games">
            <input type="submit">    
     </form>
     </li>
   </ul>
<table>   
<tr>    
  <th>Nome</th>
  <th>Personagem</th>
</tr>
 <?php foreach($perso as $perso): ?>
  <tr>
    <td><?= $perso['nome'] ?></td>   
    <td><?= $perso['game_id'] ?></td>
    <td>
        <a href="/perso/delete.php?id=<?= $perso['id_perso']?>">remover</a>
    </td>
  </tr>  
<?php endforeach ?>
</table>
<form action="/perso/save.php" method="POST">
 <input type="text" name="nome" placeholder="nome">
 <select name="game_id">

  <?php foreach($games as $game): ?>
      
    <option value="<?= $game['id_games'] ?>"><?= $game['game'] ?></option>

  <?php endforeach ?>
 </select>
  <input type="submit">
 </form>
</body>
</html>