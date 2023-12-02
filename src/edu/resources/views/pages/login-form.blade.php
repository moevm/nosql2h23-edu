<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
<h1>Войти в систему</h1>
<div class="container-center">
    <div class="container">
        <p class="note">Для работы системы необходимо авторизоваться.</p>
        <p class="note">Пожалуйста, введите логин и пароль.</p>
        <input class="login-enter" type="text" placeholder="Логин">
        <p></p>
        <input class="password-enter" type="password" placeholder="Пароль">
        <form class="links">
            <a href="#" class="link-registration">Регистрация</a>
            <a href="#" class="link-forget-password">Забыли пароль?</a>
        </form>
        <button type="button" class="btn-sign-in">Войти</button>
    </div>
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
        height: 380px;
        text-align: center;
        margin-top: 10px;
        margin-left: 300px;
        background: white;
    }
    h1 {
        font-size: 46px;
        margin-left: 300px;
        margin-top: 100px;
        color: #2E6243;
    }
    p.note {
        text-align: left;
        margin-left: 10px;
        margin-top: 10px;
        color: black;
    }
    a.link-registration {
        color: #117427;
        text-align: left;
    }
    a.link-forget-password {
        color: #117427;
        margin-top: 20px;
        margin-left: 300px;
        text-align: right;
    }
    input.login-enter {
        display: flex;
        text-align: left;
        margin-bottom: 10px;
        margin-left: 10px;
    }
    input.password-enter {
        display: flex;
        text-align: left;
        margin-bottom: 10px;
        margin-left: 10px;
    }
    button.btn-sign-in {
        display: flex;
        margin-left: auto;
        margin-right: 30px;
        margin-top: 20px;
        text-align: center;
        color: #FFFFFF;
        background: #2E6243;
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
    }

</style>
