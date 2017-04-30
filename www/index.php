<!DOCTYPE html>
<html>

<head>
    <title>Интернет-магазин "EuroMarket"</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/main.css">
    <link rel="stylesheet" href="style/menu.css">
    <link rel="stylesheet" href="style/catalog.css">
    <link rel="stylesheet" href="style/content.css">

    <script src="scripts/jquery.js"></script>
    <script src="scripts/search.js"></script>
    <script src="scripts/jquery.fittext.js"></script>
    <script src="scripts/content.js"></script>
    <script src="style/adaptText.js"></script>

</head>
<body>

<div class="global_head">
    <div class="global_start_image">
        <img src="resources/logotype3.png" class="start_image">
    </div>
    <div class="global_text_info"><p class="global_text">
            Интернет-магазин "Euromarket" предоставляет широкий спектр техники для Вашего дома.
            У нас Вы сможете найти и заказать высококачественную бытовую технику известных мировых брендов.</p>
    </div>
    <div id="button_start">Войти</div>
</div>

<div class="back_view">
<div id="information_block">

    <div id="information_choose">
        <ul class="menu_ul">
            <li id="customer">Покупателю</li>
            <li id="order">Заказ товара</li>
            <li id="delivering">Доставка товара</li>
            <li id="buying">Оплата товара</li>
            <li id="garants">Гарантия качества</li>
        </ul>
    </div>

    <div id="information_is">

        <div id="i_customer" hidden="hidden">
            <img src="resources/logotype.png" id="none_chosen">
            <h4 class="i_header">Информация для покупателей</h4>
            Интернет-магазин "Euromarket" представляет покупателям широкий выбор высококачественной техники для Вашего дома по доступным ценам. <br> <br>
            099-965-30-23; <br>
            093-965-5l-45; <br> <br>
            Украина, г. Ужгород.

        </div>
        <div id="i_order" hidden="hidden">
            <img src="resources/logotype.png" id="none_chosen">
            <h4 class="i_header">Покупка товара</h4>
            <li>Свяжитесь с нами по одному из указанных в контактной информации телефону.</li>
            <li>Вы узнаете детальную информацию про выбранный Вами товар, уточните цену и узнаете, есть ли данный товар у нас в наличии.</li>
            <li>При покупке, Вам необходимо указать Ваши контактные данные, а также место, куда мы отправим нашу покупку.</li>
            <li>Доставка товара осуществляется при помощи сервиса "Новая почта". (см. детальнее).</li>
            <li>Оплата осуществляется после получения товара.</li>
            <li>Если у Вас возникли трудности или попался некачественный товар, Вы имеете право воспользоваться гарантией. (см. детальнее)</li>
        </div>

        <div id="i_delivering" hidden="hidden">
            <img src="resources/logotype.png" id="none_chosen">
            <h4 class="i_header">Доставка товара</h4>
            Доставка товара осуществляется по всем регионам Украины. Стоимость пересылки товара оплачиваются после доставки, согласно тарифам, установленым компанией,
            которая занимается доставкой товара.</div>

        <div id="i_buying" hidden="hidden">
            <img src="resources/logotype.png" id="none_chosen">
            <h4 class="i_header">Оплата товара</h4>
            Оплата стоимости товара совершается покупателем после получения товара на руки, проверки целостности и качества преобретенного товара, по стоимости,
            указанной на сайте (и/или договоренной с продавцом). Дополнительно, оплачивается стоимость доставки товара.</div>

        <div id="i_garants" hidden="hidden">
            <img src="resources/logotype.png" id="none_chosen">
            <h4 class="i_header">Гарантия качества</h4>
            <ul class="rules_to_buy">
                <li>На все товары, которые продаются на нашем сайте, действует официальная гарантия от производителя.</li>
                <li>В случае возникновения проблем, убедитесь, что Вы имеете гарантийный талон.</li>
                <li>В гарантийном талоне указан эксплуатационный срок, в течении которого действуют гарантийные обязательства.</li>
                <li>Согласно закону "О защите прав потребителя", покупатель имеет право вернуть товар и получить возвращение потраченных средств.</li>
                <li>Гарантийное обслуживание не распространяется на товар, в случае нарушение потребителем эксплуатационных правил.</li>
            </ul>
        </div>
    </div>
</div>



<div id="search">
    <h2 class="search_title">Поиск товара</h2>
    <div class="firm">
        <h3 class="search_title">Выбрать производителя</h3>
        <div class="selection_block">
            <select id="select_firm"></select>
        </div>
    </div>

    <div class="kind">
        <h3 class="search_title">Выбрать категорию товара</h3>
        <div class="selection_block">
            <select id="select_kind"></select>
        </div>
    </div>
    <div class="search_name">
        <h3 class="search_title">Введите название товара</h3>
        <input type="search" id="search_by_name">
    </div>
    <div class="price">
        <h3 class="search_title">Выбор цены</h3>
        <div class="price_holder"><input type="number" class="by_price" min="0" value="0" id="from_price"></div>
        <div class="price_holder"><input type="number" class="by_price" id="to_price" min="0" value="0"></div>
    </div>

    <input type="button" id="searching" value="Найти">
</div>
<div id="catalog">
    <div class="catalog_list">

        <div id="loader"></div>
        <?php
            include "server/product_control.php";
            include "server/db.php";
            show_products($db);
        ?>
    </div>
</div>

<div id="allProd"><a href="assortment.php">Все товары</a></div>

<div id="down">
    <p class="down_designed">EUROMARKET.UA. Designed by "Project143"</p></div>
</div>
</body>
</html>