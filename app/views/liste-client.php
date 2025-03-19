<?php require_once __DIR__ . '/templates/header.php'; ?>
<nav>
    <a href="?nav=compte">voir les comptes</a>
    <a href="?nav=contrat">voir les contrats</a>
</nav>
<?php if (!empty($clients)):  ?>
    <div class="container mt-5">
    <h2 class="mb-4">📋 Liste des client</h2>

    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= htmlspecialchars($client['id_client']) ?></td>
                    <td><?= htmlspecialchars($client['nom']) ?></td>
                    <td><?= htmlspecialchars($client['prenom']) ?></td>
                    <td><?= htmlspecialchars($client['email']) ?></td>
                    <td><?= htmlspecialchars($client['telephone']) ?></td>
                    <td><?= htmlspecialchars($client['adresse']) ?></td>
                    <td>
                        <a href="?id_client=<?= $client['id_client'] ?>&action=voir&page=listClient" class="btn btn-info btn-sm">Voir</a>
                        <a href="?id_client=<?= $client['id_client'] ?>&action=modifier&page=listClient" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="?id_client=<?= $client['id_client'] ?>&action=supprimer&page=listClient" 
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
    <p style="text-align: center;">Aucun client trouvé.</p>
<?php endif; ?>

<?php require_once __DIR__ . '/templates/footer.php'; ?>