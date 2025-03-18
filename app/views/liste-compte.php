<?php require_once __DIR__ . '/templates/header.php'; ?>

<?php if (!empty($comptes)):  ?>
    <div class="container mt-5">
    <h2 class="mb-4">📋 Liste des client</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>RIB</th>
                <th>Type compte</th>
                <th>solde</th>
                <th>client</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comptes as $compte): ?>
                <tr>
                    <td><?= htmlspecialchars($compte['id_compte']) ?></td>
                    <td><?= htmlspecialchars($compte['RIB']) ?></td>
                    <td><?= htmlspecialchars($compte['type_compte']) ?></td>
                    <td><?= htmlspecialchars($compte['solde']) ?></td>
                    <td><?= htmlspecialchars($compte['id_client']) ?></td>
                    <td>
                        <a href="?id_compte=<?= $compte['id_compte'] ?>&action=voir&page=listCompte" class="btn btn-info btn-sm">Voir</a>
                        <a href="?id_compte=<?= $compte['id_compte'] ?>&action=modifier&page=listCompte" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="?id_compte=<?= $compte['id_compte'] ?>&action=supprimer&page=listCompte" 
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