<?php

namespace Controller;

// src/Controller/ItemController.php
use Model;







class CategoriesController
{

    public function index()
    {

        $categorieManager = new \Model\CategoriesManager();
        $categories = $categorieManager->selectAllCategories();
        require __DIR__ . '/../View/categories.php';


    }

    public function show(int $id)
    {
        $categorieManager = new \Model\CategoriesManager();
        $categorie = $categorieManager->selectOneCategorie($id);

        require __DIR__ . '/../View/showCategories.php';
    }

}


?>