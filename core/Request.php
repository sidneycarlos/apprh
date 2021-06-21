<?php

namespace BWB\Framework\mvc;

/**
 * L'objet request fourni l'environement basique de traitement des requêtes http
 * Il encapsule les superglobales http pour la transmission des données en provenance du client
 * 
 *
 * @author loic
 */
class Request {

    /**
     * Les propriétés correspondantes aux superglobales
     * @var type 
     */
    private static $post, $get, $put;

    /**
     * 
     * @param string $key correspond a la clé passée dans la requête GET.
     * @return soit la valeur pointée par la clé, soit la superglobale $_GET, soit null.
     */
    public function get($key = null) {
        if($key === null){
            return $_GET;
        }else if(isset($_GET[$key])){
            return $_GET[$key];
        }
        return null;
    }

    /**
     * Cette methode retourne les données selon le type passé en argument. 
     * Il est possible de passer une classe correspondant a une entité sous la forme : 
     * NomDeLaClasse::class. La methode retournera donc un objet de ce type. 
     * Il faudra donc que les clés correspondent aux nom des propriétés a alimenter.
     * 
     * @param class $types si le type est sous la forme NomDeLaClasse::class la methode retourne un objet du type demandé. 
     * si la valeur correspond a une clé de la superglobale, retourne la valeur correspondante
     */
    public function post($types = null) {
        if (isset($_POST[$types])) {
            return $_POST[$types];
        } else if (class_exists($types)) {
            return $this->hydrateEntity(new $types(), $_POST);
        } else if (is_null($types)) {
            return $_POST;
        } else {
            return null;
        }
    }

    public function put($types = null) {
        $datas = array();
        parse_str(file_get_contents("php://input"), $datas);
        if (isset($datas[$types])) {
            return $datas[$types];
        } else if (class_exists($types)) {
            return $this->hydrateEntity(new $types(), $datas);
        } else if (is_null($types)) {
            return $datas;
        } else {
            return null;
        }
    }

    /**
     * Peuple l'entité passée en argument avec les données passées sous la forme d'un tableau associatif
     * @param type $entity
     */
    public function hydrateEntity($entity, $datas) {
        foreach ($datas as $key => $value) {
            $setter = "set" . ucfirst($key);
            if (method_exists($entity, $setter)) {
                $entity->$setter($value);
            }
        }
        return $entity;
    }

    public function files() {
        
    }
}
