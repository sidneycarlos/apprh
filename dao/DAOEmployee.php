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
            "SELECT * FROM employee"
            )->fetchAll(PDO::FETCH_CLASS, EmployeeModel::class);
    }
    
    public function getAllBy($filter) {
        
    }

    public function retrieve($id) {
        
    }

    public function update($array) {
        
    }

}