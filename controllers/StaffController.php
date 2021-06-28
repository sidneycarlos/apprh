<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\controllers\SecurizedController;
use BWB\Framework\mvc\dao\DAOStaff;


class StaffController extends SecurizedController{


    function __construct(){
        parent::__construct();
    }



    //implémentation des méthodes décrites dans le fichier routing.json

    /**
     * Retourne la vue employees.php qui se trouve dans le dossier views
     */
    public function getStaff(){
        //traitement de la méthode
        $this->render("staff", array(
            "staff"=>(new DAOStaff())->getAll()
        ));
    }

}