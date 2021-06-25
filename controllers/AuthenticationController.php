<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\models\MSUserModel;
use BWB\Framework\mvc\MicrosoftProvider;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use BWB\Framework\mvc\Controller;
use Exception;

class AuthenticationController extends Controller{


    /**
     * Retourne la vue de login
     */
    public function login()
    {
       
    }

    /**
     * Supprime le cookie qui contient le token et fourni une redirection
     */
    public function logout()
    {
        $this->security->deactivate();
        header("Location: http://localhost:9494/signin");
    }


    /**
     * methode pour rediriger vers le login de microsoft
     */
    public function signin(){
        
        header('Location: ' . (new MicrosoftProvider())->getAuthorizationUrl());
    }



    /**
     * Cette methode est invoquée apres que l'utilisateur se soit loggué avec succès avec microsoft
     * On profite du retour pour demander a microsoft les information sur l'utilisateur qui viens de se logguer
     * ensuite on créé un JWT pour la suite des transactions avec le client
     */
    public function callback(){
        // recupération du code pour demander le token necessaire pour utiliser Graph
        $msProvider = new MicrosoftProvider();
        $token = $this->inputGet()['code'];
        try{
            $accessToken = $msProvider->getAccessToken('authorization_code', [
            'code' => $token
          ]);
          $graph = new Graph();
          $graph->setAccessToken($accessToken->getToken());
          // on demande les infos de l'utilisateur loggué via Graph
          $msUser = $graph->createRequest('GET', '/me')
            ->setReturnType(Model\User::class)
            ->execute();
          // on mappe vers notre modèle 
          $user = new MSUserModel();
          $user->setId($msUser->getId());
          $user->setDisplayName($msUser->getDisplayName());
          $user->setMail($msUser->getMail());
          // on génère le token avec les infos de l'utilisateur
          $this->security->generateToken($user);
          // rediection vers la page demandée AVANT le processus de login
          session_start();
          header("Location: http://localhost:9494".$_SESSION['REDIRECT_URL']);
        }catch(League\OAuth2\Client\Provider\Exception\IdentityProviderException $e){
            //rediriger sur une page d'erreur
            
            echo $e->getMessage();
        }
        
    }
}