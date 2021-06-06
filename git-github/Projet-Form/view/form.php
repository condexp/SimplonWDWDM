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

    <div class="container">

        <h1> Amazin</h1>

        <form class="mb-5" method="POST" action="index.php">
            <fieldset>
                <legend>Formulaire de satisfaction</legend>
                <div class="form-group">
                    <label for="lastname" class="form-label mt-4">Nom : </label>
                    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Entrer votre nom" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : ''  ?>" required="">
                    <span class="badge bg-danger"><?php if (isset($error['lastname'])) echo $error['lastname'] ?></span>
                </div>
                <div class="form-group">
                    <label for="firstname" class="form-label mt-4">Prénom : </label>
                    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Entrer votre prénom" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''  ?>" required="">
                    <span class="badge bg-danger"><?php if (isset($error['firstname'])) echo $error['firstname'] ?></span>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label mt-4">Numéro de téléphone : </label>
                    <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="0123456789" value="<?= isset($_POST['phone']) ? $_POST['phone'] : ''  ?>" required="">
                    <span class="badge bg-danger"><?php if (isset($error['phone'])) echo $error['phone'] ?></span>
                </div>
                <div class="form-group">
                    <label for="date" class="form-label mt-4">Date d'achat : </label>
                    <input type="date" name="date" class="form-control" id="date" aria-describedby="dateHelp" value="<?= isset($_POST['date']) ? $_POST['date'] : ''  ?>">
                    <span class="badge bg-danger"><?php if (isset($error['date'])) echo $error['date'] ?></span>
                </div> 
                <legend class="mt-4">L'agent a-t-il été agréable ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="2" required="" <?= isset($_POST['question1']) && $_POST['question1'] === '2' ? 'checked' : '' ?>>
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="0" required="" <?= isset($_POST['question1']) && $_POST['question1'] === '0' ? 'checked' : '' ?>>
                        non </label>
                </div>
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios3" value="1" required="" <?= isset($_POST['question1']) && $_POST['question1'] === '1' ? 'checked' : '' ?>>
                        sans avis
                    </label>
                </div>
                <span class="badge bg-danger"><?php if (isset($error['question1'])) echo $error['question1'] ?></span>

                <legend class="mt-4">L'agent a-t-il compris votre problème</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="2" required="" <?= isset($_POST['question2']) && $_POST['question2'] === '2' ? 'checked' : '' ?>>
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="0" required="" <?= isset($_POST['question2']) && $_POST['question2'] === '0' ? 'checked' : '' ?>>
                        non </label>
                </div>
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="1" required="" <?= isset($_POST['question1']) && $_POST['question2'] === '1' ? 'checked' : '' ?>>
                        sans avis
                    </label>
                </div>
                <span class="badge bg-danger"><?php if (isset($error['question2'])) echo $error['question2'] ?></span>
                <legend class="mt-4">L'agent a-t-il résolu votre problème ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="1" required="" <?= isset($_POST['question3']) && $_POST['question3'] === '1' ? 'checked' : '' ?>>
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="-1" required="" <?= isset($_POST['question3']) && $_POST['question3'] === '-1' ? 'checked' : '' ?>>
                        non </label>
                </div>
                <span class="badge bg-danger"><?php if (isset($error['question3'])) echo $error['question3'] ?></span>

                <div class="form-group">
                    <label for="message" class="form-label mt-4">Dites-nous en plus : </label>
                    <textarea name="message" class="form-control" id="message" rows="3"><?= isset($_POST['message']) ? $_POST['message'] : ''  ?></textarea>
                </div>
                <legend class="mt-4">Checkboxes</legend>
                <div class="form-check">
                    <input name="recall" class="form-check-input" type="checkbox" value="true" id="recall" <?= isset($_POST['recall']) ? 'checked' : ''  ?>>
                    <label class="form-check-label" for="recall">
                        Cochez-cette case si vous acceptez d'être rappelé.
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </fieldset>
        </form>

    </div>

</body>

</html>