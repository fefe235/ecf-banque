<?php


class Admin
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = getConnexion();
    }

    //permet de recupere le hash depuis la base de donnee
    
    public function getHash()
    {
        $sql = "SELECT mot_de_passe FROM ADMINISTRATEUR LIMIT 1";
        $stmt = $this->pdo->query($sql);
        
        return $stmt->fetchAll();
    }
}