<?php
$etablissement = "Université Cadi Ayyad – FS Semlalia";
$module = "Programmation Web 2";
$annee = "2024 / 2025";

$a = 12;
$b = 6;

$addition = $a + $b;
$multiplication = $a * $b;
$division = $a / $b;
$phrase = "Bienvenue dans la page PHP du TP6.";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Informations PHP - TP6</title>

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f0f3f7;
            padding: 30px;
        }
        .card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        h1, h2 { color: #2c3e50; }
        p { margin: 10px 0; }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 20px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 12px;
        }
        a:hover { background: #217dbb; }
    </style>

</head>
<body>

<div class="card">
    <h1>Page PHP — Informations</h1>

    <h2>Données générales</h2>
    <p><strong>Établissement :</strong> <?= $etablissement ?></p>
    <p><strong>Module :</strong> <?= $module ?></p>
    <p><strong>Année :</strong> <?= $annee ?></p>

    <h2>Variables numériques</h2>
    <p>A = <?= $a ?></p>
    <p>B = <?= $b ?></p>

    <h2>Calculs</h2>
    <p>A + B = <?= $addition ?></p>
    <p>A × B = <?= $multiplication ?></p>
    <p>A ÷ B = <?= $division ?></p>

    <h2>Chaîne de caractères</h2>
    <p><?= $phrase ?></p>

    <a href="index.html">← Retour à l'application</a>
</div>

</body>
</html>
