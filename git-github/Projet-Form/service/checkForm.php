
<?php
/*
----------------------------------V1------------------------------------
*/


function checkForm(array $post) :array
    {
        $messageError = [];
    
        if ($post['lastname'] === "" || strlen($post['lastname']) < 2) {
            $messageError['lastname'] = "Ce champs doit contenir au moins de ux caractères";
        }
    
        if ($post['firstname'] === "" || strlen($post['firstname']) < 2) {
            $messageError['firstname'] = "Ce champs doit contenir au moins de ux caractères";
        }
    
        if (!preg_match('#^0[0-79][0-9]{8}$#', $post['phone'])) {
            $messageError['phone'] = "La saisie n'a pas le format d'un numéro de téléphone.";
        }
    
        if (!preg_match('#202[0-9]-[0-1][0-9]-[0-3][0-9]$#', $post['date'])) {
            $messageError['date'] = "La saisie n'a pas le format d'une date.";
        }
    
        if ($post['date'] > date('Y-m-d')) {
            $messageError['date'] = "La date ne peut être posterieur à aujourd'hui.";
        }
    
    
        for ($i = 1; $i <= 3; $i++) {
            if (!isset($post['question' . $i])) {
                $messageError['question' . $i] = "La réponse à cette question est obligatoire";
            }
        }
    
        if (isset($post['question1']) && !in_array($post['question1'], ['2', '1', '0'], true)) {
            $messageError['question1'] = "La réponse à cette question est obligatoire";
        }
    
        if (isset($post['question2']) && !in_array($post['question2'], ['2', '1', '0'], true)) {
            $messageError['question2'] = "La réponse à cette question est obligatoire";
        }
    
        if (isset($post['question3']) && !in_array($post['question3'], ['1', '-1'], true)) {
            $messageError['question3'] = "La réponse à cette question est obligatoire";
        }
    
        if (!is_string($post['message'])) {
            $messageError['message'] = "Un problème est survenu avec ce champs";
        }
    
        if (isset($post['recall']) && $post['recall'] !== 'true') {
            $messageError['recall'] = "Un problème est survenu avec ce champs";
        }
    
        return $messageError;
    }



/*
----------------------------------V2------------------------------------
*/

    //  cette Condition ne vas jamais  s'executer: 
    // c'est la version 2 des gestions des erreures en cours de developpement:

   if (2>4) {
 
  
    $fnameErr =$lnameErr= $phoneErr ="";
    $questionErr=$dateFormatErr = $dateErr = "";
    $questionErr =$q1err=$q2err= $q3err=$msgErr ="";


    if (empty($_POST["firstname"])) {
      $fnameErr = "Name is required";
    } else {
        $name = test_input($_POST["firstname"]);
    }
    

    if (empty($_POST["lastname"])) {
        $lnameErr = "Name is required";
    } else {
        $name = test_input($_POST["lastname"]);
    }

    if (!preg_match('#^0[0-79][0-9]{8}$#', $_POST['phone'])) {
        $phoneErr= "La saisie n'a pas le format d'un numéro de téléphone.";
    }

    if (!preg_match('#202[0-9]-[0-1][0-9]-[0-3][0-9]$#', $_POST['date'])) {
        $dateFormatErr = "La saisie n'a pas le format d'une date.";
    }

    if ($_POST['date'] > date('Y-m-d')) {
        $dateErr = "La date ne peut être posterieur à aujourd'hui.";
    }


    for ($i = 1; $i <= 3; $i++) {
        if (!isset($post['question' . $i])) {
            $questionErr.$i = "La réponse à cette question est obligatoire";
        }
    }

    if (isset($_POST['question1']) && !in_array($_POST['question1'], ['2', '1', '0'], true)) {
        $q1err= "La réponse à cette question est obligatoire";
    }

    if (isset($_POST['question2']) && !in_array($_POST['question2'], ['2', '1', '0'], true)) {
        $q2err = "La réponse à cette question est obligatoire";
    }

    if (isset($_POST['question3']) && !in_array($_POST['question3'], ['1', '-1'], true)) {
        $q3err = "La réponse à cette question est obligatoire";
    }

    if (!is_string($_POST['message'])) {
        $msgErr = "Un problème est survenu avec ce champs";
    }

    if (isset($post['recall']) && $_POST['recall'] !== 'true') {
        $recallErr = "Un problème est survenu avec ce champs";
    }
   


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

}