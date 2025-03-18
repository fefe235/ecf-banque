<?php

require_once __DIR__ . '/../model/Contrat.php';

class ContratController 
{
    private $contrat;
    
    public function __construct() 
    {
        $this->contrat = new Contrat();
    }
    public function newContrat() 
    {
        require_once __DIR__ . '/../views/nouveau-contrat.php';
    }
    public function listAllContrat() 
    {
        $contrats = $this->contrat->getAllContrat();
        require_once __DIR__ . '/../views/liste-contrat.php';
    }
    public function createContrat(string $type_contrat, string $montant, string $duree,$id_client)
    {
        $this->contrat->createContrat($type_contrat, $montant, $duree , $id_client);
        header('Location: /ecf-banque/');
    }
}