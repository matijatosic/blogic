<?php

function fetchFromTableById($table, $id)
{
    return fetchSingleQueryResult('SELECT * FROM ' . $table . ' WHERE id = :id;', [':id' => $id]);
}

function fetchRowsRelatedToRow($row, $table, $foreignKey)
{
    return fetchAllQueryResults("SELECT * FROM $table WHERE $foreignKey = :row_id", ['row_id' => $row['id']]);
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
    return fetchRowsRelatedToRow($post, 'comments', 'post_id');
}

function fetchPostsByUser($user)
{
    return fetchRowsRelatedToRow($user, 'posts', 'user_id');
}