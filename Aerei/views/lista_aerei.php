<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Aerei</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <main class="container">

    <h1>Aerei</h1>

    <div class="menu">

        <p><a href="index.php?action=loadForm">Aggiungi un nuovo aereo</a></p>
        <p><a href="index.php?action=aereoFotografato">Filtra gli aerei fotografati</a></p>
        <p><a href="index.php?action=aereoNonFotografato">Filtra gli aerei non fotografati</a></p>
        <p><a href="index.php">Torna alla lista degli aerei</a></p>

    </div>

    <table class="striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Aereo</th>
            <th>Tipologia</th>
            <th>Nazionalità</th>
            <th>Fotografato</th>
        </tr>
    </thead>

    <?php foreach ($aerei as $aereo): ?>
    <tr>
        <td><?= htmlspecialchars($aereo['id']) ?></td>
        <td><?= htmlspecialchars($aereo['aereo']) ?></td>
        <td><?= htmlspecialchars($aereo['tipologia']) ?></td>
        <td><?= htmlspecialchars($aereo['nazionalità']) ?></td>
        <td><?= htmlspecialchars($aereo['fotografato']) ?></td>
        <td><a href="index.php?action=dettaglio&id=<?= $aereo['id'] ?>">Dettagli</a> | <a href="index.php?action=modifica&id=<?= $aereo['id'] ?>">Modifica</a> | <a href="index.php?action=elimina&id=<?= $aereo['id'] ?>" onclick="return confirm('Sei sicuro di voler eliminare questo aereo?')">Elimina</a></td>
    </tr>
    <?php endforeach; ?>
    
</table>

</main>
    
</body>
</html>