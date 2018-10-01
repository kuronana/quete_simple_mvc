<?php

namespace Controller;

// src/Controller/ItemController.php
use Model;








class ItemController
{

    public function index()
    {
        $itemManager = new \Model\ItemManager();
        $items = $itemManager->selectAllItems();
        return $items;


    }
}
require __DIR__ . '/../View/Item.php';

?>