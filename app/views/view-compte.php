<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
    <h2>Détails du compte</h2>
    <p><strong>id :</strong> <?= htmlspecialchars($compte['id_compte']) ?></p>
    <p><strong>RIB :</strong> <?= htmlspecialchars($compte['RIB']) ?></p>
    <p><strong>type de compte :</strong> <?= htmlspecialchars($compte['type_compte']) ?></p>
    <p><strong>solde :</strong> <?= htmlspecialchars($compte['solde']) ?></p>
    <p><strong>client:</strong> <?= htmlspecialchars($compte['id_client']) ?></p>

    <a href="?id_compte=<?= htmlspecialchars($compte['id_compte']) ?>&action=modifier&page=listCompte" class="btn btn-warning">Modifier</a>
    <a href="?" class="btn btn-secondary">Retour à la liste</a>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
