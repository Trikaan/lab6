<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Видалення даних</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include "showProducts.php";
    ?>


    <form method="POST" action="deleteFromProducts.php">
        <input type="text" name="delete_id" placeholder="ID товару для видалення">
        <input type="submit" value="Видалити товар">
    </form>

</body>
</html>