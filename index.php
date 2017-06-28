<?php

include './db.php';
include './blogic.php';

    function dump($a)
    {
        echo '<pre>';
        var_dump($a);
        echo '</pre>';
    }


    dump('FIRST POST: ');
    $post = fetchPostById(1);
    dump($post);

    dump('USER WHO POSTED IT: ');
    $user = fetchUserWhoPosted($post);
    dump($user);