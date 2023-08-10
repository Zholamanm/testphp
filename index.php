<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:wght@500&display=swap"
        rel="stylesheet"
    />
    <script defer src="index.js"></script>
</head>
<body>
<div class="container">
    <form class="add-client-form" method="post" action="db/insert.php">
        <div style="width: 80%">
            <p style="margin-right: auto; padding: 0; margin: 0">
                Добавить контакт
            </p>
        </div>
        <div class="divider-line"></div>
        <div style="width: 80%">
            <div class="flex-col">
                <input type="text" name="name" placeholder="Имя" required />
                <input type="text" name="phone" placeholder="Телефон" required />
                <button type="submit" class="add-client-button">Добавить</button>
            </div>
        </div>
    </form>
    <div class="list-of-contacts">
        <?php
        include "db/db.php";

        $sql = "SELECT id, name, phone FROM contacts";
        $result = mysqli_query($link, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $contactId = $row["id"];
            $contactName = $row["name"];
            $contactPhone = $row["phone"];

            echo '<div style="width: 80%">';
            echo '<p class="info-text">';
            echo "$contactName <a href=\"db/delete.php?id=$contactId\"><img src=\"./icons/delete.svg\" class=\"delete-icon\" /></a>";
            echo '</p>';
            echo "<p class=\"info-text small\">$contactPhone</p>";
            echo '</div>';
            echo '<div class="divider-line"></div>';
        }

        mysqli_close($link);
        ?>
    </div>
</div>
</body>
</html>
<!--        <div style="width: 80%">-->
<!--            <p style="margin-right: auto; padding: 0; margin: 0">-->
<!--                Список контактов-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="divider-line"></div>-->
<!--        <div style="width: 80%">-->
<!--            <p class="info-text">-->
<!--                Иван Петров<img src="./icons/delete.svg" class="delete-icon" />-->
<!--            </p>-->
<!--            <p class="info-text small">8 800 000 01 02</p>-->
<!--        </div>-->
<!--        <div class="divider-line"></div>-->
<!--        <div style="width: 80%">-->
<!--            <p class="info-text">-->
<!--                Алексей Иванов<img src="./icons/delete.svg" class="delete-icon" />-->
<!--            </p>-->
<!--            <p class="info-text small">8 800 000 01 02</p>-->
<!--        </div>-->