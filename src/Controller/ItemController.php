<?php

namespace Controller;

// src/Controller/ItemController.php







class ItemController
{

    public function index()
    {

        $itemManager = new \Model\ItemManager();
        $items = $itemManager->selectAllItems();
        require __DIR__ . '/../View/Item.php';


    }

    public function show(int $id)
    {
        $itemManager = new \Model\ItemManager();
        $item = $itemManager->selectOneItem($id);

        require __DIR__ . '/../View/showItem.php';
    }

}


?>