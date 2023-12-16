<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создание элемента</title>
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
<h1>Создание элемента</h1>
<div class="container-center">
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('courses.course.elements.create', ['courseId' => $courseId]) }}" class="links">
        @csrf
        <label>
            <p> Название элемента</p>
            <input name="title" type="text" class="title-enter" placeholder="Название" required>
        </label>
        <label>
            <p> Содержание элемента</p>
            <input name="content" type="text" class="content-enter" placeholder="Содержание" required>
        </label>
        <label>
            <p> Вес элемента</p>
            <input name="weight" type="text" class="weight-enter" placeholder="Вес" required>
        </label>
        <label>
            <p> Текст</p>
            <input name="type" type="radio" class="type-enter" value="Текст" required>
        </label>
        <label>
            <p> Cсылка</p>
            <input name="type" type="radio" class="type-enter" value="Cсылка" required>
        </label>
        <p> </p>
        <button type="submit" class="btn-registration">Создать элемент</button>
    </form>
        <a class="tu-ul" href="{{ route('courses.course.view', ['courseId' => $courseId]) }}">Обратно к курсу</a>
</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
    }
    a.tu-ul {
        margin-top: 10px;
        margin-bottom: 10px;
        color: #2E6243;
        margin-left: 650px;
    }
    body {
        margin-left: 270px;
    }

    div.container-center {
        text-align: center;
        width: 900px;
        margin-top: 10px;
        margin-left: 180px;
        background: white;
    }
    p {
        font-size: 24px;
        margin-left: 10px;
        margin-bottom: 1px;
    }
    a {
        font-size: 24px;
    }
    input {
        font-size: 24px;
        width: 400px;
        height: 40px;
        margin-left: 10px;
    }
    button {
        height: 50px;
        font-size: 24px;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        border-color: black;
    }


    h1 {
        font-size: 46px;
        margin-left: 300px;
        margin-top: 50px;
        color: #2E6243;
    }

    button.btn-registration {
        font-size: 24px;
        color: #FFFFFF;
        background: #2E6243;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    button.btn-registration:hover {
        font-size: 24px;
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        margin-top: 5px;
        margin-bottom: 5px;
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
