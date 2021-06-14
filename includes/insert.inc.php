<?php

if (isset($_POST["insert-submit"])) {
    $insertemail = $_POST["insert-email"];
    $insertpwd = $_POST["insert-password"];

    require_once 'dbh.php';
    require_once 'func.inc.php';

    if (emptyInput($insertemail, $insertpwd) !== false){
        header("location: ../profileAdmins.php?error=emptyinput");
        exit();
    }

    if (emailExists($conn, $insertemail)){
        header("location: ../profileAdmins.php?error=emailtaken");
        exit();
    }

    insertUser($conn, $insertemail, $insertpwd);
}
else {
    header("location: ../profileAdmins.php");
    exit();
}


