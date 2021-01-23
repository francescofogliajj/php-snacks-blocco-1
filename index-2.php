<?php
  /*
  PHP Snack 2:
  Passare come parametri GET name, mail e age e
  verificare (cercando i metodi che non
  conosciamo nella documentazione) che:
  1. name sia più lungo di 3 caratteri,
  2. mail contenga un punto e una chiocciola,
  3. age sia un numero.
  Se tutto è ok stampare “Accesso riuscito”, altrimenti
  “Accesso negato”.
  */

  $access = "";

  if (empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
    $access = "Inserisci i dati";
  } elseif (strlen($_GET["name"]) < 3) {
    $access = "Accesso negato";
  } elseif (strpos($_GET["mail"], ".") === false || strpos($_GET["mail"], "@") === false) {
    $access = "Accesso negato";
  } elseif (!is_numeric($_GET["age"])) {
    $access = "Accesso negato";
  } else {
    $access = "Accesso riuscito";
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 2</title>
  </head>
  <body>

    <h1><?php echo $access ?></h1>

  </body>
</html>
