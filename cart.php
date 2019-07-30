<?php

$pnum = $_POST['pnum'];
$name = $_POST['name'];
$type = $_POST['type'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$_SESSION['items'] = array($pnum,$name,$type,$price,$stock);

foreach($_SESSION['items'] as $item){
    echo $item;
}

echo "<br>".$_SESSION['items'][1]."<br>";
var_dump($_SESSION['items']);
//header("Location: catalog.php");
echo "<hr>";
echo session_id();


?>