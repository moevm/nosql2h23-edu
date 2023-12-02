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
    <div class="left-group" role="group">
        <input class="fio" type="text" placeholder="Введите ФИО или email">
        <a>Показать по </a>
        <button type="button" class="btn-five">5</button>
        <button type="button" class="btn-ten">10</button>
        <button type="button" class="btn-fifteen">15</button>
    </div>

    <div class="right-group" role="group">
        <input class="role" type="text" placeholder="Роль">
        <a href="#" class="link-clear-filters">Сбросить фильтры</a>
    </div>

    <div class="btn-group" role="group">
        <p>
            <button type="button" class="btn-download-json">Выгрузить в json формате</button>
            <button type="button" class="btn-add-file">Добавить файл</button>
        </p>
        <p>
            <button type="button" class="btn-load-json">Загрузить в json формате</button>
            <button type="button" class="btn-add-user">Добавить пользователя</button>
        </p>
    </div>
</div>

<div class="container-bot">
    <table>
        <tr>
            <th>ID</th>
            <th>ФИО</th>
            <th>Роль</th>
            <th>Email</th>
            <th>Дата регистрации</th>
            <th>Действия</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Костебелова Елизавета Константиновна</td>
            <td>Пользователь</td>
            <td>Lizbet227@gmail.com</td>
            <td>01.12.2023</td>
            <td>
                <button type="button" class="btn-del">Удалить</button>
                <button type="button" class="btn-edit">Редактировать</button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>Костебелова Елизавета Константиновна</td>
            <td>Пользователь</td>
            <td>Lizbet227@gmail.com</td>
            <td>01.12.2023</td>
            <td>
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
    }
    a {
        font-size: 24px;
    }
    button {
        font-size: 24px;
        height: 50px;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        border-color: black;
    }
    input {
        font-size: 24px;
        height: 45px;
        border-radius: 5px;
    }
    h1 {
        font-size: 46px;
        color: #2E6243;
    }
    div.container-top {
        background: white;
    }
    div.container-bot {
        background: wheat;
    }
</style>
