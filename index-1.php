<?php
  /*
  PHP Snack 1:
  Creiamo un array 'matches' contenente altri array i
  quali rappresentano delle partite di basket di
  un’ipotetica tappa del calendario. Ogni array della
  partita avrà una squadra di casa e una squadra
  ospite, punti fatti dalla squadra di casa e punti fatti
  dalla squadra ospite.
  Stampiamo a schermo tutte le partite con questo
  schema:
  Olimpia Milano - Cantù | 55 - 60
  */

  $matches = [

    [
      "homeTeam" => "Squadra di casa 1",
      "visitingTeam" => "Squadra ospite 1",
      "homeTeamScore" => rand(45, 65),
      "visitingTeamScore" => rand(45, 65)
    ],

    [
      "homeTeam" => "Squadra di casa 2",
      "visitingTeam" => "Squadra ospite 2",
      "homeTeamScore" => rand(45, 65),
      "visitingTeamScore" => rand(45, 65)
    ],

    [
      "homeTeam" => "Squadra di casa 3",
      "visitingTeam" => "Squadra ospite 3",
      "homeTeamScore" => rand(45, 65),
      "visitingTeamScore" => rand(45, 65)
    ],

    [
      "homeTeam" => "Squadra di casa 4",
      "visitingTeam" => "Squadra ospite 4",
      "homeTeamScore" => rand(45, 65),
      "visitingTeamScore" => rand(45, 65)
    ]

  ];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Snack 1</title>
  </head>
  <body>

    <ul>
      <?php
        for ($i=0; $i < count($matches); $i++) {
          $match = $matches[$i];
          echo "<li>";
          echo $match["homeTeam"]." - ".$match["visitingTeam"]." | ".$match["homeTeamScore"]." - ".$match["visitingTeamScore"];
          echo "</li>";
        }
      ?>
    </ul>

  </body>
</html>
