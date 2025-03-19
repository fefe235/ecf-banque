<?php require_once __DIR__ . '/templates/header.php'; ?>
<div class="container mt-5">
    <h2>nouveau client</h2>
    <form action="?action=createClient" method="POST">
        <input type="hidden" value="<?= htmlspecialchars($client['id_client']) ?>" name="id_client">

        <label for="nom" >Nom :</label>
        <input type="text" name="nom" required>

        <label for="prenom" >Prenom :</label>
        <input type="text" name="prenom" required>

        <label for="email" >Email :</label>
        <input type="email" name="email" required>

        <label for="tel" >Teléphone :</label>
        <input type="text" name="tel" required>
        
        <label for="adresse" >Adresse :</label>
        <input type="text" name="adresse" required>

        <button type="submit">Ajouter</button>
    </form>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
