<?php
namespace App\controllers;
use App\models\PokemonModel;

class HomeController
{
    public function index() {
        require_once __DIR__ . '/../models/PokemonModel.php';
        $pokemonModel = new PokemonModel();
        $allPokemons = $pokemonModel->getAll();
        require_once __DIR__ . '/../views/home.php';
    }
}
