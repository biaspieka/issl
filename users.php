﻿<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/text.js"></script>

    <script type="text/javascript">
        $(document).ready(function () { //отлавливаем события
            search();
            $('#search').keyup(function () { //при отжатии клавиши
                hideForm();
                search();
            });
            $('#addForm').click(function () {  //при нажатии мыши
                showForm();
            });
        });
    </script>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">ISSL Айчына Плюс</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="index.php">Абоненты</a></li>
                    <li><a href="support.php">Техподдержка</a></li>
                    <li><a href="documents.php">Документы</a></li>
                    <li><a href="equipment.php">Оборудование</a></li>
                    <li class="active"><a href="users.php">Юзеры</a></li>
                    <li><a href="cabinet.php">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row-fluid">
        <div class="span12"></div>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>Логин</th>
                <th>Пароль</th>
                <th>Группа</th>
                <th>Действие</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Админ</td>
                <td>123456789</td>
                <td>1</td>
                <td><div class="btn-group">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Дейсвие <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Редактировать</a></li>
                            <li><a href="#">Удалить</a></li>
                        </ul>
                    </div></td>
            </tr>
            <tr>
                <td>Polly</td>
                <td>0987654321</td>
                <td>2</td>
                <td><div class="btn-group">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Действие <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Редактировать</a></li>
                            <li><a href="#">Удалить</a></li>
                        </ul>
                    </div></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>