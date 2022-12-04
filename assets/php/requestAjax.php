<?php

$path = dirname(__FILE__);
$pdo = new PDO("sqlite:$path/../bdd/bddFilm.sqlite");

$random = rand(1, 12);

$db = $pdo->query('SELECT * FROM film where id=:random');
$db->bindValue(':random', $random, PDO::PARAM_INT);
$db->execute();
$all = $db->fetch();




echo json_encode(
  $all
);
