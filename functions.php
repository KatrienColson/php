<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
</head>
<body>

<?php 

  $naam = "bert";
  $email = "blempens@cvodeverdieping.be";
  $domein = substr($email, strpos($email, '@'));
  $domein = strstr($email, '@');
  $domein = strpbrk($email, "@");
  $username = substr($email, 0, strpos($email, '@'));
  $username = strstr($email, "@", true);
  $tekst = "De prijs is 20€ & dit is écht een koopje!";
  $tekst2 = "<p>Dit is een <b>stukje</b> tekst. Lorem ipsum dolor sit amet <em>consectetur</em>, adipisicing elit. Ducimus, rerum. </p>";

  $tags = "html, css, drupal, javascript";
  $tag_array = explode(", ", $tags);
  print_r($tag_array);
  // html - css - drupal - javascript
  $tags2 = implode(" - ", $tag_array);

?>

<p>Hallo, <?php echo strtoupper($naam) ?></p>
<p>Hallo, <?php echo ucfirst($naam) ?></p>
<p>Jouw naam is <?php echo strlen($naam) ?> tekens lang.</p>

<?php if (strpos($email, '@')) {
  echo "<p>Uw email adres is geldig.</p>";
  echo "<p>Uw domein is $domein en uw username is $username.</p>";
} else {
  echo "<p>Uw email adres is niet geldig.</p>";
} ?>

<p><?php echo htmlentities($tekst, ENT_QUOTES, "KOI8-R") ?></p>
<p><?php echo strip_tags($tekst2) ?></p>
<p>Tags: <?php echo $tags2 ?>
<p>Score: <?php echo str_repeat('*', 10) ?>
  
</body>
</html>