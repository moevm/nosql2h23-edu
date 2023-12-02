<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
</head>
<body>
<h1>Регистрация в системе</h1>
<div class="container-center">
    <p>
        <a>Имя</a>
        <a>Email</a>
    </p>
    <form>
        <input class="login-enter" type="text" placeholder="Логин">
        <input class="password-enter" type="password" placeholder="Пароль">
    </form>
    <p>
        <a>Фамилия</a>
        <a>Пароль</a>
    </p>
    <form>
        <input class="login-enter" type="text" placeholder="Логин">
        <input class="password-enter" type="password" placeholder="Пароль">
    </form>
    <p>
        <a>Отчество</a>
        <a>Повторите пароль</a>
    </p>
    <form>
        <input class="login-enter" type="text" placeholder="Логин">
        <input class="password-enter" type="password" placeholder="Пароль">
    </form>
    <p>
        <a>Дата рождения</a>
        <a>Пол</a>
    </p>
    <form>
        <div class="btn-group" role="group" aria-label="Basic example">
            <input class="login-enter" type="date" placeholder="Логин">
            <button type="button" class="btn male">Мужской</button>
            <button type="button" class="btn female">Женский</button>
        </div>
    </form>


    <p class="note">Нажимая на кнопку “Регистрация”, вы даете согласие на обработку персональных данных.</p>
    <button type="button" class="btn-sign-in">Войти</button>
</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
    }
    div.container-center {
        /*width: 450px;*/
        /*height: 240px;*/
        /*text-align: center;*/
        margin-top: 10px;
        /*margin-left: 300px;*/
        background: white;
    }
    h1 {
        margin-left: 300px;
        margin-top: 100px;
        color: #2E6243;
    }


    button.btn-sign-in {
        display: flex;
        margin-left: auto;
        margin-right: 10px;
        margin-top: 10px;
        text-align: right;
        color: #FFFFFF;
        background: #2E6243;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 10px;
    }
    button.btn-sign-in:hover {
        display: flex;
        margin-left: auto;
        margin-right: 10px;
        margin-top: 10px;
        text-align: right;
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 10px;
    }

</style>
