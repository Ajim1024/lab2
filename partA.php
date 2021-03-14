<?php

/**
 * I, Mike London, student number 000361992, certify that this material is my original work. 
 *     No other person's work has been used without due acknowledgement and I have not made my 
 *     work available to anyone else.
 *    
 *     Created January 2021
 */

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Lab 2-A</title>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./partA.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./partA.css">

</head>

<body>
  

    <h2 class="text-secondary, text-left">Employee Registry</h2>
    <div class="container">
        <form id="regForm" class=".was-validated">
            <div class="form-group form-row justify-content-end">
                <label class="col-sm-2 col.form-label" for="userName">Name</label>
                <input type="text" id="userName" name="userName" class="form-control col-sm-10" placeholder="Jane Doe" onkeyup="validateEmployee('userName')">
                <div id="userNameError" class="invalid-feedback col-sm-10">
                </div>
            </div>
            <div class="form-group form-row justify-content-end">
                <label class="col-sm-2 col.form-label" for="employeeID">Employee ID</label>
                <input type="text" id="employeeID" name="employeeID" class="form-control col-sm-10" placeholder="429126346" onkeyup="validateEmployee('employeeID')">
                <div id="emoplyeeIDError" class="invalid-feedback col-sm-10">
                </div>
            </div>
            <div class="form-group form-row justify-content-end">
                <label class="col-sm-2 col.form-label" for="department">Department</label>
                <input type="text" id="department" name="department" class="form-control col-sm-10" placeholder="Sales" onkeyup="validateEmployee('department')">
                <div id="deptartmentError" class="invalid-feedback col-sm-10">
                </div>
            </div>
            <div class="form-group form-row justify-content-end">
                <label class="col-sm-2 col.form-label" for="bonus">Bonus</label>
                <input type="text" id="bonus" name="bonus" class="form-control col-sm-10" placeholder="250000" onkeyup="validateEmployee('bonus')" readonly>
                <div id="bonusError" class="invalid-feedback col-sm-10">
                </div>
            </div>
            <div class="form-group form-row">
                <button id="submit" name="submit" class="btn btn-primary btn-sm col-sm-2" type="submit">Submit Form</button>
            </div>
        </form>
    </div>
    <table id="empList" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Employee Name</th>
                <th scope="col">Employee ID</th>
                <th scope="col">Department</th>
                <th scope="col">Bonus</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>



</body>

</html>