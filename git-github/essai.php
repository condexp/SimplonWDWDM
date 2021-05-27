<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
    <meta name="author" content="Camile Ghastine">

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script type="text/javascript">
  
    $('#input').on('input',function(e){
        $("#text").html($(this).val());
    });
    </script>
</head>

<body>

    <div class="container">

        <h1 class="mb-5">AMAZIN</h1>

        <h2>Questionnaire de satisfaction</h2>
<?php
//$resultesss=2;
if ($_GET == null) {
?> 
     <p>Vous avez contacté notre service client et nous aimerions avoir votre avis sur la qualité de ce service</p>
     <p>Commencez le questionnaire : <a href="?step=1" role="button" class="btn btn-success">Commencer</a></p>
<?php
}elseif (isset($_GET['step'])  && $_GET['step'] === '1') {
?>
   
    <h2>Question 1</h2>
        <p>L'agent a-t-il été agréable ?</p>

        <a href="?step=2&result=2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->       
        <a href="?step=2&result=0" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
        <a href="?step=2&result=1" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->
   
       
   
 
<?php


}elseif (isset($_GET['step']) && $_GET['step'] === '2') {
?>
    <h2>Question 2</h2>
        <p>L'agent a-t-il compris votre problème ?</p>
        <a href="?step=3&result=<?=$_GET['result']+2?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
        <a href="?step=3&result=<?=$_GET['result']+1?>" role="button" class="btn btn-danger">non</a> <!-- rapporte 1 point -->
        <a href="?step=3&result=<?=$_GET['result']+0?>" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 0 point -->
<?php
}elseif (isset($_GET['step']) && $_GET['step'] ==='3') {
?> 
   
    <h2>Question 3</h2>
        <p>L'agent a-t-il résolu votre problème ?</p>
        <a href="?step=4&result=<?=$_GET['result']+1?>" role="button" class="btn btn-success">oui</a> <!-- rapporte 1 point -->
        <a href="?step=5&result=<?=$_GET['result']-1?>" role="button" class="btn btn-danger">non</a> <!-- rapporte -1 point -->
<?php
}elseif (isset($_GET['step']) && $_GET['step'] === '5' ) {
?> 
    <p>Votre problème n'a pas été résolu.</p>
        <p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
        <!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->
        <!-- Cet traitement correspont pas au contrainte du projet -->
        <p>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" onkeyup="mySpan.innerHTML=this.value">
        <!-- Afficher ici le numéro de téléphone qui s'affiche au fur et à mesure de la saisie-->
        <p>Votre numéro est:</p>        
        <p><span id="mySpan"></span></p>
        <a href="" role="button" class="btn btn-success">Valider</a> <!-- Validation du numéro de téléphone -->
        <!-- Cette action va nous renvoyer à la premiere  question c'est a dire step 1-->
        <!-- NB: l'idee du projet est de rendre cette action plus dynamique  en vidant la pile du clavier et initialiser le result à zero-->
        <a href="?step=1" role="button" class="btn btn-success">Ne pas etre rappeler</a><!-- -- Validation du numéro de téléphone -->
        
        <?php 
         if ($_GET['result']==='0' && $_GET['result']==='-1' ){  
            echo '<p class="mt-5">Merci pour votre notation :⚫⚫⚫⚫⚫ </p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->';
        } elseif ($_GET['result']==='1'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⚫⚫⚫⚫ </p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->';
        }elseif ($_GET['result']==='2'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⭐⚫⚫⚫ </p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->';
        }elseif ($_GET['result']==='3'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⭐⭐⚫⚫ </p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->';
        }elseif ($_GET['result']==='4'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⭐⭐⭐⚫ </p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->';
        }elseif ($_GET['result']==='5'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⭐⭐⭐⭐</p> <!-- le nombre d\'étoiles représente le nombre de points cumulés -->';
        }
           ?>       

        <!-- Si un téléphone à été saisi, afficher "Vous serez rappelé très prochainement au #numéro de téléphone#" -->

        <p class="mt-5">
        <a href="?step=1" role="button" class="btn btn-danger">Recommencer</a>
    </p>



<?php 
}if (isset($_GET['step']) && $_GET['step'] == '4' ){
?>
    
    <!-- Etape finale : A afficher si "oui" a été répondu à la question 3 ou si l\'étape 4 a été résolue -->
    <?php 

         if ($_GET['result']==='0' && $_GET['result']==='-1' ){  
            echo '<p class="mt-5">Merci pour votre notation :⚫⚫⚫⚫⚫ </p> ';
        } elseif ($_GET['result']==='1'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⚫⚫⚫⚫ </p> ';
        }elseif ($_GET['result']==='2'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⭐⚫⚫⚫ </p> ';
        }elseif ($_GET['result']==='3'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⭐⭐⚫⚫ </p>';
        }elseif ($_GET['result']==='4'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⭐⭐⭐⚫ </p> ';
        }elseif ($_GET['result']==='5'){
            echo '<p class="mt-5">Merci pour votre notation :⭐⭐⭐⭐⭐ </p> ';
        }
           ?>

        <!-- Si un téléphone à été saisi, afficher "Vous serez rappelé très prochainement au #numéro de téléphone#" -->

        <p class="mt-5">
        <a href="?step=1" role="button" class="btn btn-danger">Recommencer</a>
    </p>
   
<?php
}
?>

    </div>
</body>
</html>