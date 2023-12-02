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
        <a>Имя <a class="red-star">*</a></a>
        <a>Email <a class="red-star">*</a></a>
    </p>
    <form>
        <input class="name-enter" type="text" placeholder="Анатолий">
        <input class="email-enter" type="text" placeholder="coolman@gmail.com">
    </form>
    <p>
        <a>Фамилия <a class="red-star">*</a></a>
        <a>Пароль <a class="red-star">*</a></a>
    </p>
    <form>
        <input class="sername-enter" type="text" placeholder="Денежный">
        <input class="password-enter" type="password" placeholder="Пароль">
    </form>
    <p>
        <a>Отчество</a>
        <a>Повторите пароль <a class="red-star">*</a></a>
    </p>
    <form>
        <input class="patr-enter" type="text" placeholder="Антонович">
        <input class="again-password-enter" type="password" placeholder="Повторите пароль">
    </form>
    <p>
        <a>Дата рождения <a class="red-star">*</a></a>
        <a>Пол <a class="red-star">*</a></a>
    </p>
    <form>
        <div class="special-group" role="group">
            <input class="birth-enter" type="date">
            <button type="button" class="btn male">Мужской</button>
            <button type="button" class="btn female">Женский</button>
        </div>
    </form>


    <p class="note">Нажимая на кнопку “Регистрация”, вы даете согласие на обработку персональных данных.</p>
    <div class="btn-group" role="group">
        <button type="button" class="btn-sign-in">Войти</button>
        <button type="button" class="btn-registration">Регистрация</button>
    </div>
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
    a.red-star {
        color: red;
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
    button.btn-registration {
        color: #FFFFFF;
        background: #2E6243;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 10px;
    }
    button.btn-registration:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 10px;
    }

</style>
