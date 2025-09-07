<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>détails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <main>
        <div>
            <?php foreach ($allPokemons as $pokemon): ?>
                <img src="<?= $pokemon["image"] ?>" alt="<?= $pokemon["name"] ?>">
                <p class="card-text"><?= $pokemon["description"] ?></p>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>