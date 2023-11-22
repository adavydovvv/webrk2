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
        <section id="section1">
            <h1>Land Rover Souvenires</h1>
            <div class="image-container">
                <?php echo '<img src="image1.png" alt="Welcome Image"'?>
            </div>
        </section>

        <section id="section2">
            <h2>О нас</h2>
            <?php
            $sql = "SELECT info FROM main";
            $result = $mysql->query($sql); 
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='textformain'>".$row["info"]."</div>";
                }
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