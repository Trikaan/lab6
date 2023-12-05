<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Пошук товару</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Пошук товару</h1>

    <form method="POST" action="">
        <input type="text" name="search_product" placeholder="Частина назви товару">
        <input type="submit" value="Пошук товару">
    </form>

    <?php
    include "databaseConnect.php";

    if (isset($_POST['search_product']) && !empty($_POST['search_product'])) {
        $search = "%" . $_POST['search_product'] . "%";;
        $stmt = $pdo->prepare("SELECT ProductName AS Product_Name, ProductID AS Product_ID FROM products WHERE ProductName LIKE :search");
        $stmt->bindParam(':search', $search);
        $stmt->execute();

        $count = $stmt->rowCount();

        if ($count > 0) {
            // Виводимо результати запиту
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo " Назва товару: " . $row['Product_Name'] . ". ІД товару: " . $row['Product_ID'] . "<br>";
            }
        } else {
            echo "Немає результатів для вашого запиту.";
        }
    }
    ?>

    <br><br><br>

    <ul>
        <li><a href="showProducts.php">Таблиця Products</a><br></li>
        <li><a href="showOrders.php">Таблиця Orders</a><br></li>
        <li><a href="showWarehouse.php">Таблиця Warehouse</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>


</body>

</html>