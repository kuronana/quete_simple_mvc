<?php
namespace Controller;
use Model\CategoryManager;
use Twig_Loader_Filesystem;
use Twig_Environment;
class CategoryController
{
    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function categ()
    {
        $categoryManager = new CategoryManager();
        $categories =  $categoryManager->selectAllCategories();

        return $this->twig->render('categories.html.twig', ['categories' => $categories]);
    }
    public function oneCateg(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }

}

