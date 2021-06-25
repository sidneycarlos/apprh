<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BWB\Framework\mvc\models;

/**
 * Description of OperationModel
 *
 * @author loic
 */
class OperationModel {
    private $job;
    private $present;
    
    //GETTER
    function getJob() {
        return $this->job;
    }
    
    function getPresentOperation() {
        return $this->present;
    }
    
    //SETTER
    function setJob($job) {
        $this->job = $job;
    }

    function setPresentOperation($present) {
        $this->present = $present;
    }

    
    
} 
