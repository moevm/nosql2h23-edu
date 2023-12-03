<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit element</title>
</head>
<body>

<div class="container-center">
    <h1>Редактирование элемента</h1>
    <p class="note">Введите название элемента</p>
    <input class="element-name-enter" type="text">
    <p class="note">Выберете тип элемента</p>
    <select multiple name="type_element[]">
        <option disabled>Тип элемента</option>
        <option value="Вопрос">Вопрос</option>
        <option value="Задача">Задача</option>
        <option value="Ответ">Ответ</option>
    </select>
    <p class="note">Введите содержание элемента</p>
    <textarea class="element-content-enter" rows="10" cols="69" name="text"></textarea>
    <p>
        <button type="button" class="btn-add-content-course">Добавить содержание</button>
    </p>
    <p>
        <button type="button" class="btn-save-element">Сохранить</button>
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
    button.btn-save-element {
        color: #FFFFFF;
        background: #2E6243;
        float: right;
    }
    button.btn-save-element:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        float: right;
    }
    select{
        font-size: 24px;
        width: 500px;
        height: 90px;
        border-radius: 5px;
    }
</style>

