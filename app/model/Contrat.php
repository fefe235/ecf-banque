<?php

require_once __DIR__ . '/../dao/connexion.php';

class Contrat
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnexion();
    }

    // recupère tout les contrats depuis la base de donnee
    public function getAllContrat()
    {
        $sql = "SELECT CLIENT.nom,CLIENT.prenom,CONTRAT.* FROM CONTRAT JOIN CLIENT ON CLIENT.id_client =CONTRAT.id_client;";
        $stmt = $this->pdo->query($sql);
        
        return $stmt->fetchAll();
    }

    //cree un nouveau contrat dans la base de donne
    public function createContrat(string $type_contrat, string $montant, string $duree,$id_client)
    {
        $stmt = $this->pdo->prepare("INSERT INTO CONTRAT (type_contrat,montant_souscrit, duree_mois,id_client) VALUES (:type_contrat,:montant, :duree,:id_client)");
        $stmt->bindParam(':type_contrat', $type_contrat);
        $stmt->bindParam(':montant', $montant);
        $stmt->bindParam(':duree', $duree);
        $stmt->bindParam(':id_client', $id_client);
        
        return $stmt->execute();
    }

    //suprimme un contrat dans la base de donne
    public function deleteContrat($id)
    {
        $sqlDelete = "DELETE FROM CONTRAT WHERE id_contrat=:id";
        $stmt = $this->pdo->prepare($sqlDelete);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    //permet de voir un contrat dans le detail depuis la base de donne
    public function getContrat($id) 
    {
        $stmt = $this->pdo->prepare("SELECT * FROM CONTRAT WHERE id_contrat=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    //permet de modifier un contrat dans la base de donne
    public function updateContrat($id, string $type,$montant, $duree,$id_client) 
    {
        $stmt = $this->pdo->prepare("UPDATE CONTRAT SET type_contrat=:type ,montant_souscrit=:montant, duree_mois=:duree, id_client=:id_client 
        WHERE id_contrat=:id;");
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':montant', $montant);
        $stmt->bindParam(':duree', $duree);
        $stmt->bindParam(':id_client', $id_client);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}