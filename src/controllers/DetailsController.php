<?php
class DetailsController
{
    public function index(int $id) {
        require_once __DIR__ . '/../models/PokemonModel.php';
        $pokemonModel = new PokemonModel();
        $pokemon = $pokemonModel->getById($id); // variable unique pour un Pokémon
        require_once __DIR__ . '/../views/home.php'; // nouvelle vue
    }
}
