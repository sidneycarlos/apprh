<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\Controller;

/**
 * Les controleurs à sécuriser DOIVENT hérité de cette classe
 * 
 * 
 *
 * @author loic
 */
abstract class SecurizedController extends Controller{


    public function __construct(){
        parent::__construct();
        // on recupère en session l'URI demandée (en cas de redirection)
        session_start();
        $_SESSION['REDIRECT_URL'] = $_SERVER['REDIRECT_URL'];
        // on verifie que le client a été authentifié sinon on le redirige vers le login (ou authentification)
        if(!$this->security->acceptConnexion()) header("Location: http://localhost:45000/signin");
    }
}
