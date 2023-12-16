

    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Просмотр курса</title>
</head>
<body>
<h1>Просмотр курса</h1>
<div class="container-top">
    <h2>{{$course->title}}</h2>
    <div class="rama">
        @forelse($course->elements as $element)
                <h3>Элемент № </h3>
                <h4>{{$element->title}}</h4>
                <p>{{$element->content}}</p>
        @empty
            Элементы отсутствуют
        @endforelse
    </div>
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
        height: 700px;
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
</style>
