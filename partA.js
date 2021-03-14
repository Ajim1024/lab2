/**
 * I, Mike London, student number 000361992, certify that this material is my original work. 
 *     No other person's work has been used without due acknowledgement and I have not made my 
 *     work available to anyone else.
 *    
 *     Created January 2021
 */

function validateEmployee(userInputField) {

    let userInputValue = $(`#${userInputField}`).val();

    let dataToValidate = {
        field: userInputField,
        value: userInputValue
    };

    $.post(`./validateEmployee.php`, dataToValidate)
        .then(function (validationResults) {
            if (validationResults.error === false) {
                $(`#${validationResults.field}`).removeClass('is-invalid');
                $(`#${validationResults.field}`).addClass('is-valid');
                $(`#${validationResults.field}`).parent().find('.invalid-feedback').text();
            } else {
                $(`#${validationResults.field}`).addClass('is-invalid');
                $(`#${validationResults.field}`).removeClass('is-valid');

                switch (validationResults.error) {
                    case "ERROR_NON_ALPHA":
                        $(`#${validationResults.field}Error`).parent().find('.invalid-feedback').innerHTML("Numbers are not permitted here");
                        break;
                    case "ERROR_NON_INT":
                        $(`#${validationResults.field}`).parent().find('.invalid-feedback').text("Numbers only, please");
                        break;
                    case "ERROR_LENGTH":
                        $(`#${validationResults.field}`).parent().find('.invalid-feedback').text("Invalid length");
                        break;
                    case "Sales":
                        $('#bonus').removeAttribute('readonly');
                        break;
                    case "Advertising":
                    case "advertising":
                        $(`#${validationResults.field}`).parent().find('.invalid-feedback').text("Advertising is not a valid department!");
                        break;
                    default:
                        $(`#${validationResults.field}`).parent().find('.invalid-feedback').text("An unexpected error occured, please try again.");
                        break;
                }
            }
        });
}