<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli aerei</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
        <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
    <main class="container">

        <h1>Dettaglio Aereo</h1>

        <?php if ($aereo): ?>
            <p><strong>ID:</strong> <?= htmlspecialchars($aereo['ID']) ?></p>
            <p><strong>Aereo:</strong> <?= htmlspecialchars($aereo['Aereo']) ?></p>
            <p><strong>Tipologia:</strong> <?= htmlspecialchars($aereo['Tipologia']) ?></p>
            <p><strong>Nazionalità:</strong> <?= htmlspecialchars($aereo['Nazionalità']) ?></p>
            <p><strong>Fotografato:</strong> <?= htmlspecialchars($aereo['Fotografato']) ?></p>
            <?php else: ?>
            <p>Aereo non trovato.</p>
        <?php endif; ?>
        <p><a href="index.php">Torna alla lista degli aerei</a></p>

    </main>

</body>
</html>