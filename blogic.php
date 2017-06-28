<?php

function fetchFromTableById($table, $id)
{
    return fetchSingleQueryResult('SELECT * FROM ' . $table . ' WHERE id = ' . $id . ';');
}


function fetchPostById($id)
{
    return fetchFromTableById('posts', $id);
}

function fetchUserById($id)
{
    return fetchFromTableById('users', $id);
}

