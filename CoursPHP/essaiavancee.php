<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire satisfaction</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
</head>

<body>

<?php

// Define  the variables and set to empty values
 $lastname=$firstname=$phone=$date=$question1=$question2=$question3
 =$message="";

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lastname = test_input($_POST["lastname"]);
    $firstname = test_input($_POST["firstname"]);
    $phone = test_input($_POST["phone"]);
    $question1 = test_input($_POST["question1"]);
    $question2 = test_input($_POST["question2"]);
    $question3 = test_input($_POST["question3"]);
    $message = test_input($_POST["message"]);
   
  };

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


?>





    <div class="container">

        <h1> Amazin</h1>
<?php var_dump($_POST) ?>




        <form class="mb-5" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend>Formulaire de satisfaction</legend>
                <div class="form-group">
                    <label for="lastname" class="form-label mt-4">Nom : </label>
                    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Enter votre nom" required="">
                </div>
                <div class="form-group">
                    <label for="firstname" class="form-label mt-4">Prénom : </label>
                    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Enter votre prénom" required="">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label mt-4">Numéro de téléphone : </label>
                    <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="0123456789" required="">
                </div>
                <div class="form-group">
                    <label for="date" class="form-label mt-4">Date d'achat : </label>
                    <input type="date" name="date" class="form-control" id="date" aria-describedby="dateHelp" placeholder="01/01/2021">
                </div>
                <legend class="mt-4">L'agent a-t-il été agréable ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="2" required="">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="0" required="">
                        non </label>
                </div>
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios3" value="1" required="">
                        sans avis
                    </label>
                </div>
                <legend class="mt-4">L'agent a-t-il compris votre problème</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="2" required="">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="0" required="">
                        non </label>
                </div>
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="1" required="">
                        sans avis
                    </label>
                </div>
                <legend class="mt-4">L'agent a-t-il résolu votre problème ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="1" required="">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="-1" required="">
                        non </label>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label mt-4">Dites-nous en plus : </label>
                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                </div>
                <legend class="mt-4">Checkboxes</legend>
                <div class="form-check">
                    <input name="recall" class="form-check-input" type="checkbox" value="true" id="recall">
                    <label class="form-check-label" for="recall">
                        Cochez-cette case si vous acceptez d'être rappelé.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </fieldset>
        </form>



    </div>
    <?php


echo "<h2>le rendu du submit</h2>";
echo $lastname;
echo "<br>";
echo $firstname;
echo "<br>";
echo $phone;
echo "<br>";
echo $question1;
echo "<br>";
echo $question2;
echo "<br>";
echo $question3;
echo "<br>";
echo $question2;
?>
</body>

</html>