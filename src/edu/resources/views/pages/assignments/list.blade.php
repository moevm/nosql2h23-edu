<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Список назначений</title>
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
<h1>Список назначений</h1>
<div class="container-top">
    <h2>
        Назначения на курс: {{ $course->title }}
    </h2>

    <form method="GET" action="{{ route("courses.list") }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Загрузить в json формате</button>
    </form>

</div>

<div class="container-bot">
    <h2>Список пользователей, уже назначенных на курс:</h2>
    <table class="table-users">
        <thead>
        <th class="td-id">ID</th>
        <th class="td-title">ФИО</th>
        <th class="td-date">Дата назначения</th>
        <th class="td-actions">Действия</th>
        </thead>
        <tbody>
        @forelse($assignedUsers as $assignedUser)
            <tr>
                <td class="td-id">{{ $assignedUser->getKey() }}</td>
                <td class="td-author">{{sprintf("%s %s %s", $assignedUser->name, $assignedUser->surname, $assignedUser->patronymic) }}</td>
                <td class="td-date">{{ $assignedUser->created_at }}</td>
                <td class="td-actions">
                    <a
                        href="{{ route('courses.course.assignments.delete', ['courseId' => $course->getKey(), 'user_id' => $assignedUser->getKey()]) }}">Удалить
                    </a>
                </td>
            </tr>
        @empty
            Назначения на курс отсутствуют
        @endforelse
        </tbody>
    </table>
    <br>
    <h2>Список пользователей, которых можно назначить на курс:</h2>
    <table class="table-users">
        <thead>
        <th class="td-id">ID</th>
        <th class="td-title">ФИО</th>
        <th class="td-actions">Действия</th>
        </thead>
        <tbody>
        @forelse($notAssignedUsers as $notAssignedUser)
            <tr>
                <td class="td-id">{{ $notAssignedUser->getKey() }}</td>
                <td class="td-author">{{sprintf("%s %s %s", $notAssignedUser->name, $notAssignedUser->surname, $notAssignedUser->patronymic) }}</td>
                <td class="td-actions">
                    <a
                        href="{{ route('courses.course.assignments.create', ['courseId' => $course->getKey(), 'user_id' => $notAssignedUser->getKey()]) }}">Назначить
                    </a>
                </td>
            </tr>
        @empty
            Нет не назначенных на курс пользователей
        @endforelse
        </tbody>
    </table>
    <p class="p-after-table">
        <a
            href="{{ route('courses.course.view', ['courseId' => $course->getKey()]) }}">
            Назад к курсу
        </a>
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
    a {
        font-size: 24px;
        color: #2E6243;
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
        margin-top: 10px;
        margin-bottom: 20px;
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
    button.btn-del-course, button.btn-edit-course {
        width: 270px;
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
        /*margin-bottom: 200px;*/
    }
    a.a-show-for {
        margin-left: 600px;
    }
    a.link-clear-filters {
        margin-left: 720px;
    }
    button.btn-download-json, button.btn-load-json, button.btn-add-course, button.btn-add-file {
        width: 400px;
    }
    p.p-first-part, p.p-second-part, p.p-third-part {
        margin-bottom: -15px;
        margin-right: 10px;
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
