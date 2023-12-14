<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create course</title>
</head>
<body>

<div class="container-center">
    <h1>Создание курса</h1>
    <form method="POST" action="{{ route('courses.create') }}" class="links">
        @csrf
        <label>
            <p class="note">Введите название курса<a class="red-star">*</a></p>
            <input name="title" type="text" class="title-enter" placeholder="Название курса" required>
        </label>
        <label>
            <p class="note">Введите описание курса<a class="red-star">*</a></p>
            <textarea name="description" type="text" class="description-enter" placeholder="Описание курса" required> </textarea>
        </label>
        <p>
            <button type="submit" class="btn-create-course">Создать курс</button>
        </p>
    </form>

</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
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
    textarea {
        font-size: 24px;
        width: 500px;
        height: 150px;
        border-radius: 5px;
        resize: none;
    }
    div.container-center {
        width: 800px;
        height: 550px;
        text-align: center;
        margin-top: 100px;
        margin-left: 300px;
        background: white;
    }
    h1 {
        text-align: left;
        font-size: 46px;
        margin-left: 10px;
        margin-top: 100px;
        color: #2E6243;
    }
    button.btn-create-course {
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-create-course:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
    }
    a.red-star {
        color: red;
    }
</style>
