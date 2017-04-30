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
    <link rel="stylesheet" href="style/administration.css">

    <script src="scripts/jquery.js"></script>
    <script src="scripts/search.js"></script>
    <script src="scripts/jquery.fittext.js"></script>
    <script src="scripts/content.js"></script>
    <script src="scripts/admin.js"></script>

</head>
<body>

<a href="index.php">Ссылка на главную страницу</a>

<div id="administration_panel">

    <button id="add_new_product" class="">Добавить новый товар</button>
    <button id="quick_edit">Редактирования списка товаров</button>
    <button id="add_new_type">Добавить новый тип товара</button>
    <button id="add_new_firm">Добавить новую фирму</button>
</div>


<div id="add_new_product_block">

    <b class="p_inform_text">Название: </b> <input type="text" id="p_name"> <br>
    <b class="p_inform_text">Фирма-производитель: </b> <select id="p_firm"></select> <br>
    <b class="p_inform_text">Тип товара: </b> <select id="p_type"></select> <input type="submit" value="OK" id="select_type"> <br>
    <b class="p_inform_text">Цена товара: </b> <input type="text" id="p_price"><br>
    <b class="p_inform_text">Изображение: </b> <input type="file" id="p_img">  <input type="submit" value="Загрузить"> <br>
    <b class="p_inform_text p_inform_text_right">Описание товара:</b> <br>
    <textarea id="p_description" class="p_inform_text_right"></textarea> <br>

    <b class="p_inform_text">Таблица характеристик: </b>
    <br>
    <div id="details_table">
        <table id="p_details"></table>
    </div>

    <button id="send_product">Добавить товар на сайт</button>
</div>

</body>
</html>