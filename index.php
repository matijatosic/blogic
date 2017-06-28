<?php

include './db.php';

    function dump($a)
    {
        echo '<pre>';
        var_dump($a);
        echo '</pre>';
    }



    dump('FIRST POST: ');
    $posts = fetchQueryResults('SELECT * FROM posts WHERE id = 1;');
    dump($posts[0]);

