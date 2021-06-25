<?php
namespace BWB\Framework\mvc\models;
use BWB\Framework\mvc\UserInterface;

class MSUserModel implements UserInterface{

    private $id, $displayName , $mail ;

    public function getPassword() {
        return "";
    }

    public function getRoles() {
        return [
            "registered"
        ];
    }

    public function getUsername() {
        return $this->displayName;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of displayName
     */ 
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set the value of displayName
     *
     * @return  self
     */ 
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }
}