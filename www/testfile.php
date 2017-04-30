<?php

$dbTable = (object) array(
'name' => 'a',
'firm' => 'b',
'type' => 'c',
'price' => 'd',
'description' => 'e',
'details' => 'j',
'searchtag' => 'k',
'stock' => 'l'
);

$sendToServer = "INSERT INTO products(";
$i = 0;
foreach($dbTable as $key => $value)
{
$a = ($i != 7 ? $key.", " : $key.") " );
$sendToServer.= $a;
echo $sendToServer."<br>";
$i++;
}
$i=0;
$sendToServer .= "VALUES (";
foreach($dbTable as $key => $value){
    //echo $dbTable -> $k;
    $a = ($i != 7 ? $dbTable -> $key .", " : $dbTable -> $key.")" );
    $sendToServer.= $a;
    $i++;
}

echo $sendToServer;