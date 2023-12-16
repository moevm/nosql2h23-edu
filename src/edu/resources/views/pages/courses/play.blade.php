<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Просмотр курса</title>
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
<h1>Просмотр курса</h1>
<div class="container-top">
    <h2>{{$course->title}}</h2>
        @forelse($course->elements as $key=>$element)
        <div class="rama">
                <h3>Элемент № {{$key+1}}</h3>
                <h4>{{$element->title}}</h4>
                <p>{{$element->content}}</p>
                <br>
                <a href="{{ route('courses.course.statistic.create', ['element_id'=>$element->getKey(), 'user_id'=>$user->getKey(), 'courseId'=>$course->getKey(), 'points'=>100]) }}">Отметить пройденным</a>
        </div>

        @empty
            Элементы отсутствуют
        @endforelse
    <a class="tu-ul" href="{{ route('courses.list') }}">К списку курсов</a>
</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
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
    div.rama {
        margin-left: 220px;
        width: 1200px;
        height: 300px;
        outline: 2px solid #000;
        text-align: center;
    }
    h1 {
        font-size: 46px;
        color: #2E6243;
        margin-left: 120px;
    }
    h2 {
        font-size: 36px;
    }
    h3 {
        font-size: 36px;
        text-align: center;
    }
    h4 {
        text-align: center;
        font-size: 20px;
    }
    p {
        text-align: left;
        font-size: 20px;
    }
    div.container-top {
        background: white;
        margin-left: 120px;
        width: 1560px;
        height: 880px;
    }
    a.tu-ul {
        margin-top: 10px;
        margin-bottom: 10px;
        color: #2E6243;
        margin-left: 1210px;

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
