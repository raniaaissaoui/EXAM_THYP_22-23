<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de Multiplication</title>
</head>
<body>
    <h1>Table de Multiplication</h1>

    <?php
    // Vérifie si l'utilisateur a soumis un formulaire
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère le nombre saisi par l'utilisateur
        $nombre = isset($_POST["nombre"]) ? intval($_POST["nombre"]) : 0;

        // Affiche la table de multiplication
        if ($nombre > 0) {
            echo "<h2>Table de multiplication pour $nombre :</h2>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                $resultat = $nombre * $i;
                echo "<tr><td>$nombre x $i</td><td>=</td><td>$resultat</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Veuillez saisir un nombre supérieur à zéro.</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nombre">Choisissez un nombre :</label>
        <input type="number" name="nombre" id="nombre" required>
        <button type="submit">Afficher la table de multiplication</button>
    </form>
</body>
</html>