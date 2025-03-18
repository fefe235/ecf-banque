<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
        <h2>Modifier la tâche</h2>
        <form action="?action=updateContrat" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($contrat['id_contrat']) ?>">
            <label for="status" class="form-label">Statut :</label>
                <select class="form-control" name="type">
                    <option value="assurance vie" <?= $contrat['type_contrat'] === 'assurance vie' ? 'selected' : '' ?>>assurance vie</option>
                    <option value="assurance habitation" <?= $contrat['type_contrat'] === 'assurance habitation' ? 'selected' : '' ?>>assurance habitation</option>
                    <option value="cr?dit immobilier" <?= $contrat['type_contrat'] === 'cr?dit immobilier' ? 'selected' : '' ?>>crédit immobilier</option>
                    <option value="cr?dit consommation" <?= $contrat['type_contrat'] === 'cr?dit consommation' ? 'selected' : '' ?>>crédit consommation</option>
                    <option value="CEL" <?= $contrat['type_contrat'] === 'CEL' ? 'selected' : '' ?>>CEL</option>
                </select>
            <div class="mb-3">
                <label for="title" class="form-label">Montant souscrit :</label>
                <input type="text" class="form-control" name="montant" value="<?= htmlspecialchars($contrat['montant_souscrit']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">durée mois :</label>
                <input type="text" class="form-control" name="duree" value="<?= htmlspecialchars($contrat['duree_mois']) ?>" required>
            </div>
            <div class="mb-3">
            <label for="id_client" > client :</label>
            <select name="id_client" required>
            <?php foreach ($clients as $client) {  ?>
            <option value="<?= $client['id_client'] ?>"><?= $client['nom'] . ' ' . $client['prenom'] ?></option>
            <?php  } ?>
        </select>
            </div>
            <button type="submit" class="btn btn-success">Mettre à jour</button>
        </form>
        <a href="?id_contrat=<?= htmlspecialchars($contrat['id_contrat']) ?>&action=voir&page=listContrat" class="btn btn-secondary mt-3">Annuler</a>
    </div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
