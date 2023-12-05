<?php

include "databaseConnect.php";

$product_id = $_POST['update_id'];
$product_name = $_POST['update_name'];
$stmt = $pdo->prepare("UPDATE products SET ProductName=:product_name WHERE ProductID=:product_id");
$stmt->bindParam(':product_id', $product_id);
$stmt->bindParam(':product_name', $product_name);
if ($stmt->execute()) {
    echo "Товар оновлений успішно!";
} else {
    echo "Помилка оновлення товару.";
}


include("showProducts.php")
?>
