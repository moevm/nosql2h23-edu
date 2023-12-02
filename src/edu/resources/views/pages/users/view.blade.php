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
    <p>
        <a class="name">Имя <a class="red-star">*</a></a>
        <a class="birthday">Дата рождения <a class="red-star">*</a></a>
    </p>
    <form>
        <input class="name-enter" type="text" placeholder="Анатолий">
        <input class="birth-enter" type="date">
    </form>
    <p>
        <a class="sername">Фамилия <a class="red-star">*</a></a>
        <a class="sex">Пол <a class="red-star">*</a></a>
    </p>
    <form>
        <div class="special-group" role="group">
            <input class="sername-enter" type="text" placeholder="Денежный">
            <button type="button" class="btn-male">Мужской</button>
            <button type="button" class="btn-female">Женский</button>
        </div>
    </form>
    <a class="patr">Отчество</a>

    <p class="note">Чтобы сохранить изменения нажмите "Сохранить".</p>
    <div class="btn-group" role="group">
        <button type="button" class="btn-back-to-users">К списку пользователей</button>
        <button type="button" class="btn-save">Сохранить</button>
    </div>
</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
    }
    a.red-star {
        color: red;
    }
    div.container-center {
        background: white;
    }
    p {
        font-size: 24px;
    }
    a {
        font-size: 24px;
    }
    input {
        font-size: 24px;
        width: 400px;
        height: 40px;
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
    button.btn-male {
        margin-left: 40px;
    }
    button.btn-female {
        margin-left: -6px;
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
