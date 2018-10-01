<?php

namespace Controller;

// src/Controller/ItemController.php
use Model;






$itemManager = new \Model\ItemManager();
$items = $itemManager->selectAllItems();


class ItemController
{

    public function index()
    {



    }
}
require __DIR__ . '/../View/Item.php';

?>