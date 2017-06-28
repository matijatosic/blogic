<?php

function getConnection()
{
    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=blogic', 'root', 'root');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}


function getPreparedStatement($query)
{
    $conn = getConnection();
    $statement = $conn->prepare($query);
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}


function fetchAllQueryResults($query)
{
    $statement = getPreparedStatement($query);
    return $statement->fetchAll();
}

function fetchSingleQueryResult($query)
{
    $statement = getPreparedStatement($query);
    return $statement->fetch();
}
