<?php

function get_connection(){
    $dsn = DB_TYPE.':dbname='.DB_NAME.';host='.DB_HOST;
    $user = DB_USER;
    $password = DB_PASS;

    $connection = new PDO($dsn, $user, $password);
    return $connection;
}

function select($query, $one_row=false, $params=[]){
    $connection = get_connection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);

    $result = [];
    if ($success === true){
        if ($one_row === false){
            $result = $statement->fetchAll();
        } else {
            $result = $statement->fetch();
        }
    } else {
        die ('Sikertelen végrehajtás');
    }

    $statement->closeCursor();
    $connection = null;

    return $result;
}

function delete($query, $params = []){
    $connection = get_connection();
    $statement = $connection->prepare($query);
    $success = $statement->execute($params);

    $statement->closeCursor();
    $connection = null;

    return $success;
}

function insert_into($update, $params = []){
    $connection = get_connection();
    $statement = $connection->prepare($update);
    $success = $statement->execute($params);

    $statement->closeCursor();
    $connection = null;

    return $success;
}

function update($update, $params = []){
    $connection = get_connection();
    $statement = $connection->prepare($update);
    $success = $statement->execute($params);

    $statement->closeCursor();
    $connection = null;

    return $success;
}