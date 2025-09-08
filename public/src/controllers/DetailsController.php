<?php
namespace App\controllers;
use App\models\PokemonModel;

class DetailsController
{
    public function index(int $id) {
        require_once __DIR__ . '/../models/PokemonModel.php';
        $pokemonModel = new PokemonModel();
        $idPokemon = $pokemonModel->getById($id);
        require_once __DIR__ . '/../views/details.php';
    }
}
