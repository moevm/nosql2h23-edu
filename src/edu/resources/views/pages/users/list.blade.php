<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Список пользователей</title>
</head>
<body>
<ul id="navbar">
    @if ($isAdmin)
        <li><a href="{{ route('courses.list')}}">Список курсов</a></li>
        <li><a href="{{ route('courses.statistics')}}">Статистика по курсам</a></li>
        <li><a href="{{ route('users.list')}}">Список пользователей</a></li>
        <li><a href="{{ route('logout')}}">Выход</a></li>
    @else
        <li><a href="{{ route('courses.assigned-courses')}}">Мои курсы</a></li>
        <li><a href="{{ route('logout')}}">Выход</a></li>
    @endif
</ul>
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
        <label> <p class="label-role"> Выберите роль</p></label>
        <label class="admin-or-user">
            <a> Пользователь</a>
            <input name="filters[role_title]" type="radio" class="role-enter" value="Пользователь">
            <a> Администратор</a>
            <input name="filters[role_title]" type="radio" class="role-enter" value="Администратор">
        </label>
        <button type="submit" class="btn-search">Поиск</button>
    </form>

    <a href="{{ route("users.export") }}" class="a-download-json">Выгрузить в json формате</a>
    <form method="POST" action="{{ route("users.import") }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Загрузить в json формате</button>
    </form>

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
    button.btn-search {
        margin-left: 100px;
    }
    p.label-role {
        color: #2E6243;
        font-size: 24px;
        font-weight: bold;
    }
    a {
        font-size: 24px;
        color: #2E6243;
    }
    button {
        font-size: 24px;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        border-color: black;
        text-align: center;
        color: #FFFFFF;
        background: #2E6243;
        height: 45px;
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
        margin-top: 10px;
        margin-bottom: 20px;
    }
    h1 {
        font-size: 46px;
        color: #2E6243;
        margin-left: 120px;
    }

    input.role-enter {
        height: 20px;
        width: 40px;
    }

    table, th, td {
        table-layout: fixed;
        font-size: 24px;
        border-collapse: collapse;
        border: 3px solid grey;
        text-align: center;
    }
    div.container-top {
        background: white;
        margin-left: 120px;
        width: 1560px;
        height: 480px;
    }
    div.container-bot {
        text-align: center;
        background: white;
        margin-left: 120px;
        width: 1560px;
    }
    #navbar {
        margin: 0;
        padding: 0;
        list-style-type: none;
        border: 2px solid #2E6243;
        border-radius: 20px 5px;
        text-align: center;
        background-color: #2E6243;
    }
    #navbar li { display: inline; }
    #navbar a {
        color: #fff;
        padding: 5px 10px;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        width: 300px;
    }
    #navbar a:hover {
        border-radius: 20px 5px;
        background-color: #2E6243;
    }
</style>
