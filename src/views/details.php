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
        <header>
            <h1 class="text-center display-1 my-3 pb-5"><?= $idPokemon["name"] ?></h1>
        </header>
        <div class="container text-center d-flex justify-content-center mt-5">
            <div class="card mb-5" style="width: 25rem;">
                <img src="<?= $idPokemon["image"] ?>" alt="">
                <div class="card-body">
                    <h2><?= $idPokemon["name"] ?></h2>
                    <p class="card-text"><?= $idPokemon["description"] ?></p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>