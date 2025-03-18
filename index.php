<?php
session_start();
require_once __DIR__ . '/app/controllers/ClientController.php';
require_once __DIR__ . '/app/controllers/CompteController.php';
require_once __DIR__ . '/app/controllers/ContratController.php';
require_once __DIR__ . '/app/controllers/AdminController.php';

$clientController = new ClientController();
$compteController = new CompteController();
$contratController = new ContratController();
$adminController = new AdminController();
if (!isset($_SESSION['username'])) {
    $adminController->index();
}
if (isset($_GET['action']) && $_GET['action'] == 'createClient' && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['email']) && !empty($_POST['email'])&& isset($_POST['tel']) && !empty($_POST['tel'])&& isset($_POST['adresse']) && !empty($_POST['adresse']) ) {
    $clientController->createClient($_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['tel'],$_POST['adresse']);

}else if (isset($_GET['action']) && $_GET['action'] == 'updateClient' && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['email']) && !empty($_POST['email'])&& isset($_POST['telephone']) && !empty($_POST['telephone'])&& isset($_POST['adresse']) && !empty($_POST['adresse']) && isset($_POST['id'])&& !empty($_POST['id'])) {
    $clientController->updateFromClient($_POST['id'],$_POST['nom'], $_POST['prenom'], $_POST['email'],$_POST['telephone'],$_POST['adresse']);

}else if (isset($_GET['action']) && $_GET['action'] == 'updateCompte' && isset($_POST['RIB']) && !empty($_POST['RIB']) && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['solde']) && !empty($_POST['solde'])&& isset($_POST['id_client']) && !empty($_POST['id_client']) && isset($_POST['id'])&& !empty($_POST['id'])) {
    $compteController->updateFromCompte($_POST['id'],$_POST['RIB'], $_POST['type'], $_POST['solde'],$_POST['id_client']);

}else if (isset($_GET['action']) && $_GET['action'] == 'updateContrat' && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['montant']) && !empty($_POST['montant']) && isset($_POST['duree']) && !empty($_POST['duree'])&& isset($_POST['id_client']) && !empty($_POST['id_client']) && isset($_POST['id'])&& !empty($_POST['id'])) {
    $contratController->updateFromContrat($_POST['id'],$_POST['type'], $_POST['montant'], $_POST['duree'],$_POST['id_client']);

}else if (isset($_GET['action']) && $_GET['action'] == 'createCompte' && isset($_POST['RIB']) && !empty($_POST['RIB']) && isset($_POST['type']) && !empty($_POST['type']) && isset($_POST['solde'])&& !empty($_POST['solde'])&& isset($_POST['id_client'])&& !empty($_POST['id_client']) ) {
    $compteController->createCompte($_POST['RIB'], $_POST['type'], $_POST['solde'],$_POST['id_client']);

}else if (isset($_GET['action']) && $_GET['action'] == 'createContrat' && isset($_POST['type_contrat']) && !empty($_POST['type_contrat']) && isset($_POST['montant']) && !empty($_POST['montant']) && isset($_POST['duree'])&& !empty($_POST['duree'])&& isset($_POST['id_client'])&& !empty($_POST['id_client']) ) {
    $contrtatController->createContrat($_POST['type_contrat'], $_POST['montant'], $_POST['duree'],$_POST['id_client']);

}else if (isset($_GET['page'])&& $_GET['page']='listClient'&&isset($_GET['action'])&& $_GET['action'] == 'supprimer' && isset($_GET["id_client"])){
    $clientController->deleteFromClient($_GET["id_client"]);

}else if (isset($_GET['page'])&& $_GET['page']='listClient'&&isset($_GET['action'])&& $_GET['action'] == 'voir' && isset($_GET["id_client"])){
    $clientController->viewFromClient($_GET["id_client"]);

}else if (isset($_GET['page'])&& $_GET['page']='listClient'&&isset($_GET['action'])&& $_GET['action'] == 'modifier' && isset($_GET["id_client"])){
    $clientController->modifyFromClient($_GET["id_client"]);

}else if (isset($_GET['page'])&& $_GET['page']='listCompte'&&isset($_GET['action'])&& $_GET['action'] == 'supprimer' && isset($_GET["id_compte"])){
    $compteController->deleteFromCompte($_GET["id_compte"]);

}else if (isset($_GET['page'])&& $_GET['page']='listCompte'&&isset($_GET['action'])&& $_GET['action'] == 'voir' && isset($_GET["id_compte"])){
    $compteController->viewFromCompte($_GET["id_compte"]);

}else if (isset($_GET['page'])&& $_GET['page']='listCompte'&&isset($_GET['action'])&& $_GET['action'] == 'modifier' && isset($_GET["id_compte"])){
    $compteController->modifyFromCompte($_GET["id_compte"]);

}else  if (isset($_GET['page'])&& $_GET['page']='listContrat'&&isset($_GET['action'])&& $_GET['action'] == 'supprimer' && isset($_GET["id_contrat"])){
    $contratController->deleteFromContrat($_GET["id_contrat"]);

}else if (isset($_GET['page'])&& $_GET['page']='listContrat'&&isset($_GET['action'])&& $_GET['action'] == 'voir' && isset($_GET["id_contrat"])){
    $contratController->viewFromContrat($_GET["id_contrat"]);

}else if (isset($_GET['page'])&& $_GET['page']='listContrat'&&isset($_GET['action'])&& $_GET['action'] == 'modifier' && isset($_GET["id_contrat"])){
    $contratController->modifyFromContrat($_GET["id_contrat"]);

}else if(isset($_GET['cree']) && $_GET['cree'] == 'nouveau-client'){
    $clientController->newClient();
}else if(isset($_GET['cree']) && $_GET['cree'] == 'nouveau-contrat'){
    $contratController->newContrat();
}else if(isset($_GET['cree']) && $_GET['cree'] == 'nouveau-compte'){
    $compteController->newCompte();
}else if (isset($_GET['page']) && $_GET['page'] === 'login') {
    $adminController->index();
} else if (isset($_GET['action']) && $_GET['action'] === 'connexion' && isset($_POST['username']) && isset($_POST['password'])) {
    $adminController->connect($_POST['username'], $_POST['password']);
} else if (isset($_GET['action']) && $_GET['action'] === 'disconnect') {
    $adminController->disconnect();
}else {
    $clientController->listAllClient();
    $compteController->listAllCompte();
    $contratController->listAllContrat();
}
