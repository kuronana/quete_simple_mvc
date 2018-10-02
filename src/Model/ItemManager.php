<?php
//contenue de la base de donné.
namespace Model;
require __DIR__.'/../../app/db.php';
//recuperation de tout les item.

class ItemManager
{

    public function selectAllItems(): array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item";
        $resultat = $pdo->query($query);
        return $resultat->fetchAll();
    }
}