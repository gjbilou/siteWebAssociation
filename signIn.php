<?php
require_once("assets/php/lang.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sono&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/signIn.css">

  <script defer type="module" src="assets/javascript/signIn.js"></script>
  <title>Admin Page - Movies Association</title>
</head>

<body>
  <?php require_once 'assets/php/navBar.php'; ?>
  <main>
    <?php
    // var_dump($_GET);
    if (isset($_GET['sif']) && $_GET['sif'] == "false") :
    ?>
      <section>
        <h1><?= $trad['sign_form'][1] ?></h1>
        <form action="assets/php/signInForm.php" method="post">
          <label for="username0">Email</label>
          <input type="email" name="username0" id="username0" placeholder="Email" class="error">

          <label for="password0"><?= $trad['sign_form'][3] ?></label>
          <input type="password" name="password0" id="password0" placeholder="<?= $trad['sign_form'][3] ?>" class="error">
          <button type="submit"><?= $trad['sign_form'][4] ?></button>
        </form>
      </section>

    <?php

    else :
    ?>
      <section>
        <h1><?= $trad['sign_form'][1] ?></h1>
        <form action="assets/php/signInForm.php" method="post">
          <label for="username0">Email</label>
          <input type="email" name="username0" id="username0" placeholder="Email">

          <label for="password0"><?= $trad['sign_form'][3] ?></label>
          <input type="password" name="password0" id="password0" placeholder="<?= $trad['sign_form'][3] ?>">
          <button type="submit"><?= $trad['sign_form'][4] ?></button>
        </form>
      </section>

    <?php
    endif;
    ?>
    <section>
      <h1><?= $trad['sign_form'][2] ?></h1>
      <form action="assets/php/signUpForm.php" method="post" id="sup">
        <label for="username1">Email</label>
        <input type="email" name="username1" id="username1" placeholder="Email">
        <label for="password1"><?= $trad['sign_form'][3] ?></label>
        <input type="password" name="password1" id="password1" placeholder="<?= $trad['sign_form'][3] ?>">
        <button type="submit" id="button_sup"><?= $trad['sign_form'][5] ?></button>
      </form>
    </section>
  </main>
</body>

</html>