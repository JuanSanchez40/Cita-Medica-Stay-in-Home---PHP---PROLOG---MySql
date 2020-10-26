// Add Record
function addRecord() {
    // get values
    var idpensionado = $("#idpensionado").val();
    var codpensionado = $("#codpensionado").val();
    var codmatri = $("#codmatri").val();
    var altura = $("#altura").val();
    var ancho = $("#ancho").val();
    var tipaq = $("#tipaq").val();
    var volumen = $("#volumen").val();
    var concepto = $("#concepto").val();
    var obs = $("#obs").val();

    // Add record
    $.post("ajax/addRecord.php", {
        idpensionado: idpensionado,
        codpensionado: codpensionado,
        codmatri: codmatri,
        altura: altura,
        ancho: ancho,
        tipaq: tipaq,
        volumen: volumen,
        concepto: concepto,
		obs: obs
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        $("#idpensionado").val("");
        $("#codpensionado").val("");
        $("#codmatri").val("");
        $("#altura").val("");
        $("#ancho").val("");
        $("#tipaq").val("");
        $("#volumen").val("");
        $("#concepto").val("");
        $("#obs").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_idpensionado").val(user.idpensionado);
            $("#update_codpensionado").val(user.codpensionado);
            $("#update_obs").val(user.obs);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var idpensionado = $("#update_idpensionado").val();
    var codpensionado = $("#update_codpensionado").val();
    var obs = $("#update_obs").val();

    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            idpensionado: idpensionado,
            codpensionado: codpensionado,
            obs: obs
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});
function activar(){
    document.getElement.ById("uno").disabled = false;
  }