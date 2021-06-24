<?php
$db = null;
/** accès à la base de données PDO */

function getDB(){
    global $db;
    if(! $db instanceof \PDO){
        $dsn = 'mysql:dbname=rhmanagement;host=172.17.0.1:2020';
        $user= 'root';
        $password = 'root';

        $db = new PDO($dsn, $user, $password);
        
    }
    return $db;  

}

function getEmployeePresent(){
    $present = getDB()->query('SELECT count(present) FROM rhmanagement.employee_operation WHERE employee_operation.present = 1;')->fetch(PDO::FETCH_ASSOC);
    return $present;
}


function getEmployeeAbsent(){
    $absent = getDB()->query('SELECT count(present) FROM rhmanagement.employee_operation WHERE employee_operation.present = 0;')->fetch(PDO::FETCH_ASSOC);
    return $absent;
}
