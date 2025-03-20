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
        $cli = new Client();
        $clients = $cli->getAllClient();
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
        header('Location: /ecf-banque/?nav=contrat');
    }
    public function viewFromContrat($id) 
    {
        $contrat = $this->contrat->getContrat($id);
        require_once __DIR__ . '/../views/view-contrat.php';
    }
    public function modifyFromContrat($id) 
    {   
        $cli = new Client();
        $clients = $cli->getAllClient();
        $contrat = $this->contrat->getContrat($id);
        require_once __DIR__ . '/../views/modify-contrat.php';
    }
    public function deleteFromContrat($id) 
    {
        $this->contrat->deleteContrat($id);
        header('Location: /ecf-banque/?nav=contrat');
    }
    public function updateFromContrat($id, string $type, $montant, $duree, $id_client) 
    {
        $this->contrat->updateContrat($id, $type, $montant, $duree,$id_client);
        header('Location: /ecf-banque/?nav=contrat');
    }
}