<?php

require_once __DIR__ . '/../model/Client.php';

class ClientController 
{
    private $client;
    
    public function __construct() 
    {

        $this->client = new Client();
    }

    public function newClient() 
    {
        require_once __DIR__ . '/../views/nouveau-client.php';
    }
    
    

    public function listAllClient() 
    {
        $err=true;
        $clients = $this->client->getAllClient();
        require_once __DIR__ . '/../views/liste-client.php';
    }
    
    public function viewFromClient($id) 
    {
        $client = $this->client->getClient($id);
        require_once __DIR__ . '/../views/view-client.php';
    }
    public function modifyFromClient($id) 
    {
        $client = $this->client->getClient($id);
        require_once __DIR__ . '/../views/modify-client.php';
    }
    public function deleteFromClient($id) 
    {       
            $errA= $this->client->errCompte($id);
            $errB= $this->client->errContrat($id);
            $err=$this->client->errCompte($id)||$this->client->errContrat($id);
            if($err){
                require_once __DIR__ . '/../views/err.php';
            }else{
                $this->client->deleteClient($id);
                header('Location: /ecf-banque/');
            }   
    }
    public function createClient(string $nom, string $prenom, string $email, string $tel, string $adresse)
    {
        $this->client->createClient($nom, $prenom, $email, $tel, $adresse );
        header('Location: /ecf-banque/');
    }
    

    public function updateFromClient(string $id, string $nom, string $prenom, string $email, string $telephone , string $adresse) 
    {
        $this->client->updateClient($id, $nom, $prenom, $email,$telephone,$adresse);
        header('Location: /ecf-banque/');
    }
}