<?php

require_once __DIR__ . '/../dao/connexion.php';

class Contrat
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnexion();
    }
    public function getAllContrat()
    {
        $sql = "SELECT * FROM CONTRAT";
        $stmt = $this->pdo->query($sql);
        
        return $stmt->fetchAll();
    }
    public function createContrat(string $type_contrat, string $montant, string $duree,$id_client)
    {
        $stmt = $this->pdo->prepare("INSERT INTO CONTRAT (type_contrat,montant_souscrit, duree_mois,id_client) VALUES (:type_contrat,:montant, :duree,:id_client)");
        $stmt->bindParam(':type_contrat', $type_contrat);
        $stmt->bindParam(':montant', $montant);
        $stmt->bindParam(':duree', $duree);
        $stmt->bindParam(':id_client', $id_client);
        
        return $stmt->execute();
    }
}