<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
    <h2>nouveau compte</h2>
    <form action="?action=createCompte" method="POST">
    <label for="RIB" >RIB :</label>
    <input type="text" name="RIB" required>

    <label for="id_client" > client :</label>
        <select name="id_client" required>
        <?php foreach ($clients as $client) {  ?>
            <option value="<?= $client['id_client'] ?>"><?= $client['nom'] . ' ' . $client['prenom'] ?></option>
            <?php  } ?>
        </select>

        <label for="type" >type de compte :</label>
        <select name="type" required>
        <option value="courant">courant</option>
        <option value="epargne">epargne</option>
        </select>

        <label for="solde" >Solde :</label>
        <input type="number" name="solde" required>

        <button type="submit">Ajouter</button>
    </form>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
