<?php
namespace Controller;
use Model;
class CategoryController
{
    public function categ()
    {
        $categoryManager = new Model\CategoryManager();
        $categories =  $categoryManager->selectAllCategories();
        require __DIR__.'/../View/categorie.php';
        return $categories;
    }
    public function oneCateg(int $id)
    {
        $categoryManager = new Model\CategoryManager();
        $category = $categoryManager->selectOneCategory($id);
        require __DIR__ . '/../View/showCategory.php';
        return $category;
    }

}

