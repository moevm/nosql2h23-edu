<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Statistic cources</title>
</head>
<body>
<h1>Все курсы</h1>
<div class="container-center">
    <h2>Статистика</h2>
    <div class="container-left-content">
        <p>Количество обучающихся более <input class="input-number-students-course" type="text" value="3"></p>
        <p>Количество прошедших курс более <input class="input-number-participants-course" type="text" value="1"></p>
    </div>
    <table class="table-statistics">
        <tr>
            <th class="td-id">ID</th>
            <th class="td-elem-name-course">Название курса</th>
            <th class="td-elem-students">Количество обучающихся</th>
            <th class="td-elem-participants">Количество прошедших курс</th>
        </tr>
        <tr>
            <td class="td-id">1</td>
            <td class="td-elem-name-course">Техника безопасности на нефтяном предприятии</td>
            <td class="td-elem-students">4</td>
            <td class="td-elem-participants">2</td>
        </tr>
        <tr>
            <td class="td-id">2</td>
            <td class="td-elem-name-course">Основы параллельных алгоритмов</td>
            <td class="td-elem-students">8</td>
            <td class="td-elem-participants">5</td>
        </tr>
    </table>
    <div class="btn-group">
        <button type="button">Выгрузить в json формате</button>
        <button type="button">Добавить файл</button>
    </div>
    <button type="button" class="btn-load-json">Загрузить в json формате</button>
    <button type="button" class="btn-to-list-courses">К списку курсов</button>
</div>
</body>
</html>
<style>
    html {
        background: #AFFAAF;
    }
    body {
        margin-left: 80px;
    }
    div.container-center {
        background: white;
        width: 1800px;
        height: 800px;
    }
    div.container-left-content {
        background: white;
        width: 550px;
        height: 100px;
        margin-left: 40px;
    }
    p {
        font-size: 20px;
        margin-left: 25px;
    }
    input {
        font-size: 24px;
        width: 80px;
        height: 40px;
        border-radius: 5px;
    }
    input.input-number-students-course{
        margin-left: 50px;
        text-align: center;
    }
    input.input-number-participants-course{
        margin-left: 18px;
        text-align: center;
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
    table, th, td {
        table-layout: fixed;
        font-size: 24px;
        border-collapse: collapse;
        border: 3px solid grey;
        text-align: center;
    }
    table {
        margin-top: 20px;
        margin-left: 65px;
        margin-bottom: 5px;
    }
    td.td-id{
        width: 50px;
    }
    td.td-elem-name-course, td.td-elem-students, td.td-elem-participants {
        width: 365px;
    }
    button.btn-load-json {
        color: #FFFFFF;
        background: #2E6243;
        margin-left: 450px;
        margin-top: 250px;
        float: left;
    }
    button.btn-load-json:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
    }
    button.btn-to-list-courses {
        color: #FFFFFF;
        background: #2E6243;
        float: right;
        margin-right: 50px;
        margin-top: 250px;
    }
    button.btn-to-list-courses:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
        float: right;
    }
    div.btn-group button{
        display: block;
        color: #FFFFFF;
        background: #2E6243;
        margin-left: 65px;
        height: 50px;
        width: 340px;
    }
    div.btn-group button:hover {
        opacity: 80%;
        color: #FFFFFF;
        background: #2E6243;
    }
    h2 {
        margin-top: 10px;
        text-align: center;
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
</style>

