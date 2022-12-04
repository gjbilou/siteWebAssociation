<?php

$path = dirname(__FILE__);
// var_dump($path);
$pdo = new PDO("sqlite:$path/../bdd/bddFilm.sqlite");


$email = htmlspecialchars($_POST['username0']);
$password = htmlspecialchars($_POST['password0']);

try {
    $statement = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $statement->bindValue(':email', $email);
    $statement->execute();
    $userFromBDD = $statement->fetch();
    if ($userFromBDD) {
      if (password_verify($password, $userFromBDD['password'])) {
        header("Location: ../../index.php");
      }
      else {
        header("Location: ../../signIn.php?sif=false");
        exit;
      }
    }
    else
    {
      header("Location: ../../signIn.php?sif=false");
      exit;
    }
} catch (PDOException $exception) {
  // traitement de l'erreur par rapport à UNIQUE => email
  echo "error".$exception->getMessage();
}

exit;
?>
