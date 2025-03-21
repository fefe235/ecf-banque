<?php

require_once __DIR__ . '/../dao/connexion.php';

class Compte
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnexion();
    }
    //liste tout les comptes depuis la base de donnee
    public function getAllCompte()
    {
        $sql = "SELECT CLIENT.nom,CLIENT.prenom,COMPTE_BANCAIRE.* FROM COMPTE_BANCAIRE JOIN CLIENT ON CLIENT.id_client = COMPTE_BANCAIRE.id_client;";
        $stmt = $this->pdo->query($sql);
        
        return $stmt->fetchAll();
    }

    //permet de cree un compte dans la base de donne
    public function createCompte(string $RIB, string $type, string $solde,$id_client)
    {
        $stmt = $this->pdo->prepare("INSERT INTO COMPTE_BANCAIRE (RIB,type_compte, solde,id_client) VALUES (:RIB, :type_compte, :solde,:id_client)");
        $stmt->bindParam(':RIB', $RIB);
        $stmt->bindParam(':type_compte', $type);
        $stmt->bindParam(':solde', $solde);
        $stmt->bindParam(':id_client', $id_client);
        
        return $stmt->execute();
    }
    //permet de suprimmer un compte dans la base de donne
    public function deleteCompte($id)
    {
        $sqlDelete = "DELETE FROM COMPTE_BANCAIRE WHERE id_compte=:id";
        $stmt = $this->pdo->prepare($sqlDelete);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    //permet de voir un compte dans le detail depuis la base de donne
    public function getCompte($id) 
    {
        $stmt = $this->pdo->prepare("SELECT * FROM COMPTE_BANCAIRE WHERE id_compte=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    //permet de modifier un compte dans la base de donne
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