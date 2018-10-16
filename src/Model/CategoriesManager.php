<?php
// src/Model/ItemManager.php


// récupération de tous les items
namespace Model;
use Model\Category;

class CategoriesManager extends AbstractManager
{
    const TABLE = 'category';

    public function __construct($pdo)
    {
        parent::__construct(self::TABLE, $pdo);
    }

    public function insert(Category $category)
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . " (`title`) VALUES (:title)");
        $statement->bindValue('title', $category->getTitle(), \PDO::PARAM_STR);
        if ($statement->execute()) {
            return $this->pdo->lastInsertId();
        }
    }
    public function update(Category $category)
    {
        $statement = $this->pdo->prepare("UPDATE" . self::TABLE . " SET title = :title WHERE id = :id");
        $statement->bindValue('title', $category->getTitle(), \PDO::PARAM_STR);
        $statement->bindValue('id', $category->getId(), \PDO::PARAM_INT);
        $statement->execute();
    }

    public function delete(Category $category)
    {
        $statement = $this->pdo->prepare(" DELETE FROM " . self::TABLE . " WHERE id = :id ");
        $statement->bindValue('id', $category->getId(), \PDO::PARAM_INT);
        $statement->execute();
    }
}

?>