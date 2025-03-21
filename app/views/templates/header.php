<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de la banque</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?">client</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?nav=compte">compte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?nav=contrat">contrat</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Ajouter</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?cree=nouveau-client">Nouveau client</a></li>
              <li><a class="dropdown-item" href="?cree=nouveau-compte">Nouveau compte</a></li>
              <li><a class="dropdown-item" href="?cree=nouveau-contrat">Nouveau contrat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?action=disconnect">deconnexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>