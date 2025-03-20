<?php require_once __DIR__ . '/templates/header.php'; ?>
<?php if (!empty($contrats)):  ?>
    <div class="container mt-5">
    <h2 class="mb-4"> Liste des contrat</h2>

    <table class="table table-striped-column table-sm table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>ID</th>
                <th>nom</th>
                <th>prenom</th>
                <th>type contrat</th>
                <th>montant souscrit</th>
                <th>durée mois</th>
                <th>client</th>
                <th>options</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contrats as $contrat): ?>
                <tr>
                    <td><?= htmlspecialchars($contrat['id_contrat']) ?></td>
                    <td><?= htmlspecialchars($contrat['nom']) ?></td>
                    <td><?= htmlspecialchars($contrat['prenom']) ?></td>
                    <td><?= htmlspecialchars($contrat['type_contrat']) ?></td>
                    <td><?= htmlspecialchars($contrat['montant_souscrit']) ?></td>
                    <td><?= htmlspecialchars($contrat['duree_mois']) ?></td>
                    <td><?= htmlspecialchars($contrat['id_client']) ?></td>
                    <td>
                        <a href="?id_contrat=<?= $contrat['id_contrat'] ?>&action=voir&page=listContrat" class="btn btn-secondary btn-sm">Voir</a>
                        <a href="?id_contrat=<?= $contrat['id_contrat'] ?>&action=modifier&page=listContrat" class="btn btn-secondary btn-sm">Modifier</a>
                        <a href="?id_contrat=<?= $contrat['id_contrat'] ?>&action=supprimer&page=listContrat" 
                           class="btn btn-secondary btn-sm"
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
    <p style="text-align: center;">Aucun contrat trouvé.</p>
<?php endif; ?>

<?php require_once __DIR__ . '/templates/footer.php'; ?>