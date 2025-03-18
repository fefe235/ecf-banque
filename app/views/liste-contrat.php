<?php require_once __DIR__ . '/templates/header.php'; ?>

<?php if (!empty($contrats)):  ?>
    <div class="container mt-5">
    <h2 class="mb-4">📋 Liste des contrat</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>type contrat</th>
                <th>montant souscrit</th>
                <th>durée mois</th>
                <th>client</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contrats as $contrat): ?>
                <tr>
                    <td><?= htmlspecialchars($contrat['id_contrat']) ?></td>
                    <td><?= htmlspecialchars($contrat['type_contrat']) ?></td>
                    <td><?= htmlspecialchars($contrat['montant_souscrit']) ?></td>
                    <td><?= htmlspecialchars($contrat['duree_mois']) ?></td>
                    <td><?= htmlspecialchars($contrat['id_client']) ?></td>
                    <td>
                        <a href="?id_contrat=<?= $contrat['id_contrat'] ?>&action=voir&page=listContrat" class="btn btn-info btn-sm">Voir</a>
                        <a href="?id_contrat=<?= $contrat['id_contrat'] ?>&action=modifier&page=listContrat" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="?id_contrat=<?= $contrat['id_contrat'] ?>&action=supprimer&page=listContrat" 
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?')">
                            Supprimer
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php else: ?>
    <p style="text-align: center;">Aucun compte trouvé.</p>
<?php endif; ?>

<?php require_once __DIR__ . '/templates/footer.php'; ?>