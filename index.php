<?php

    function dump($a)
    {
        echo '<pre>';
        var_dump($a);
        echo '</pre>';
    }

    try {
        $conn = new PDO('mysql:host=127.0.0.1;dbname=blogic', 'root', 'root');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }


    $statement = $conn->prepare('SELECT * FROM posts;');
    $statement->execute();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    dump($statement->fetchAll());