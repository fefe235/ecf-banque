<?php

require_once __DIR__ . '/../dao/connexion.php';

class Client
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnexion();
    }

    //liste tout les clients depuis la base de donnee
    public function getAllClient()
    {
        $sql = "SELECT * FROM CLIENT";
        $stmt = $this->pdo->query($sql);
        
        return $stmt->fetchAll();
    }
    
    // detect le doublon des comptes et retourne l'erreur
    public function errCompte($id){
        $compte = new Compte() ;
        $comptes = $compte->getAllCompte();
        $bool = false;
    
    foreach($comptes as $c){
        if($c["id_client"] == $id){
            $bool = true;
        }
    }
    return $bool;
}
// detect le doublon des contrat et retourne l'erreur
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

//suprimme un client depuis la base de donnee
    public function deleteClient($id)
    {   
        $sqlDelete = "DELETE FROM client WHERE id_client=:id";
        $stmt = $this->pdo->prepare($sqlDelete);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    //permet de voir un client en detail depuis la base de donne
    public function getClient($id) 
    {
        $stmt = $this->pdo->prepare("SELECT * FROM client WHERE id_client=:id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }
    //permet de cree un client dans la base de donne
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
    //permet de modifier un client dans la base de donnee
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