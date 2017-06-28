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
    return $post->getRelation('users', 'user_id');
}

function fetchCommentsOnPost($post)
{
    return $post->getInverseRelation('comments', 'post_id');
}

function fetchPostsByUser($user)
{
    return $user->getInverseRelation('posts', 'user_id');
}