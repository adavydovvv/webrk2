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
    <div class="authentication-container">
        <h1>Вход в систему</h1>

        <div>
            <form action="https://httpbin.org/post" method="post">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
        </div>

        <div>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
        </div>


            <label for="remember">Запомнить меня:</label>
            <input type="checkbox" id="remember" name="remember">

        <div>
            <button type="submit">Войти</button>
        </div>
        
        </form>
    </div>
    </main>
    <footer>
        <p>Контакты</p>
        <p>Телефон: +7(495)-755-75-75<p>
        <p>Почта: land@rover.ru<p>
        <p>&copy; 2023 Jaguar Land Rover</p>
    </footer>
</body>
</html>