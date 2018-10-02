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
            <h1>Items</h1>
            <ul>
                <?php foreach ($items as $item) : ?>
                    <li> <?= $item['title'] ?></li>
                <?php endforeach ?>
            </ul>
        </section>
</body>
</html>