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
            "SELECT COUNT(employee_operation.operation_id)
            FROM mydb.employee_operation
            WHERE employee_operation.operation_id = 1;"

        )->fetchAll(PDO::FETCH_CLASS, "\\BWB\\Framework\\mvc\\models\\OperationModel");
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
