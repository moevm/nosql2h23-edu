<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Создание пользователя</title>
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
<h1>Создание пользователя</h1>
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
    <form method="POST" action="{{ route('users.create') }}" class="links">
        @csrf
        <label>
            <p> Email</p>
            <input name="email" type="email" class="login-enter" placeholder="Email" required>
        </label>
        <label>
            <p> Имя<a class="red-star">*</a></p>
            <input name="name" type="text" class="name-enter" placeholder="Имя" required>
        </label>
        <label>
            <p> Фамилия<a class="red-star">*</a></p>
            <input name="surname" type="text" class="surname-enter" placeholder="Фамилия" required>
        </label>
        <label>
            <p> Отчество</p>
            <input name="patronymic" type="text" class="patronymic-enter" placeholder="Отчество" required>
        </label>
        <label>
            <p> Дата рождения<a class="red-star">*</a></p>
            <input name="date_birth" type="date" class="birth-enter" required>
        </label>
        <label>
            <p> Пароль<a class="red-star">*</a></p>
            <input name="password" type="password" class="password-enter" placeholder="Пароль" required>
        </label>
        <label>
            <p> Повторите пароль<a class="red-star">*</a></p>
            <input name="password_confirmation" type="password" class="password-confirm--enter" placeholder="Повторите пароль" required>
        </label>
        <label>
            <p> Выберите пол<a class="red-star">*</a></p>
        </label>
        <label>
            <p> Мужской</p>
            <input name="gender" type="radio" class="gender-enter" value="1" required>
        </label>
        <label>
            <p> Женский</p>
            <input name="gender" type="radio" class="gender-enter" value="0" required>
        </label>
        <label>
            <p> Выберите роль<a class="red-star">*</a></p>
        </label>
        <label>
            <p> Пользователь</p>
            <input name="role_title" type="radio" class="gender-enter" value="Пользователь" required>
        </label>
        <label>
            <p> Администратор</p>
            <input name="role_title" type="radio" class="gender-enter" value="Администратор" required>
        </label>
        <p></p>
        <button type="submit" class="btn-registration">Создать</button>
    </form>
    <a class="tu-ul" href="{{ route('users.list') }}">К списку пользователей</a>
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
    a.red-star {
        color: red;
    }
    a.link-login {
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
