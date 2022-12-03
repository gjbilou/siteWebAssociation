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

  <script type="module" src="assets/javascript/signIn.js"></script>
  <title>Admin Page - Movies Association</title>
</head>

<body>
  <?php require_once 'assets/php/navBar.php'; ?>
  <main>
    <section>
      <h1>Sign In Form</h1>
      <form action="signInForm.php" method="post">
        <label for="username0">Email</label>
        <input type="email" name="username0" id="username0" placeholder="Email">

        <label for="password0">Password</label>
        <input type="password" name="password0" id="password0" placeholder="Password">
        <button type="submit">Sign In</button>
      </form>
    </section>
    <section>
      <h1>Sign Up Form</h1>
      <form action="signInForm.php" method="post">
        <label for="username1">Email</label>
        <input type="email" name="username1" id="username1" placeholder="Email">
        <label for="password1">Password</label>
        <input type="password" name="password1" id="password1" placeholder="Password">
        <button type="submit">Sign Up</button>
      </form>
    </section>
  </main>
</body>

</html>