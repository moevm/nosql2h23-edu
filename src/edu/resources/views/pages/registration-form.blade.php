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
        <a class="name">Имя <a class="red-star">*</a></a>
        <a class="email">Email <a class="red-star">*</a></a>
    </p>
    <form>
        <input class="name-enter" type="text" placeholder="Анатолий">
        <input class="email-enter" type="text" placeholder="coolman@gmail.com">
    </form>
    <p>
        <a class="sername">Фамилия <a class="red-star">*</a></a>
        <a class="password">Пароль <a class="red-star">*</a></a>
    </p>
    <form>
        <input class="sername-enter" type="text" placeholder="Денежный">
        <input class="password-enter" type="password" placeholder="Пароль">
    </form>
    <p>
        <a class="patr">Отчество</a>
        <a class="again-password">Повторите пароль <a class="red-star">*</a></a>
    </p>
    <form>
        <input class="patr-enter" type="text" placeholder="Антонович">
        <input class="again-password-enter" type="password" placeholder="Повторите пароль">
    </form>
    <p>
        <a class="birthday">Дата рождения <a class="red-star">*</a></a>
        <a class="sex">Пол <a class="red-star">*</a></a>
    </p>
    <form>
        <div class="special-group" role="group">
            <input class="birth-enter" type="date">
            <button type="button" class="btn-male">Мужской</button>
            <button type="button" class="btn-female">Женский</button>
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
    
    body {
        margin-left: 270px;
    }
    
    div.container-center {
        width: 900px;
        height: 600px;
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
    input.birth-enter {
        margin-left: 10px;
    }
    button.btn-male {
        margin-left: 40px;
    }
    button.btn-female {
        margin-left: -6px;
    }
    input.email-enter {
        margin-left: 45px;
    }
    input.password-enter {
        margin-left: 45px;
    }
    input.again-password-enter {
        margin-left: 45px;
    }

    a.email {
        margin-left: 370px;
    }
    a.password {
        margin-left: 310px;
    }
    a.again-password {
        margin-left: 325px;
    }
    a.sex {
        margin-left: 225px;
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

    div.btn-group {
        font-size: 24px;
        margin-top: 30px;
        display: flex;
        margin-left: 550px;
        height: 30px;
    }

    button.btn-sign-in {
        font-size: 24px;
        margin-right: 40px;
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-sign-in:hover {
        font-size: 24px;
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-registration {
        font-size: 24px;
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-registration:hover {
        font-size: 24px;
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
    }

</style>
