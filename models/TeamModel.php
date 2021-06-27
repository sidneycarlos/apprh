<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BWB\Framework\mvc\models;

/**
 * Description of TeamModel
 *
 * @author loic
 */
class TeamModel {
    private $id,$total_staff,$availibility,$assignment;
    
    //GETTER
    
    function getTeamId() {
        return $this->id;
    }
    
    function getTotalStaff() {
        return $this->total_staff;
    }

    function getAvailability() {
        return $this->availibility;
    }

    function getAssignment() {
        return $this->assignment;
    }


    //SETTER

    function setTeamId($id) {
        $this->id = $id;
    }
    function setTotalStaff($total_staff) {
        $this->total_staff = $total_staff;
    }

    function setAvailability($availibility) {
        $this->availability = $availibility;
    }

    function setAssignment($assignment) {
        $this->assignment = $assignment;
    }
    
} 
