<?php

function fetchFromTableById($table, $id)
{
    return fetchSingleQueryResult('SELECT * FROM ' . $table . ' WHERE id = :id;', [':id' => $id]);
}


function fetchPostById($id)
{
    return fetchFromTableById('posts', $id);
}

function fetchUserById($id)
{
    return fetchFromTableById('users', $id);
}


function fetchUserWhoPosted($post)
{
    return fetchUserById($post['user_id']);
}

function fetchCommentsOnPost($post)
{
    return fetchAllQueryResults('SELECT * FROM comments WHERE post_id = :post_id;', [':post_id' => $post['id']]);
}

function fetchPostsByUser($user)
{
    return fetchAllQueryResults('SELECT * FROM posts WHERE user_id = :user_id;', [':user_id' => $user['id']]);
}