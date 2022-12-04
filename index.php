<?php
require_once("assets/php/lang.php");
$pof = NULL;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Association Movies</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
  <?php require_once 'assets/php/navBar.php'; ?>
  <main>
    <section>
      <h2><?= $trad['header_title']['first_title']?></h2>
      <ul>
        <?php
        require_once('assets/php/database.php');

        try {
          
          $request = new Database();
          $film = $request->getFilms();
          // print_r($film);
        } catch (PDOException $error) {
          echo "Connection failed :" . $error->getMessage();
        }
        foreach ($film as $movie) :
          if ($movie['status'] == 'FALSE') {
            // print_r($movie);
        ?>
            <li>
              <a href="details.php<?= $lang?>&pof=<?= $movie['chemin'] ?>"><img src="assets/img/moviesToDisplay/<?= $movie['chemin'] ?>" alt="<?= $trad['alt'][$movie['id']]?>"></a>
            </li>
        <?php
          }
        endforeach;
        ?>
      </ul>
    </section>
    <section>
      <h2><?= $trad['header_title']['second_title']?></h2>
      <ul>
      <?php

      foreach ($film as $movie) :
          if ($movie['status'] == 'TRUE') {
            // print_r($movie);
        ?>
            <li>
              <a href="details.php<?= $lang?>&pof=<?= $movie['chemin'] ?>"><img src="assets/img/moviesToDisplay/<?= $movie['chemin'] ?>" alt="<?= $trad['alt'][$movie['id']]?>"></a>
            </li>
        <?php
          }
        endforeach;
        ?>
      </ul>
    </section>
  </main>
</body>

</html>