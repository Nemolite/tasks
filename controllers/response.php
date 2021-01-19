<?php
/**
 * 1. Написать скрипт php, который возвращает 
 * код ответа 4хх или 5хх в зависимости от 
 * наличия переменной в query параметрах, 
 * показать как в google chrome посмотреть код ответа сервера.
 * 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />    
    <title>Пункт 1</title>
</head>
<body>
    <p><a href="empty.php">Ошибка 404</a></p>

    <p><a href="index.php %">Ошибка 400</a></p>

    <p><a href="error411.php">Ошибка 411</a></p>
    <p><a href="error416.php">Ошибка 416</a></p>

    <form action="" method="POST">
        <input type="text" name="query_form" id="response">
        <input type="submit" value="Запрос">        
    </form>

        <?php 
        if (isset($_POST['query_form'])){
            $query = $_POST['query_form'];
            unset($_POST['query_form']);
            echo $query;

        } else {
            echo "Нет данных";
        }

        ?>
        <img src="../img/request.png" alt="" srcset="">
</body>
</html>
