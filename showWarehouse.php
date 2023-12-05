<html>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, робота з базою даних">
    <meta name="description" content="Лабораторна робота. Робота з базою даних">
    <title>Таблиця Warehouse</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Таблиця Warehouse</h1>

    <?php

    include "databaseConnect.php";

    try {
        $stmt = $pdo->query("SELECT * FROM warehouse");
        // Виконання запиту і отримання результатів
        printf("<h3>Список товарів на складі:</h3>");
        printf("<table><tr><th>ІД товару</th><th>Кількість на складі/th></tr>");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['ProductID'], $row['QuantityInStock']);
        };
        printf("</table>");
    } catch (PDOException $e) {
        die("Помилка запиту: " . $e->getMessage());
    }

    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>

</body>

</html>