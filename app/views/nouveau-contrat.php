<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
    <h2>nouveau contrat</h2>
    <form action="?action=createContrat" method="POST">
    <div class="mb-3">
    <label for="type_contrat"class="form-label" >type de contrat :</label>
    <select name="type_contrat"class="form-select" required>
    <option value="assurance vie">assurance vie</option>
    <option value="assurance habitation">assurance habitation</option>
    <option value="cr?dit immobilier'">credit immobilier</option>
    <option value="cr?dit consommation'">credit consommation</option>
    <option value="CEL">CEL</option>
    </select>
    </div>
    <div class="mb-3"> <label for="montant" class="form-label">montant souscrit :</label>
    <input type="number" name="montant" class="form-control" required></div>
   
        <div class="mb-3">
        <label for="duree" class="form-label">durée mois :</label>
        <input type="number" name="duree" class="form-control" required>
        </div>
        
        <div class="mb-3">
        <label for="id_client" class="form-label"> client :</label>
        <select name="id_client" class="form-select" required>
        <?php foreach ($clients as $client) {  ?>
            <option value="<?= $client['id_client'] ?>"><?= $client['nom'] . ' ' . $client['prenom'] ?></option>
            <?php  } ?>
        </select>
        </div>
        
        

        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
