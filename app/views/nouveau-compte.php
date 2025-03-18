<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
    <h2>nouveau compte</h2>
    <form action="?action=createCompte" method="POST">
    <label for="RIB" >RIB :</label>
    <input type="text" name="RIB" required>
    <label for="id_client" >identifiant client :</label>
        <input type="number" name="id_client" required>

        <label for="type" >type de compte :</label>
        <select name="type" id="" required>
        <option value="courant">courant</option>
        <option value="epargne">epargne</option>
        </select>

        <label for="solde" >Solde :</label>
        <input type="number" name="solde" required>

        <button type="submit">Ajouter</button>
    </form>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
