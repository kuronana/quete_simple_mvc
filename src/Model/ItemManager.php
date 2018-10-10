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
    // la méthode prend l'id en paramètre
    public function selectOneItem(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM item WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }

}