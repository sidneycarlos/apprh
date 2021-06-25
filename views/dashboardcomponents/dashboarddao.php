<?php

$db = null;
/** accès à la base de données PDO */

function getDB()
{
    global $db;
    if (!$db instanceof \PDO) {
        $dsn = 'mysql:dbname=mydb;host=172.17.0.1:3306';
        $user = 'root';
        $password = 'root';

        $db = new PDO($dsn, $user, $password);
    }
    return $db;
}

function getEmployeePresent()
{
    $present = getDB()->query('SELECT count(present) FROM mydb.employee_operation WHERE employee_operation.present = 1;')->fetch(PDO::FETCH_ASSOC);
    return $present;
}


function getEmployeeAbsent()
{
    $absent = getDB()->query('SELECT count(present) FROM mydb.employee_operation WHERE employee_operation.present = 0;')->fetch(PDO::FETCH_ASSOC);
    return $absent;
}

function getUncompleteOperations()
{
    $uncomplete = getDB()->query('SELECT count(employee_operation.present)
    FROM mydb.employee_operation
    INNER JOIN mydb.operation ON employee_operation.operation_id = operation.id
    WHERE employee_operation.present = 0;
    ')->fetch(PDO::FETCH_ASSOC);
    
    return $uncomplete;
}

function getSumEmployee()
{
    $sum = getDB()->query('SELECT count(serial) FROM mydb.employee WHERE serial !=\'\';')->fetch(PDO::FETCH_ASSOC);
    return $sum;
    
}

function getTeamNb()
{
    $nbOfTeam = getDB()->query('SELECT count(*) FROM team;')->fetch(PDO::FETCH_ASSOC);
    return $nbOfTeam;
    
}
