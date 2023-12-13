<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
</head>
<body>
<h1>Список пользователей</h1>
<div class="container-top">
    <div class="top-group" role="group">
        <input class="input-fio" type="text" placeholder="Введите ФИО или email">
        <a class="a-show-for">Показать по </a>
        <button type="button" class="btn-five">5</button>
        <button type="button" class="btn-ten">10</button>
        <button type="button" class="btn-fifteen">15</button>
    </div>

    <div class="bot-group" role="group">
        <input class="input-role" type="text" placeholder="Роль">
        <a href="#" class="link-clear-filters">Сбросить фильтры</a>
    </div>

    <div class="btn-group" role="group">
        <p class="p-first-part">
            <button type="button" class="btn-download-json">Выгрузить в json формате</button>
            <button type="button" class="btn-add-file">Добавить файл</button>
        </p>
        <p class="p-second-part">
            <button type="button" class="btn-load-json">Загрузить в json формате</button>
            <button type="button" class="btn-add-user">Добавить пользователя</button>
        </p>
    </div>
</div>

<div class="container-bot">
    <p class="p-showed">Отображено 2 из 2</p>
    <table class="table-users">
        <tr>
            <th class="td-id">ID</th>
            <th class="td-fio">ФИО</th>
            <th class="td-role">Роль</th>
            <th class="td-email">Email</th>
            <th class="td-date">Дата регистрации</th>
            <th class="td-actions">Действия</th>
        </tr>
        <tr>
            <td class="td-id">1</td>
            <td class="td-fio">Костебелова Елизавета Константиновна</td>
            <td class="td-role">Администратор</td>
            <td class="td-email">Lizbet227@gmail.com</td>
            <td class="td-date">01.12.2023</td>
            <td class="td-actions">
                <button type="button" class="btn-del">Удалить</button>
                <button type="button" class="btn-edit">Редактировать</button>
            </td>
        </tr>
        <tr>
            <td class="td-id">1</td>
            <td class="td-fio">Костебелова Елизавета Константиновна</td>
            <td class="td-role">Пользователь</td>
            <td class="td-email">Lizbet227@gmail.com</td>
            <td class="td-date">01.12.2023</td>
            <td class="td-actions">
                <button type="button" class="btn-del">Удалить</button>
                <button type="button" class="btn-edit">Редактировать</button>
            </td>
        </tr>
    </table>
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
    td.td-fio, td.td-role, td.td-email, td.td-actions {
        width: 300px;
    }
    button.btn-del, button.btn-edit {
        width: 200px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    div.container-top {
        background: white;
        margin-left: 120px;
        width: 1560px;
        height: 310px;
    }
    div.container-bot {
        background: white;
        margin-left: 120px;
        width: 1560px;
    }
    div.btn-group {
        text-align: right;
        /*margin-bottom: 200px;*/
    }
    a.a-show-for {
        margin-left: 600px;
    }
    a.link-clear-filters {
        margin-left: 720px;
    }
    button.btn-download-json, button.btn-load-json, button.btn-add-user, button.btn-add-file {
        width: 400px;
    }
    p.p-first-part, p.p-second-part {
        margin-bottom: -15px;
    }

</style>
