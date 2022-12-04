<?php

class Database
{
    private PDO $pdo;

    public function __construct()
    {
        $path = dirname(__FILE__);
        $this->pdo = new PDO("sqlite:$path/../bdd/bddFilm.sqlite");
    }

    public function getFilms(): array
    {
        return $this->pdo->query('SELECT * FROM film')
                         ->fetchAll();
    }
}

