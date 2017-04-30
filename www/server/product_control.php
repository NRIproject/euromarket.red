<?php
function add_product($db, $dbTable){


    $sendToServer = "INSERT INTO products(";
    $i = 0;
    foreach($dbTable as $key => $value)
    {
        $a = ($i != 7 ? "". $key. ", " : "". $key.")" );
        $sendToServer.= $a;
        $i++;
    }
    $i = 0;
    $sendToServer .= " VALUES (";
    foreach($dbTable as $key => $value){
        $a = ($i != 7 ? "\"". $dbTable -> $key ."\", " : "\"". $dbTable -> $key."\")" );
        $sendToServer.= $a;
        $i++;
    }
    $result = mysqli_query($db, $sendToServer);
    if ($result == true) {
        echo "Записано";
    }
    else{
        echo "Ошибка";
    }
};
function show_products($db){
    $productCount = 0;
    $strSQL = "SELECT * FROM product ORDER BY id DESC";
    $rs = mysqli_query($db, $strSQL);
    if($rs){
    while($row = mysqli_fetch_array($rs))
    {
        echo "<div class='catalog_list_element'><a class='catalog_element_name_a' href='product.php?id=".$row['id']."'>";
        echo "<img src=\"server/takeimg.php?id=".$row['id']."\" class='catalog_list_image'>";
        echo "<h1 class='catalog_element_name'>".$row['name']."</a><br><b class='product_price'>".$row['price']." uah</b></h1></a></div>";
        $productCount++;
        if($productCount > 24) {break;}
    }}
    else{
        echo "Товара нет";
    }
};
function delete_product($id, $db){
    $strSQL = "DELETE FROM products WHERE id=$id";
    $rs = mysqli_query($db, $strSQL);
};
function edit_product($id, $newProduct, $db){
    $dbTable = (object) array(
        'name' => $_POST['name'],
        'firm' => $_POST['firm'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'description' => $_POST['description'],
        'details' => $_POST['details'],
        'searchtag' => $_POST['searchtag'],
        'stock' => $_POST['stock']
    );
    $sendToServer = "UPDATE products SET(";
    $i = 0;
    foreach($dbTable as $key => $value)
    {
        $a = ($i != 7 ? $key." = ". $dbTable -> $key.", "  : $key." = ". $dbTable -> $key );
        $sendToServer.= $a;
        echo $sendToServer."<br>";
        $i++;
    }
    $sendToServer.= "WHERE id=$id";
    $result = mysqli_query($db, $sendToServer);
    if ($result == true) {
        echo "Записано";
    }
}