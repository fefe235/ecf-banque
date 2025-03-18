<?php require_once __DIR__ . '/templates/header.php'; ?>

<div class="container mt-5">
    <h2>Détails de la tâche</h2>
    <p><strong>id :</strong> <?= htmlspecialchars($contrat['id_contrat']) ?></p>
    <p><strong>Type contrat :</strong> <?= htmlspecialchars($contrat['type_contrat']) ?></p>
    <p><strong>montant souscrit :</strong> <?= htmlspecialchars($contrat['montant_souscrit']) ?></p>
    <p><strong>durée mois :</strong> <?= htmlspecialchars($contrat['duree_mois']) ?></p>
    <p><strong>Client:</strong> <?= htmlspecialchars($contrat['id_client']) ?></p>

    <a href="?id_contrat=<?= htmlspecialchars($contrat['id_contrat']) ?>&action=modifier&page=listContrat" class="btn btn-warning">Modifier</a>
    <a href="?" class="btn btn-secondary">Retour à la liste</a>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
