<?php 
  
  // let name = "bert";
  $firstName = "bert";
  $lastName = "lempens";
  $name = "$firstName $lastName";
  $name = 'Mijn naam is ' . $firstName . ' ' . $lastName . '!';
  $tekst = 'De man zegt \'s morgens "ik kom iets later"!';
  $tekst = "De man zegt \"ik kom iets later\"!";

  $date = date('Y');

  // integer, string, booleans, floats, arrays, objects

  // integer
  $leeftijd = 35;

  // boolean
  $ingelogd = false;

  // float
  $prijs = 29.99;

  $oplossing = $prijs * $leeftijd / 20 + 100 - 2; // + - * / %

  // array
  $films = [
    "spider man 1", "spider man 2", "spider man 3", "into the spider verse",
    "godfather 1", "godfather 2"
    // 0            1                2
  ];
  // echo $films[1];

  $gebruiker = [
    "name" => "Bert",
    "email" => "blempens@cvodeverdieping.be",
    "password" => "test123"
  ];
  // echo $gebruiker['name'];

  // let gebruiker = {
  //   name: 'bert',
  //   email: 'blempens@cvodeverdieping.be',
  //   password: 'test123',
  // }
  // console.log(gebruiker.password)

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introductie PHP</title>
  <style>

    .film-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    .film {
      background: rgba(0,0,0,.15);
      border: 1px solid black;
      padding: 1rem;
      transition: 250ms;
      border-radius: 5px;
      margin: 1rem;
    }

    .film:hover {
      background: rgba(0,0,0,.25);
    }

  </style>
</head>

<body>

  <h1>Mijn eerste PHP pagina</h1>

  <?php 

    if ($ingelogd) {
      echo "<p>Hallo, $name!</p>";
    } else {
      echo "<p>Je bent nog niet ingelogd!</p>";
    }

  ?>

  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita, consequatur id vero cum aliquam officiis quibusdam, eum esse quo modi fugit, fugiat corporis. Unde, consectetur magni eius doloremque assumenda distinctio.M</p>

  <?php 
  
  if ($leeftijd >= 18) {
    echo '<p>Je bent al ' . $leeftijd . ' en oud genoeg om volwassen te zijn!';
  } elseif ($leeftijd == 0) {
    echo "<p>Je bent nog niet geboren.</p>";
  } elseif ($leeftijd < 5) {
    echo "<p>Je bent nog maar heel jong!</p>";
  } else {
    echo "<p>Je bent nog maar $leeftijd en nog niet oud genoeg om volwassen te zijn!";
  }
  
  ?>

  <?php

  // $a = 0;
  // while ($a <= 10) {
  //   echo "<p>De waarde is nu $a</p>";
  //   $a++;
  // }

  // for ($i=1; $i <= 6; $i++) { 
  //   echo "<h$i>De waarde is nu $i</h$i>";
  // }

  ?>

  <p>
    Jaartal: 
    <select>
    <?php 
      for ($i=date('Y')-5; $i <= date('Y')+5; $i++) { 
        echo "<option value=\"$i\">$i</option>";
      }
    ?>
    </select>
  </p>

  <ul>
    <?php 
    foreach ($films as $film) {
      echo "<li>$film</li>";
    }
    ?>
  </ul>

  <section>
    <h1>Films</h1>
    <div class="film-grid">
      <?php foreach($films as $film) { ?>
        <div class="film">
          <h2><?php echo $film ?></h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi voluptate odio numquam eos fugiat, facilis tenetur quae fuga velit est!</p>
        </div>
      <?php } ?>
    </div>
  </section>

  <footer>
    Copyright <?php echo $name ?> <?php echo $date ?>
  </footer>

</body>

</html>