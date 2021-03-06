<?php

include './db.php';
include './DBRow.php';
include './blogic.php';

    function dump($a)
    {
        echo '<pre>';
        var_dump($a);
        echo '</pre>';
    }


    dump('ALL POSTS: ');
    $posts = fetchAllPosts();
    dump($posts);

    dump('FIRST POST: ');
    $post = fetchPostById(1);
    dump($post);

    dump('USER WHO POSTED IT: ');
    $user = fetchUserWhoPosted($post);
    dump($user);

    dump('COMMENTS ON THE POST: ');
    $comments = fetchCommentsOnPost($post);
    dump($comments);

    dump('ALL POSTS BY THIS USER: ');
    $allPosts = fetchPostsByUser($user);
    dump($allPosts);