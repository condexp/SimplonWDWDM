<?php

echo '<hr>';
// affichage de tous les informations du formulaire : NOTE NOTE : Super globale.

?>
<?php

foreach ($_POST as $key => $value){
    echo "<p>" . $key . " : " . $value . "</p>";
}

echo '<hr>';

?>
<?php
// affichage des etoiles

function calculRate(string $score): string
    {
        $rate = '';

        if ($score === '-1') $score = 0;

        for ($i = 1; $i <= $score; $i++) {
            $rate .= '⭐';
        }
        for ($i = $score + 1; $i <= 5; $i++) {
            $rate .= '⚫';
        }

        return $rate;
    }


?>
<?php
//afficher les numero de telephones.
// SI Checkboxes VAUT TRUE ON AFFICHE LE NUMERO SAISI 
//Cochez-cette case si vous acceptez d'être rappelé.

if(!(empty($_POST['recall']))){
   
        echo $_POST['phone'];
    } 
    
  

?>



<P> Merci pour votre notation :
<?php 


// Gestion des erreurs au niveau des champs input lastname
// cette  function peut etre appliquer a tous les champs du formulaire 
// tout en ajoutant des nouvelles paramettres entrant 
function errofunction (string $lname):string {
$lnameerror ="";
if (isset($_POST["lastname"])) {
   return  $lnameerror = "le nom est obligatoire";
  }
   else {
   return $lname = ($_POST["lastname"]);
  }

};

echo errofunction($_POST['lastname']);
echo "<hr>";
echo calculRate($_POST['question1']+$_POST['question2']+$_POST['question3']) ;
?> 
<p>


