<?php //phpinfo();  ?>
<html lang="ru">
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
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/text.js"></script>

    <script type="text/javascript">
        $(document).ready(function () { //отлавливаем события
            //search();
            $('#search').keyup(function () { //при отжатии клавиши
                hideForm();
                search();
            });
            $('#search').click(function () { //при отжатии клавиши
                //search();
            });
            $('#addAb').click(function () {  //при нажатии мыши
                if ($('#fiz').hasClass('active')) {
                    addAbFiz();
                }
                if ($('#yur').hasClass('active')) {
                    addAbYur();
                }
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
                    <li class="active"><a href="index.php">Абоненты</a></li>
                    <li><a href="support.php">Техподдержка</a></li>
                    <li><a href="documents.php">Документы</a></li>
                    <li><a href="equipment.php">Оборудование</a></li>
                    <li><a href="users.php">Юзеры</a></li>
                    <li><a href="cabinet.php">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container">
<h1>Абоненты</h1>

<div class="row-fluid">
<!-- Постоянно на странице -->
<div class="span10"><input type="text" name="search" id="search" class="input-block-level"
                           placeholder="Введите ФИО"/></div>
<div class="span2">
    <button type="button" data-toggle="modal" data-target="#addAbonent">Новый абонент</button>
</div>
<div class="span12">
    <div class="span2">
        <label class="radio">
            <input type="radio" name="optionsRadios" id="byField" value="byFIO" checked>
            по ФИО
        </label>
    </div>
    <div class="span2">
        <label class="radio">
            <input type="radio" name="optionsRadios" id="byField" value="byAddress">
            по адресу
        </label>
    </div>
</div>

<!-- Всплывающие блоки-->

<!-- Добавление абонента -->
<div class="modal hide" id="addAbonent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Добавление абонента</h3>
</div>
<div class="modal-body">
<ul class="nav nav-tabs">
    <li class="active"><a href="#fiz" data-toggle="tab">физик</a></li>
    <li><a href="#yur" data-toggle="tab">юрик</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="fiz">
    <!--Добавлению физического лица-->
    <form method="post" class="form-horizontal" id="formAddFizAb">
        <input type="hidden" name="formType" id="formType" value="fiz">

        <div class="control-group">
            <label class="control-label" for="inputFam">Фамилия</label>

            <div class="controls">
                <input type="text" name="inputFam" id="inputFam" placeholder="Фамилия" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputName">Имя</label>

            <div class="controls">
                <input type="text" name="inputName" id="inputName" placeholder="Имя" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputOtch">Отчество</label>

            <div class="controls">
                <input type="text" name="inputOtch" id="inputOtch" placeholder="Отчество" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputAddress">Адрес</label>

            <div class="controls">
                <input type="text" name="inputAddress" id="inputAddress"
                       placeholder="ул. Лукьяновича, 24/1-17" required pattern="^[а-яА-ЯёЁ0-9-_\.]{5,30}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPhone">Телефон</label>

            <div class="controls">
                <input type="text" name="inputPhone" id="inputPhone" placeholder="(29)1234567" required
                       pattern="[\(]\d{2}[\)]\d{7}">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassport">№ Паспорта</label>

            <div class="controls">
                <input type="text" name="inputPassport" id="inputPassport" placeholder="MP1234567" required
                       pattern="^[A-ZА-Я]{2}\d{7}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>

            <div class="controls">
                <input type="email" name="inputEmail" id="inputEmail" placeholder="example@email.ru">
            </div>
        </div>
    </form>
</div>

<div class="tab-pane" id="yur">
    <!--Добавлению юридического лица-->
    <form method="post" class="form-horizontal" id="formAddYurAb">
        <input type="hidden" name="formType" id="formType" value="yur">

        <div class="control-group">
            <label class="control-label" for="inputNameOrganization">Название организации</label>

            <div class="controls">
                <input type="text" name="inputNameOrganization" id="inputNameOrganization"
                       placeholder="Название организации" required pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputFam">Фамилия руководителя</label>

            <div class="controls">
                <input type="text" name="inputFam" id="inputFam" placeholder="Фамилия" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputName">Имя руководителя</label>

            <div class="controls">
                <input type="text" name="inputName" id="inputName" placeholder="Имя" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputOtch">Отчество руководителя</label>

            <div class="controls">
                <input type="text" name="inputOtch" id="inputOtch" placeholder="Отчество" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputDoljn">Должность руководителя</label>

            <div class="controls">
                <input type="text" name="inputDoljn" id="inputDoljn" placeholder="Директор" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputOsnovanie">На основании чего он действует</label>

            <div class="controls">
                <input type="text" name="inputOsnovanie" id="inputOsnovanie" placeholder="Устава" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputContact">Контактное лицо</label>

            <div class="controls">
                <input type="text" name="inputContact" id="inputContact" placeholder="Контактное лицо"
                       required pattern="^[а-яА-ЯёЁ0-9-_\.]{3,20}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputUNN">УНН</label>

            <div class="controls">
                <input type="text" name="inputUNN" id="inputUNN" placeholder="100533485" required
                       pattern="\d{9}">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputYurAddress">Юридический адрес</label>

            <div class="controls">
                <input type="text" name="inputYurAddress" id="inputYurAddress"
                       placeholder="ул. Лукьяновича, 24/1-17" required pattern="^[а-яА-ЯёЁ0-9-_\.]{5,30}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputAddress">Почтовый адрес</label>

            <div class="controls">
                <input type="text" name="inputAddress" id="inputAddress"
                       placeholder="ул. Лукьяновича, 24/1-17" required pattern="^[а-яА-ЯёЁ0-9-_\.]{5,30}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputBank">Наименование банка</label>

            <div class="controls">
                <input type="text" name="inputBank" id="inputBank"
                       placeholder="ОАО АСБ Беларусбанк ф-л № 511" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{5,30}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputBankKod">Код банка</label>

            <div class="controls">
                <input type="text" name="inputBankKod" id="inputBankKod" placeholder="815" required
                       pattern="\d{3}">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputBankAddress">Адрес банка</label>

            <div class="controls">
                <input type="text" name="inputBankAddress" id="inputBankAddress"
                       placeholder="г. Минск, ул. Долгобродская, 1" required
                       pattern="^[а-яА-ЯёЁ0-9-_\.]{5,30}$">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputBill">Расчетный счет</label>

            <div class="controls">
                <input type="text" name="inputBill" id="inputBill" placeholder="3630000123456" required
                       pattern="\d{13}">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPhone">Контактный телефон</label>

            <div class="controls">
                <input type="text" name="inputPhone" id="inputPhone" placeholder="(29)1234567" required
                       pattern="[\(]\d{2}[\)]\d{7}">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>

            <div class="controls">
                <input type="email" name="inputEmail" id="inputEmail" placeholder="example@email.ru">
            </div>
        </div>
    </form>
</div>
</div>
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
    <button class="btn btn-primary" id="addAb">Добавить</button>
</div>
</div>
<!-- Конец Добавление абонента-->

<!-- Начало данные абонента-->
<div class="modal hide" id="dataAbonent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Данные абонента</h3>
    </div>
    <div class="modal-body" id="modalBodyDataAb">
    </div>

    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Закрыть</button>
        <button class="btn btn-primary">Редактировать</button>
    </div>
</div>
<!-- Конец данные абонента-->

<div id="resSearch" class="span12"></div>
</div>
</div>

</body>
</html>