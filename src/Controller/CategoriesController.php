<?php

namespace Controller;

// src/Controller/CategoriesController.php

use Model\CategoriesManager;
use Model\Category;


class CategoriesController extends AbstractController
{

    public function index()
    {

        $categorieManager = new CategoriesManager($this->pdo);
        $categories = $categorieManager->selectAll();

        return $this->twig->render('categories.html.twig', ['categories' => $categories]);



    }

    public function show(int $id)
    {
        $categorieManager = new CategoriesManager($this->pdo);
        $category = $categorieManager->selectOneById($id);

        return $this->twig->render('showCategory.html.twig', ['category' => $category]);

    }

    public function add()
    {
        if (!empty($_POST))
        {
            $category = new Category();
            $category->setTitle($_POST['title']);

            $categoriesManager = new CategoriesManager($this->pdo);
            $categoriesManager->insert($category);
            header('Location: /categories');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('addCategory.html.twig');
    }

    public function edit(int $id)
    {
        $categoryManager = new CategoriesManager($this->pdo);
        $category = $categoryManager->selectOneById($id);
        if (!empty($_POST))
        {
            $category->setTitle($_POST['title']);
            $categoryManager->update($category);
            header('Location: /categories');
            exit();
        }
        return $this->twig->render('editCategory.html.twig', ['category' => $category]);
    }

    public function delete(int $id)
    {
        $categoryManager = new CategoriesManager($this->pdo);
        $category = $categoryManager->selectOneById($id);
        if (!empty($_POST))
        {
            $categoryManager->delete($category);
            header('Location: /categories');
            exit();
        }
        return $this->twig->render('deleteCategory.html.twig', ['category' => $category]);
    }

}


?>
