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
    <h2>
        Показать по:
        <a href="{{ route('users.list', ['per-page' => 5]) }}">5</a>
        <a href="{{ route('users.list', ['per-page' => 10]) }}">10</a>
        <a href="{{ route('users.list', ['per-page' => 15]) }}">15</a>
    </h2>
    <h2>
        <a href="{{ route('users.list') }}">Сбросить фильтры</a>
    </h2>
    <h2>
        <a href="{{ route('users.view-create-form')}}">Добавить пользователя</a>
    </h2>

    <form method="GET" action="{{ route('users.list') }}">
        <input name="filters[email]" class="input-name" type="text" placeholder="Введите email">
        <input name="filters[surname]" class="input-surname" type="text" placeholder="Введите фамилию">
        <input name="filters[role_title]" class="input-role" type="text" placeholder="Введите роль">
        <label>Выберите роль</label>
        <label>
            <p> Пользователь</p>
            <input name="gender" type="radio" class="gender-enter" value="Пользователь">
        </label>
        <label>
            <p> Администратор</p>
            <input name="gender" type="radio" class="gender-enter" value="Администратор">
        </label>
        <button type="submit" class="btn-search">Поиск</button>
    </form>
{{--    <div class="btn-group" role="group">--}}
{{--        <p class="p-first-part">--}}
{{--            <button type="button" class="btn-download-json">Выгрузить в json формате</button>--}}
{{--            <button type="button" class="btn-add-file">Добавить файл</button>--}}
{{--        </p>--}}
{{--        <p class="p-second-part">--}}
{{--            <button type="button" class="btn-load-json">Загрузить в json формате</button>--}}
{{--            <button type="button" class="btn-add-user">Добавить пользователя</button>--}}
{{--        </p>--}}
{{--    </div>--}}
</div>

<div class="container-bot">
    <table class="table-users">
        <thead>
        <th class="td-id">ID</th>
        <th class="td-fio">ФИО</th>
        <th class="td-role">Роль</th>
        <th class="td-email">Email</th>
        <th class="td-date">Дата регистрации</th>
        <th class="td-actions">Действия</th>
        </thead>
        <tbody>
        @forelse($filteredUsersPage->items() as $user)
            <tr>
                <td class="td-id">{{ $user->getKey() }}</td>
                <td class="td-fio">{{sprintf("%s %s %s", $user->name , $user->surname , $user->patronymic)  }}</td>
                <td class="td-role">{{ $user->role->title }}</td>
                <td class="td-email">{{ $user->email }}</td>
                <td class="td-date">{{ $user->created_at }}</td>
                <td class="td-actions">
                    <a
                        href="{{ route('users.user.view', ['userId' => $user->getKey()]) }}">Редактировать
                    </a>
                    <a
                        href="{{ route('users.user.delete', ['userId' => $user->getKey()]) }}">Удалить
                    </a>
                </td>
            </tr>
        @empty
            Пользователи отсутствуют
        @endforelse
        </tbody>
    </table>
    <p class="p-after-table">
        {{ $filteredUsersPage->withQueryString()->links('pagination::bootstrap-5') }}
    </p>
</div>


{{--<div class="container-bot">--}}
{{--    <table class="table-users">--}}
{{--        <tr>--}}
{{--            <th class="td-id">ID</th>--}}
{{--            <th class="td-fio">ФИО</th>--}}
{{--            <th class="td-role">Роль</th>--}}
{{--            <th class="td-email">Email</th>--}}
{{--            <th class="td-date">Дата регистрации</th>--}}
{{--            <th class="td-actions">Действия</th>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="td-id">1</td>--}}
{{--            <td class="td-fio">Костебелова Елизавета Константиновна</td>--}}
{{--            <td class="td-role">Администратор</td>--}}
{{--            <td class="td-email">Lizbet227@gmail.com</td>--}}
{{--            <td class="td-date">01.12.2023</td>--}}
{{--            <td class="td-actions">--}}
{{--                <button type="button" class="btn-del">Удалить</button>--}}
{{--                <button type="button" class="btn-edit">Редактировать</button>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td class="td-id">1</td>--}}
{{--            <td class="td-fio">Костебелова Елизавета Константиновна</td>--}}
{{--            <td class="td-role">Пользователь</td>--}}
{{--            <td class="td-email">Lizbet227@gmail.com</td>--}}
{{--            <td class="td-date">01.12.2023</td>--}}
{{--            <td class="td-actions">--}}
{{--                <button type="button" class="btn-del">Удалить</button>--}}
{{--                <button type="button" class="btn-edit">Редактировать</button>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--</div>--}}
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
    }
    h1 {
        font-size: 46px;
        color: #2E6243;
        margin-left: 120px;
    }


    div.container-top {
        background: white;
        margin-left: 120px;
        width: 1560px;
    }
    div.container-bot {
        background: white;
        margin-left: 120px;
        width: 1560px;
    }

</style>
