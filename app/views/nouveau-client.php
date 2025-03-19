<?php require_once __DIR__ . '/templates/header.php'; ?>
<div class="container mt-5">
    <h2>nouveau client</h2>
    <form action="?action=createClient" method="POST">
        <input type="hidden" value="<?= htmlspecialchars($client['id_client']) ?>" name="id_client">
        <div class="mb-3"><label for="nom"class="form-label" >Nom :</label>
        <input type="text" class="form-control" name="nom" required></div>
        
        <div class="mb-3"><label for="prenom"class="form-label" >Prenom :</label>
        <input type="text" class="form-control" name="prenom" required></div>
        
        <div class="mb-3"><label for="email"class="form-label" >Email :</label>
        <input type="email" class="form-control" name="email" required></div>
        
        <div class="mb-3"><label for="tel" class="form-label">Teléphone :</label>
        <input type="text" class="form-control" name="tel" required></div>
        
        <div class="mb-3"><label for="adresse" class="form-label">Adresse :</label>
        <input type="text" class="form-control" name="adresse" required></div>
        

        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
