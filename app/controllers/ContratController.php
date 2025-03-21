<?php

require_once __DIR__ . '/../model/Contrat.php';

class ContratController 
{
    private $contrat;
    
    public function __construct() 
    {
        $this->contrat = new Contrat();
    }
    //affiche le formulaire pour cree un nouveau contrat
    public function newContrat() 
    {
        $cli = new Client();
        $clients = $cli->getAllClient();
        require_once __DIR__ . '/../views/nouveau-contrat.php';
    }
    //affiche la liste des contrat grace a la methode qui liste les contrat
    public function listAllContrat() 
    {
        $contrats = $this->contrat->getAllContrat();
        require_once __DIR__ . '/../views/liste-contrat.php';
    }

    //appel la methode pour cree un contrat
    public function createContrat(string $type_contrat, string $montant, string $duree,$id_client)
    {
        $this->contrat->createContrat($type_contrat, $montant, $duree , $id_client);
        header('Location: /ecf-banque/?nav=contrat');
    }
    //appel la methode pour voir un contrat en detail
    public function viewFromContrat($id) 
    {
        $contrat = $this->contrat->getContrat($id);
        require_once __DIR__ . '/../views/view-contrat.php';
    }
    //affiche le formulaire pour modifier un contrat
    public function modifyFromContrat($id) 
    {   
        $cli = new Client();
        $clients = $cli->getAllClient();
        $contrat = $this->contrat->getContrat($id);
        require_once __DIR__ . '/../views/modify-contrat.php';
    }
    //appel la methode qui efface un contrat
    public function deleteFromContrat($id) 
    {
        $this->contrat->deleteContrat($id);
        header('Location: /ecf-banque/?nav=contrat');
    }
    //appel la methode qui permet de modifier un contrat
    public function updateFromContrat($id, string $type, $montant, $duree, $id_client) 
    {
        $this->contrat->updateContrat($id, $type, $montant, $duree,$id_client);
        header('Location: /ecf-banque/?nav=contrat');
    }
}