<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создание элемента</title>
</head>
<body>
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
    <h1>Создание элемента</h1>
    <form method="POST" action="{{ route('courses.course.elements.create', ['courseId' => $courseId]) }}">
        @csrf
        <label>
            <input name="title" class="element-name-enter" type="text" placeholder="Введите название элемента">
        </label>
        <label>
            <input name="type" class="element-name-enter" type="text" placeholder="Введите тип элемента">
        </label>
        <label>
            <input name="content" class="element-name-enter" type="text" placeholder="Введите наполнение элемента">
        </label>
        <label>
            <input name="weight" class="element-name-enter" placeholder="Введите вес элемента" type="text">
        </label>
        <button type="submit">Создать элемент</button>
    </form>
</div>
</body>
</html>
<style>
    html {
        background: white;
    }
    body {
        margin-left: 230px;
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
        width: 500px;
        height: 45px;
        border-radius: 5px;
    }
    div.container-center {
        width: 800px;
        height: 450px;
        text-align: left;
        margin-top: 100px;
        margin-left: 300px;
        background: white;
    }
    h1 {
        text-align: center;
        font-size: 46px;
        margin-left: 10px;
        margin-top: 100px;
        color: black;
    }
    button.btn-add-content-course {
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-add-content-course:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-create-element {
        color: #FFFFFF;
        background: #2E6243;
        float: right;
    }
    button.btn-create-element:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        float: right;
    }
    select{
        font-size: 24px;
        width: 500px;
        height: 90px;
        border-radius: 5px;
    }
</style>
