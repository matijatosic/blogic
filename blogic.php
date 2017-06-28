<?php


function fetchPostById($id)
{
    $posts = fetchQueryResults('SELECT * FROM posts WHERE id = ' . $id . ';');
    return $posts[0];
}

function fetchUserById($id)
{
    $users = fetchQueryResults('SELECT * FROM users WHERE id = ' . $id . ';');
    return $users[0];
}

