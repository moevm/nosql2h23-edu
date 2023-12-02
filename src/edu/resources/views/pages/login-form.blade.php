<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
<div class="container-center">
    <h1>Войти в систему</h1>
    <div class="container">
        <h2>Для работы системы необходимо авторизоваться.
            Пожалуйста, введите логин и пароль.</h2>
        <form>
            <input type="text" placeholder="Логин">
            <input type="password" placeholder="Пароль">
        </form>
        <p><a href="#" class="link-registration">Регистрация</a></p>
        <p><a href="#" class="link-forget-password">Забыли пароль?</a></p>
        <button type="button" class="btn-sign-in">Войти</button>
    </div>
</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
    }
    div.container-center {
        background: white;
    }
    h1 {
        color: #2E6243;
    }
    a.link-registration {
        color: #117427;
    }
    a.link-forget-password {
        color: #117427;
    }
    button.btn-sign-in {
        color: #FFFFFF;
        background: #2E6243;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 10px;
    }
    button.btn-sign-in:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 10px;
    }

</style>
