<?php
include 'config.php';
header("Content-type: text/html; charset=utf8");

function proverka($tmp)
{
    $tmp = addslashes($tmp);
    $tmp = htmlspecialchars($tmp);
    return $tmp;
}

$action = $_POST['action'];
$action = proverka($action);

switch ($action) {

    case 'search':
    {
        $search = $_POST['search'];
        $search = proverka($search);
        $byField = $_POST['byField'];
        $byField = proverka($byField);

        if ($search != '') {

            if($byField == 'byFIO'){
                $query = mysql_query("SELECT * FROM `abonent` WHERE `contact` LIKE '$search%' ORDER by `contact`");
            }
            if($byField == 'byAddress'){
                $query = mysql_query("SELECT * FROM `abonent` WHERE `addr` LIKE '$search%' ORDER by `addr`");
            }

            if (mysql_num_rows($query) > 0) {
                $sql = mysql_fetch_array($query);
                do {
                    //echo "<a onclick='showAbonentData(".$sql['name'].",". $sql['addr'].",". $sql['phones'].");'>". $sql['contact'] . "</a></br>"; //надо экранировать красиво скобками переменные
                    echo "<a onclick='showAbonentData($sql);'>". $sql['contact'] . "</a></br>";
                } while ($sql = mysql_fetch_array($query));
            } else {
                echo "Нет результатов";
            }
            mysql_close();
        }
    }
        break;
    case 'addAb':
    {
        if($_POST['formType'] !='' && $_POST['formType'] == 'fiz')
        {
            $fam = proverka($_POST['inputFam']);
            $name = proverka($_POST['inputName']);
            $otch = proverka($_POST['inputOtch']);
            $address = proverka($_POST['inputAddress']);
            $tel = proverka($_POST['inputPhone']);
            $passport = proverka($_POST['inputPassport']);
            $mail = proverka($_POST['inputEmail']);
            //$query = mysql_query("INSERT INTO `abonent` (`id`, `user`, `manager`, `type`, `add_type`, `date`, `name`, `contact`, `addr`, `phones`,
            `email`, `next`, `talk`, `notes`, `login`, `password`, `passport`, `bill`, `bank`, `director`, `director_state`, `director_reason`,
            `bill_address`, `control_site_id`, `sedna_id`, `billing_id`, `firstname`, `lastname`, `middlename`, `pasport_seria`, `pasport_kem_vydan`,
            `pasport_kogda_vydan`, `personal_number`, `pasport_nomer`, `inostranec`, `bank_name`, `bank_code`, `new`, `dfirstname`, `dlastname`,
            `dmiddlename`, `cfirstname`, `clastname`, `cmiddlename`, `bank_addres`) VALUES (ТУТ ЗНАЧЕНИЯ)");
        }
        elseif($_POST['formType'] !='' && $_POST['formType'] == 'yur')
        {
            $inputNameOrganization = proverka($_POST['inputNameOrganization']);
            $inputFam = proverka($_POST['inputFam']);
            $inputName = proverka($_POST['inputName']);
            $inputOtch = proverka($_POST['inputOtch']);
            $inputDoljn = proverka($_POST['inputDoljn']);
            $inputOsnovanie = proverka($_POST['inputOsnovanie']);
            $inputContact = proverka($_POST['inputContact']);
            $inputUNN = proverka($_POST['inputUNN']);
            $inputYurAddress = proverka($_POST['inputYurAddress']);
            $inputAddress = proverka($_POST['inputAddress']);
            $inputBank = proverka($_POST['inputBank']);
            $inputBankKod = proverka($_POST['inputBankKod']);
            $inputBankAddress = proverka($_POST['inputBankAddress']);
            $inputBill = proverka($_POST['inputBill']);
            $inputPhone = proverka($_POST['inputPhone']);
            $inputEmail = proverka($_POST['inputEmail']);
            //$query = mysql_query("INSERT INTO `abonent` (`id`, `user`, `manager`, `type`, `add_type`, `date`, `name`, `contact`, `addr`, `phones`,
            `email`, `next`, `talk`, `notes`, `login`, `password`, `passport`, `bill`, `bank`, `director`, `director_state`, `director_reason`,
            `bill_address`, `control_site_id`, `sedna_id`, `billing_id`, `firstname`, `lastname`, `middlename`, `pasport_seria`, `pasport_kem_vydan`,
            `pasport_kogda_vydan`, `personal_number`, `pasport_nomer`, `inostranec`, `bank_name`, `bank_code`, `new`, `dfirstname`, `dlastname`,
            `dmiddlename`, `cfirstname`, `clastname`, `cmiddlename`, `bank_addres`) VALUES (ТУТ ЗНАЧЕНИЯ)");
        }
        echo "Добавлен";
    }
        break;
    default:
        echo "Пустой экшен";
        break;
}
?>