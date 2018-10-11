<?php

namespace Controller;

// src/Controller/CategoriesController.php

use Model\CategoriesManager;


use Twig_Loader_Filesystem;
use Twig_Environment;



class CategoriesController
{
    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }



    public function index()
    {

        $categorieManager = new CategoriesManager();
        $categories = $categorieManager->selectAllCategories();

        return $this->twig->render('categories.html.twig', ['categories' => $categories]);



    }

    public function show(int $id)
    {
        $categorieManager = new \Model\CategoriesManager();
        $categorie = $categorieManager->selectOneCategorie($id);

        return $this->twig->render('showCategories.html.twig', ['categories' => $categorie]);

    }

}


?>
