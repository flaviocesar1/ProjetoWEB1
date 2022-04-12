<?php
 
 define("APP_NAME", "Game Characters");

session_start();

    $localhost = "localhost";
    $user = "root";
    $password = "14291";
    $banco = "final_web1";
    global $pdo;   
    
    try {
        $pdo = new PDO("mysql:dbname=".$banco."; host =".$localhost, $user, $password);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "ERRO: " .$e -> getMessage();
        exit;
    }


  function is_logged(){
      if (isset ($_SESSION['user_id'])) {
        return true;
      }
        return false;
  }

  function username(){
      return $_SESSION['username'] ?? false;
  }


?>

