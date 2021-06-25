<?php
//import de la classe Routing
use BWB\Framework\mvc\Routing;

include("vendor/autoload.php");

$r = new Routing();
$r->execute();
 