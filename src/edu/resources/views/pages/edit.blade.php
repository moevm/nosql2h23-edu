<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit course</title>
</head>
<body>
<h1>Редактирование курса</h1>
<div class="container-top">
    <h2>Основы параллельных алгоритмов</h2>
    <div class="top-group" role="group">
        <input id="elemInput" class="input-elem-name" type="text" placeholder="Введите название элемента">
        <a class="a-show-for">Показать по </a>
        <button type="button" class="btn-five">5</button>
        <button type="button" class="btn-ten">10</button>
        <button type="button" class="btn-fifteen">15</button>
    </div>

    <div class="bot-group" role="group">
        <input class="input-course-content" type="textarea" placeholder="Введите содержание элемента">
        <a href="#" class="link-clear-filters">Сбросить фильтры</a>
    </div>
    <div class="btn-group" role="group">
        <p class="p-first-part">
            <button type="button" class="btn-download-json">Выгрузить в json формате</button>
        </p>
        <p class="p-second-part">
            <button type="button" class="btn-load-json">Загрузить в json формате</button>
        </p>
        <p class="p-third-part">
            <button type="button" class="btn-add-elem">Добавить элемент</button>
        </p>
    </div>

</div>

<div class="container-bot">
    <h2>Содержание курса</h2>
    <table class="table-users">
        <tr>
            <th class="td-id">ID</th>
            <th class="td-elem-type">Тип элемента</th>
            <th class="td-elem-name">Название элемента</th>
            <th class="td-elem-content">Содержание элемента</th>
            <th class="td-actions">Действия</th>
        </tr>
        <tr>
            <td class="td-id">1</td>
            <td class="td-elem-type">Техника безопасности на нефтяном предприятии</td>
            <td class="td-elem-name">Костебелова Елизавета Константиновна</td>
            <td class="td-elem-content">01.12.2023</td>
            <td class="td-actions">
                <button type="button" class="btn-edit-course">Редактировать</button>
                <button type="button" class="btn-del-course">Удалить</button>
            </td>
        </tr>
        <tr>
            <td class="td-id">2</td>
            <td class="td-elem-type">Основы параллельных алгоритмов</td>
            <td class="td-elem-name">Костебелова Елизавета Константиновна</td>
            <td class="td-elem-content">01.12.2023</td>
            <td class="td-actions">
                <button type="button" class="btn-edit-course">Редактировать</button>
                <button type="button" class="btn-del-course">Удалить</button>
            </td>
        </tr>
    </table>
    <button type="button" class="btn-to-courses-page">К списку курсов</button>
</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
    }
    p {
        font-size: 24px;
        color: #2E6243;
    }
    a {
        font-size: 24px;
        color: #2E6243;
    }
    button.btn-five, button.btn-fifteen, button.btn-ten {
        text-align: center;
        background: #FFFFFF;
        color: #2E6243;
        width: 60px;
    }
    button.btn-five:hover, button.btn-fifteen:hover, button.btn-ten:hover {
        color: #FFFFFF;
        background: #2E6243;
    }
    button {
        font-size: 24px;
        height: 50px;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        border-color: black;
        text-align: center;
        color: #FFFFFF;
        background: #2E6243;
    }
    button:hover {
        opacity: 80%;
    }
    input {
        font-size: 24px;
        width: 500px;
        height: 45px;
        border-radius: 5px;
        margin-left: 30px;
        margin-top: 30px;
    }
    h1 {
        font-size: 46px;
        color: #2E6243;
        margin-left: 120px;
    }
    table, th, td {
        table-layout: fixed;
        font-size: 24px;
        border-collapse: collapse;
        border: 3px solid grey;
        text-align: center;
    }
    table {
        margin-left: 10px;
        margin-bottom: 5px;
    }
    td.td-id{
        width: 50px;
    }
    td.td-elem-type, td.td-elem-name, td.td-elem-content, td.td-actions {
        width: 365px;
    }
    button.btn-del-course, button.btn-edit-course {
        width: 300px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    div.container-top {
        background: white;
        margin-left: 120px;
        width: 1560px;
        height: 380px;
    }
    div.container-bot {
        background: white;
        margin-left: 120px;
        width: 1560px;
    }
    div.btn-group {
        text-align: right;
    }
    a.a-show-for {
        margin-left: 600px;
    }
    a.link-clear-filters {
        margin-left: 720px;
    }
    button.btn-download-json, button.btn-load-json, button.btn-add-elem, button.btn-add-file {
        width: 400px;
    }
    p.p-first-part, p.p-second-part, p.p-third-part {
        margin-bottom: -15px;
        margin-right: 10px;
    }
</style>
