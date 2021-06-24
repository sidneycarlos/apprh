<?php
namespace BWB\Framework\mvc\dao;
use BWB\Framework\mvc\DAO;
use BWB\Framework\mvc\models\EmployeeModel;
//en php 7 pour pouvoir utliser les methodes avec les (::) 
use PDO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOEmployee
 *
 * @author loic
 */
class DAOEmployee extends DAO{
    //put your code here
    public function create($array) {
        
    }

    public function delete($id) {
        
    }

    public function getAll() {
        return $this->getPdo()->query(
            "SELECT avatar, firstname, lastname, post, present
            FROM employee
            INNER JOIN employee_operation
            ON employee.id = employee_operation.employee_id
            WHERE employee_operation.present = 1;
            "
            )->fetchAll(PDO::FETCH_CLASS, "\\BWB\\Framework\\mvc\\models\\EmployeeModel");
    }
    
    public function getAllBy($filter) {
        
    }

    public function retrieve($id) {
        
    }

    public function update($array) {
        
    }

} 