
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
    foreach($_POST['recall'] as $values){
        echo $_POST['phone'];
    } 
    
   };

?>

<?php

$fname = $_GET['firstname']; 
$lname = $_GET['lastname'];
if($_GET['fName']=='false'){
    $fnameErr = "First name is required"; /*set value to show  notif*/
    $fname ="";
}
if($_GET['lName']=='false'){
    $lnameErr = "First name is required"; /*set value to show  notif*/
    $lname    ="";
}


?>



<P> Merci pour votre notation :
<?php 
echo calculRate($_POST['question1']+$_POST['question2']+$_POST['question3']) ;
?> 
<p>


