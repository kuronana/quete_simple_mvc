<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 03/10/18
 * Time: 16:57
 */
namespace Model;
require __DIR__.'/../../app/db.php';


class CategoryManager
{
    public function selectAllCategories(): array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category";
        $resultat = $pdo->query($query);
        return $resultat->fetchAll();
    }

// la méthode prend l'id en paramètre
    public function selectOneCategory(int $id): array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }
}