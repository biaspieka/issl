<?php
include 'config.php';
header("Content-type: text/html; charset=utf8");

function proverka ($tmp) {
    $tmp = addslashes($tmp);
    $tmp = htmlspecialchars($tmp);
    return $tmp;
}
$search = $_POST['search'];
$search = proverka($search);
//$search = stripslashes($search);

if ($search != '') {

    $query = mysql_query("SELECT * FROM `abonent` WHERE `contact` LIKE '$search%' ORDER by `contact`");

    if (mysql_num_rows($query) > 0) {
        $sql = mysql_fetch_array($query);
        do {
            echo "<div class='' id='" . $sql['id'] . "' onclick='dropInfo(this)'>" . $sql['contact'] . "</div>" .
                "<table class='table table-bordered table-condensed hide' id='info_" . $sql['id'] . "'>
            <thead>
                <tr>
                <th>Имя</th>
                <th>Адрес</th>
                <th>Телефон</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>" . $sql['name'] . "</td>
                <td>" . $sql['addr'] . "</td>
                <td>" . $sql['phones'] . "</td>
                </tr>
            </tbody>
        </table>";
        } while ($sql = mysql_fetch_array($query));
    } else {
        echo "Нет результатов";
    }
    mysql_close();
}
/*$addAb = $_POST['addAb'];
if ($addAb != '') {
    $fam = proverka($_POST['inputFam']);
    $name = proverka($_POST['inputName']);
    $otch = proverka($_POST['inputOtch']);
    $address = proverka($_POST['inputAddress']);
    $tel = proverka($_POST['inputPhone']);
    $passport = proverka($_POST['inputPassport']);
    $mail = proverka($_POST['inputEmail']);

    echo "Добавлен";
}*/
?>