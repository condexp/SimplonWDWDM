<?php

$path = dirname(__DIR__);

try {
    $page = isset($_GET['page']) ? $_GET['page'] : 'post.home';
    //$page=" C:\wamp64\www\blogProcdurale\public\index.php";
    // var_dump($page);
    if ($page === 'post.home') {
        require $path . '/controller/postController.php';
        var_dump($path . '/controller/postController.php');
        home();
    } elseif ($page === 'post.show') {
        require $path . '/controller/postController.php';
        show();
    } elseif ($page === 'user.connect') {
        require $path . '/controller/userController.php';
        connect();
    } else {
        throw new Exception('404');
    }
} catch (Exception $e) {
    require $path . '/controller/errorController.php';
    error($e);
}

