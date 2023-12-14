<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Просмотр курса</title>
</head>
<body>
<h1>Просмотр курса</h1>
<div class="container-center">
    <h2>Основы параллельных алгоритмов</h2>
    <form>
        <div class="elements-group" role="group">
            <button type="button" class="btn-one">1</button>
            <button type="button" class="btn-two">2</button>
            <button type="button" class="btn-three">3</button>
            <button type="button" class="btn-four">4</button>
        </div>
    </form>
    <h3>Элемент №1</h3>
    <div class="container-center-content">
        <h4>
            Condition variable<br>
        </h4>
        <p>
            Condition variable (условная переменная) - это синхронизационный
            примитив в многопоточном программировании, который
            позволяет потокам ожидать определенного условия для
            продолжения выполнения или уведомлять другие потоки о
            происходящих изменениях.<br>
        <p> </p>
        <p>
            Condition variable обычно используется в сценариях, когда потокам
            требуется ожидать определенного условия или ждать сигнала от
            другого потока о том, что условие стало истинным. Он позволяет
            потокам эффективно управлять своим состоянием ожидания,
            засыпания и пробуждения, минимизируя накладные расходы
            на процессор и ресурсы.
        </p>
        <button type="button" class="btn-mark-as-passed">Отметить пройденным</button>
    </div>
    <p>
        <button type="button" class="btn-to-list-courses">К списку курсов</button>
    </p>
</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
    }
    body {
        margin-left: 450px;
    }
    div.container-center {
        background: white;
        width: 1000px;
        height: 700px;
    }
    div.container-center-content {
        background: white;
        width: 900px;
        height: 450px;
        outline: 2px solid #ABA3A3;
        margin-left: 45px;
    }
    p {
        font-size: 20px;
        margin-left: 25px;
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
        text-align: left;
        margin-top: 50px;
        color: #2E6243;
    }
    button.btn-mark-as-passed {
        color: #FFFFFF;
        background: #2E6243;
        margin-left: 300px;
    }
    button.btn-mark-as-passed:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-to-list-courses {
        color: #FFFFFF;
        background: #2E6243;
        float: right;
        margin-right: 50px;
    }
    button.btn-to-list-courses:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        float: right;
    }
    h2 {
        text-align: left;
        margin-top: 10px;
    }
    h3 {
        text-align: center;
        margin-top: 10px;
        font-size: 24px;
    }
    h4 {
        font-size: 24px;
        text-align: center;
        margin-top: 10px;
        font-weight: normal;
    }
    button.btn-one {
        margin-left: 750px;
    }
    button.btn-two, button.btn-three, button.btn-two, button.btn-four {
        margin-left: -6px;
    }
</style>
