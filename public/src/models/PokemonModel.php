<?php
namespace APP\models;
class PokemonModel
{
    public function getAll(): array
    {
        $json = file_get_contents(__DIR__ . "/../data/pokemons.json");
        $data = json_decode($json, true);
        return $data["pokedex"];
    }

    public function getById(int $id): ?array
    {
        $json = file_get_contents(__DIR__ . "/../data/pokemons.json");
        $data = json_decode($json, true);

        foreach ($data["pokedex"] as $pokemon) {
            if ($pokemon["id"] === $id) {
                return $pokemon;
            }
        }
        return null;
    }
}

