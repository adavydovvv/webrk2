<?php
$title = 'Давыдов Артём Сергеевич 221-362 - Лабораторная работа №3';
include "db.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
    <title><?php echo $title ?></title>
    
</head>

<body>
<?php 
include "header.php"
?>
    <main>
        <?php
        $id = $_GET['id'];

        $sql = "SELECT * FROM products WHERE id = $id";
        $result = mysqli_query($mysql, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<h1>" . $row['name'] . "</h1>";
            echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo']).'" title="'.$row['name'].'" style="width:auto;height:auto;"/>';
            echo "<div class='container'>";
            echo "<p>Цена: " . $row['price'] . "</p>";
            echo "<p>О товаре: " . $row['info'] . "</p>";
            echo "</div>";
        }
        ?>
    </main>
    <footer>
        <p>Контакты</p>
        <p>Телефон: +7(495)-755-75-75<p>
        <p>Почта: land@rover.ru<p>
        <p>&copy; 2023 Jaguar Land Rover</p>
    </footer>
</body>
</html>