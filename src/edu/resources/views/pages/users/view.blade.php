<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit profile</title>
</head>
<body>
<h1>Редактировать профиль</h1>
<div class="container-center">
    <h2>Персональная информация</h2>
    <form method="POST" action="{{ route('users.user.edit', ['userId' => $user->getKey()]) }}" class="links">
        @csrf
        <label>
            <p> Email</p>
            <input name="email" type="email" class="login-enter" value="{{ $user->email }}" required>
        </label>
        <label>
            <p> Имя<a class="red-star">*</a></p>
            <input name="name" type="text" class="name-enter" value="{{ $user->name }}" required>
        </label>
        <label>
            <p> Фамилия<a class="red-star">*</a></p>
            <input name="surname" type="text" class="surname-enter" value="{{ $user->surname }}" required>
        </label>
        <label>
            <p> Отчество</p>
            <input name="patronymic" type="text" class="patronymic-enter" value="{{ $user->patronymic }}" required>
        </label>
        <label>
            <p> Дата рождения<a class="red-star">*</a></p>
            <input name="date_birth" type="date" class="birth-enter" value="{{ date('Y-m-d',strtotime($user->date_birth))}}" required>
        </label>
        <label>
            <p> Выберите пол<a class="red-star">*</a></p>
        </label>
        <label>
            <p> Мужской</p>
            <input name="gender" {{ ($user->gender=="1")? "checked" : "" }} type="radio" class="gender-enter" value="1" required>
        </label>
        <label>
            <p> Женский</p>
            <input name="gender" {{ ($user->gender=="0")? "checked" : "" }} type="radio" class="gender-enter" value="0" required>
        </label>
        <p class="note">Чтобы сохранить изменения нажмите "Сохранить".</p>
        <button type="submit" class="btn-save">Сохранить</button>
    </form>
    <a class="tu-ul" href="{{ route('users.list') }}">К списку пользователей</a>
</div>
</body>
</html>
<style>
    a.tu-ul {
        margin-top: 10px;
        margin-bottom: 10px;
        color: #2E6243;
    }
    html {
        background: #AFFAAF;
    }
    body {
        margin-left: 450px;
    }
    a.red-star {
        color: red;
    }
    div.container-center {
        background: white;
        width: 1000px;
        text-align: center;
    }
    p {
        font-size: 24px;
        margin-left: 10px;
    }
    a {
        font-size: 24px;
    }
    input {
        font-size: 24px;
        width: 400px;
        height: 40px;
        border-radius: 5px;
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
        margin-left: 200px;
        margin-top: 50px;
        color: #2E6243;
    }
    button.btn-back-to-users, button.btn-save {
        font-size: 24px;
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-back-to-users:hover, button.btn-save:hover {
        opacity: 80%;
    }
</style>
