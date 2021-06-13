<html>
 <head>
  <title>Simplon</title>
  </head>
 <body>

<?php



$article = "le";
$animal = "chat";
$verbe = "est";
$complement = "mort";

$phrase = array($article,$animal,$verbe,$complement);
//print_r($phrase);



$sentences  = "Le chat est mort";
$mots = explode(" ", $sentences);
echo $mots[0]; // mots Le
echo $mots[1]; // chat
echo $mots[2]; // est
echo $mots[3]; // mort


?>
</body>
</html>