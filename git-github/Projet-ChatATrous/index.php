<?php

require 'model/model.php';
$messages=findAll();

if (isset($_POST['pseudo']) && isset($_POST['message'])) {
              
    create( $_POST['pseudo'],$_POST['message']);
}

require 'view/default.php';

