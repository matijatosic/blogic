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

    dump('USER WHO POSTED IT: ');
    $users = fetchQueryResults('SELECT * FROM users WHERE id = ' . $posts[0]['user_id'] . ';');
    dump($users[0]);