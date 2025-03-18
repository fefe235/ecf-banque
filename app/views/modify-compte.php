<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
        <h2>Modifier le compte</h2>
        <form action="?action=updateCompte" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($compte['id_compte']) ?>">
            <div class="mb-3">
                <label for="title" class="form-label">RIB :</label>
                <input type="text" class="form-control" name="RIB" value="<?= htmlspecialchars($compte['RIB']) ?>" required>
            </div>
            <label for="status" class="form-label">type de Compte :</label>
                <select class="form-control" name="type">
                    <option value="courant" <?= $compte['type_compte'] === 'courant' ? 'selected' : '' ?>>courant</option>
                    <option value="epargne" <?= $compte['type_compte'] === 'epargne' ? 'selected' : '' ?>>epargne</option>
                </select>
            <div class="mb-3">
                <label for="title" class="form-label">solde :</label>
                <input type="text" class="form-control" name="solde" value="<?= htmlspecialchars($compte['solde']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">client :</label>
                <input type="text" class="form-control" name="id_client" value="<?= htmlspecialchars($compte['id_client']) ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Mettre à jour</button>
        </form>
        <a href="?id_compte=<?= htmlspecialchars($client['id_compte']) ?>&action=voir&page=listCompte" class="btn btn-secondary mt-3">Annuler</a>
    </div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
