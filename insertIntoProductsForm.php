<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showProducts.php";
    ?>


    <form method="POST" action="insertIntoProducts.php">
        <input type="text" name="insert_ProductName" placeholder="Назва товару">
        <input type="text" name="insert_Product_ID" placeholder="ID товару">
        <input type="submit" name="insert" value="Вставити товар">
    </form>

</body>

</html>