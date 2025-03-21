<?php

require_once __DIR__ . '/../model/Compte.php';

class CompteController 
{
    private $compte;
    
    public function __construct() 
    {
        $this->compte = new Compte();
    }


    //affiche le formulaire pour cree un nouveau compte
    public function newCompte() 
    {
        $cli = new Client();
        $clients = $cli->getAllClient();
        require_once __DIR__ . '/../views/nouveau-compte.php';
    }
    //appele la methode pour avoir les comptes puis les affiche
    public function listAllCompte() 
    {
        $comptes = $this->compte->getAllCompte();
        require_once __DIR__ . '/../views/liste-compte.php';
    }

    //appel la methode pour cree un nouveau compte
    public function createCompte(string $RIB, string $type, string $solde,$id_client)
    {
        $this->compte->createCompte($RIB, $type, $solde , $id_client);
        header('Location: /ecf-banque/?nav=compte');
    }
    //appel la methode pour voir un compte dans le detail
    public function viewFromCompte($id) 
    {
        $compte = $this->compte->getCompte($id);
        require_once __DIR__ . '/../views/view-compte.php';
    }

    //affiche le formulaire pour modifier un compte
    public function modifyFromCompte($id) 
    {
        $cli = new Client();
        $clients = $cli->getAllClient();
        $compte = $this->compte->getCompte($id);
        require_once __DIR__ . '/../views/modify-compte.php';
    }
    //appel la methode pour suprimmer un compte
    public function deleteFromCompte($id) 
    {
        $this->compte->deleteCompte($id);
        header('Location: /ecf-banque/?nav=compte');
    }
    //appel la methode pour modifier un compte
    public function updateFromCompte($id, string $RIB, string $type, $solde, $id_client) 
    {
        $this->compte->updateCompte($id, $RIB, $type, $solde,$id_client);
        header('Location: /ecf-banque/?nav=compte');
    }
}