<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Редактирование курса</title>
</head>
<body>
<h1>Редактирование курса</h1>
<div class="container-top">
    <h2>Название курса: <a class="a-course-name">{{ $course->title }}</a></h2>
    <h2>Описание курса: <a class="a-course-description">{{ $course->description }}</a></h2>
    <h2>
        Показать по:
        <a href="{{ route('courses.course.view', ['courseId' => $course->getKey(), 'per-page' => 5]) }}">5</a>
        <a href="{{ route('courses.course.view', ['courseId' => $course->getKey(), 'per-page' => 10]) }}">10</a>
        <a href="{{ route('courses.course.view', ['courseId' => $course->getKey(), 'per-page' => 15]) }}">15</a>
    </h2>
    <h2>
        <a href="{{ route('courses.course.view', ['courseId' => $course->getKey()]) }}">Сбросить фильтры</a>
    </h2>
    <h2>
        <a href="{{ route('courses.course.elements.view-create-form', ['courseId' => $course->getKey()]) }}">Добавить элемент</a>
    </h2>

    <form method="GET" action="{{ route('courses.course.view', ['courseId' => $course->getKey()]) }}">
        <input name="filters[title]" id="elemInput" class="input-elem-name" type="text" placeholder="Введите название элемента">
        <input name="filters[type]" class="input-course-content" type="text" placeholder="Введите тип элемента">
        <button type="submit" class="btn-load-json">Поиск</button>
    </form>

</div>

<div class="container-bot">
    <h2>Содержание курса</h2>
    <table class="table-users">
        <thead>
            <th class="td-id">ID</th>
            <th class="td-elem-type">Тип элемента</th>
            <th class="td-elem-name">Название элемента</th>
            <th class="td-elem-content">Содержание элемента</th>
            <th class="td-actions">Действия</th>
        </thead>
        <tbody>
            @forelse($course->elements as $element)
                <tr>
                    <td class="td-id">{{ $element->id }}</td>
                    <td class="td-elem-type">{{ $element->type }}</td>
                    <td class="td-elem-name">{{ $element->title }}</td>
                    <td class="td-elem-content">{{ $element->content }}</td>
                    <td class="td-actions">
                        <a
                            href="{{ route('courses.course.elements.element.view', ['courseId' => $course->getKey(), 'elementId' => $element->getKey()]) }}">Редактировать
                        </a>
                        <a
                            href="{{ route('courses.course.elements.element.delete', ['courseId' => $course->getKey(), 'elementId' => $element->getKey()]) }}">Удалить
                        </a>
                    </td>
                </tr>
            @empty
                Элементы отсутствуют
            @endforelse
            {{ $course->elements->links() }}
        </tbody>
    </table>
    <p class="p-after-table">
        <a
            href="{{ route('courses.list') }}">
            К списку курсов
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
    h2 {
        font-size: 24px;
        color: #2E6243;
        margin-left: 10px;
    }
    a.a-course-description {
        color: black;
        font-weight: normal;
    }
    a.a-course-name {
        color: black;
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
        height: 530px;
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
    p.p-after-table {
        text-align: right;
        margin-right: 10px;
    }
</style>
