<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BWB\Framework\mvc\models;

/**
 * Description of StaffModel
 *
 * @author loic
 */
class StaffModel {
    private $id,$serial,$firstname,$lastname,$hire_date,$leave_date,$post,$mail,
    $tel,$address,$available,$team_id,$gender,$avatar,$birthdate;
    
    //GETTER
    function getLastname() {
        return $this->lastname;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getPost() {
        return $this->post;
    }

    function getAvatar(){
        return $this->avatar;
    }


    //SETTER
    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setPost($post) {
        $this->post = $post;
    }

    function setAvatar($avatar){
        $this->avatar = $avatar;
    }
    
} 
