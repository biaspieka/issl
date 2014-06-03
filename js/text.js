/**
 * Created by Polly on 27.04.14.
 */
function search(){
    var search = $("#search").val();
    var byField;
    var tmp = document.getElementsByName('optionsRadios');
    for ( var i = 0; i < tmp.length; i++) {
        if(tmp[i].checked) {
            byField = tmp[i].value;
        }
    }
    $.ajax({
        type: "POST",
        url: "func.php",
        data: {"action": "search", "search": search, "byField": byField},
        cache: false,
        success: function(response){
            $("#resSearch").html(response);
        }
    });
    return false;
};
function addAbFiz(){
    var formType = "fiz";
    var inputFam = $("#inputFam").val();
    var inputName = $("#inputName").val();
    var inputOtch = $("#inputOtch").val();
    var inputAddress = $("#inputAddress").val();
    var inputPhone = $("#inputPhone").val();
    var inputPassport = $("#inputPassport").val();
    var inputEmail = $("#inputEmail").val();
    //var formAdd = $("#formAddFizAb").serialize();
    $.ajax({
        type: "POST",
        url: "func.php",
        data: {"action": 'addAb', "formType": formType, "inputFam": inputFam, "inputName":inputName, "inputOtch":inputOtch, "inputAddress":inputAddress, "inputPhone":inputPhone, "inputPassport":inputPassport, "inputEmail":inputEmail},
        cache: false,
        success: function(response){
            //$("#resSearch").html(response);
            $("#addAbonent").modal('hide');
            alert(response);
        }
    });
    return false;
};
function addAbYur(){
    var formType = "yur";
    var inputNameOrganization = $("#inputNameOrganization").val();
    var inputFam = $("#inputFam").val();
    var inputName = $("#inputName").val();
    var inputOtch = $("#inputOtch").val();
    var inputDoljn = $("#inputDoljn").val();
    var inputOsnovanie = $("#inputOsnovanie").val();
    var inputContact = $("#inputContact").val();
    var inputUNN = $("#inputUNN").val();
    var inputYurAddress = $("#inputYurAddress").val();
    var inputAddress = $("#inputAddress").val();
    var inputBank = $("#inputBank").val();
    var inputBankKod = $("#inputBankKod").val();
    var inputBankAddress = $("#inputBankAddress").val();
    var inputBill = $("#inputBill").val();
    var inputPhone = $("#inputPhone").val();
    var inputEmail = $("#inputEmail").val();
    //var formAdd = $("#formAddYurAb").serialize();
    $.ajax({
        type: "POST",
        url: "func.php",
        data: {"action": 'addAb', "formType": formType, "inputNameOrganization": inputNameOrganization, "inputFam": inputFam, "inputName": inputName, "inputOtch": inputOtch, "inputDoljn": inputDoljn, "inputOsnovanie": inputOsnovanie,
            "inputContact": inputContact, "inputUNN": inputUNN, "inputYurAddress": inputYurAddress, "inputAddress": inputAddress, "inputBank": inputBank, "inputBankKod": inputBankKod,
            "inputBankAddress": inputBankAddress, "inputBill": inputBill, "inputPhone": inputPhone, "inputEmail": inputEmail},
        cache: false,
        success: function(response){
            //$("#resSearch").html(response);
            $("#addAbonent").modal('hide');
            alert(response);
        }
    });
    return false;
};
function showAbonentData($a) {
    $("#dataAbonent").modal('show');
    $("#modalBodyDataAb").html('');
    $("#modalBodyDataAb").html($a);
}