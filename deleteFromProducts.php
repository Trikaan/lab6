<?php

include "databaseConnect.php";



$id = $_POST['delete_id'];
$stmt = $pdo->prepare("DELETE FROM products WHERE ProductID=:id");
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
    echo "Товар видалений успішно!";
} else {
    echo "Помилка видалення Товару.";
}


include("showProducts.php")
?>
