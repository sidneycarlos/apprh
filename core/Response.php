<?php
namespace BWB\Framework\mvc;

/**
 * Objet servant a retourner la reponse du contrôleur 
 *
 * @author loic
 */
class Response
{
    private $security;
    function __construct($security)
    {
        $this->security = $security;
    }


    /**
     * La methode permet de retouner les données au format json
     * 
     * 
     * @param mixed $data les données a retourner au format json
     * 
     * @todo implémenter les exceptions pour lever une UnauthorizedTypeException
     */
    final public function sendJSON($data)
    {
        header('Content-Type: application/json');
        if(is_array($data)){
            echo json_encode($data);
        }elseif(is_string($data)){
            echo $data;
        }elseif($data instanceof \JsonSerializable){
            echo json_encode($data->jsonSerialize());
        }else{
            // doit lever une UnauthorizedTypeException 
            throw new Exception();
        }
    }


    /**
     * 
     * La methode permet au developpeur backend de gerer les codes retour du serveur
     * 
     * @return Response retourne l'objet response courant afin de pouvoir utiliser le chainage de methodes
     * 
     * @param int $code le code retour que le serveur doit renvoyer
     */
    final public function status(int $code = 200){
        http_response_code($code);
        return $this;
    }

    /**
     * La methode render affiche la vue selectionnée grace au premier argument
     * La methode utilise les indirection pour generer dynamiquement les noms des variables
     * utilisées dans la vue.
     * 
     * @param string $pathToView chemin du fichier de vue demandé
     * @param array $datas La valeur par defaut permet de retourner des vues statiques
     */
    final public function render($pathToView, $datas = null)
    {
        $user = null;
        if (!is_null($this->security)) {
            $user = $this->security->acceptConnexion();
            $user = (!$user) ? null : $user;
        }
        if (is_array($datas)) {
            foreach ($datas as $key => $value) {
                $$key = $value;
            }
        }
        include './views/' . $pathToView . ".php";
    }
}