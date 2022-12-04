<?php

$path = dirname(__FILE__);
// var_dump($path);
$pdo = new PDO("sqlite:$path/../bdd/bddFilm.sqlite");
$pdo->query("
CREATE TABLE IF NOT EXISTS user (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)");


$email = htmlspecialchars($_POST['username1']);
$password = htmlspecialchars($_POST['password1']);

if (preg_match('#[a-z0-9-_.]+@[a-z0-9-_.]+\.[a-z]{2,}#', $email) && strlen($email) <= 255 && strlen($password) >= 8) 
{
  try {
      $password = password_hash($password, PASSWORD_BCRYPT);
      $statement = $pdo->prepare("INSERT INTO user ('email', 'password') VALUES (:email, :password)");
      $statement->bindValue(':email', $email);
      $statement->bindValue(':password', $password);
      $statement->execute();
  } catch (PDOException $exception) {
    // traitement de l'erreur par rapport à UNIQUE => email
    echo "error".$exception->getMessage();
  }
  header('Location: ../../index.php');
}
else
{
  header('Location: ../../signIn.php');

}
exit;
?>
