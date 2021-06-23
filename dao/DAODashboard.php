<?php

namespace BWB\Framework\mvc\dao;

use BWB\Framework\mvc\DAO;
use PDO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAODefault
 *
 * @author loic
 */
class DAODashboard extends DAO
{
    //put your code here

    public function create($array)
    {
    }

    public function delete($id)
    {
    }
    public function getAll()
    {
    }

    //somme des effectifs totaux
    public function getSumEmployee()
    {
        return $this->getPdo()->query(
            "SELECT COUNT(serial)
            FROM rhmanagementdb.employee
            WHERE serial !='';
            "
        )->fetchAll(PDO::FETCH_CLASS, "\\BWB\\Framework\\mvc\\models\\EmployeeModel");
    }

    //somme des opérations non affectées/affectées
    public function sumNonAffectedOperations()
    {
        return $this->getPdo($this->job, $this->nb)->query(
            "SELECT COUNT(employee_operation.present)
            FROM mydb.employee_operation
            INNER JOIN mydb.operation ON employee_operation.operation_id = operation.id
            WHERE operation.job = $this->job
            AND employee_operation.present = $this->nb;" // A MOFIDIER

        )->fetchAll(PDO::FETCH_CLASS, "\\BWB\\Framework\\mvc\\models\\OperationModel");
    }

    //somme des équipes
    public function getTeamNumber()
    {
        return $this->getPdo()->query(
            "SELECT COUNT(*)
            FROM team;
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
