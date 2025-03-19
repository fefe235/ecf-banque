<?php

require_once __DIR__ . '/../dao/connexion.php';

class Client
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnexion();
    }

    public function getAllClient()
    {
        $sql = "SELECT * FROM CLIENT";
        $stmt = $this->pdo->query($sql);
        
        return $stmt->fetchAll();
    }
    
    public function errCompte($id){
        $compte = new Compte() ;
        $comptes = $compte->getAllCompte();
        $bool = false;
    
    foreach($comptes as $c){
        if($c["id_client"] == $id){
            $bool = true;
            return $bool;
        }
    }
    return $bool;
}
public function errContrat($id){
    $contrat = new Contrat() ;
    $contrats = $contrat->getAllContrat();
    $bool = false;
    
    foreach($contrats as $c){
        if($c["id_client"] == $id){
            $bool = true;
        }
    }
    return $bool;
}
    public function deleteClient($id)
    {   
        $sqlDelete = "DELETE FROM client WHERE id_client=:id";
        $stmt = $this->pdo->prepare($sqlDelete);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function getClient($id) 
    {
        $stmt = $this->pdo->prepare("SELECT * FROM client WHERE id_client=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    public function createClient(string $nom, string $prenom, string $email,string $tel, string $adresse)
    {
        $stmt = $this->pdo->prepare("INSERT INTO CLIENT (nom,prenom, email, telephone, adresse) VALUES (:nom, :prenom, :email,:telephone,:adresse);");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $tel);
        $stmt->bindParam(':adresse', $adresse);

        return $stmt->execute();
    }
    public function updateClient(string $id, string $prenom, string $nom, string $email,$telephone,$adresse) 
    {
        $stmt = $this->pdo->prepare("UPDATE client SET nom = :nom,prenom = :prenom, email = :email,telephone = :telephone, adresse= :adresse 
        WHERE id_client=:id;");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':id', $id);
        
        return $stmt->execute();
    }
}