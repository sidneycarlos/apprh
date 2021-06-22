<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\Controller;
use BWB\Framework\mvc\dao\DAOEmployee;
use BWB\Framework\mvc\models\EmployeeModel;
use BWB\Framework\mvc\models\TestEmployeeModel;


class EmployeeController extends Controller{


    function __construct(){
        parent::__construct();
    }



    //implémentation des méthodes décrites dans le fichier routing.json

    /**
     * Retourne la vue employees.php qui se trouve dans le dossier views
     */
    public function getEmployees(){
        //traitement de la méthode
        $this->render("employees", array(
            "employees"=>(new DAOEmployee())->getAll()
        ));
    }

}