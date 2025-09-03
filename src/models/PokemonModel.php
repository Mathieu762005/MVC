<?php
class PokemonModel
{
    public function getAll(): array
    {
        // Stack du fichier .json.
        $json = file_get_contents("data/pokemons.json");

        // Creation tableau assossiatif.
        $allPokemons = json_decode($json, true);

        // Ont return tous les pokemons.
        return $allPokemons;
    }

    public function getById(int $id)
    {
        // Stack du fichier .json.
        $json = file_get_contents("data/pokemons.json");

        // Creation tableau assossiatif
        $data = json_decode($json, true);
        // Ont parcours le tableau pour récup l'id et le return.
        foreach ($data as $idPokemon) {
            if ($idPokemon["id"] === $id) {
                return $idPokemon;
            }
        }
    }
}
