<?php


$path = dirname(__FILE__);

$pdo = new PDO("sqlite:$path/assets/bdd/bddFilm.sqlite");

// echo $_GET['pof'];

$pof = htmlspecialchars($_GET['pof']);


try {
  $request = $pdo->query("SELECT * from film WHERE chemin=:pof");
  $request->bindValue(':pof', $pof, PDO::PARAM_STR);
  $request->execute();
  $film = $request->fetch();
} catch (PDOException $error) {
  echo "Connection failed :" . $e->getMessage();
}

// print_r($film);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $film['nom'] ?>-Association Films</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
  <?php require_once 'assets/php/navBar.php'; ?>
  <article>
    <h1><?= $film['nom'] ?></h1>
    <img src="assets/img/moviesToDisplay/<?= $film['chemin'] ?>" alt="">
    <p><?= $film['description'] ?></p>
  </article>
</body>

</html>