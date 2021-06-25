<?php

namespace BWB\Framework\mvc\dao;

use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\OperationModel;
//en php 7 pour pouvoir utliser les methodes avec les (::) 
use PDO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOOperation
 *
 * @author loic
 */
class DAOOperation extends DAO
{
    private $job;
    private $nb;
    //put your code here
    public function create($array)
    {
    }

    public function delete($id)
    {
    }
    

    //to modify
    public function getAll()
    {
        return $this->getPdo()->query(
            "SELECT job
            FROM operation"
        )->fetchAll(PDO::FETCH_CLASS, "\\BWB\\Framework\\mvc\\models\\OperationModel");
    }

    public function getPresentStaff()
    {
        return $this->getPdo()->query(
            "SELECT COUNT(employee_operation.present) AS presentStaff
            FROM mydb.employee_operation
            INNER JOIN mydb.operation ON employee_operation.operation_id = operation.id
            WHERE operation.job = 'conception'
            AND employee_operation.present = 1
            UNION ALL
            SELECT COUNT(employee_operation.present)
            FROM mydb.employee_operation
            INNER JOIN mydb.operation ON employee_operation.operation_id = operation.id
            WHERE operation.job = 'production'
            AND employee_operation.present = 1
            UNION ALL
            SELECT COUNT(employee_operation.present)
            FROM mydb.employee_operation
            INNER JOIN mydb.operation ON employee_operation.operation_id = operation.id
            WHERE operation.job = 'montage'
            AND employee_operation.present = 1
            UNION ALL
            SELECT COUNT(employee_operation.present)
            FROM mydb.employee_operation
            INNER JOIN mydb.operation ON employee_operation.operation_id = operation.id
            WHERE operation.job = 'conditionnement'
            AND employee_operation.present = 1
            UNION ALL
            SELECT COUNT(employee_operation.present)
            FROM mydb.employee_operation
            INNER JOIN mydb.operation ON employee_operation.operation_id = operation.id
            WHERE operation.job = 'preparateur'
            AND employee_operation.present = 1;
            "
        )->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getStaff()
    {
        return $this->getPdo()->query(
            "SELECT COUNT(employee_operation.operation_id) AS totalStaff
            FROM mydb.employee_operation
            WHERE employee_operation.operation_id = 1
            UNION ALL
            SELECT COUNT(employee_operation.operation_id)
            FROM mydb.employee_operation
            WHERE employee_operation.operation_id = 2
            UNION ALL
            SELECT COUNT(employee_operation.operation_id)
            FROM mydb.employee_operation
            WHERE employee_operation.operation_id = 3
            UNION ALL
            SELECT COUNT(employee_operation.operation_id)
            FROM mydb.employee_operation
            WHERE employee_operation.operation_id = 4
            UNION ALL
            SELECT COUNT(employee_operation.operation_id)
            FROM mydb.employee_operation
            WHERE employee_operation.operation_id = 5;
            "
        )->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function updateOperation($idOperation, $idEmployee)
    {
        return $this->getPdo()->query(
            "UPDATE mydb.employee_operation
            SET operation_id = $idOperation
            WHERE employee_id = $idEmployee;            
            "
        )->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllBy($filter)
    {
    }

    public function retrieve($id)
    {
    }

    public function update($array)
    {
    }
}
