<?php

/**
 * Exercice 5
 */

// Ecrire du code ici





// Initialiser correctement les deux variables ci-dessous:

// $Shakespeare doit pouvoir prendre 2 valeurs : "est" ou "n'est pas"
$rectangle = new Rectangle($_POST['length'],$_POST['width']);


$Shakespeare=$rectangle->is_square() ? 'est':'n\'est pas';

//var_dump($Shakespeare);
// $area représente l'air du carré.
$area = $rectangle->area();
