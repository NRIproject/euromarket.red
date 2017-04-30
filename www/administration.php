<!DOCTYPE html>
<html>

<head>
    <title>Интернет-магазин "EuroMarket"</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/catalog.css">
    <link rel="stylesheet" href="style/content.css">
    <link rel="stylesheet" href="style/error.css">

    <script src="scripts/jquery.js"></script>
    <script src="scripts/search.js"></script>
    <script src="scripts/jquery.fittext.js"></script>
    <script src="scripts/content.js"></script>
    <script src="scripts/admin.js"></script>
    <script src="scripts/image_crop.js"></script>
    <script src="scripts/imgarea.js"></script>

</head>
<body>

<a href="index.php">Ссылка на главную страницу</a>

<div id="administration_panel">

    <button id="add_new_product">Добавить новый товар</button>
    <button id="quick_edit">Редактирования списка товаров</button>
    <button id="add_new_type">Добавить новый тип товара</button>
    <button id="add_new_firm">Добавить новую фирму</button>
</div>

<div id="add_new_product_block">

<div id="add_new_category">
    <b>Добавить категорию: </b> <input type="text" id="new_category">
</div>

<div id="add_new_firm">
    <b>Добавить фирму: </b><input type="text" id="new_category">
</div>
</body>
</html>