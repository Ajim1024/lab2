<?php

/**
 * I, Mike London, student number 000361992, certify that this material is my original work. 
 *     No other person's work has been used without due acknowledgement and I have not made my 
 *     work available to anyone else.
 *    
 *     Created January 2021
 */


require('vendor/autoload.php');

use Respect\Validation\Validator as verifyValid;

$userInput = $_POST['field'];
$inputToVerify = $_POST['value'];
$response = [
    'input' => $userInput,
    'inputValue' => $inputToVerify,
    'error' => false
];

switch ($userInput) {
    case "userName":

        if (!verifyValid::alpha()->validate($inputToVerify)) 
            $response['error'] = "ERROR_NON_ALPHA";
       
        if (!verifyValid::stringType()->length(3, 20)->validate($inputToVerify)) 
            $response['error'] = "ERROR_LENGTH";
        break;

    case "employeeID":
        if (!verifyValid::stringType()->length(9)->validate($inputToVerify))
            $response['error'] = "ERROR_LENGTH";

        if (!verifyValid::numericVal()->validate($inputToVerify))
            $response['error'] = "ERROR_NON_INT";
        break;

    case "department":
        if (!verifyValid::stringType()->length(3, 20)->validate($inputToVerify))
            $response['error'] = "ERROR_LENGTH";

        if ($userInput === "Advertising" || $userInput === "advertising")
            $response['error'] = "Advertising";

        if($userInput === "Sales")
            $response['error'] = "Sales"; 
        break;

    case "bonus":
        if (verifyValid::numbericVal()->validate($inputToVerify))
            $response['error'] = "ERROR_NON_INT";
        break;
}
var_dump($response);

header('Content-Type: application/json');
echo json_encode($response);
