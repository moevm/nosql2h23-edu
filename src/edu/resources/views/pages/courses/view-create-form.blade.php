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
            <p class="note">Введите название курса</p>
            <input name="title" type="text" class="login-enter" placeholder="Логин" required>
        </label>
        <label>
            <p class="note">Введите описание курса</p>
            <input name="description" type="text" class="password-enter" placeholder="Пароль" required>
        </label>
        <a href="#" class="link-registration">Регистрация</a>
        <a href="#" class="link-forget-password">Забыли пароль?</a>
        <button type="submit" class="btn-sign-in">Войти</button>
    </form>
    <p class="note">Введите название курса</p>
    <input class="course-name-enter" type="text">
    <p class="note">Введите описание курса</p>
    <input class="course-description-enter" type="text">
    <p>
        <button type="button" class="btn-create-course">Создать курс</button>
    </p>

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
    div.container-center {
        width: 800px;
        height: 450px;
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
</style>
