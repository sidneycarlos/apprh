<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\controllers\SecurizedController;
use BWB\Framework\mvc\dao\DAODashboard;

class DashboardController extends SecurizedController
{
    function __construct()
    {
        parent::__construct();
    }
    
//retourne la vue dashboard.php
    public function dashboard() {
        /*$data = array(
            "dashboard"=>(new DAODashboard())->getSumEmployee()
        );*/

        $this->render("dashboard");
        
    }
}
