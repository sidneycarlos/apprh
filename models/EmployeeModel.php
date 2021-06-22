<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BWB\Framework\mvc\models;

/**
 * Description of EmployeeModel
 *
 * @author loic
 */
class EmployeeModel {
    private $firstname,$lastname;
    
    function getLastname() {
        return $this->lastname;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    
}
