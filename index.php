<?php
/**
 * Основной (стартовый) модуль
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
    <title>Задание 1</title>
</head>
<body>
<div class="main">
    <h1>Задание №1</h1>
        <p>Прокачиваем знания про навыки работы с сетью, 
            чтобы понимать более глубоко как работает 
            HTTP и как правильно его готовить. 
        </p>
    <h2>Теория</h2>    
        <ul>
            <li>Что такое HTTP?</li>
            <li>Какие коды ответов есть в HTTP (группы и что они значат)?</li>
            <li>Что происходит, когда открываешь google.ru в браузере?</li>
            <li>Чем отличается Post от Get и когда надо какой использовать?</li>
            <li>Для чего используются DELETE, PUT, BATCH, Option запросы?</li>
        </ul>
        <a class="exam_link" href="info/info.php" target="_blanck">Ответ</a> 
    <h2>Практика</h2>
    <ul>
        <li>Написать скрипт php, который возвращает код ответа 4хх или 5хх 
            в зависимости от наличия переменной в query параметрах, 
            показать как в google chrome посмотреть код ответа сервера.
            <a class="exam_link" href="controllers/response.php" target="_blanck">Выполнение</a>
        </li>
        <li>Отправить в консоли запрос PUT на свой php скрипт, 
            который принимает этот запрос и выводит в ответ любой текст
            <a class="exam_link" href="controllers/request.php" target="_blanck">Выполнение</a>
        </li>
        <li>Реализовать несколько способов сделать redirect в PHP
        <a class="exam_link" href="controllers/redirect.php" target="_blanck">Выполнение редирект xthtp PHP</a>
        <a class="exam_link" href="controllers/redirect2.php" target="_blanck">Выполнение редирект через JS</a>
        <a class="exam_link" href="index5.php" target="_blanck">Выполнение редирект через htaccess</a>
        </li>
    </ul>  
    
    
    <p>По теории - можно сформировать для себя документ, где вы сами для себя зафиксируете ответы, чтобы запомнить материал лучше</p>
    <p>По практике - создать репозиторий на github и выгрузить туда практику, залить код в ветку и сделать ПР на ветку мастер (чтобы можно было оставить комментарии по коду)</p>
</div>
 <script src="js/script.js"></script>   
</body>
</html>