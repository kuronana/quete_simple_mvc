<!DOCTYPE html>
<html>
<head> ... </head>
<body>
<section>
    <h1>Catégories</h1>
    <ul>
        <?php foreach ($categories as $categorie) : ?>
            <li><a href="/category/<?= $categorie['id'] ?>"><?= $categorie['title'] ?> </li>

        <?php endforeach ?>
    </ul>
</section>
</body>
</html>
