<?php

function fetchAllPosts()
{
    return fetchAllFromTable('posts');
}

function fetchPostById($id)
{
    return new DBRow('posts', $id);
}

function fetchUserById($id)
{
    return new DBRow('users', $id);
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