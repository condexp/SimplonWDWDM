<?php

// Ceci est un commentaire sur une ligne

/*
Ceci est 
un commentaire 
sur plusieurs lignes
*/
// En Ligne de commande pour ouvrir le serveur interne  de php:
// php -S localhost:8000

// Affichage
echo "Hello World !";
echo "<br>";

// Variable = nom+ valeur +type

$var1= 2; // type integer

$var2="Hello"; // type String

$var3=true; // type boolean


echo $var1,"<br>",$var2, "<br>", $var3 ;

// var_dump()  permet d'afficher le type et la valeur d'une variable

var_dump($var1);
echo "<br>";
var_dump($var2);
//die();
echo "<br>";
var_dump($var3);
echo "<hr>";

$number1=20;
$number2=10;
$number1 +=$number2;
$number1 -=$number2;
$number1 *= $number2;
$number1 /=2 ;
echo $number1;

echo "<br>";
echo "le resultat est 100";
echo "<hr>";

$nom = "CONDE";
$prenom="Abdoulaye";
$nomComplet=$nom.' '.$prenom;

echo "je suis " .$prenom. "<br>";
echo "je suis " .$nom. "<br>";
echo "je suis " .$nomComplet. "<br>";
echo 'Il as dit "Hello"';
echo "<hr>";

echo $nom."<br>";
$nom.=$prenom;
echo $nom."<br>";
echo "<hr>";


// condition

$condition = true;
if ($condition){
    echo "ceci es vrai !!! "."<br>";
}
echo "suite ......";
?>
</hr>
<?php

// les fonctions

// Ecrire une function
function maFonctionQuiFaitUnTruc()
{
    echo "Je fais un truc";
}

function maFonctionQuiRetourneUnTruc()
{
    return "Je retourne un truc";
}

// Appeler une fonction
maFonctionQuiFaitUnTruc();
echo "<br>";
var_dump(maFonctionQuiRetourneUnTruc());
echo "<hr>";


// Ecrire et appeler une fonction avec des paramètres
function maFonction(string $truc, string $maniere): string //pensez à typer vos fonctions
{
    return "je fais du $truc trop $maniere !";
}

$var = maFonction("velo", "bien");

echo $var . "<hr>";


//D'autres types de variables
$var1 = 2.5; // type float
$var2 = null; // type : NULL
var_dump($var1);
echo "<br>";
var_dump($var2);
echo "<hr>";

// les tableaux (type array)

// les tableaux numérotés
$array = [5, true, 3.5, "jean"];

//$array contient les varaibles :
$array[0] = 5;
$array[1] = true;
$array[2] = 3.5;
$array[3] = "jean";

var_dump($array);
echo "<br>";

// On peut créer manuellement un tableau numéroté
$array[0] = "jean";
$array[1] = "abdel";
$array[2] = "julie";
var_dump($array);   // Pourquoi jean est-il également présent en quatrième position  ?
echo "<br>";

// On peut ajouter les valeurs les unes à la suites des autres
$array = [];
$array[] = "rouge";
$array[] = "orange";
$array[] = "jaune"; // Remplacez cette ligne par $array[10] = "jaune" et observer
$array[] = "vert";

var_dump($array);
echo "<hr>";


// Les tableaux associatifs clef => valeur
$array = [
    'nom' => 'ghastine',
    'prenom' => 'camile',
    'age' => 45,
    'developpeur' => true
];

var_dump($array);
echo "<br>";
// Remarque : les tableaux numérotés sont des tableaux associatifs dont la clef est un entier 


// On peut le modifier 
$array['age'] = 25;
var_dump($array);
echo "<br>";


// On peut le compléter 
$array['force'] = 'trop fort';

var_dump($array);
echo "<hr>";

// Parcourir un tableau avec la boucle foreach
foreach ($array as $value) {
    echo $value . "<br>";
}
echo "<hr>";

foreach ($array as $key => $value) {
    echo $key . " : " . $value . "<br>";
}
echo "<hr>";
?>


<form method="" action="cible.php">
    <!-- Champs du formulaire + boutton submit -->
</form>
<!--
method : Il existe 2 types de méthodes pour les formulaires GET et POST
- la méthodes GET fait transiter les données dans l'url que l'on récupère avec la variable superglobales $_GET
- la méthodes POST ne fait pas transiter les données dans l'url et permet de passer beaucoup plus d'informations.
    On récupère les données avec la variable superglobales $_POST
action: sert à définir la page appelée par le formulaire qui recevra et traitera un $_POST 
( si action ="" le formulaire s'appelle lui même)
-->


<h1>Les formulaires</h1>

<?php
if (!$_GET) {
?>
    <form method="GET" action="">
        <p>
            <label for="firstName">nom : </label>
            <input type="text" name="firstName" required />
        </p>
        <p>
            <label for="choice">note sur 5: </label>
            <select name="choice">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </p>
        <p>
            Êtes-vous satisfait du service :
            <input type="radio" name="satisfaction" value="true" id="id1" /> <label for="id1">oui</label>
            <input type="radio" name="satisfaction2" value="false" id="id2" checked="checked" /> <label for="id2">non</label>
        </p>
        <p>
            <label for="phone">Votre numéro de téléphone:</label>
            <input type="tel" id="phone" name="phone" pattern="0[1-7][0-9]{8}">
        </p>
        <input type="hidden" name="hiddenParam" value="myHiddenValue" />
        <p>
            <label for="message">message : </label>
            <br>
            <textarea name="message" rows="8" cols="45"></textarea>
        </p>
        <p>
            <input type="checkbox" name="call" value="true" id="case" /> <label for="case">j'accepte d'être rappelé</label>
        </p>
        <p>
            <input type="submit" value="Envoyer" required />
        </p>
    </form>
<?php
} else {
    echo '<h2>Réponses au formuliare</h2>';
    foreach ($_GET as $key => $value) {
        echo "<p>" . $key . " : " . $value . "</p>";
    }
}
?>

<a href="?">Recommencer</a>

<!-- Pour une requête POST, la méthode d'envoie est différente,
 mais la logique est la même, il suffit de remplacer tous les GET du code par des POST -->
