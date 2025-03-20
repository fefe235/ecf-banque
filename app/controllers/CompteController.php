<?php

require_once __DIR__ . '/../model/Compte.php';

class CompteController 
{
    private $compte;
    
    public function __construct() 
    {
        $this->compte = new Compte();
    }
    public function newCompte() 
    {
        $cli = new Client();
        $clients = $cli->getAllClient();
        require_once __DIR__ . '/../views/nouveau-compte.php';
    }

    public function listAllCompte() 
    {
        $comptes = $this->compte->getAllCompte();
        require_once __DIR__ . '/../views/liste-compte.php';
    }
    public function createCompte(string $RIB, string $type, string $solde,$id_client)
    {
        $this->compte->createCompte($RIB, $type, $solde , $id_client);
        header('Location: /ecf-banque/?nav=compte');
    }
    public function viewFromCompte($id) 
    {
        $compte = $this->compte->getCompte($id);
        require_once __DIR__ . '/../views/view-compte.php';
    }
    public function modifyFromCompte($id) 
    {
        $cli = new Client();
        $clients = $cli->getAllClient();
        $compte = $this->compte->getCompte($id);
        require_once __DIR__ . '/../views/modify-compte.php';
    }
    public function deleteFromCompte($id) 
    {
        $this->compte->deleteCompte($id);
        header('Location: /ecf-banque/?nav=compte');
    }
    public function updateFromCompte($id, string $RIB, string $type, $solde, $id_client) 
    {
        $this->compte->updateCompte($id, $RIB, $type, $solde,$id_client);
        header('Location: /ecf-banque/?nav=compte');
    }
}