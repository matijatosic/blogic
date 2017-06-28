<?php

include './db.php';

    function dump($a)
    {
        echo '<pre>';
        var_dump($a);
        echo '</pre>';
    }



    dump('POSTS: ');
    $posts = fetchQueryResults('SELECT * FROM posts;');
    dump($posts);