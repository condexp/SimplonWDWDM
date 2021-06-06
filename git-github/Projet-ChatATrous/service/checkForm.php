<?php

function checkForm(array $post): array
{
    $errors = [];

    foreach ($post as $key => $value) {
        $key = $key === 'content' ? 'message' : $key;
        if ($value === '') {
            $errors[] = "Le " . $key . " doit être renseigné";
        }
    }

    return $errors;
}

// version 2 

if (1>2){

    function checkFormV1(array $post):array
{
$errors =[];

    if ($post['pseudo']==='')
    {
        $errors[]="pseudo doit etre renseingé";
    }
    if ($post['content']==='')
    {
        $errors[]="pseudo doit etre renseingé";
    }
    return $errors;
}
}
?>