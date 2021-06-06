
<p>Merci pour votre notation : <?= calculRate($_POST['question1'] + $_POST['question2'] + $_POST['question3']); ?></p> 

<?php
if (isset($_POST['recall']) && $_POST['question3'] === '-1') {
    echo 'Vous serez rapellé au : ' . $_POST['phone'];
}
