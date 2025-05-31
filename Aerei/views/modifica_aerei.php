<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Aereo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <main class="container">



    <h1>Modifica Aereo</h1>

<!-- <form action ="index.php?action=modifica&id=<?= $aereo['id'] ?>" -->

        <form method="POST">
            <div class="form-group">
                <label for="nome">Aereo:</label>
                <input type="text" name="aereo" id="aereo" value="<?= htmlspecialchars($aereo['Aereo']) ?>" required>
            </div>

            <div class="form-group">
                <label for="tipologia">Tipologia:</label>
                <select type="text" name="tipologia" id="tipologia" value="<?= htmlspecialchars($aereo['Tipologia']) ?>" required>
                    <option value="1">Caccia</option>
                    <option value="2">Cacciabombardiere</option>
                    <option value="3">Bombardiere</option>
                    <option value="4">Ricognitore</option>
                    <option value="5">Trasporto</option>
                    <option value="6">Multiruolo</option>
                    <option value="7">Passeggeri</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nazionalità">Nazionalità:</label>
                <input type="text" name="nazionalità" id="nazionalità" value="<?= htmlspecialchars($aereo['Nazionalità']) ?>" required>
            </div>

            <div class="form-group">
                <label for="fotografato">Fotografato:</label>
                <select type="text" name="fotografato" id="fotografato" value="<?= htmlspecialchars($aereo['Fotografato']) ?>" required>
                    <option value="1">Si</option>
                    <option value="2">No</option>
                </select>
            </div>

            <div class="form-actions">

                <button type="submit" class="btn btn-primary">Salva</button>
            </div>
        </form>
    
        <p><a href="index.php">Torna alla lista degli aerei</a></p>

    </main>
    
</body>
</html>