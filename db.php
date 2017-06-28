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


function getPreparedStatement($query, $params)
{
    $conn = getConnection();
    $statement = $conn->prepare($query);
    foreach($params as $key => $value) {
        $statement->bindParam($key, $value);
    }
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    return $statement;
}


function fetchAllQueryResults($query, $params = [])
{
    $statement = getPreparedStatement($query, $params);
    return $statement->fetchAll();
}

function fetchSingleQueryResult($query, $params = [])
{
    $statement = getPreparedStatement($query, $params);
    return $statement->fetch();
}


function fetchAllFromTable($table)
{
    return fetchAllQueryResults('SELECT * FROM ' . $table . ';');
}

function fetchFromTableById($table, $id)
{
    return fetchSingleQueryResult('SELECT * FROM ' . $table . ' WHERE id = :id;', [':id' => $id]);
}

function fetchRelatedRow($row, $table, $foreignKey)
{
    return fetchFromTableById($table, $row[$foreignKey]);
}

function fetchRowsRelatedToRow($row, $table, $foreignKey)
{
    return fetchAllQueryResults("SELECT * FROM $table WHERE $foreignKey = :row_id", ['row_id' => $row['id']]);
}
