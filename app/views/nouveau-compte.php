<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
    <h2>nouveau compte</h2>
    <form action="?action=createCompte" method="POST">
    <div class="mb-3">
    <label for="RIB" class="form-label" >RIB :</label>
    <input type="text" name="RIB" class="form-control" required>
    </div>
    <div class="mb-3">

    <label for="id_client" class="form-label" > client :</label>
        <select name="id_client" class="form-select" required>
        <?php foreach ($clients as $client) {  ?>
            <option value="<?= $client['id_client'] ?>"><?= $client['nom'] . ' ' . $client['prenom'] ?></option>
            <?php  } ?>
        </select>
        </div>
        <div class="mb-3">
        <label for="type" class="form-label" >type de compte :</label>
        <select name="type" class="form-select" required>
        <option value="courant">courant</option>
        <option value="epargne">epargne</option>
        </select>
        </div>
        
        <div class="mb-3">
        <label for="solde" class="form-label" >Solde :</label>
        <input type="number" name="solde" class="form-control" required>
        </div>

        

        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
