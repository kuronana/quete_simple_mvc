<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 03/10/18
 * Time: 17:36
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
        <section>
            <h1>Categories</h1>
            <ul>
                <?php foreach ($categories as $category) : ?>
                    <li> <?= $category['name'] ?></li>
                <?php endforeach ?>
            </ul>
        </section>
</body>
</html>