<?php

if (isset($_POST["delete-submit"])) {
    $deleteemail = $_POST["delete-email"];

    require_once 'dbh.php';
    require_once 'func.inc.php';

    if (emptyInputDelete($deleteemail) !== false){
        header("location: ../profileAdmins.php?error=emptyinput");
        exit();
    }

    if (!emailExists($conn, $deleteemail)){
        header("location: ../profileAdmins.php?error=emailnotfound");
        exit();
    }

    deleteUser($conn, $deleteemail);
}
else {
    header("location: ../profileAdmins.php");
    exit();
}