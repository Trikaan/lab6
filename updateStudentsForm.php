<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Оновлення даних</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showProducts.php";
    ?>


    <form method="POST" action="updateProducts.php">
        <input type="text" name="update_id" placeholder="ID товару">
        <input type="text" name="update_name" placeholder="Назва товару">
        <input type="submit" value="Оновити товар">
    </form>

</body>

</html>