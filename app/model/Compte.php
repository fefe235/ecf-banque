<?php

require_once __DIR__ . '/../dao/connexion.php';

class Compte
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnexion();
    }

    public function getAllCompte()
    {
        $sql = "SELECT CLIENT.nom,CLIENT.prenom,COMPTE_BANCAIRE.* FROM COMPTE_BANCAIRE JOIN CLIENT ON CLIENT.id_client = COMPTE_BANCAIRE.id_client;";
        $stmt = $this->pdo->query($sql);
        
        return $stmt->fetchAll();
    }
    public function createCompte(string $RIB, string $type, string $solde,$id_client)
    {
        $stmt = $this->pdo->prepare("INSERT INTO COMPTE_BANCAIRE (RIB,type_compte, solde,id_client) VALUES (:RIB, :type_compte, :solde,:id_client)");
        $stmt->bindParam(':RIB', $RIB);
        $stmt->bindParam(':type_compte', $type);
        $stmt->bindParam(':solde', $solde);
        $stmt->bindParam(':id_client', $id_client);
        
        return $stmt->execute();
    }
    public function deleteCompte($id)
    {
        $sqlDelete = "DELETE FROM COMPTE_BANCAIRE WHERE id_compte=:id";
        $stmt = $this->pdo->prepare($sqlDelete);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function getCompte($id) 
    {
        $stmt = $this->pdo->prepare("SELECT * FROM COMPTE_BANCAIRE WHERE id_compte=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function updateCompte($id, string $RIB, string $type, string $solde,$id_client) 
    {
        $stmt = $this->pdo->prepare("UPDATE COMPTE_BANCAIRE SET RIB=:RIB ,type_compte=:type, solde=:solde, id_client=:id_client 
        WHERE id_compte=:id;");
        $stmt->bindParam(':RIB', $RIB);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':solde', $solde);
        $stmt->bindParam(':id_client', $id_client);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}