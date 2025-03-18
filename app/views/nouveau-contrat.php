<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
    <h2>nouveau contrat</h2>
    <form action="?action=createContrat" method="POST">
    <label for="type_contrat" >type de contrat :</label>
    <select name="type_contrat" required>
    <option value="assurance vie">assurance vie</option>
    <option value="assurance habitation">assurance habitation</option>
    <option value="cr?dit immobilier'">credit immobilier</option>
    <option value="cr?dit consommation'">credit consommation</option>
    <option value="CEL">CEL</option>
    </select>
    <label for="montant" >montant souscrit :</label>
        <input type="number" name="montant" required>
        <label for="duree" >durée mois :</label>
        <input type="number" name="duree" required>
        <label for="id_client" >indentifiant client :</label>
        <input type="number" name="id_client" required>

        <button type="submit">Ajouter</button>
    </form>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
