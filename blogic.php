<?php

function fetchFromTableById($table, $id)
{
    $rows = fetchQueryResults('SELECT * FROM ' . $table . ' WHERE id = ' . $id . ';');
    return $rows;
}


function fetchPostById($id)
{
    $posts = fetchFromTableById('posts', $id);
    return $posts[0];
}

function fetchUserById($id)
{
    $users = fetchFromTableById('users', $id);
    return $users[0];
}

