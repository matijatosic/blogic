<?php


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
    return fetchRelatedRow($post, 'users', 'user_id');
}

function fetchCommentsOnPost($post)
{
    return fetchRowsRelatedToRow($post, 'comments', 'post_id');
}

function fetchPostsByUser($user)
{
    return fetchRowsRelatedToRow($user, 'posts', 'user_id');
}