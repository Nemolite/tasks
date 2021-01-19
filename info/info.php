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
    <link rel="stylesheet" type="text/css" href="../css/style.css" />    
    <title>Теория (Ответ)</title>
</head>
<body>
<div class="info">
    <p>
    1.HTTP  - это протокол обмена данными в формате клиент-сервер, базируется на ТСP стека протоколов TCP/IP. Первоначально протокол был сертифицирован и описан в начале 1990 версии 1.0 . На данный момент используется HTTP 1.1. В настоящее время ,для обеспечении безопасности используются сертификаты (SSl) и протокол HTTPS.
    Протокол регламентирует , как уже было сказано, обмен данными, путем запросов и ответов. Например, клиент, в большинстве это браузер, отправляет запрос (заголовок) на сервер. Сервер (apach, nginx,или др) возвращает ответ в виде заголовка с необходимой информацией для клиента. В заголовке браузера должен быть протокол, путь, ресурс, порт , в ответе сервер возвращает код 200 при готовности и необходимую для браузера информацию , либо же код ошибки.
    </p>
    <p>
    2. Имеются несколько групп кодов ошибок. При этом группы 1хх-информционные, 2хх-успешные,3хх-перенаправление – не являются ошибками.
    Группа 4хх – это ошибки клиента, группа 5хх – ошибка сервера.
    </p>
    <p>
    3. При открытии в браузера страницы google равное любой другой страницы, происходит формирование запроса-заголовка. Например, при открытии googl формируется GET запрос, который можно увидеть в адресной строке. Один из серверов goosl-а получив данный запрос возвращает ответ, с кодом ответа, обычно это 200. Если же браузер отправляет некорректный запрос на сервер и на данном сервер , то сервер возвратит ошибку группы 4хх, если запрос сформирован клиентом (браузером) правильно, а на сервере возникли проблемы, код ошибки будет из группы 5хх
    </p>
    <p>
    4.GET –запрос можно сформировать в адресной строке, а также через формы HTML. Обычно с помощью GET-запроса, на сервер отправляются параметры или небольшие данные, при этом запрос открыт. С помощью  POST – запроса можно отправить больший объем данных и файлы. POST запрос формируется через HTML формы.
    </p>
    <p>
    5. Запрос DELETE в соответствии протокола HTTP выглядит следующим образом: DELETE /file.html HTTP/1.1 Данный запрос указывает серверу на удаление какого либо ресурса, в данном случае файла file.html в корне сервера. Если ресурс будет удален успешно, то сервер вернет код ответа группы 2хх. При отправлении на сервер PUT –запроса, который предполагает передачу на сервер данных (файл), при отсутствии и успешном его создании вернет код ответа 201, если данные уже были на сервере то 200. Запрос PATCH –предназначен для частичного изменения данных. При этом чтобы информировать клиента о том что сервер предоставляет возможность частичного изменения ресурса, можно выставлять Allow в заголовке ответа. В отличии PUT данный запрос не перезаписывает данные а лишь добавляет. Запрос OPTIONS – предназначен для получения информации о поддерживаемых запросах. После данного запроса, сервер возвращает заголовок, где в разделе  Allow будут перечислены поддерживаемые сервером запросы.  
    </p>
    </div>   
</body>
</html>