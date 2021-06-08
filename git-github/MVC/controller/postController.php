<?php

function home()
{
    require dirname(__DIR__) . '/model/postRepository.php';
    if ($posts = findAll())
    {
        render('home', compact('posts'));
    };

    require dirname(__DIR__) .   '/controller/errorController.php';
}

function show()
{
    require dirname(__DIR__) .  '/model/postRepository.php';
    
     if ($post = findOneById($_GET['id'])){
        render('show', compact('post'));
     }else {
        require dirname(__DIR__) .  '/controller/errorController.php';
   
     }

    
}

function render($view, $datas)
{
    //var_dump($datas);
    var_dump($view);
   
    extract($datas);

    //var_dump(extract($datas));
    ob_start();
    require dirname(__DIR__) .  '/view/post/'. $view .'.php';
    $content = ob_get_clean();

    require dirname(__DIR__) . '/view/base.php';
}
