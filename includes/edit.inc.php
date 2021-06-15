<?php
session_start();

if (isset($_POST["edit-submit"])) {
    $useremail = $_POST["user-email"];
    $editemail = $_POST["edit-email"];
    $editpwd = $_POST["edit-password"];

    require_once 'dbh.php';
    require_once 'func.inc.php';

    if (emptyInputEmail($useremail) !== false){
        header("location: ../profileAdmins.php?error=emptyinputemail");
        exit();
    }


    if ((emptyInputEmail($editemail) !== false) && (emptyInputPwd($editpwd) !== false)){
        header("location: ../profileAdmins.php?error=emptyinput");
        exit();
    }
    else if (emptyInputEmail($editemail) !== false){
        editPwd($conn, $useremail, $pwd);
    }
    else if (emptyInputPwd($editpwd) !== false){
        editEmail($conn, $useremail, $editemail);
    }
    else{
        editUser($conn, $useremail, $editemail, $editpwd);
    }
}
else {
        header("location: ../profileAdmins.php");
            exit();
  
}
