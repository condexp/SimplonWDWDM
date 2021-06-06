<?php

require 'service/loader.php';

if ($_POST === []) {
    require 'view/form.php';
} else {
   $error = checkForm($_POST);

    if ($error !== []) {
        require 'view/form.php';
    } else {
        require 'view/validationForm.php';
    }
}




