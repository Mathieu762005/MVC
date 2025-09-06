<!DOCTYPE html>
<html>

<head>
    <title>Pokédex</title>
</head>

<body>
    <h1>Liste des Pokémons</h1>
    <ul>
        <?php foreach ($allPokemons as $pokemon): ?>
            <li>
                <?= $pokemon["name"] ?>
                <br>
                <img src="<?= $pokemon["image"] ?>" alt="<?= $pokemon["name"] ?>">
                <br>
                <a href="index.php?page=details&id=<?= $pokemon["id"] ?>">Voir détails</a>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>