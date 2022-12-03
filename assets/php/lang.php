<?php

  $url = "http://localhost:3000";
  $page = explode('?', $_SERVER['REQUEST_URI'])[0];
  $lang = '?lang=en';

  if (array_key_exists('lang', $_GET)) {
    if ($_GET['lang'] === 'fr') {
      $lang = '?lang=fr';
      require_once('fr.php');
    }
    else if ($_GET['lang'] === 'en') {
      $lang = '?lang=en';
      require_once('en.php');
    }
    else {
      $lang = '?lang=en';
      require_once('en.php');
    }
    
  }
  else {
    $lang = '?lang=en';
    require_once('en.php');
    header($url.$page.$lang);
  }



?>