<?php

namespace Controller;

// src/Controller/ItemController.php

use Model\ItemManager;
use Model;



class ItemController extends AbstractController
{



    public function index()
    {

        $itemManager = new ItemManager($this->pdo);
        $items = $itemManager->selectAll();

        return $this->twig->render('Items.html.twig', ['items' => $items]);



    }

    public function show(int $id)
    {
        $itemManager = new \Model\ItemManager($this->pdo);
        $items = $itemManager->selectOneById($id);

        return $this->twig->render('showItem.html.twig', ['items' => $items]);

    }

    public function add()
    {
        if (!empty($_POST))
        {
            $item = new Model\Item();
            $item->setTitle($_POST['title']);

            $itemManager = new ItemManager($this->pdo);
            $itemManager->insert($item);
            header('Location: /');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('addItem.html.twig');
    }

    public function edit(int $id)
    {
        $itemManager = new ItemManager($this->pdo);
        $item = $itemManager->selectOneById($id);
        if (!empty($_POST))
        {
            $item->setTitle($_POST['title']);
            $itemManager->update($item);
            header('Location: /');
            exit();
        }
        return $this->twig->render('editItem.html.twig', ['item' => $item]);
    }

    public function delete(int $id)
    {
        $itemManager = new ItemManager($this->pdo);
        $item = $itemManager->selectOneById($id);
        if (!empty($_POST))
        {
            $item->setTitle($_POST['title']);
            $itemManager->delete($item);
            header('Location: /');
            exit();
        }
        return $this->twig->render('deleteItem.html.twig', ['item' => $item]);
    }

}


?>