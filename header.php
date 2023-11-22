<head>
    <link rel="stylesheet" href="styles.css">
</head>
<header>
        <nav>
        <ul>
            <li>
                    <a href="<?php
                    $name = 'Главная';
                    $link = 'index.php';
                    $current_page = true;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
           
            <li>
                    <a href="<?php
                    $name = 'Магазин';
                    $link = 'shop.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
            <li>
                    <a href="<?php
                    $name = 'Вход в систему';
                    $link = 'auth.php';
                    $current_page = false;

                    echo $link;

                    ?>">
                    <?php
                    if ($current_page) {
                        echo '<span class="selected_menu">' . $name . '</span>';
                    } else {
                        echo $name;
                    }
                    ?>
                </a>
            </li>
        </nav>
        <img src="logo.png" alt="Логотип">
    </header>