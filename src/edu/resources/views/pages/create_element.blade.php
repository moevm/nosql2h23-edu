<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create element</title>
</head>
<body>

<div class="container-center">
    <h1>Создание элемента</h1>
    <p class="note">Введите название элемента</p>
    <input class="element-name-enter" type="text">
    <p class="note">Выберете тип элемента</p>
    <input class="element-type-enter" type="text">
    <p class="note">Введите содержание элемента</p>
    <textarea class="element-content-enter" rows="10" cols="69" name="text"></textarea>
    <p>
        <button type="button" class="btn-add-content-course">Добавить содержание</button>
    </p>
    <p>
        <button type="button" class="btn-create-element">Cоздать элемент</button>
    </p>

</div>
</body>
</html>
<style>
    html {
        background: white;
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
        text-align: left;
        margin-top: 100px;
        margin-left: 300px;
        background: white;
    }
    h1 {
        text-align: center;
        font-size: 46px;
        margin-left: 10px;
        margin-top: 100px;
        color: black;
    }
    button.btn-add-content-course {
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-add-content-course:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-create-element {
        color: #FFFFFF;
        background: #2E6243;
        float: right;
    }
    button.btn-create-element:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        float: right;
    }
</style>
