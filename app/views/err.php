<?php require_once __DIR__ . '/templates/header.php'; ?>
    <?php if($errA): ?>
    <h3>le client a compte(s) impossible de suprimmer...</h3>

    <?php endif; ?>
        <?php if($errB): ?>
    <h3>le client a contrat(s) impossible de suprimmer...</h3>

    <?php endif; ?>

<?php require_once __DIR__ . '/templates/footer.php'; ?>