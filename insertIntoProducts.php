<?php

include "databaseConnect.php";

$product_name = $_POST['insert_ProductName'];
$product_id = $_POST['insert_Product_ID'];
$stmt = $pdo->prepare("INSERT INTO products (product_name, product_id) VALUES (:product, :product_id)");
$stmt->bindParam(':product_name', $product_name);
$stmt->bindParam(':product_id', $product_id);
if ($stmt->execute()) {
    echo "Товар доданий успішно!";
} else {
    echo "Помилка додавання товару.";
}


include("showProducts.php")
?>
